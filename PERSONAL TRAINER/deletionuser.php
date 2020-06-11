<?php 
session_start();
$db=mysqli_connect('localhost','root','Mehmet.1997','fit') ;

if(isset($_POST['cardioout'])){
$name=$_SESSION['username'];
$query="DELETE FROM cardio WHERE cardioname='$name'";
mysqli_query($db,$query);

}
if(isset($_POST['coreout'])){
$corenames=$_SESSION['username'];
$query1="DELETE FROM core WHERE corename='$corenames'";
mysqli_query($db,$query1);
}

if(isset($_POST['wlout'])){
$wlnames=$_SESSION['username'];
$query2="DELETE FROM weightloss WHERE wlname='$wlnames'";
mysqli_query($db,$query2);


  }   


 ?>