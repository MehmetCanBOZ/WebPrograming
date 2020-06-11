<?php include 'header.php'; ?>

<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="style2.css" type="text/css">
        <script src="functions.js" async></script>
        <link rel="prefetch" href="images/logo.png">
        <link rel="prefetch" href="images/logo2.png">
        <link rel="prefetch" href="images/running2.jpg">
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<title>PROFILE</title>
</head>
<body>

        <div class="background-booking">
            <h1><?php echo "Your Name: ".$_SESSION['username']; ?></h1>
            <p>CLASSES THAT YOU CHOOSE</p>
        </div>
        <h1 class="bars">CLASSES</h1>
			
				<?php 

 $con=mysqli_connect('localhost','root','Mehmet.1997','fit') ;
$cardioreg='SELECT cardioname FROM cardio';
$query1=mysqli_query($con,$cardioreg);

while($fitcar=mysqli_fetch_assoc($query1) ){			
 if( $fitcar['cardioname']==$_SESSION['username']){
      		print("<font size=5>");
echo 'Cardio';
print("</font>");
echo "<br>";
}}
$core='SELECT corename FROM core';
$query2=mysqli_query($con,$core);

while($c=mysqli_fetch_assoc($query2) ){			
 if( $c['corename']==$_SESSION['username']){
      		print("<font size=5>");
echo 'Core';
print("</font>");
echo "<br>";

      }}  

$wl='SELECT wlname FROM weightloss';
$query3=mysqli_query($con,$wl);

while($w=mysqli_fetch_assoc($query3) ){			
 if( $w['wlname']==$_SESSION['username']){
      		print("<font size=5>");
echo 'Weight loss';
print("</font>");
echo "<br>";

      }} 


       ?>

				<h1 class="bars">YOUR BMI</h1>
        <label>Mass(kg) : </label>
				<?php $con=mysqli_connect('localhost','root','Mehmet.1997','fit') ;
$mass='SELECT * FROM bmi';
$query4=mysqli_query($con,$mass);

while($masss=mysqli_fetch_assoc($query4) ){      
 if( $masss['name']==$_SESSION['username']){
    print("<font size=5>");
echo  $masss['weight'];
print("</font>");
echo "<br>";
}} ?>
			<label>Height(m) : </label>
      <?php $con=mysqli_connect('localhost','root','Mehmet.1997','fit') ;
$mass='SELECT * FROM bmi';
$query4=mysqli_query($con,$mass);

while($masss=mysqli_fetch_assoc($query4) ){      
 if( $masss['name']==$_SESSION['username']){
    print("<font size=5>");
echo  $masss['height'];
print("</font>");
echo "<br>";
}} ?>
<label>Your BMI : </label>
 <?php $con=mysqli_connect('localhost','root','Mehmet.1997','fit') ;
$mass='SELECT * FROM bmi';
$query4=mysqli_query($con,$mass);

while($masss=mysqli_fetch_assoc($query4) ){      
 if( $masss['name']==$_SESSION['username']){
    print("<font size=5>");
echo  $masss['bmi'];
print("</font>");
echo "<br>";
}} ?>
<label>Your Progress : </label>
<?php $con=mysqli_connect('localhost','root','Mehmet.1997','fit') ;
$mass='SELECT * FROM bmi';
$query4=mysqli_query($con,$mass);

while($masss=mysqli_fetch_assoc($query4) ){      
 if( $masss['name']==$_SESSION['username']){
    print("<font size=5>");
echo  $masss['bmivalue'];
print("</font>");
echo "<br>";
}} ?>

</body>
</html>