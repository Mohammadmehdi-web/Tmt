<?php
include 'check_session.php';
$user_id = $_GET['user_id'];
include '../db_con.php';

$que = "SELECT * FROM add_publication WHERE id = $user_id";
$res = mysqli_query($con, $que);
$row = mysqli_fetch_array($res);

if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $details = $_POST['details'];

    $image_path = $_FILES['image_path']['name'];
    $pdf_path = $_FILES['pdf_path']['name'];
    
    if ($image_path) {
        move_uploaded_file($_FILES['image_path']['tmp_name'], 'publication_upoads/' . $image_path);
    }
    if ($pdf_path) {
        move_uploaded_file($_FILES['pdf_path']['tmp_name'], 'publication_upoads/' . $pdf_path);
    }

    $sql = "UPDATE add_publication SET title = '$title', details = '$details'";
    
    if ($image_path) {
        $sql .= ", image_path = '$image_path'";
    }
    
    if ($pdf_path) {
        $sql .= ", pdf_path = '$pdf_path'";
    }
    
    $sql .= " WHERE id = $user_id";

    if ($con->query($sql) === TRUE) {
        header('Location: publication_list.php');
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
                        <div class="ibox-title">Update Publication</div>
                    </div>
                    <div class="ibox-body">
                        <form method="POST" action="" enctype="multipart/form-data">
                            <!-- Hidden field for publication ID -->
                            <input type="hidden" name="publication_id" value="<?php echo $row['id']; ?>">

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Upload Image</label>
                                    <input type="file" name="image_path" class="form-control file">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Upload PDF</label>
                                    <input type="file" name="pdf_path" class="form-control file">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Publication Title</label>
                                    <input type="text" name="title" class="form-control"
                                        value="<?php echo htmlspecialchars($row['title']); ?>"
                                        placeholder="Enter Publication Title">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Publication Details</label>
                                    <input type="text" name="details" class="form-control"
                                        value="<?php echo htmlspecialchars($row['details']); ?>"
                                        placeholder="Enter Details">
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