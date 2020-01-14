<?php
include 'dbcon.php';
include 'session.php';
$user_id = $row['id'];
if(isset($_POST['msg'])){
$msg =$_POST['msg'];
$name = $fname." ".$lname;

$sql = "INSERT into messagestb(msg,name) VALUES('$msg','$name')";
$result = mysqli_query($conn,$sql);
header("Location:message.php");
}
?>
