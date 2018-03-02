<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link rel="stylesheet" href="css/reg.css">
</head>
<body>
	  <header>
    <div id="a3"><img src="photo/2.png"></div>

  </header>
  <div class="login-card" style="position: relative; top: 60px;">
    <div id="notes" style="color: white"><center></center></div>
    <h1>Register</h1><br>
  <form method="post" action="reg.php">
    <input type="text" name="fname" placeholder="First name" required="" >
     <input type="text" name="lname" placeholder="Last name" required="">
     <select name="department" required="" style="background: white;
   border-radius: 10px;
   font-size: 14px;
   height: 29px;
   margin-bottom: 10px;
   width: 268px;">
       <option value="computer science" selected="">computer science</option>
       <option value="Medicine">medicine</option>
       <option value="Mathematics">mathematics</option>
       <option value="Physics">physics</option>
     </select><br>

     <input type="text" name="specialization" placeholder="your specialization" required>
     <input type="email" name="email" placeholder="email@domain.com" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="password" name="rePassword" placeholder="Rr-password" required>
    <input type="submit" name="submit" class="login login-submit" value="Register">
  </form>
    
  <div class="login-help">
    have an account ? <a href="homepage.php" > log in</a>
  </div>
</div>
	<?php 
	 
			// 1. get the data submitted through the form
         $fname = isset($_POST[ "fname" ]) ? $_POST[ "fname" ] : "";
         $lname = isset($_POST[ "lname" ]) ? $_POST[ "lname" ] : "";
         $department = isset($_POST[ "department" ]) ? $_POST[ "department" ] : "";
         $specialization = isset($_POST[ "specialization" ]) ? $_POST[ "specialization" ] : "";
         $email = isset($_POST[ "email" ]) ? $_POST[ "email" ] : "";
         $password = isset($_POST[ "password" ]) ? $_POST[ "password" ] : "";
         $rePassword = isset($_POST[ "rePassword" ]) ? $_POST[ "rePassword" ] : "";
			
	    //  	if (empty($fname)||empty($lname)||empty($department)||empty($email)||empty($rePassword)||empty($password)) {
	    //  	    header('Location: http://localhost/group6project/reg.html');
	      //	    die();

	    //  	}
  
         if(isset($_POST["submit"])) {
         // 3. Connect to MySQL
			$database = mysqli_connect( "localhost","root", "" , "rpms");
       
            $query_check="SELECT email from researchers WHERE email='$email'";

			// 5. execute query in Bloggers database
        	 $result_check=mysqli_query($database , $query_check);

	     	if ($password !== $rePassword) {
         //           header('Location: http://localhost/group6project/reg.php');
	      //	    die();
	     		?> <script type="text/javascript">document.getElementById('notes').innerHTML.center=" the password not same !!"; </script><?php
	      	}else if (mysqli_num_rows($result_check)!==0) {  //chick if email is already exist by some one else ;
        	 	?> <script type="text/javascript">document.getElementById('notes').innerHTML="your email already used in our database !"; </script><?php   
        	 	         }else {

        	 	         	    $query_reg = "INSERT INTO researchers(f_name , l_name , department , specialization , email , password ) VALUES('$fname','$lname' , '$department' , '$specialization' ,'$email' , '$password')";
        	 	                $result = mysqli_query( $database, $query_reg);
        	 	                ?> <script type="text/javascript">document.getElementById('notes').innerHTML="now you have an account succesfuly"; </script><?php 
        	 	                 }mysqli_close( $database );
}
			// 6. close the datbase connection
		    //header('Location: http://localhost/group6project/homepage.html');
         
?>

</body>
</html>

