<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capture form data
    $name = trim($_POST['name']);
    $lname = trim($_POST['lname']);
    $phone = trim($_POST['phone']);
    $email = trim($_POST['email']);
    $choose_csr = trim($_POST['choose_csr']);
    $choose_program = trim($_POST['choose_program']);
   
    $added_date = date('Y-m-d H:i:s');

    if (empty($name) || empty($lname) || empty($phone) || empty($email) || empty($choose_csr) || empty($choose_program)) {
        echo 'error';
        exit;
    }

    include('db_con.php'); 

    $sql = "INSERT INTO add_partner (name, lname, phone, email, choose_csr, choose_program, added_date) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ssssssi", $name, $lname, $phone, $email, $choose_csr, $choose_program, $added_date);

    if ($stmt->execute()) {
        echo 'success'; 
    } else {
        echo 'error'; 
    }

    $stmt->close();
    $con->close();
}

?>