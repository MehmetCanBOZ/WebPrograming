<?php include 'header.php'; ?>
<?php  include 'deletionuser.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <link rel="stylesheet" href="style2.css" type="text/css">
        <script src="functions.js" async></script>
        <link rel="prefetch" href="images/logo.png">
        <link rel="prefetch" href="images/logo2.png">
        <link rel="prefetch" href="images/running2.jpg">
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>BOOK ONLINE</title>

    </head>
    <body>

        <div class="background-booking">
            <h1>BOOK YOUR PLACE NOW!</h1>
            <p>Choose your option:</p>
        </div>


       <?php include 'addclass.php'; ?>
        <div class="container-background">
            <div class="container-booking">
                <div class="tab-booking">
                    <button class="tablink" onclick="openTab(event, 'Group')" id="default">CLASSES</button>   
                </div>

                <div id="Group" class="tab-content">
                    <button class="collapse">Cardio Fitness Class</button>
                    <div class="content">  
                        <form action="classes.php" method="post">
                        <p>60 min. full-body workout class. Consists of rigorous interval training sequence with high-intensity exercises. It builds cardiovascular fitness while also improving muscular strength and endurance. Suited for all levels and will get you to reach your fitness goals!</p>
                      
                      <?php
                      
                      $name=$_SESSION['username'];

 $con=mysqli_connect('localhost','root','Mehmet.1997','fit') ;
     $cardioreg="SELECT * FROM cardio ";          
$query1=mysqli_query($con,$cardioreg);
while($fitcar=mysqli_fetch_assoc($query1)){
 
?>

 <?php 

 if($fitcar['cardioname']==$name ){ 

    ?> 
 
 <button type="submit" name="cardioout">Registerout</button>

<?php  }} ?>

  

 <?php $check="SELECT cardioname FROM cardio  WHERE cardioname='$name' ";
$result = mysqli_query($con, $check);
  $user = mysqli_fetch_assoc($result);
 
    if ($user['cardioname'] != $name) {

        ?>
      <button type="submit" name="cardio">Register</button>
<?php }  ?>    

                    </div>


                    <h2 class="collapse">Core Strength Class</h2> 
                    <div class="content">
                        <p>45 min. class that revolves around core strength and building up the body parts that we all want to show off. It will focus on toning, firming and shaping these areas using conventional and non-conventional.</p>
                                           <?php
   
     $core="SELECT * FROM core";          
$query2=mysqli_query($con,$core);
while($corer=mysqli_fetch_assoc($query2)){
 
?>

 <?php 

 if($corer['corename']==$name ){ 

    ?> 
 
 <button type="submit" name="coreout">Registerout</button>

<?php  }} ?>

  

 <?php $checks="SELECT corename FROM core WHERE corename='$name' ";
$results = mysqli_query($con, $checks);
  $users = mysqli_fetch_assoc($results);
 
    if ($users['corename'] != $name) {

        ?>
      <button type="submit" name="core">Register</button>
<?php }  ?>    
                    </div>
                    
                    <h2 class="collapse">Weight-Loss Class</h2>
                    <div class="content">
                        <p>60 min. class. There is no catch! Just a weight loss class that allows you to keep slim and healthy without changing your diet. Losing weight has never been easier.</p>   
                         
                         <?php
   
     $wl="SELECT * FROM weightloss";          
$query3=mysqli_query($con,$wl);
while($wls=mysqli_fetch_assoc($query3)){
 
?>

 <?php 

 if($wls['wlname']==$name ){ 

    ?> 
 
 <button type="submit" name="wlout">Registerout</button>

<?php  }} ?>

  

 <?php $checkss="SELECT wlname FROM weightloss WHERE wlname='$name' ";
$resultss = mysqli_query($con, $checkss);
  $userss = mysqli_fetch_assoc($resultss);
 
    if ($userss['wlname'] != $name) {

        ?>
      <button type="submit" name="wlos">Register</button>
<?php }  ?>    
                </div>

                
                </div>  
            </div>
        </div>
         
        <script>
            function openTab(evt, workout) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tab-content");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablink = document.getElementsByClassName("tablink");
                for (i = 0; i < tablink.length; i++) {
                    tablink[i].className = tablink[i].className.replace(" active", "");
                }
                document.getElementById(workout).style.display = "block";
                evt.currentTarget.className += " active";
            }

            // Get the element with id="defaultOpen" and click on it
            document.getElementById("default").click();
    
    
            var coll = document.getElementsByClassName("collapse");
            var i;

            for (i = 0; i < coll.length; i++) {
                coll[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var content = this.nextElementSibling;  
                    if (content.style.maxHeight){
                        content.style.maxHeight = null;
                    } else {
                        content.style.maxHeight = content.scrollHeight + "px";
                    } 
                });
            }
        </script>
    </body>
</html>
        