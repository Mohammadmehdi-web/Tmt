<?php
    include 'check_session.php';
    if (isset($_POST['submit'])) {
        include '../db_con.php';

        foreach ($_FILES['image']['name'] as $key => $image_name) {
            $unique_id = uniqid('img_');

            $target_dir = "slider_gallery_uploads/";
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

            $sql = "INSERT INTO add_slider_gallery (image_path) 
                    VALUES ('$target_file')";
            if ($con->query($sql) !== TRUE) {
                echo "Error: " . $con->error;
            }
        }

        header('Location: slider_gallery_list.php');
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
                        <div class="ibox-title">Add Slider Gallery</div>
                    </div>
                    <div class="ibox-body">
                        <form method="POST" action="" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Slider Image</label>
                                    <input type="file" name='image[]' class="form-control"
                                        placeholder="Enter Image" multiple required>
                                </div>
                                <div class="form-group col-md-6 mt-4">
                                    <button type="submit" name="submit" class="btn btn-primary fw-bold mt-2 ml-2">Submit</button>
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