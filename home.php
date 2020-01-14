<?php 
include 'header.php';
require 'session.php';

?>



<div class="user_details column">

<a href="#"> <img src="images/default/defualt.png"class=""></a>
<div class="user_details_left_right">
<a href="#">
<?php echo $fname." ".$lname; ?>
<br />
</a>
<br> <?php
echo "Likes:". $likes;
?>
</div>

</div>
<div class="main_column column">
<form action="send.php" class="post_form" method="POST">
<textarea name="post" id="post_text" name="post_text" placeholder="GOT SOMETHING TO SAY?">





</textarea>

<input type="submit" value="post" id="post_button" name="post">
<hr>

</form>

<div class="container">

<div class="card">
<div class="card-body"></div>
    <div class="card-title"></div>
 <?php 
 
    
$sql = "SELECT  * FROM posts";
$result = $conn->query($sql);

if($result->num_rows > 0){

while($row = $result->fetch_assoc()){

    echo ""  .":: " . $row["post"]." --" .$row["date"].  "<br>";
    echo "<br>";
}
}
else{
    echo "0 results";
}

$conn->close();
?> <footer class='footer'> <?php echo $row["name"];?></footer>

</div>
</div>


</div>
</div>
</body>
</html>
    