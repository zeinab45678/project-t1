<?php

@ $db = mysqli_connect('localhost','root', '123456', 'shopping');
if (mysqli_connect_errno()) 
{
echo "Error: Could not connect to
database. Please try again later.";
exit;
}
$name=$_POST['name'];
$img=$_POST['filename'];
$price=$_POST['price'];
$query="INSERT INTO `product`( `name`, `img`, `price`) VALUES ('".$name."','".'img/'.$img."','".$price."');";
 mysqli_query($db, $query);
echo "<a href='admin.php'>back</a>";
?>
