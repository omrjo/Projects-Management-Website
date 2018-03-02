<?php
        session_start();
        
       if (empty($_SESSION['id_employee'])) {
        	header('Location: http://localhost/group6project/homepage.php');
        	die();
        }

        $id=$_SESSION['id_employee'];


			// . Connect to MySQL and open database .
			$database = mysqli_connect( "localhost","root", "","rpms");

			// . build select query
            $query = "SELECT * from employees WHERE id_employee= '$id'";


			// . execute query in the databasae
        	 $result = mysqli_query( $database, $query);
           
           	// . close the datbase connection
         	mysqli_close( $database );

         	$row = $result->fetch_assoc();
         	$f_name=$row["f_name"];
         	$l_name=$row["l_name"];
        
	?>


<!DOCTYPE html>
<html>
<head>
	<title>rpms</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/employee.css">	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
	<header>
		<img src="photo/2.png">
		

		<table>
			
				<th >
					<a href="employee.php">
						<div >
							<center><i class="fa fa-home"></i>  Home </center>
						</div>
					</a>
				</th>
			


			
				<th>
					<a href="contact2.php">
						<div>
							<center><i class="fa fa-handshake-o"></i> Contact</center>
						</div>
					</a>
				</th>
			

				<th>
					<a href="about2.php">
						<div>
						<center><i class="fa fa-users"></i>  About</center>
						</div>
					</a>
				</th>
		</table>


		<div id="a20" >
			<ul id=a23>
				<a href="http://localhost/group6project/end_session.php"><li id="a21"><i class="material-icons">&#xe8ac;</i></li></a>
				<a href="http://localhost/group6project/info.php"><li id="a22"><i class="fa fa-user" id="item"><?php echo " ".$f_name." ".$l_name;?></i><center>
				</center></li></a>
			</ul>
		</div>


	</header>



	<section>
			<div id="a10">
		<ul id="a12"><strong id=adep> Departments</strong>
			<a href="employeecs.php" id="a25"><li> Computer Science  </li></a>
			<a href="employeemd.php" id="a25"><li> Medicine </li></a>
			<a href="employeemath.php" id="a25"><li>Mathematics</li></a>
			<a href="employeeph.php" id="a25"><li>Physics</li></a>
		</ul>
	</div>
	
</div>


	</section>


	
		<div id="main_div">	<section id="a8"><center><img src="photo/5.jpg"></center></section>



<center class="a24"><img src="photo/6.jpg">
</center>



<footer>
	<nav class="footer">
		<p >
			<center id="foot">Copyright CS &copy; 2017  |  All Rights Reserved</center>
		</p>
	</nav>
</footer>



	
</body>
</html>