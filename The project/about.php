<!DOCTYPE html>
<html>
<head>
	<title>RPMS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/homepage.css">	
</head>

<body>
	<header>
 		<img src="photo/2.png">
		
		<table>	
				<th >
					<a href="homepage.php">
						<div >
							<center><i class="fa fa-home"></i>  Home </center>
						</div>
					</a>
				</th>	
				<th>
					<a href="contact.php">
						<div>
							<center><i class="fa fa-handshake-o"></i> Contact</center>
						</div>
					</a>
				</th>
				<th>
					<a href="about.php">
						<div>
						<center><i class="fa fa-users"></i>  About</center>
						</div>
					</a>
				</th>
		</table>
		<div id="a19">
			<form method="post" action="homepage.php" >
				<ul>
					<li><i class="fa fa-user"></i>youremail
						<input type="email" name="email" placeholder="your email ">
					</li>
					<li ><i class="fa fa-unlock-alt"></i> password 
						<input type="password" name="password" placeholder=" password" value="">
					</li>
					<p id="wrong_password" style="position: absolute; left: 15px; color: red"></p>
				</ul>
				<div id="a20">
					<input type="submit" name="submit" value="login">
				</div>
			</form>
		</div>
						<p style="position: absolute; top: 55px; right: 210px; z-index: 100; color: red;" id="notes" ></p>

	</header>

	<section>
		<div id="a10">
	</div>
	</section>
	<section>
		<div id="a27">
		</div>
	</section>
		
<div id="main_div">	<section id="a8"><center><img src="photo/5.jpg"></center></section>

<center>
	<!--<div id="a15"><P><a href="reg/login.html">I HAVE AN ACCOUNT</a></P></div>-->
	<div id="about">this website just project , and it is Under maintenance and upon completion of the site will be submitted online completely,<br>Students working on site: <br>-khalled almliki<br>-hammam jaber<br>-rakan alkhteeb<br>-tayseer suidan<br>Site Supervisor: Dr. Mohamed Fuad Seriti

 </div>
</center>
</div>

<footer>
	<nav class="footer">
		<p >
			<center id="foot">Copyright CS &copy; 2017  |  All Rights Reserved</center>
		</p>
	</nav>
</footer>	
 <?php

         
if(isset($_POST['submit'])) {
         
         if (isset($_POST['email'])) {
          session_start(); } //start session;
         $email = $_POST['email'];
         $password = $_POST['password'];
         
 
			// 3. Connect to MySQL
		 $database = mysqli_connect( "localhost","root", "","rpms");
         $email = stripcslashes($email);
         $password = stripcslashes($password);
         $email = mysqli_real_escape_string($database ,$email);
         $password = mysqli_real_escape_string($database ,$password);
         
			// 2. build INSERT query
            $query = "SELECT * from researchers WHERE email= '$email' AND password='$password'";

			// 5. execute query in Bloggers database
        	 $result = mysqli_query( $database, $query);
           
           	// 6. close the datbase connection
         	mysqli_close( $database );

         	$row = mysqli_num_rows($result);
        


         	 if (empty($email)||empty($password)) {
              ?> <script type="text/javascript">document.getElementById('notes').innerHTML="password or email is empty"</script><?php
           }else {if($row==1){
           	            $row_id = $result->fetch_assoc();
         	            $_SESSION['id_researcher']=$row_id["id_researcher"];
                      //  $_SESSION['email']= $email;
                       // $_SESSION['pass']= $password;
                        
             ?>
              
         	<script type="text/javascript"> window.location.href="http://localhost/group6project/researcher.php"; 
           </script>  
         	<?php } else{
         		         ?> <script type="text/javascript">document.getElementById('notes').innerHTML="wrong password or email !"; </script><?php

         	}} 
       }       
?>
</body>
</html>