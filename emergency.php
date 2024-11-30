<?php
session_start();
include("dbconnect.php");
extract($_REQUEST);
$uname=$_SESSION['uname'];
$rdate=date("d-m-Y");
$qry=mysqli_query($connect, "select * from patient where uname='$uname'");
$row=mysqli_fetch_array($qry);

$doctor=$row['doctor'];

$arr=array("10.00AM","10.15AM","10.30AM","10.45AM","11.00AM","11.15AM","11.45AM","12.00PM","12.15PM","12.30PM","12.45PM");

if(isset($alert))
{

$mq=mysqli_query($connect, "select max(id) from alert");
$mr=mysqli_fetch_array($mq);
$id=$mr['max(id)']+1;
$mq1 = mysqli_query($connect, "SELECT * FROM ph_register ORDER BY id DESC LIMIT 1");
$mr1 = mysqli_fetch_array($mq1);

$amp=$mr1['uname'];
$mobile=$mr1['mobile'];
$rdate=date("d-m-Y");
$mq2=mysqli_query($connect, "select * from patient where uname='$uname'");
$mr2=mysqli_fetch_array($mq2);
$contact=$mr2['contact'];
$address=$mr2['address'];
$city=$mr2['city'];

$ins=mysqli_query($connect, "insert into alert(id,uname,amp,rdate) values($id,'$uname','$amp','$rdate')");
if ($ins) {
    $mss = "Dear $amp, patient-$uname,contact-$contact,address-$address";
    echo '<iframe src="http://iotcloud.co.in/testsms/sms.php?sms=emr&name='.$amp.'&mess='.$mss.'&mobile='.$mobile.'" width="10" height="10" ></iframe>'; 
?>
           
           <script>
      setTimeout(function () {
      window.location.href='emergency.php';
      }, 5000);
      </script>
      <?php
      }
      else{
          echo "Error";
      }
      
      
}


?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title><?php include("title.php"); ?></title>
<!--

Template 2098 Health

http://www.tooplate.com/view/2098-health

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                      <p><?php include("title.php"); ?></p>
                    </div>
                         
                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> 010-060-0160</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 10:00 PM (Mon-Fri)</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">emergenatal@company.com</a></span>
                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
 	 <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="" class="navbar-brand"><i class="fa fa-h-square"></i><?php include("title.php"); ?></a>
               </div>

               <!-- MENU LINKS -->
               <?php include("link_pat.php"); ?>

          </div>
     </section>


  <br><br>
  <div class="spacing"></div>
		 		<center>
                 <h3>Emergency Alert</h3>
                 <br>
                 <p>An ambulance is on its way. Please stay calm.</p>
                 <form action="" method="post">
                    <input type="submit" class="btn btn-primary" name="alert" value="Click">

                 </form>


                </center>
			<br><br>
		 		
	 		

		 		
     

     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">

                    

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <div class="copyright-text"> 
                                   <p><?php include("title.php"); ?></p>
                              </div>
                         </div>
                         <div class="col-md-6 col-sm-6">
                              <div class="footer-link"> 
                              <?php include("link_pat.php"); ?>
                              </div>
                         </div>
                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn"> 
                                  <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                              </div>
                         </div>   
                    </div>
                    
               </div>
          </div>
     </footer>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>