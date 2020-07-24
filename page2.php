<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://drive.google.com/uc?id=1vmHnmdx-2EcOtVLsjYH9YB4rKxAONCej" type="text/css" />
 <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@454;700&family=Rowdies:wght@700&display=swap" rel="stylesheet">
    <title>blogger project</title>
    <style>
      .cont{
        display: flex;
        flex-direction: column;
      align-items: center;
        width: 95%;
        margin:25px 5px;
        background-color: #eca65e;
        text-align: center;
      }
      
      
    </style>
  </head>
  <body>
    <?php
     include './parse/header.php';
     include './parse/dbconn.php';
    ?>


<?php
$id=$_GET['sno'];
$sql="SELECT * FROM `con` WHERE sno ='$id'";
$result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_assoc($result)) {
  //$id=$row['sno'];
  $tittel=$row['tittle'];
  $des=$row['cont'];
  echo'  <div class="cont">
      <h4 class="tittel" >'.$tittel.'</h4>
      <p class="maincontent">'.$des.'</p>
      
    </div>';
}
?>
    <!---content start heair--->
  
  </body>
</html>
