<?php
 include 'check_session.php';
if (isset($_POST['submit'])) {
    include('../db_con.php');

    $notice = $_POST['notice'];

    $pdf_path = $_FILES['pdf_path']['name'];
    $pdf_tmp = $_FILES['pdf_path']['tmp_name'];
    $pdf_folder = 'notice_uploads/' . $pdf_path;

    move_uploaded_file($image_tmp, $image_folder);
    move_uploaded_file($pdf_tmp, $pdf_folder);

    $sql = "INSERT INTO add_notice (notice, pdf_path) VALUES ('$notice','$pdf_path')";

    if ($con->query($sql) === TRUE) {
        header('Location: notice_list.php');
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
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
                        <div class="ibox-title">Add Notice</div>
                    </div>
                    <div class="ibox-body">
                        <form method="POST" action="" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Notice Title</label>
                                    <input type="text" name='notice' class="form-control"
                                        placeholder="Enter Notice">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Upload PDF </label>
                                    <input type="file" name='pdf_path' class="form-control file">
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