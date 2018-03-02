<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="example99.php">number<input type="integer" name="number" >
		<input type="submit" name="submitt" value="submit">
	</form>
      <?php 
     
    $value=$_POST['number'];
      mysqli_connect("localhost","root","","halaqah");
      $query="INSERT INTO number2(id_employee2) values ($value)";
      	?>
</body>
</html>