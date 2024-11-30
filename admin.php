<?php
session_start();
include("dbconnect.php");
extract($_REQUEST);

 if(isset($btn))
 {
 $mq=mysqli_query($connect,"select max(id) from ph_branch");
	 $mr=mysqli_fetch_array($mq);
	 $id=$mr['max(id)']+1;
	 		
			if($_FILES['file']['name']!="")
	{
	$fn="M".$id.$_FILES['file']['name'];
	move_uploaded_file($_FILES['file']['tmp_name'],"upload/".$fn);
	}
	else
	{
	$fn="";
	} 
			
	 $ins=mysqli_query($connect,"insert into ph_branch(id,branch,mobile,email,area,city,pimage,uname,pass,status) values($id,'$branch','$mobile','$email','$area','$city','$fn','$uname','$pass','1')");

 		if($ins)
		{
		?>
	<script language="javascript">
	window.location.href="admin.php?act=success";
	</script>
	<?php
		
		
		}
		else
		{
		?>
	<script language="javascript">
	window.location.href="admin.php?act=wrong";
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
	if(document.form1.branch.value=="")
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
         <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="index.php" class="smoothScroll">Home</a></li>
                         <li><a href="cus_login.php" class="smoothScroll">Ambulance</a></li>
						 <li><a href="br_login.php" class="smoothScroll">Hospital</a></li>
                         <li><a href="login.php" class="smoothScroll">Doctor</a></li>
                         <li class="appointment-btn"><a href="register.php">Attender Register</a></li>
                    </ul>
               </div>

          </div>
     </section>

     <!-- ABOUT -->



  

     <!-- MAKE AN APPOINTMENT -->
     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <img src="images/1.jpg" class="img-responsive" alt="">
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <!-- CONTACT FORM HERE -->
                         <form name="form1" id="appointment-form" role="form" method="post" enctype="multipart/form-data">

                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>New Hospital </h2>
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
                                        <label for="name">Hospital Name</label>
                                        
                                        <input type="text" class="form-control" name="branch" placeholder="">
										<span id="x1" class="msg"  style="display:none">Enter the Company Name</span>
                                   </div>
								   <div class="col-md-6 col-sm-6">
                                        <label for="name">Mobile No.</label>
                                        <input type="text" class="form-control" name="mobile" placeholder="">
										<span id="x5" class="msg"  style="display:none">Enter the Mobile No.</span>
						  <span id="x51" class="msg"  style="display:none">Invalid Mobile No.!</span>
						  <span id="x52" class="msg"  style="display:none">Mobile no. must be 10 digits!</span>
                                   </div>
								   <div class="col-md-6 col-sm-6">
                                        <label for="name">Email</label>
                                        <input type="text" class="form-control" name="email" placeholder="">
										<span id="x8" class="msg"  style="display:none">Enter the City</span>
                                   </div>
								   <div class="col-md-6 col-sm-6">
                                        <label for="name">Address</label>
                                        <textarea name="area" class="form-control" placeholder=""></textarea>
										<span id="x7" class="msg"  style="display:none">Enter the Area</span>
                                   </div>
								   <div class="col-md-6 col-sm-6">
                                        <label for="name">City</label>
                                        <input type="text" class="form-control" name="city" placeholder="">
										<span id="x8" class="msg"  style="display:none">Enter the City</span>
                                   </div>
								   
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Username</label>
                                        <input type="text" class="form-control" name="uname" placeholder="">
										<span id="x9" class="msg"  style="display:none">Enter the Username</span>
                                   </div>
								    

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Password</label>
                                        <input type="password" class="form-control" name="pass" placeholder="">
										<span id="x10" class="msg"  style="display:none">Enter the Password</span>
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
                                   <?php include("link_admin2.php"); ?>
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