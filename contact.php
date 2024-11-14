<?php

try {
    $db = new mysqli("localhost", "root", "", "blog_db");

    if ($db->connect_error) {
        die('Connection failed: ' . $db->connect_error);
    }
} catch (Exception $exc) {
    die('Connection error: ' . $exc->getMessage());
}

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {

    $name = $_POST['name']; 
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $INSERT = "INSERT INTO cont_form (name, email, subject, message) VALUES ('$name','$email','$subject','$message')";

    if ($db->query($INSERT) === TRUE) {
        header("Location: ../test/index.php?success=Message Sent!"); 
        //change the file path according to where you have save the folder
        exit();
    } else {
        header("Location: ../test/index.php?error=Message not sent. Please try again.");
        //change the file path according to where you have save the folder
        exit();
    }
}

$db->close();

?>
