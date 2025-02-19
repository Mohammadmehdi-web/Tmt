<?php
include 'check_session.php';  


if (isset($_GET['user_id']) && !empty($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
} else {
   
    die("Invalid Project ID.");
}

include '../db_con.php';

$user_id = intval($user_id);

$que = "SELECT * FROM add_project WHERE id = ?";
$stmt = $con->prepare($que);

if ($stmt === false) {
    die("Error preparing the SQL query: " . $con->error);
}

$stmt->bind_param("i", $user_id);

$stmt->execute();

$res = $stmt->get_result();

if ($res->num_rows > 0) {
    $project = $res->fetch_array();
} else {
    die("Project not found with the specified ID.");
}

$stmt->close();
$con->close();
?>



<?php
    include('header.php');
?>
<!-- END SIDEBAR-->
<div class="content-wrapper">

    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-6 col-lg-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Add Success Story</div>
                    </div>
                    <div class="ibox-body">
                        <form method="post" action="story_update.php" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $project['id']; ?>">
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Story URL</label>
                                    <input class="form-control" type="text" name="pro_url" required
                                        placeholder="Enter Success Story URL.."
                                        value="<?php echo str_replace('-', ' ', $project['pro_url']); ?>">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Story Title</label>
                                    <input class="form-control" type="text" name="pro_tile"
                                        placeholder="Enter Story Title" required
                                        value="<?php echo htmlspecialchars($project['pro_tile']); ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 form-group">
                                    <label>Main Image</label>
                                    <input type="file" name="image[]" id="image" class="form-control file"
                                    >
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label>Choose Multiple Images</label>
                                    <input class="form-control" type="file" name="logos[]" multiple>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Select Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option selected>--Select--</option>
                                        <option value="1" <?php echo ($project['status'] == '1') ? 'selected' : ''; ?>>
                                            Publish
                                        </option>
                                        <option value="0" <?php echo ($project['status'] == '0') ? 'selected' : ''; ?>>
                                            Unpublish</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-12">
                                    <label>Story Heading</label>
                                    <textarea name="highlight_text" id="highlight_text" class="form-control"
                                        placeholder="Enter Story Highlight.."><?php echo htmlspecialchars($project['highlight_text']); ?></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="ibox-body col-lg-12 form-group" id="" id="summernote"
                                    data-plugin="summernote" data-air-mode="true">
                                    <label for="blog_desc_two mb-2">Story Details</label>
                                    <textarea name="project_brief" id="summernote"><?php echo htmlspecialchars($project['project_brief']); ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-default" type="submit" name="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
    .note-editable {
        height: 400px;
    }
    </style>
    <?php
    include('footer.php');
?>