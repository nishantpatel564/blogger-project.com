<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="blogger.css" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@454;700&family=Rowdies:wght@700&display=swap" rel="stylesheet">
    <title>blogger project</title>
  </head>
  <body>
    <?php
     include './parse/header.php';
     include './parse/dbconn.php';
    ?>


<?php
$sql="SELECT * FROM `con`";
$result=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_assoc($result)) {
  $id=$row['sno'];
  $tittel=$row['tittle'];
  $des=$row['cont'];
  echo'  <div class="content">
      <p class="tittel">'.$tittel.'</p>
      <p class="maincontent">'.substr($des,0,91).'</p>
      <a href="page2.php?sno='.$id.'">READ MORE</a>
    </div>';
}
?>
    <!---content start heair--->
  
  </body>
</html>
