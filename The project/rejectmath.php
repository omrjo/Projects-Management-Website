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
	<header style="position: fixed; z-index: 100">
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
				<a href="end_session.php"><li id="a21"><i class="material-icons">&#xe8ac;</i></li></a>
				<a href="info.php"><li id="a22"><i class="fa fa-user"></i><?php echo " ".$f_name." ".$l_name; ?></li></a>
			</ul>
		</div>


	</header>



	<section>
			<div id="a10" style="position: fixed; top: 150px;">
		<ul id="a12"><strong id=adep> Departments</strong>
			<a href="employeecs.php" id="a25"><li >Computer Science</li></a>
			<a href="employeemd.php" id="a25"><li> Medicine </li></a>
			<a href="employeemath.php" id="a25"><li id="cs">Mathematics</li></a>
			<a href="employeeph.php" id="a25"><li>Physics</li></a>
		</ul>
	</div>
</div>

	</section>


	
		<div id="main_div">	<section id="cs8"><center><img src="photo/5.jpg"></center></section>




	<div id="a27" style="position: fixed;">
		<ul id="a12">
			<a href="allmath.php" id="a25"><li > all researches </li></a>
			<a href="acceptmath.php" id="a25"><li>accepted proposals</li></a>
			<a href="rejectmath.php" id="a25"><li id="cs">rejected proposals</li></a>
		</ul>
	</div>
</div>

<div id="a28">	
<center>
	<ul>
		<?php 
		$database=mysqli_connect("localhost","root","","rpms");
		$query="SELECT * from (proposals, researcher_has_proposal,researchers) where proposals.id_proposal=researcher_has_proposal.id_proposal and researchers.id_researcher=researcher_has_proposal.id_researcher and proposals.state='rejected' and researchers.department='mathematics'";
		$result=mysqli_query($database,$query);
		 
		while ($row=$result->fetch_assoc()){
			echo "
			<li>
				<a href='' class='s1'>
				".$row['proposal_title']."
				</a>
				<a href='' class='sp'> 
					<div>
					".$row['id_proposal']."
					</div>
				</a>
			</li><hr>";}
		?>


		
	</ul>
</center>


</div>


<footer>
	<nav class="footer" style="position: fixed; bottom: 0px; ">
		<p >
			<center id="foot">Copyright CS &copy; 2017  |  All Rights Reserved</center>
		</p>
	</nav>
</footer>



	
</body>
</html>