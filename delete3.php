<?php

@ $db = mysqli_connect('localhost','root', '123456', 'shopping');
if (mysqli_connect_errno()) 
{
echo "Error: Could not connect to
database. Please try again later.";
exit;
}

$query="DELETE FROM `product3`;";
 mysqli_query($db, $query);
 echo "<a href='admin.php '>insert</a>";

?>
