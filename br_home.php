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
               <?php include("link_branch.php"); ?>

          </div>
     </section>

     <!-- ABOUT -->



  

     <!-- MAKE AN APPOINTMENT -->
<h2 align="center">Patients </h2>

<?php
$q1=mysqli_query($connect,"select * from patient where hname='$uname'");
$n1=mysqli_num_rows($q1);
if($n1>0)
{
?>
     <table width="90%" border="1" align="center">
       <tr>
	    <th align="center" class="bg-primary">Sno</th>
         <th align="center" class="bg-primary">Patient Name</th>
         <th align="center" class="bg-primary">Husband Name</th>
         <th align="center" class="bg-primary">DOB</th>
         <th align="center" class="bg-primary">Address</th>
         <th align="center" class="bg-primary">City</th>
	    <th align="center" class="bg-primary">Contact Number</th>
         <th align="center" class="bg-primary">Ralative Contact Number</th>
        <th align="center" class="bg-primary">Email</th>
        <th align="center" class="bg-primary">Doctor</th>
        <th align="center" class="bg-primary">Status</th>
       </tr>
	   <?php
	   $i=0;
	   while($r1=mysqli_fetch_array($q1))
	   {
	   $i++;
	   ?>
       <tr>
          <td><?php echo $i; ?></td>
         <td><?php echo $r1['uname']; ?></td>
         <td><?php echo $r1['husname']; ?></td>
         <td><?php echo $r1['dob']; ?></td>
         <td><?php echo $r1['address']; ?></td>
         <td><?php echo $r1['city']; ?></td>
         <td><?php echo $r1['contact']; ?></td>
         <td><?php echo $r1['contact1']; ?></td>
         <td><?php echo $r1['email']; ?></td>
         <td><?php echo $r1['doctor']; ?></td>
        
         <td>
		 <?php
		 if($r1['doctor']=="")
		 {
		  
		?>
	 	<a href="cus_feed.php?Name=<?php echo $r1['uname'];?>">Assign Doctor</a><?php
		 		 }
		 else
		 {
		 ?><span style="color:green">Doctor Assigned</span><?php		 
		 }
		 ?>
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
                                   <?php include("link_br.php"); ?>
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