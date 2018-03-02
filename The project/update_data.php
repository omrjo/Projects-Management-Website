<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 

    session_start();
      if (empty($_SESSION['id_researcher'])) {
        	header('Location: http://localhost/group6project/homepage.php');
        	die();}
        $id_researcher=$_SESSION['id_researcher'];

			// 1. get the data submitted through the form
         $fname = isset($_POST[ "fname" ]) ? $_POST[ "fname" ] : "";
         $lname = isset($_POST[ "lname" ]) ? $_POST[ "lname" ] : "";
         $email = isset($_POST[ "email" ]) ? $_POST[ "email" ] : "";
         $password = isset($_POST[ "password" ]) ? $_POST[ "password" ] : "";
       //  $rePassword = isset($_POST[ "rePassword" ]) ? $_POST[ "rePassword" ] : "";
         

		if (empty($fname)||empty($lname)||empty($email)/*||empty($rePassword)*/||empty($password)) {
		    header('Location: http://localhost/group6project/info2.php');
		    die();}
		//if ($password != $rePassword) {
		  //  header('Location: http://localhost/group6project/info2.php');
		    //die(); }


  			// . Connect to MySQL and open database .
			$database = mysqli_connect( "localhost","root", "","rpms");

			// . build select query
            $query = "UPDATE researchers SET f_name='$fname' , l_name='$lname' , email='$email' , password='$password' 	WHERE id_researcher='$id_researcher'";

			// . execute query in the databasae
        	 $result = mysqli_query( $database, $query);
           
           	// . close the datbase connection
         	mysqli_close( $database );
		    header('Location: http://localhost/group6project/info2.php');


 ?>
</body>
</html>