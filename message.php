<?php 
include 'dbcon.php';
session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Message</title>
    <link rel="stylesheet" href="message.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div id="main">
<h1 class="bg-primary text-white">-online</h1>
<div class="output ">
<?php 

$sql = "SELECT  * FROM messagestb";
$result = $conn->query($sql);

if($result->num_rows > 0){

while($row = $result->fetch_assoc()){

    echo "" . $row["name"]. " " .":: " . $row["msg"]." --" .$row["date"].  "<br>";
    echo "<br>";
}
}
else{
    echo "0 results";
}

$conn->close();

?>

</div>
<form method="POST" action="send.php">
<textarea name="msg" placeholder="Type to send message..." class="form-control"> </textarea>
<input type="submit" value="send">
</form>


</div>
    </div>
    
</body>
</html>