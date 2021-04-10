<!-- answer bouns 3  -->
<?php
include_once("config.php");
$email = $_GET['email']; 
$result = mysqli_query($mysqli, "DELETE FROM `attendees WHERE email=$email");
header("Location:attendescrud.php");
?>