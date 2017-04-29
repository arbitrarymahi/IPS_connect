<?php
require "connection.php";
if($_POST){

	$que = $_POST["question"];
	$que_desc = $_POST["que_desc"];
	$user = $_SESSION['user'];
	$userId = $_SESSION['user_id'];

	//$con = new mysqli('localhost','root','','h');

	$query= "insert into tab1 (que,que_desc,userId,user) values ('".$que."','".$que_desc."','".$userId."','".$user."')";
	//$result=$con->query($query);
	if (!$result=$con->query($query)) {
					     		echo "error !";
					     		echo mysqli_error($con);
					     	}
					     	else{
					     		echo "Answer posted. <a href = 'forum.php'> view </a>";

					     		
	}


}

?>