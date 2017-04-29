<!DOCTYPE html>
<html>
<head>
	<title>
		forum
	</title>
	<!--<link href="forum.css" rel="stylesheet">-->
</head>
<body>
<?php
require "connection.php";
//$con = new mysqli('localhost','root','','h');
 $query="select * from tab1	";



 $result=$con->query($query);
 while($row=$result->fetch_assoc())

		{

			echo '<div id="que">';
			//echo "<div style='color:green;''>"
			$id = $row["id"];
			echo "<a href = 'forumAnswer.php?ID= ".$id."  '> ".$row["que"]." </a>" ;
			echo "<ul>";
				
				echo "<li>";
					echo $row["user"];
				echo "</li>";
				echo "<li>";
					$time = time();
					echo date('d - m - y',$time);
				echo "</li>";
			echo "</ul>";
			
			echo "</div>";
			
		}
		 ?>

<h2>Ask a question</h2>
<form method="POST" action="forumQuestion.php">
	<input type="text" name="question"><br>
	<input type="textarea" name="que_desc"><br>
	<input type="submit" name="submit"><br>
	
</form>

</body>
</html>


