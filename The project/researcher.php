<!DOCTYPE html>
<html>
<head>
	<title>rpms</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/recearcher.css">	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<?php
        session_start();
        
       if (empty($_SESSION['id_researcher'])) {
        	header('Location: http://localhost/group6project/homepage.php');
        	die();
        }

        $id_researcher=$_SESSION['id_researcher'];


			// . Connect to MySQL and open database .
			$database = mysqli_connect( "localhost","root", "","rpms");

			// . build select query
            $query = "SELECT * from researchers WHERE id_researcher= '$id_researcher'";


			// . execute query in the databasae
        	 $result = mysqli_query( $database, $query);
           
           	// . close the datbase connection
         	mysqli_close( $database );

         	$row = $result->fetch_assoc();
         	$f_name=$row["f_name"];
         	$l_name=$row["l_name"];
        
	?>
	<header>
		<img src="photo/2.png">
		

		<table>
			
				<th >
					<a href="http://localhost/group6project/researcher.php">
						<div >
							<center><i class="fa fa-home"></i>  Home </center>
						</div>
					</a>
				</th>
			


			
				<th>
					<a href="http://localhost/group6project/contactr.php">
						<div>
							<center><i class="fa fa-handshake-o"></i> Contact</center>
						</div>
					</a>
				</th>
			

				<th>
					<a href="http://localhost/group6project/aboutr.php">
						<div>
						<center><i class="fa fa-users"></i>  About</center>
						</div>
					</a>
				</th>
		</table>

		<div id="a20" >
			<ul id=a23>
				<a href="http://localhost/group6project/end_session.php"><li id="a21"><i class="material-icons">&#xe8ac;</i></li></a>
				<a href="http://localhost/group6project/info2.php"><li id="a22"><i class="fa fa-user" id="item"><?php echo " ".$f_name." ".$l_name;?></i><center>
				</center></li></a>
			</ul>
		</div>


	</header>



	<section>
			<div id="a10">
		<ul id="a12">
			<a href="my projects.php" id="a25"><li> My project  </li></a>
			<a href="my proposals.php" id="a25"><li> My proposal </li></a>
			<a href="Participants with me.php" id="a25"><li>Participates with me</li></a>
			<a href="info2.php" id="a25"><li>edit my information</li></a>

			
		</ul>
	</div>
</div>


	</section>


	
		<div id="main_div">	<section id="c8"><center><img src="photo/5.jpg"></center></section>

<center>
	<!--<div id="a15"><P><a href="reg/login.html">I HAVE AN ACCOUNT</a></P></div>-->
	<div id="about" "><p><b>Welcome dear researcher:</b><br>
Through this page, you can <b>submit</b> a new research proposal
<br>Or you can <b>follow</b> the status of scientific research previously submitted to us at the site
</p>
<ul>
<a href="http://localhost/group6project/submit_new_proposal.php" id="link" style="position: relative;top: 50px;">
	<li style="position: relative; display: inline-block;width: 200px;
	
	height: 40px;
	background-color: #615E5E;
	border-radius: 10px;
	text-decoration: none;"><center style="position: relative;top: 5px;"> Submit a new proposal</center></li></a>
<a href="my proposals.php" id="link2" style="position: relative;top: 50px;"><li style="position: relative; display: inline-block;width: 200px;
right: 40px;
	height: 40px;
	background-color: #615E5E;
	border-radius: 10px;
	text-decoration: none;"><center style="position: relative;top: 5px;">My previous proposal</center></li></a>
</ul>
</div>

</center>
 </div>



<section>
		<div id="a27">
		<ul id="a12">
			<a href="https://en.wikipedia.org/wiki/Research_proposal" id="a25"><li > What is the scientific proposal?</li></a>
			<a href="http://www.studygs.net/proposal.htm" id="a25"><li>How to write a scientific proposal?</li></a>
			<a href="some quistion with external link.html" id="a25"><li>some quistion with external link?</li></a>
			<a href="another quistion with external link.html" id="a25"><li>another quistion with external link?</li></a>
		</ul>
		</div>


	</section>

<footer>
	<nav class="footer">
		<p >
			<center id="foot">Copyright CS &copy; 2017  |  All Rights Reserved</center>
		</p>
	</nav>
</footer>


    


	
</body>
</html>