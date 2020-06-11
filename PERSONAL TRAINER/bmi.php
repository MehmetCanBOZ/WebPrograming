<?php include 'header.php'; 

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';




?>
<?php include 'server.php'; ?>
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
	<section id="main-content">
	<section class="wrapper">
	<div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            BODY MAX INDEX
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                           <form method="post" action="bmi.php">
    
    <div class="input-group">
      <label>Mass(kg)</label>
      <input type="text" name="mass" >
    </div>
    <div class="input-group">
      <label>Height(m)</label>
      <input type="text" name="height" ">
    </div>
   
    <div class="input-group">
      <button type="submit" class="btn" name="submit">Calculate</button>
    </div>
    
  </form>
<?php
if (isset($_POST['submit'])) { 
  $mass = $_POST['mass'];
  $height = $_POST['height'];
  
  function bmi($mass,$height) {
    $bmi = $mass/($height*$height);
    return $bmi;
  } 
$bmi = bmi($mass,$height);
  if ($bmi <= 18.5) {
    $output = "UNDERWEIGHT";

  } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
    $output = "NORMAL WEIGHT";

  } else if ($bmi > 24.9 AND $num<=29.9) {
    $output = "OVERWEIGHT";

  } else if ($bmi > 30.0) {
    $output = "OBESE";
  }

echo "Your BMI value is  " . bmi($mass,$height). "  and you are : "; 
echo "$output";
$aa = mysqli_connect('localhost', 'root', 'Mehmet.1997', 'fit');
$name=$_SESSION['username'];
$query="DELETE FROM bmi WHERE name='$name'";
mysqli_query($aa,$query);


$mass = mysqli_real_escape_string($db, $_POST['mass']);
$height = mysqli_real_escape_string($db, $_POST['height']);


$query112 = "INSERT INTO bmi (name,weight,height,bmi,bmivalue)
          VALUES('$name','$mass','$height','$bmi','$output')";
  mysqli_query($aa, $query112);
}



?>    




</div>

                        </div>
                    </section>

            </div>
            </div>
            </div>
             </section>
              </section>
</body>
</html>