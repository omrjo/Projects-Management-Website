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
					<a href="employee.html">
						<div >
							<center><i class="fa fa-home"></i>         
<?php 
              $database= mysqli_connect("localhost","root","","rpms");
            //  $query="SELECT * FROM researchers,proposals,researcher_has_proposal WHERE researchers.id_researcher=researcher_has_proposal.id_researcher AND proposals.id_proposal=researcher_has_proposal.id_proposal";
              $query2="SELECT f_name FROM researchers";

               $result=mysqli_query($database , $query2);
  																						
                        while ($row=$result->fetch_assoc()){
                        	echo $row['f_name'];
                        }
        ?> </center>
						</div>
					</a>
				</th>
			


			
				<th>
					<a href="contact2.html">
						<div>
							<center><i class="fa fa-handshake-o"></i> Contact</center>
						</div>
					</a>
				</th>
			

				<th>
					<a href="about2.html">
						<div>
						<center><i class="fa fa-users"></i>  About</center>
						</div>
					</a>
				</th>
		</table>


		<div id="a20" >
			<ul id=a23>
				<a href="homepage.html"><li id="a21"><i class="material-icons">&#xe8ac;</i></li></a>
				<a href="info.html"><li id="a22"><center><i class="fa fa-user"></i> hammam abdulaziz</center></li></a>
			</ul>
		</div>


	</header>



	<section>
			<div id="a10">
		<ul id="a12"><strong id=adep> Departments</strong>
			<a href="employeecs.html" id="a25"><li id="cs"> Computer Science  </li></a>
			<a href="employeemd.html" id="a25"><li> Medicine </li></a>
			<a href="employeemath.html" id="a25"><li>Mathematics</li></a>
			<a href="employeeph.html" id="a25"><li>Physics</li></a>
		</ul>
	</div>
</div>


	</section>


	
		<div id="main_div">	<section id="cs8"><center><img src="photo/5.jpg"></center></section>




	<div id="a27">
		<ul id="a12">
			<a href="employeecs.html" id="a25"><li id="cs"> all researches </li></a>
			<a href="sendcs.html" id="a25"><li> reserches send to reviwer </li></a>
			<a href="reportcs.html" id="a25"><li>progres reports</li></a>
			<a href="rejectcs.html" id="a25"><li>rejected researches</li></a>
		</ul>
	</div>
</div>




<div id="a28">
	
<center>
	<ul>	
 




		
			<li>
				<a href="" class="s1">
				recearch2
				</a>
				
			<a href="" class="s2"> 
					<div>
					<i class="fa fa-send"></i> Send
					</div>
				</a>

				<a href="" class="s"> 
					<div>
					<i class="fa fa-trash-o"></i> Delete
					</div>
				</a>

			</li><hr>

			<li>
				<a href="" class="s1">
				recearch3
				</a>
				<a href="" class="s2"> 
					<div>
					<i class="fa fa-send"></i> Send
					</div>
				</a>

				<a href="" class="s"> 
					<div>
					<i class="fa fa-trash-o"></i> Delete
					</div>
				</a>
			</li><hr>


			<li>
				<a href="" class="s1">
				recearch4
				</a>
				<a href="" class="s2"> 
					<div>
					<i class="fa fa-send"></i> Send
					</div>
				</a>

				<a href="" class="s"> 
					<div>
					<i class="fa fa-trash-o"></i> Delete
					</div>
				</a>
			</li>


			
		

	</ul>
</center>


</div>


<footer>
	<nav class="footer">
		<p >
			<center id="foot">Copyright CS &copy; 2017  |  All Rights Reserved</center>
		</p>
	</nav>
</footer>



	
</body>
</html>