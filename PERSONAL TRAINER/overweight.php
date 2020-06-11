<?php include 'headeradmin.php'; ?>
<?php include 'sidebar.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>



<section id="container">

<!--main content start-->

		<div class="container">
 <div class="login-box"></div>
    <div class="row">
     
    </div class="col-md-11 login-left" >
   <h1 style="text-align: center">CLASS  </h1>
      <table class="table" >
        <?php echo '<br>'; ?>
        <?php echo '<br>'; ?>
        <h1>OVERWEIGHT</h1>
          <tr>
              <th>NAME</th>
              
          </tr>
      
        
          
            
             <?php 
             $con=mysqli_connect('localhost','root','Mehmet.1997','fit') ;
$uw='SELECT * FROM bmi';
$query1=mysqli_query($con,$uw);
while($masss=mysqli_fetch_assoc($query1)){
		if( $masss['bmivalue']=="OVERWEIGHT"){
    

    ?>

<tr >
     <td> <?php 
print("<font size=5>");
echo  $masss['name'];
print("</font>");
echo "<br>";
     
       ?></td>

 </tr> <?php }} ?>
            
         
          
        </tbody>
      </table>
    
  </div>
</div>









	<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>

</body>
</html>