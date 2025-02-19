<?php
    include 'check_session.php';
    if (isset($_POST['submit'])) {
        include '../db_con.php';

        $gallery_id = $_POST['gallery_id']; 

        foreach ($_FILES['image']['name'] as $key => $image_name) {
            $unique_id = uniqid('img_');
            $target_dir = "gallery_uploads/";
            $imageFileType = strtolower(pathinfo($_FILES['image']['name'][$key], PATHINFO_EXTENSION));
            $target_file = $target_dir . $unique_id . '.' . $imageFileType;

            if (getimagesize($_FILES['image']['tmp_name'][$key]) === false) {
                echo "File is not an image.";
                continue;
            }

            if (!move_uploaded_file($_FILES['image']['tmp_name'][$key], $target_file)) {
                echo "Error uploading file.";
                continue;
            }

            $sql = "UPDATE add_gallery SET image_path = '$target_file' WHERE gallery_id = '$gallery_id' LIMIT 1";
            if ($con->query($sql) !== TRUE) {
                echo "Error: " . $con->error;
            }
        }

        header('Location: gallery_list.php');
        exit;
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
                        <div class="ibox-title">Edit Gallery Image</div>
                    </div>
                    <div class="ibox-body">
                        <form method="POST" action="" enctype="multipart/form-data">

                            <input type="hidden" name="gallery_id" value="1">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Gallery Images</label>
                                    <input type="file" name="image[]" class="form-control" multiple>
                                </div>
                                <div class="form-group col-md-6 mt-4">
                                    <button type="submit" name="submit"
                                        class="btn btn-primary fw-bold mt-2 ml-2">Submit</button>
                                </div>
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