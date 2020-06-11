<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <link rel="stylesheet" href="style2.css" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Do+Hyeon" rel="stylesheet">
        <script src="functions.js" async></script>
        <link rel="prefetch" href="images/logo.png">
        <link rel="prefetch" href="images/logo2.png">
        <link rel="prefetch" href="images/contact.jpeg">
        <meta charset="utf-8">
        <title>Contact Us</title>
    </head>
    <body>
        <!--CONTACT INFORMATION-->
        <div class="container-contactus">
            <!-- TOP INFORMATION-->
            <div style="text-align:center">
                <h1>Contact Us</h1>
                <p>
                    Tel: (056)7706529<br>
                    Fax: (056)7706529<br><br>
                    personalfitness@info.com<br><br>
                    2 Essex St E, Temple Bar, Dublin
                </p>
            </div>
            <!-- BOTTOM INFORMATION-->
            <!-- MAP AT LEFT-HAND SIDE-->
            <div class="column-contactus">
                <div id="map" style="width:100%;height:570px;"></div>
            </div>
           
        <!--NAVIGATION BAR-->
      <?php include 'header.php'; ?>
        
        <!--JS TO ADD THE MAP WITH A MARKER AT THE LOCATION-->
        <script>
            function initMap() {
                var pos = {lat: 53.3450638, lng: -6.267332200000055};
                var map = new google.maps.Map(document.getElementById('map'), 
                {
                    zoom: 11,
                    center: pos
                });
                var marker = new google.maps.Marker
                ({
                    position: pos,
                    map: map
                });
            }
        </script>
        <!--INCLUDING API FOR GOOGLE MAP-->
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBv80ZXOJuosH_iEjX-YJfo0SWzsuj4_6g&callback=initMap">
        </script>
    </body>
</html>
        