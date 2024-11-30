<?php
session_start();
include("dbconnect.php");
extract($_REQUEST);
$uname=$_SESSION['uname'];


if(isset($btn))
 {
 $mq=mysqli_query($connect,"select max(id) from ph_service");
	 $mr=mysqli_fetch_array($mq);
	 $id=$mr['max(id)']+1;
	
	 $ins=mysqli_query($connect,"insert into ph_service(id,uname,Hospital_name,Patient_name,In_date,In_time,ECG,BP,Heart_Beat,status) values($id,'$uname','$com','$Patient_name','$In_date','$In_time','$ECG','$BP','$Heart_Beat','1')");

 		if($ins)
		{
		?>
	<script language="javascript">
	//window.location.href="cart.php?act=success";
	</script>
	<?php
		
		}
		else
		{
		?>
	<script language="javascript">
	//window.location.href="cart.php?act=wrong";
	</script>
	<?php
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
	 <script language="javascript">
function validate()
{
	if(document.form1.device.value=="")
	{
	document.getElementById("x1").style.display="block";
	return false;
	}
	else
	{
	document.getElementById("x1").style.display="none";
	}
	
	
	if(document.form1.mobile.value=="")
	{
	document.getElementById("x5").style.display="block";
	return false;
	}
	else
	{
	document.getElementById("x5").style.display="none";
	}
	if (isNaN(document.form1.mobile.value))
                {
				document.getElementById("x51").style.display="block";
                    return false;
                }
				else
				{
				document.getElementById("x51").style.display="none";
				}
				if (document.form1.mobile.value.length != 10)
                {
				document.getElementById("x52").style.display="block";
                    return false;
                }
				else
				{
				document.getElementById("x52").style.display="none";
				}
	
	if(document.form1.area.value=="")
	{
	document.getElementById("x7").style.display="block";
	return false;
	}
	else
	{
	document.getElementById("x7").style.display="none";
	}
	if(document.form1.city.value=="")
	{
	document.getElementById("x8").style.display="block";
	return false;
	}
	else
	{
	document.getElementById("x8").style.display="none";
	}
	if(document.form1.uname.value=="")
	{
	document.getElementById("x9").style.display="block";
	return false;
	}
	else
	{
	document.getElementById("x9").style.display="none";
	}
	
	if(document.form1.pass.value=="")
	{
	document.getElementById("x10").style.display="block";
	return false;
	}
	else
	{
	document.getElementById("x10").style.display="none";
	}
	
return true;
}
</script>

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
               <?php include("link_cus.php"); ?>

          </div>
     </section>

     <!-- ABOUT -->

   <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <img src="images/1.jpg" class="img-responsive" alt="">
                    </div>


   <div class="col-md-6 col-sm-6">

     <!-- MAKE AN APPOINTMENT -->
<form name="form1" id="appointment-form" role="form" method="post">

                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Apply Emergency Services </h2>
                              </div>
								<?php
							  if($act=="wrong")
							  {
							  ?>
                              <div class="alert-danger" align="center"></div>
                              <?php
							  }
							  if($act=="success")
							  {
							  ?>
							  <div class="alert-info" align="center">Applied Success</div>
							  <?php
							  }
							  ?>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
							  <div class="col-md-6 col-sm-6">
                                        <label for="name">Patient name </label>
										
										 <input name="Patient_name" type="text" class="form-control"  placeholder="">
                                </div>
								   <div class="col-md-6 col-sm-6">
                                        <label for="name">In date </label>
                                       
                                       
										 <input name="In_date" type="date" class="form-control"  placeholder="">
										
                                   </div>
								   <div class="col-md-6 col-sm-6">
                                        <label for="name">In time </label>
                                         
                                      <input name="In_time" type="time" class="form-control"  placeholder="">
									
                                   </div>
							  		<div class="col-md-6 col-sm-6">
                                        <label for="name">ECG </label>
                                        <input name="ECG" type="text" class="form-control"  placeholder="">
										
                                   </div>
								  
								   <div class="col-md-6 col-sm-6">
                                        <label for="name">Blood Pressure</label>
                                        
								 <input name="BP" type="text" class="form-control"  placeholder="">
										
                                   </div>
								   <div class="col-md-6 col-sm-6">
                                        <label for="name">Heart Beat </label>
                                        
								 <input name="Heart_Beat" type="text" class="form-control"  placeholder="">
										
                                   </div>
                                  
                                 

                                   

                                   <div class="col-md-12 col-sm-12">
                                        
                                        <input type="submit" class="form-control" id="cf-submit" name="btn" value="Submit" onClick="return validate()">
                                   </div>
								    <?php
				  if($_REQUEST['act']=="wrong")
					{
				  ?>
				  <span class="alert-danger">Wrong User!</span>
				  <?php
				  }
				  ?>
                              </div>
                        </form>
						       </div>
						    </div>
          </div>
     </section>
     <!-- GOOGLE MAP -->
             


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
                                   <?php include("link_cu.php"); ?>
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