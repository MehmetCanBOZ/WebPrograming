<?php 
session_start();
$error=array();

$con=mysqli_connect('localhost','root','Mehmet.1997','fit') ;

if (isset($_SESSION['username'])) : 

$adsoyad= $_SESSION['username'];

$user_check_query="SELECT * FROM  cardio WHERE cardioname='$adsoyad' LIMIT 1";// sunplatesname plates tableın içindeki variable.
$results=mysqli_query($con,$user_check_query);
$car=mysqli_fetch_assoc($results);//mcbozRASGELE VARIABLE


if (isset($_POST['cardio'])) {

if($car){

	if($car['cardioname']==$adsoyad){array_push($error, "username already exist");}
	
}

if(count($error)==0){

$query="INSERT INTO cardio(cardioname) VALUES ('$adsoyad')";

mysqli_query($con,$query);

header('location:classes.php');

}else{
	echo "You are already registered the system";
}

}


$user_check_query1="SELECT * FROM  core WHERE corename='$adsoyad' LIMIT 1";// sunplatesname plates tableın içindeki variable.
$resultss=mysqli_query($con,$user_check_query1);
$corre=mysqli_fetch_assoc($resultss);//mcbozRASGELE VARIABLE



if (isset($_POST['core'])) {
if($corre){

	if($corre['corename']==$adsoyad){array_push($error, "username already exist");}
	
}
if(count($error)==0){

$query1="INSERT INTO core(corename) VALUES ('$adsoyad')";

mysqli_query($con,$query1);

header('location:classes.php');

}else{
	echo "You are already registered the system";
}

}








$user_check_query2="SELECT * FROM  weightloss WHERE wlname='$adsoyad' LIMIT 1";// sunplatesname plates tableın içindeki variable.
$resultsss=mysqli_query($con,$user_check_query2);
$wlosss=mysqli_fetch_assoc($resultsss);//mcbozRASGELE VARIABLE



if (isset($_POST['wlos'])) {
if($wlosss){

	if($wlosss['wlname']==$adsoyad){array_push($error, "username already exist");}
	
}
if(count($error)==0){

$query2="INSERT INTO weightloss(wlname) VALUES ('$adsoyad')";

mysqli_query($con,$query2);

header('location:classes.php');

}else{
	echo "You are already registered the system";
}

}




endif 

 ?>