<?php
require "connection.php";
if($_POST){

	$ans = $_POST["answer"];
	$qid = $_POST['qId'];
	$user = $_SESSION['user'];
	$userId = $_SESSION['user_id'];

	//$con = new mysqli('localhost','root','','h');

	$query= "insert into uttar (answer,que_id,user_id,user) values ('".$ans."','".$qid."','".$userId."','".$user."')";
	$result=$con->query($query);
	if (!$result) {
					     		echo "error !";
					     		echo mysqli_error($con);
					     	}
					     	else{
					     		echo "Answer posted. <a href = 'forumAnswer.php?ID= ".$qid."  '> view </a>";

					     		
	}


}

?>