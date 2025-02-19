
<?php
    include 'check_session.php';
    if (isset($_POST['submit'])) {
        include '../db_con.php';
    
        // Get form data
        $count = $_POST['count'];
        $heading = $_POST['heading'];
    
        $sql = "INSERT INTO add_counter (count, heading) 
                VALUES ('$count', '$heading')";
    
        if ($con->query($sql) === TRUE) {
            header('Location: counter_list.php');
            exit;
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
                        <div class="ibox-title">Add Counter</div>
                    </div>
                    <div class="ibox-body">
                        <form method="POST" action="">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Count</label>
                                    <input type="number" name='count' class="form-control"
                                        placeholder="Enter Count Number">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Count Heading</label>
                                    <input type="text" name='heading' class="form-control"
                                        placeholder="Enter Count Heading">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary fw-bold">Submit</button>
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