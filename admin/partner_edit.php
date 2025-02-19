<?php
include 'check_session.php';
$user_id = $_GET['user_id'];
include '../db_con.php';

$que = "SELECT * FROM add_partner WHERE id = $user_id";
$res = mysqli_query($con, $que);
$row = mysqli_fetch_array($res);

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $choose_csr = $_POST['choose_csr'];
    $choose_program = $_POST['choose_program'];

    $sql = "UPDATE add_partner SET name = '$name', lname = '$lname', email = '$email', phone = '$phone', choose_csr = '$choose_csr', choose_program = '$choose_program'";
    
    $sql .= " WHERE id = $user_id";

    if ($con->query($sql) === TRUE) {
        header('Location: partner.php');
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
                        <div class="ibox-title">Update Partner</div>
                    </div>
                    <div class="ibox-body">
                        <form method="POST" action="">
                            <!-- Hidden field for publication ID -->
                            <input type="hidden" name="partner_id" value="<?php echo $row['id']; ?>">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>First Name</label>
                                        <input type="text" name="name" class="form-control" value="<?php echo htmlspecialchars($row['name']); ?>" placeholder="Enter First Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Last Name</label>
                                        <input type="text" name="lname" class="form-control file"  value="<?php echo htmlspecialchars($row['lname']); ?>" placeholder="Enter Last Name">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control" value="<?php echo htmlspecialchars($row['email']); ?>" placeholder="Enter Email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Phone</label>
                                        <input type="number" name="phone" class="form-control"  value="<?php echo htmlspecialchars($row['phone']); ?>" placeholder="Enter Phone Number">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Choose CSR</label>
                                        <input type="text" name="choose_csr" class="form-control" value="<?php echo htmlspecialchars($row['choose_csr']); ?>" >
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Choose Program</label>
                                        <input type="text" name="choose_program" class="form-control" value="<?php echo htmlspecialchars($row['choose_program']); ?>">
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