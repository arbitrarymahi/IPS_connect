<?php

require("connection.php");
	if($_POST)
	{
		 $computer_code=$_POST["computer_code"];
		 $password=$_POST["password"];
		
		 //$password_hash = md5($_POST["password"]);
		
		if(!empty($password) && !empty($computer_code)){
   
    	//$con=new mysqli("localhost","root","","bahubali_ips");
     $query="select * from student_info where Computer_Code = '".$computer_code."' AND Password = '".$password."'";
     
     
     $result=$con->query($query);

		if($row=$result->fetch_assoc()){

		 	
			if($row["Computer_Code"] == $computer_code && $row["Password"] == $password){
				$user_id = $row["Computer_Code"];
				$user = $row["First_Name"].' '.$row["Last_Name"];
				$_SESSION['user_id'] = $user_id;
				$_SESSION['user'] = $user;
				header("Location: index.php");
				
			}

		 }else{
		 	echo "Invalid computer_code / Password combination";

		 	die();
		 }


		}
	else{
		echo "all fields required";
	}	
    }

  ?>  
  <!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="registertest.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="col-xs-6">
<div id= wrapper>

<button class="baba" id="button1" onclick="document.getElementById('id01').style.display='block'" style="width:150px;" src="b1.jpg"><span>    </span></button>



<button class="baba" id="button2"onclick="document.getElementById('id02').style.display='block'" style="width:150px;" src="2.jpg"><span></span></button>


</div>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="login.php" method="post">
    

    <div class="container">
      <label><b>Computer Code</b></label>
      <input type="text" placeholder="Computer Code" name="computer_code" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit">Let's Go</button>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button style="width:370px;" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Go Back</button>
      
    </div>
  </form>
</div>

<div id="id02" class="modal">
  
  <form class="modal-content animate" action="register.php" method="post">
    

    <div class="container">
      <label><b>Computer Code</b></label>
      <input type="text" placeholder="Computer Code" name="computer_code" required>
       <label><b>Date of Birth</b></label>
      <input type="date" placeholder="Enter Date of Birth" name="date_of_birth" required>
       <label><b>Email Id</b></label>
      <input type="email" placeholder="Enter Email Id" name="email" required>
       <label><b>Phone Number</b></label>
      <input type="tel" placeholder="Enter Mobile Number" name="phone_number" required>



      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password1" required>
      <label><b>Confirm Password</b></label>
      <input type="password" placeholder="Renter Password" name="password2" required>
        
      <button type="submit">Let's Go</button>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button style="width:370px; " type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Go Back</button>
      
    </div>
  </form>
</div>

</div>
</div>
<script>
 // Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it

var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
   
