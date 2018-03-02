<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

$id_proposal= $_POST['accept'];

$database1=mysqli_connect("localhost","root","","rpms");
$query="UPDATE proposals SET state='acceptedy' WHERE id_proposal";
$result=mysqli_query($database1 , $query);
?><script type="text/javascript"> window.location.href="http://localhost/group6project/allcs.php"; </script>
<?php
  ?>
</body>
</html>