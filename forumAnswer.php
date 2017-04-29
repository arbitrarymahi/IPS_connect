<?php
require "connection.php";

if($_GET) {
  $var=$_GET["ID"];
  
 		

	//$con = new mysqli('localhost','root','','h');

	$query1="select * from tab1	where id = '".$var."'";



 $result=$con->query($query1);
 $row=$result->fetch_assoc();

			echo '<div id="que">';
			//echo "<div style='color:green;''>"
			//$id = $row["id"];
			echo "<a href = 'forumAnswer.php?ID= ".$var."  '> ".$row["que"]." </a>" ;
			echo "<ul>";
					echo "<li>".$row['user']."</li>";
					echo "<li>";
					$time = time();
					echo date('d - m - y',$time);
					echo "</li>";
			echo "</ul></div>";

			echo '<div id="que">';
			echo $row['que_desc']."<br><br>	</div>" ;



 $query="select * from uttar where que_id = '".$var."'";
 echo "<h3>Top Answers</h3>";

 $result=$con->query($query);
while($row=$result->fetch_assoc())
		{
				echo "<div>";
				echo ($row["answer"]);
				echo "<ul>";
					echo "<li>".$row['user']."</li>";
					echo "<li>";
					$time = time();
					echo date('d - m - y',$time);
					echo "</li>";	
				echo "</ul>";



				echo "</div>";
		 } 

}
?>


<h2>Reply..</h2>
<form method="POST" action="forumReply.php">
	<input type="textarea" name="answer"><br>
	<input type="hidden" name="qId" value="<?php print $var ; ?>"><br>
	<input type="submit" name="submit"><br>
	
</form>


