<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<?php     
     session_start();
        $id_researcher=$_SESSION['id_researcher'];
        $proposal_title=$_POST["title_proposal"];
      //  $budget_proposal=$_POST["budget_proposal"];
        $id_researcher1=$_POST['researcher1'];
        $id_researcher2=$_POST['researcher2'];
        $id_researcher3=$_POST['researcher3'];
        $id_researcher4=$_POST['researcher4'];

      // . Connect to MySQL and open database .
      $database = mysqli_connect( "localhost","root", "","rpms");
            
             // queries that insert title proposal and select id_proposal;
          //  $query_insert_title_proposal="INSERT INTO proposals(proposal_title) VALUES('$proposal_title')";
          //  mysqli_query( $database, $query_insert_title_proposal);
 
            $query_select_id_proposal="SELECT id_proposal FROM proposals WHERE proposal_title ='health4' "; 
            $result_select_id_proposal= mysqli_query($database , $query_select_id_proposal);
            //get id proposal ;         
            $row1 = $result_select_id_proposal->fetch_assoc();
            $id_proposal=$row1['id_proposal'];
       
       

             if (isset($id_researcher1)) {
              $id_researcher1=settype($id_researcher1, int);
             $query_participants1="INSERT INTO researcher_has_proposal(id_researcher,id_proposal) VALUES('$id_researcher1','$id_proposal')";       
              mysqli_query($database, $query_participants1); }
             
             if (isset($id_researcher2)) {
              $id_researcher2= settype($id_researcher2, int);
             $query_participants2="INSERT INTO researcher_has_proposal(id_researcher,id_proposal) VALUES($id_researcher2,$id_proposal)";       
              mysqli_query($database, $query_participants2); }

             if (isset($id_researcher3)) {
              $id_researcher3=settype($id_researcher3, int);
             $query_participants="INSERT INTO researcher_has_proposal(id_researcher,id_proposal) VALUES($id_researcher3,$id_proposal)";       
              mysqli_query($database, $query_participants); }

             if (isset($id_researcher4)) {
              $id_researcher4=settype($id_researcher4, int);
             $query_participants="INSERT INTO researcher_has_proposal(id_researcher,id_proposal) VALUES($id_researcher4,$id_proposal)";       
              mysqli_query($database, $query_participants); }

            // . close the datbase connection
             mysqli_close( $database );
             header('Location: http://localhost/group6project/researcher.php');
?>
</body>
</html>