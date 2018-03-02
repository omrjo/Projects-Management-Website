<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
      <?php
           session_start(); //continue session 
           session_unset();   
           session_destroy();   //distroooy session for secure 
           header('Location: homepage.php');
      ?>
</body>
</html>