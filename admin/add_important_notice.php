<?php
 include 'check_session.php';
if (isset($_POST['submit'])) {
    include('../db_con.php');

    $title = $_POST['title'];
    $description = $_POST['description'];
    $impo_url = $_POST['impo_url'];

    $pdf_file = $_FILES['pdf_file']['name'];
    $pdf_tmp = $_FILES['pdf_file']['tmp_name'];
    $pdf_folder = 'important_uploads/' . $pdf_file;

    move_uploaded_file($image_tmp, $image_folder);
    move_uploaded_file($pdf_tmp, $pdf_folder);

    $sql = "INSERT INTO add_important_notice (title, description,impo_url, pdf_file) VALUES ('$title', '$description', '$impo_url', '$pdf_file')";

    if ($con->query($sql) === TRUE) {
        header('Location: important_notice_list.php');
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
                        <div class="ibox-title">Add Important Form</div>
                    </div>
                    <div class="ibox-body">
                        <form method="POST" action="" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Important Title</label>
                                    <input type="text" name='title' class="form-control"
                                        placeholder="Enter Title">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Important URL</label>
                                    <input type="text" name='impo_url' class="form-control"
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
                                    <textarea name="description" id="description" class="form-control" placeholder="Enter Desc..."></textarea>
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