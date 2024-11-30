<?php
session_start();
include("dbconnect.php");
extract($_REQUEST);
$uname=$_SESSION['uname'];

if($act=="yes")
{
mysqli_query($connect,"update ph_service set status=2 where id=$did");
?>
<script language="javascript">
window.location.href="br_home.php";
</script>
<?php
}
if($act=="no")
{
mysqli_query($connect,"update ph_service set status=0 where id=$did");
?>
<script language="javascript">
window.location.href="br_home.php";
</script>
<?php
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
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></span>
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

     <!-- ABOUT -->



  

     <!-- MAKE AN APPOINTMENT -->
<h2 align="center">Nutrition Details
</h2>

<?php
$q1=mysqli_query($connect,"select * from nutrition_details where apid='$apid' and patient='$patient'");
$row=mysqli_fetch_array($q1);
?>
<center>
<table width="500" height="149" border="1">
                          
                          <tr>
                            <th scope="col"> Name </th>
                            <th scope="col"><?php echo $row['patient']; ?></th>
                          </tr>
                          <tr>
                            <th scope="col">Doctor</th>
                            <th scope="col"><?php echo $row['doctor']; ?>,
                            <?php
                            $q2=mysqli_query($connect,"select * from ph_doctor_register where uname='".$row['doctor']."'");
                            $row1=mysqli_fetch_array($q2);
                            ?>
                            mobile-<?php echo $row1['mobile'];?>,email-<?php echo $row1['email'];?>
                        
                           </th>
                          </tr>
                          <tr>
                            <th scope="col">Title</th>
                            <th scope="col"><?php echo $row['title']; ?></th>
                          </tr>
                          <tr>
                            <th scope="col">Content</th>
                            <th scope="col"><?php echo $row['content']; ?></th>
                          </tr>
                          <tr>
                            <th scope="col">Meal Plan</th>
                            <th scope="col"><?php echo $row['meal_plan']; ?></th>
                          </tr>

                          <tr>
                            <th scope="col">Date</th>
                            <th scope="col"><?php echo $row['rdate']; ?></th>
                          </tr>
                        </table>
</center>
     

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