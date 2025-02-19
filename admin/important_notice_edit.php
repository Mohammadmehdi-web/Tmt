<?php
include 'check_session.php';
$user_id = $_GET['user_id'];
include '../db_con.php';

$que = "SELECT * FROM add_important_notice WHERE id = $user_id";
$res = mysqli_query($con, $que);
$row = mysqli_fetch_array($res);

if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $description = $_POST['description'];
    $impo_url = $_POST['impo_url'];

    $pdf_file = $_FILES['pdf_file']['name'];
    
    if ($pdf_file) {
        move_uploaded_file($_FILES['pdf_file']['tmp_name'], 'important_uploads/' . $pdf_file);
    }

    $sql = "UPDATE add_important_notice SET title = '$title', description = '$description', impo_url = '$impo_url'";
    
    if ($pdf_file) {
        $sql .= ", pdf_file = '$pdf_file'";
    }
    
    $sql .= " WHERE id = $user_id";

    if ($con->query($sql) === TRUE) {
        header('Location: important_notice_list.php');
    } else {
        echo "Error: " . $con->error;
    }
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
                        <div class="ibox-title">Update Important Form</div>
                    </div>
                    <div class="ibox-body">
                        <form method="POST" action="" enctype="multipart/form-data">
                            <!-- Hidden field for publication ID -->
                            <input type="hidden" name="important_id" value="<?php echo $row['id']; ?>">

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Important Title</label>
                                    <input type="text" name="title" class="form-control"
                                        value="<?php echo htmlspecialchars($row['title']); ?>"
                                        placeholder="Enter Title">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Important URL</label>
                                    <input type="text" name='impo_url' class="form-control" value="<?php echo htmlspecialchars($row['impo_url']); ?>"
                                        placeholder="Enter url..">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Upload PDF </label>
                                    <input type="file" name='pdf_file' class="form-control file" style="height: 50px;">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Important Description</label>
                                    <textarea name="description" id="description" class="form-control" placeholder="Enter Desc..."><?php echo $row['description']; ?></textarea>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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
?><?php
include 'check_session.php';
$user_id = $_GET['user_id'];
include '../db_con.php';

$que = "SELECT * FROM add_important_notice WHERE id = $user_id";
$res = mysqli_query($con, $que);
$row = mysqli_fetch_array($res);

if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $description = $_POST['description'];
    $impo_url = $_POST['impo_url'];

    $pdf_file = $_FILES['pdf_file']['name'];
    
    if ($pdf_file) {
        move_uploaded_file($_FILES['pdf_file']['tmp_name'], 'important_uploads/' . $pdf_file);
    }

    $sql = "UPDATE add_important_notice SET title = '$title', description = '$description', impo_url = '$impo_url'";
    
    if ($pdf_file) {
        $sql .= ", pdf_file = '$pdf_file'";
    }
    
    $sql .= " WHERE id = $user_id";

    if ($con->query($sql) === TRUE) {
        header('Location: important_notice_list.php');
    } else {
        echo "Error: " . $con->error;
    }
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
                        <div class="ibox-title">Update Important Form</div>
                    </div>
                    <div class="ibox-body">
                        <form method="POST" action="" enctype="multipart/form-data">
                            <!-- Hidden field for publication ID -->
                            <input type="hidden" name="important_id" value="<?php echo $row['id']; ?>">

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Important Title</label>
                                    <input type="text" name="title" class="form-control"
                                        value="<?php echo htmlspecialchars($row['title']); ?>"
                                        placeholder="Enter Title">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Important URL</label>
                                    <input type="text" name='impo_url' class="form-control" value="<?php echo htmlspecialchars($row['impo_url']); ?>"
                                        placeholder="Enter url..">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Upload PDF </label>
                                    <input type="file" name='pdf_file' class="form-control file" style="height: 50px;">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Important Description</label>
                                    <textarea name="description" id="description" class="form-control" placeholder="Enter Desc..."><?php echo $row['description']; ?></textarea>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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