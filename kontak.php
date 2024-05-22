<?php
require 'contact.php';
$name  = $_POST['name'];
$email = $_POST['email'];
$subject    = $_POST['subject'];
$message    = $_POST['message'];

$query_sql = 'INSERT INTO contact_us (name, email, subject, message)
            VALUE ('$name', '$email','$subject','$message')';

if (mysqli_query($contact, $query_sql)){
    header('Location: contact.html');
} else {
    echo 'Kesalahan Sistem : ' . mysqli_error($contact);
}