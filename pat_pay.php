<?php
session_start();
include("dbconnect.php");
extract($_POST);
$rdate=date("d-m-Y");
$uname=$_SESSION['uname'];
$qry=mysqli_query($connect, "select * from patient where uname='$uname'");
$row=mysqli_fetch_array($qry);

$doctor=$row['doctor'];

if(isset($btn))
{

		
	?>
	<script language="javascript">
	alert("Appointment has sent");
	window.location.href="appoint.php";
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

     <!-- ABOUT -->

       <!-- MAKE AN APPOINTMENT -->
       <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <img src="images/med5.jpg" class="img-responsive" alt="">
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <!-- CONTACT FORM HERE -->
						 <form name="form1" id="appointment-form" role="form" method="post" action="#">

                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Payment</h2>
                              </div>
							  <?php
							  if($act=="wrong")
							  {
							  ?>
                              <div class="alert-danger" align="center">Already Exist!</div>
                              <?php
							  }
							  if($act=="success")
							  {
							  ?>
							  <div class="alert-info" align="center">Registered Success</div>
							  <?php
							  }
							  ?>
                  <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Bank</label>
                                        <select name="gender" id="gender" class="form-control">
                                        <option value="">--Choose--</option>
                                        <option>SBI</option>
                                        <option>Indian Bank</option>
                                        <option>LVB</option>
                                        <option>KVB</option>
                                        <option>IOB</option>
                                        <option>CUB</option>
                                       
                                        </select>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Card Number</label>
                                        <input type="text" class="form-control" id="email" name="purpose" placeholder="Card Number">
										
                                   </div>
                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Amount</label>
                                        <input type="text" class="form-control" id="email" name="purpose" value="100" placeholder="Purpose"readonly>
										
                                   </div>

                                   
                                   

                                   <div class="col-md-12 col-sm-12">
                                        
                                        <input type="submit" class="form-control" id="cf-submit" name="btn" value="Submit">
                                        <div class="msg"><?php echo $msg; ?></div>

                                   </div>
                              </div>
                        </form>
                    </div>

               </div>
          </div>
     </section>

  
     

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