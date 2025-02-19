<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capture form data
    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);
    $address = trim($_POST['address']);
    $message = trim($_POST['message']);
    $amount = trim($_POST['amount']);
    $added_date = date('Y-m-d H:i:s');

  
    if (empty($name) || empty($phone) || empty($address) || empty($message) || empty($amount)) {
        echo 'error';
        exit;
    }

    $image_path = '';
    if (isset($_FILES['image_path']) && $_FILES['image_path']['error'] == 0) {
        $image_ext = pathinfo($_FILES['image_path']['name'], PATHINFO_EXTENSION);
        $image_path = 'donation_uploads/' . uniqid('donation_', true) . '.' . $image_ext;
        move_uploaded_file($_FILES['image_path']['tmp_name'], $image_path);
    }

    include('../db_con.php'); 


    $sql = "INSERT INTO add_donation (name, phone, address, message, image_path, amount, added_date) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("sssssis", $name, $phone, $address, $message, $image_path, $amount, $added_date);

    if ($stmt->execute()) {
        echo 'success'; 
    } else {
        echo 'error'; 
    }


    $stmt->close();
    $con->close();
}
?>
