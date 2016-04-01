<?php include 'header.php';?>

 <!-- Slider start -->
   
<br><br>
    <div class="container">
        <div class="col-md-4"></div>
        <div class="col-md-4">    
            <div style="margin-top:50px;">

            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Appointment</div>
                    </div>     
                    <div style="padding-top:30px" class="panel-body">

                        <form class="form-horizontal" role="form" method="post" action="appointment.php">
                                    
                            <div style="margin-bottom: 25px">
                                <input id="login-username" width="100%" type="text" class="form-control" name="name" value="" placeholder="Name:Larry Page" required>                                        
                            </div>
                                
                            <div style="margin-bottom: 25px">
                                <input type="text" width="100%" name="mobile" class="form-control" placeholder="Mobile No." required>        
                            </div>
                                    
                            <div style="margin-bottom: 25px">
                                <input type="email" width="100%" name="email" class="form-control" placeholder="Email:example@abc.com" required>        
                            </div>
                            
                            <div style="margin-bottom: 25px">
                                <input type="text" width="100%" name="no_of_person" class="form-control" placeholder="No. of Person: 1" required>        
                            </div>
                            
                            <div style="margin-bottom: 25px">
                                <input type="text" width="100%" name="date" class="form-control" placeholder="Date and Time" required>
                            </div>
                            
                            <div style="margin-bottom: 25px">
                                <input type="text" width="100%" name="service" class="form-control" placeholder="Service Reason" required>        
                            </div>
                            
                            <div style="margin-bottom: 25px">
                                <input type="text" width="100%" name="offer" class="form-control" placeholder="Available Offer" required>        
                            </div>
                            
                               

                                <div style="margin-top:10px" class="form-group text-center">
                                    <div class="col-sm-12 controls">
                                      <input type="submit" name="submit" class="btn btn-success" value="Submit">
                                    </div>
                                </div>    
                            </form>     
                        </div>                     
                    </div>  
            </div> 
        </div>
        <div class="col-md-4"></div>

    </div>
    </body>
    

<!-- Javascript Files
    ================================================== -->
    <!-- initialize jQuery Library -->

        <!-- initialize jQuery Library -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <!-- Bootstrap jQuery -->
         <script src="js/bootstrap.min.js"></script>
        <!-- Owl Carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- Isotope -->
        <script src="js/jquery.isotope.js"></script>
        <!-- Pretty Photo -->
        <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
        <!-- SmoothScroll -->
        <script type="text/javascript" src="js/smooth-scroll.js"></script>
        <!-- Image Fancybox -->
        <script type="text/javascript" src="js/jquery.fancybox.pack.js?v=2.1.5"></script>
        <!-- Counter  -->
        <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
        <script type="text/javascript" src="js/waypoints.min.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
        <script type="text/javascript" src="js/jquery.scrollTo.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <!-- PrettyPhoto -->
        <script src="js/jquery.singlePageNav.js"></script>
        <!-- Wow Animation -->
        <script type="js/javascript" src="js/wow.min.js"></script>
        <!-- Google Map  Source -->
        <script type="text/javascript" src="js/gmaps.js"></script>
            <!-- Custom js -->
        <script src="js/custom.js"></script>
        <script src="./jquery.js"></script>
        <script src="build/jquery.datetimepicker.full.js"></script>
        <script>/*
window.onerror = function(errorMsg) {
    $('#console').html($('#console').html()+'<br>'+errorMsg)
}*/

$.datetimepicker.setLocale('en');

$('#datetimepicker').datetimepicker({
dayOfWeekStart : 1,
lang:'en',
disabledDates:['1986/01/08','1986/01/09','1986/01/10'],
startDate:  '1986/01/05'
});
$('#datetimepicker').datetimepicker({value:'2015/04/15 05:03',step:10});

</script>

    
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "salon_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['submit']))
{
    $name = mysql_real_escape_string($_POST['name']);
    $mobile = mysql_real_escape_string($_POST['mobile']);
    $email = mysql_real_escape_string($_POST['email']);
    $no_of_person = mysql_real_escape_string($_POST['no_of_person']);
    $date = mysql_real_escape_string($_POST['date']);
    $service = mysql_real_escape_string($_POST['service']);
    $offer = mysql_real_escape_string($_POST['offer']);
    $sql = "INSERT INTO `salon_db`.`appointment` (`appointment_id`, `name`, `mobile`, `email`, `no_of_person`, `date`, `services`, `offer`) VALUES ('','$name','$mobile','$email','$no_of_person','$date','$service','offer')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    $to = "poorabsen@gmail.com";
    $subject = "My subject";
    $txt = "Hello world!";
    $headers = "From: poorabsen@gmail.com" . "\r\n" .
    "CC: somebodyelse@example.com";
    mail($to,$subject,$txt,$headers);
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
?>