<?php
include 'check_session.php';
$user_id = $_GET['user_id'];
include '../db_con.php';

$que = "SELECT * FROM add_donation WHERE id = $user_id";
$res = mysqli_query($con, $que);
$row = mysqli_fetch_array($res);

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $message = $_POST['message'];
    $amount = $_POST['amount'];

    $image_path = '';
    if (isset($_FILES['image_path']) && $_FILES['image_path']['error'] == 0) {
        $image_ext = pathinfo($_FILES['image_path']['name'], PATHINFO_EXTENSION);
        $image_path = 'donation_uploads/' . uniqid('donation_', true) . '.' . $image_ext;
        move_uploaded_file($_FILES['image_path']['tmp_name'], $image_path);
    }

    $sql = "UPDATE add_donation SET name = '$name', phone = '$phone', address = '$address', message = '$message', amount = '$amount', image_path = '$image_path'";
    

    $sql .= " WHERE id = $user_id";

    if ($con->query($sql) === TRUE) {
        header('Location: donationlist.php');
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
                        <div class="ibox-title">Update Donation</div>
                    </div>
                    <div class="ibox-body">
                    <form method="POST" action="" enctype="multipart/form-data">
                            <!-- Hidden field for publication ID -->
                            <input type="hidden" name="donation_id" value="<?php echo $row['id']; ?>">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>First Name</label>
                                        <input type="text" name="name" class="form-control" value="<?php echo htmlspecialchars($row['name']); ?>" placeholder="Enter First Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Phone</label>
                                        <input type="number" name="phone" class="form-control"  value="<?php echo htmlspecialchars($row['phone']); ?>" placeholder="Enter Phone Number">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Address</label>
                                        <input type="text" name="address" class="form-control" value="<?php echo htmlspecialchars($row['address']); ?>" placeholder="Enter First Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Message</label>
                                        <input type="text" name="message" class="form-control"  value="<?php echo htmlspecialchars($row['message']); ?>" placeholder="Enter Phone Number">
                                    </div>
                                    
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Amount</label>
                                        <input type="text" name="amount" class="form-control" value="<?php echo htmlspecialchars($row['amount']); ?>" >
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Image</label>
                                        <input type="file" name="image_path" class="form-control">
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