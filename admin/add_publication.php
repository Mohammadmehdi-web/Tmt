<?php
 include 'check_session.php';
if (isset($_POST['submit'])) {
    include('../db_con.php');

    $title = $_POST['title'];
    $details = $_POST['details'];

    $image_path = $_FILES['image_path']['name'];
    $image_tmp = $_FILES['image_path']['tmp_name'];
    $image_folder = 'publication_upoads/' . $image_path;

    $pdf_path = $_FILES['pdf_path']['name'];
    $pdf_tmp = $_FILES['pdf_path']['tmp_name'];
    $pdf_folder = 'publication_upoads/' . $pdf_path;

    move_uploaded_file($image_tmp, $image_folder);
    move_uploaded_file($pdf_tmp, $pdf_folder);

    $sql = "INSERT INTO add_publication (title, details, image_path, pdf_path) VALUES ('$title', '$details', '$image_path', '$pdf_path')";

    if ($con->query($sql) === TRUE) {
        header('Location: publication_list.php');
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
                        <div class="ibox-title">Add Publication</div>
                    </div>
                    <div class="ibox-body">
                        <form method="POST" action="" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Upload Image </label>
                                    <input type="file" name='image_path' class="form-control file" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Upload PDF </label>
                                    <input type="file" name='pdf_path' class="form-control file">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Publication Title</label>
                                    <input type="text" name='title' class="form-control"
                                        placeholder="Enter Banner Title">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Publication Details</label>
                                    <input type="text" name="details" class="form-control" placeholder="Enter Details">
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