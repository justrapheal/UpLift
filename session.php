<?php
include 'dbcon.php';
session_start();
$email = $_SESSION['signed_in'];
$query = "SELECT * FROM patienttb WHERE email = '$email' ";
$sql = mysqli_query($conn, $query);

$row = mysqli_fetch_array($sql,MYSQLI_ASSOC);

$fname = $row['FirstName'];
$lname = $row['LastName'];
$phone = $row['PhoneNumber'];
$email = $row['email'];
$pictures = "<img src= 'images/".$row['Images']."alt=images'>";
$password = $row['Pwd'];
$gender = $row['gender'];
$likes = $row['likes'];
if (!isset($_SESSION['signed_in'])){
    header("Location:register.php");
}
?>