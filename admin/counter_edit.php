
<?php
    include 'check_session.php';
    $user_id = $_GET['user_id'];
    include '../db_con.php';
    $que = "SELECT * FROM add_counter WHERE id = $user_id";
    $res = mysqli_query($con, $que);
    $row = mysqli_fetch_array($res);

    if (isset($_POST['submit'])) {
        $count_id = $_POST['count_id'];
        $count = $_POST['count'];
        $heading = $_POST['heading'];

        $sql = "UPDATE add_counter SET count='$count', heading='$heading'";
    
        $sql .= " WHERE id='$count_id'";
    
        if ($con->query($sql) === TRUE) {
            header('Location: counter_list.php');
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
                        <div class="ibox-title">Edit Counter</div>
                    </div>
                    <div class="ibox-body">
                        <form method="POST" action="#">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="hidden" name="count_id" class="form-control" value="<?php echo htmlspecialchars($row['id']); ?>">
                                    <label>Counter </label>
                                    <input type="text" name='count' id="count" class="form-control" value="<?php echo htmlspecialchars($row['count']); ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Counter Heading </label>
                                    <input type="text" name='heading' id="heading" class="form-control" value="<?php echo htmlspecialchars($row['heading']); ?>">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary ">Submit</button>
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