<?php
include "connection.php";
?>

    <head>
        
    </head>
    <body>
    	<div class="header">
        	<a href="<?php echo $url_home; ?>"><img src="<?php echo $design; ?>/images/logo.png" alt="Members Area" /></a>
	    </div>
        <div class="content">
<?php
//We check if the users ID is defined
$con=new mysqli("localhost","root","","bahubali_ips");

if(isset($_GET['Computer_Code']))
{
	$Computer_Code = intval($_GET['Computer_Code']);
	//We check if the user exists
	$dn = 'select * from student_info where Computer_Code="'.$Computer_Code.'"';

 	$result=$con->query($dn);
 	
 	
	if(mysqli_num_rows($result)>0)
	{
		$dnn = mysqli_fetch_array($result);
		//We display the user datas
?>
This is the profile of "<?php echo htmlentities($dnn['First_Name']); ?>" :
<table style="width:500px;">
	<tr>
    	<td>
</td>
    	<td class="left"><h1><?php echo htmlentities($dnn['First_Name'], ENT_QUOTES, 'UTF-8'); ?></h1>
    	Email: <?php echo htmlentities($dnn['Email'], ENT_QUOTES, 'UTF-8'); ?><br />
        </td>
    </tr>
</table>
<?php
//We add a link to send a pm to the user
if(isset($_SESSION['First_Name']))
{
?>
<br /><a href="new_pm.php?recip=<?php echo urlencode($dnn['username']); ?>" class="big">Send a PM to "<?php echo htmlentities($dnn['username'], ENT_QUOTES, 'UTF-8'); ?>"</a>
<?php
}
	}
	else
	{
		echo 'This user dont exists.';
	}
}
else
{
	echo 'The user ID is not defined.';
}
?>
		</div>
		<div class="foot"><a href="users.php">Go to the users list</a> - <a href="http://www.webestools.com/">Webestools</a></div>
	</body>
</html>