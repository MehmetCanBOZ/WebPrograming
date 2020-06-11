<?php 



$db=mysqli_connect('localhost','root','Mehmet.1997','fit') ;

$name=$_GET["cardioname"];
$query="DELETE FROM cardio WHERE cardioname='$name'";
mysqli_query($db,$query);

$corenames=$_GET["corename"];
$query1="DELETE FROM core WHERE corename='$corenames'";
mysqli_query($db,$query1);

$wlnames=$_GET["wlname"];
$query2="DELETE FROM weightloss WHERE wlname='$wlnames'";
mysqli_query($db,$query2);

header('location:table.php');
     

	

  







 ?>