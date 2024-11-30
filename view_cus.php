<?php
session_start();
include("dbconnect.php");
extract($_REQUEST);

if($act=="yes")
{
mysqli_query($connect,"update ph_branch set status=1 where id=$did");
?>
<script language="javascript">
window.location.href="br_view.php";
</script>
<?php
}
if($act=="no")
{
mysqli_query($connect,"update ph_branch set status=0 where id=$did");
?>
<script language="javascript">
window.location.href="br_view.php";
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
               <?php include("link_admin.php"); ?>

          </div>
     </section>

     <!-- ABOUT -->



  

     <!-- MAKE AN APPOINTMENT -->
<h2 align="center">Customer Information</h2>

<?php
$q1=mysqli_query($connect,"select * from ph_register");
$n1=mysqli_num_rows($q1);
if($n1>0)
{
?>
     <table width="90%" border="1" align="center">
       <tr>
         <th align="center" class="bg-primary">Sno</th>
         <th align="center" class="bg-primary">Name</th>
         <th align="center" class="bg-primary">Mobile No. </th>
         <th align="center" class="bg-primary">E-mail</th>
         <th align="center" class="bg-primary">Address</th>
         <th align="center" class="bg-primary">City</th>
         <th align="center" class="bg-primary">Username</th>
         <th align="center" class="bg-primary">Reg. Date</th>
       </tr>
	   <?php
	   $i=0;
	   while($r1=mysqli_fetch_array($q1))
	   {
	   $i++;
	   ?>
       <tr>
         <td><?php echo $i; ?></td>
         <td><?php echo $r1['name']; ?></td>
         <td><?php echo $r1['mobile']; ?></td>
         <td><?php echo $r1['email']; ?></td>
         <td><?php echo $r1['address']; ?></td>
         <td><?php echo $r1['city']; ?></td>
         <td><?php echo $r1['uname']; ?></td>
         <td><?php echo $r1['rdate']; ?>
		 </td>
       </tr>
	   <?php
	   }
	   ?>
     </table>
	<?php
	}
	else
	{
	?><h3 align="center">No Information!</h3><?php
	}
	
	?>
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