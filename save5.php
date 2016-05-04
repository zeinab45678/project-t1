<?php

@ $db = mysqli_connect('localhost','root', '123456', 'shopping');
if (mysqli_connect_errno()) 
{
echo "Error: Could not connect to
database. Please try again later.";
exit;
}

$img=$_POST['filename'];

$query="INSERT INTO `product5`(  `img`) VALUES ('".'img/'.$img."');";
 mysqli_query($db, $query);
echo "<a href='admin.php'>back</a>";
?>
