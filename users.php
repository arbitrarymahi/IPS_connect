<?php
include('connection.php');
?>
<!DOCTYPE html>
    <head>
    
        </head>
    <body>
    	<div class="header">
        	<a href="<?php echo $url_home; ?>"><img src="<?php echo $design; ?>/images/logo.png" alt="Members Area" /></a>
	    </div>
        <div class="content">
This is the list of members:
<table>
    <tr>
    	<th>Id</th>
    	<th>Username</th>
    	<th>Email</th>
    </tr>
<?php
//We get the IDs, usernames and emails of users
$con=new mysqli("localhost","root","","bahubali_ips");

$query="select * from student_info ";



 $result=$con->query($query);
 while($row=$result->fetch_assoc())

{
?>
	<tr>
    	<td class="left"><?php echo $row['Computer_Code']; ?></td>
    	<td class="left"><a href="profile.php?Computer_Code=<?php echo $row['Computer_Code']; ?>"><?php echo htmlentities($row['First_Name'], ENT_QUOTES, 'UTF-8'); ?></a></td>
    	<td class="left"><?php echo htmlentities($row['Email'], ENT_QUOTES, 'UTF-8'); ?></td>
    </tr>
<?php
}
?>
</table>
		</div>
		<div class="foot"><a href="home.html">Go Home</a> - <a href="http://www.feedflood.com/">Webestools</a></div>
	</body>
</html>