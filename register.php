<?php
session_start();
include("dbconnect.php");
extract($_REQUEST);
$msg="";
$rdate=date("d-m-Y");
 if(isset($btn))
 {
 $mq=mysqli_query($connect,"select max(id) from ph_register");
	 $mr=mysqli_fetch_array($mq);
	 $id=$mr['max(id)']+1;
	 		
	 $ins=mysqli_query($connect,"insert into ph_register(id,name,email,mobile,address,city,uname,pass,rdate) values($id,'$name','$email','$mobile','$address','$city','$uname','$pass','$rdate')");

 		if($ins)
		{
		?>
	<script language="javascript">
	window.location.href="register.php?act=success";
	</script>
	<?php
		
		
		}
		else
		{
		?>
	<script language="javascript">
	//window.location.href="register.php?act=wrong";
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
	if(document.form1.name.value=="")
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
	if(document.form1.email.value=="")
	{
	document.getElementById("x6").style.display="block";
	return false;
	}
	else
	{
	document.getElementById("x6").style.display="none";
	}
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.form1.email.value))  
				  {  
					document.getElementById("x61").style.display="none";
				  }  
				  else
				  {
					document.getElementById("x61").style.display="block";
					return false; 
				  }
	
	if(document.form1.address.value=="")
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
	/*if(document.form1.password.value.length<6 || document.form1.password.value.length>15)
	{
	document.getElementById("x110").style.display="block";
	return false;
	}
	else
	{
	document.getElementById("x110").style.display="none";
	}
	var paswd=  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,15}$/;
	if(paswd.test(document.form1.password.value)) 
	{ 
	document.getElementById("x120").style.display="none";
	}
	else
	{ 
	document.getElementById("x120").style.display="block";
	return false;
	}*/
	
	
	
	
	if(document.form1.cpass.value=="")
	{
	document.getElementById("x11").style.display="block";
	return false;
	}
	else
	{
	document.getElementById("x11").style.display="none";
	}
	if(document.form1.pass.value!=document.form1.cpass.value)
	{
	document.getElementById("x12").style.display="block";
	return false;
	}
	else
	{
	document.getElementById("x12").style.display="none";
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
                    <a href="index.html" class="navbar-brand"><i class="fa fa-h-square"></i><?php include("title.php"); ?></a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="index.php" class="smoothScroll">Home</a></li>
                         <li><a href="cus_login.php" class="smoothScroll">Ambulance</a></li>
						 <li><a href="br_login.php" class="smoothScroll">Hospital</a></li>
                         <li><a href="login.php" class="smoothScroll">Doctor</a></li>
                         <li class="appointment-btn"><a href="register.php">Ambulance Staff</a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->


     <!-- ABOUT -->
    
     <!-- TEAM -->
 


     <!-- NEWS -->
 


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
                                   <h2>Ambulance Staff Register</h2>
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
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
										<span id="x1" class="msg"  style="display:none">Enter the Name</span>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Your Email">
										<span id="x6" class="msg"  style="display:none">Enter the Email</span>
						  <span id="x61" class="msg"  style="display:none">Invalid Email!</span>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="date">Mobile No.</label>
                                        <input type="text" name="mobile" value="" class="form-control" placeholder="Your Mobile No.">
										<span id="x5" class="msg"  style="display:none">Enter the Mobile No.</span>
						  <span id="x51" class="msg"  style="display:none">Invalid Mobile No.!</span>
						  <span id="x52" class="msg"  style="display:none">Mobile no. must be 10 digits!</span>
                                   </div>
								   
								   <div class="col-md-6 col-sm-6">
                                        <label for="date">Address</label>
                                        <input type="text" name="address" value="" class="form-control" placeholder="Your Address">
										<span id="x7" class="msg"  style="display:none">Enter the Address</span>
                                   </div>
								   <div class="col-md-6 col-sm-6">
                                        <label for="date">City</label>
                                        <input type="text" name="city" value="" class="form-control" placeholder="Your City">
										<span id="x8" class="msg"  style="display:none">Enter the City</span>
                                   </div>
								   <div class="col-md-6 col-sm-6">
                                        <label for="date">Username</label>
                                        <input type="text" name="uname" value="" class="form-control" placeholder="Your Username">
										<span id="x9" class="msg"  style="display:none">Enter the Username</span>
                                   </div>
								   <div class="col-md-6 col-sm-6">
                                        <label for="date">Password</label>
                                        <input type="password" name="pass" value="" class="form-control" placeholder="Your Password">
										<span id="x10" class="msg"  style="display:none">Enter the Password</span>
						 <!-- <span id="x110" class="msg"  style="display:none">Password length must be 6 to 15 characters!</span>
						  <span id="x120" class="msg"  style="display:none">Password should have alphabets,number,special character!</span>-->
                                   </div>
								   <div class="col-md-6 col-sm-6">
                                        <label for="date">Re-type Password</label>
                                        <input type="password" name="cpass" value="" class="form-control" placeholder="Type again">
										<span id="x11" class="msg"  style="display:none">Re-type Password again</span>
						  <span id="x12" class="msg"  style="display:none">Password does not Match!</span>
                                   </div>

                                   

                                   <div class="col-md-12 col-sm-12">
                                        
                                        <input type="submit" class="form-control" id="cf-submit" name="btn" value="Register" onClick="return validate()">
                                   </div>
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

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
                              
                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i> 010-070-0170</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">emergenatal@company.com</a></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb"> 
                              
                              <div class="latest-stories">
                                   <div class="stories-image">
                                       
                                   </div>
                                   <div class="stories-info">
                                        
                                   </div>
                              </div>

                              <div class="latest-stories">
                                   <div class="stories-image">
                                       
                                   </div>
                                   <div class="stories-info">
                                        
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
                                   <p>Monday - Friday <span>06:00 AM - 10:00 PM</span></p>
                                   <p>Saturday <span>09:00 AM - 08:00 PM</span></p>
                                   <p>Sunday <span>Closed</span></p>
                              </div> 

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <div class="copyright-text"> 
                                   <p><?php include("title.php"); ?></p>
                              </div>
                         </div>
                         <div class="col-md-6 col-sm-6">
                              <div class="footer-link"> 
                                   <a href="index.php">Home</a>
                                   <a href="cus_login.php">Customer</a>
                                   <a href="br_login.php">Company</a>
                                   <a href="login.php">Admin</a>
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