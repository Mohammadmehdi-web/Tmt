<?php
include 'check_session.php';
include('../db_con.php');

if (isset($_POST['submit'])) {
    $con->begin_transaction();
    
    try {
       
        $pro_url = str_replace(' ', '-', $_POST['pro_url']);
        $pro_tile = $_POST['pro_tile'];
        $highlight_text = $_POST['highlight_text'];
        $status = $_POST['status'];
        $project_brief = $_POST['project_brief'];
        $created_at = date('Y-m-d');

       
        $sql = "INSERT INTO add_project (pro_url, pro_tile, highlight_text, status, project_brief, created_at)
                VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("ssssss", $pro_url, $pro_tile, $highlight_text, $status, $project_brief, $created_at);
        if (!$stmt->execute()) {
            throw new Exception("Error inserting project: " . $stmt->error);
        }

        $project_id = $stmt->insert_id;
        
        // Upload images and logos
        $target_dir = "../story/success_story_uploads/";
        foreach (['images', 'logos'] as $file_type) {
            if (isset($_FILES[$file_type])) {
                foreach ($_FILES[$file_type]['name'] as $key => $file_name) {
                    $unique_file_name = uniqid() . "_" . basename($file_name);
                    $target_file = $target_dir . $unique_file_name;
                    if (move_uploaded_file($_FILES[$file_type]['tmp_name'][$key], $target_file)) {
                        // Insert uploaded file into database
                        $column = ($file_type == 'images') ? 'image' : 'logos';
                        $sql = "INSERT INTO project_images (project_id, $column) VALUES (?, ?)";
                        $stmt = $con->prepare($sql);
                        $stmt->bind_param("is", $project_id, $unique_file_name);
                        if (!$stmt->execute()) {
                            throw new Exception("Error inserting $file_type: " . $stmt->error);
                        }
                    } else {
                        throw new Exception("Error uploading $file_name");
                    }
                }
            }
        }

        $con->commit();
        header('Location:story_list.php');
    } catch (Exception $e) {
        $con->rollback();
        echo "Failed to insert project: " . $e->getMessage();
    }

    $stmt->close();
    $con->close();
}
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
                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Story URL</label>
                                    <input class="form-control" type="text" name="pro_url" required
                                        placeholder="Enter Success Story URL..">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Story Title</label>
                                    <input class="form-control" type="text" name="pro_tile"
                                        placeholder="Enter Story Title" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 form-group">
                                    <label>Main Image</label>
                                    <input class="form-control" type="file" name="images[]" required>
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label>Choose Multiple Images</label>
                                    <input class="form-control" type="file" name="logos[]" multiple required>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Select Status</label>
                                    <select id="inputState" name="status" class="form-control">
                                        <option selected>--Select--</option>
                                        <option value="1">Publish</option>
                                        <option value="0">Unpublish</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-12">
                                    <label>Story Heading</label>
                                    <textarea name="highlight_text" id="highlight_text" class="form-control"
                                        placeholder="Enter Story Highlight.."></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="ibox-body col-lg-12 form-group" id="" id="summernote"
                                    data-plugin="summernote" data-air-mode="true">
                                    <label for="blog_desc_two mb-2">Story Details</label>
                                    <textarea name="project_brief" id="summernote"></textarea>
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