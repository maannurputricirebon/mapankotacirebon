<?php
require 'koneksi.php';
$name  = $_POST['name'];
$email = $_POST['email'];
$subject    = $_POST['subject'];
$message    = $_POST['message'];
$submit     = $_POST['submit'];


if (mysqli_query($koneksi, $sql_query)){
    header('Location: contact.html');
} else {
    echo 'Kesalahan Sistem : ' . mysqli_error($koneksi);
}