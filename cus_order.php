<?php
session_start();
include("dbconnect.php");
extract($_REQUEST);
$uname=$_SESSION['uname'];

$q1=mysqli_query($connect,"select * from ph_register where uname='$uname'");
$r1=mysqli_fetch_array($q1);
$name=$r1['name'];

if(isset($btn))
{
	?>
<script language="javascript">
window.location.href="cus_search.php?branch=<?php echo $branch; ?>";
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
               <?php include("link_cus.php"); ?>

          </div>
     </section>

     <!-- ABOUT -->



  

     <!-- MAKE AN APPOINTMENT -->
	 <h2 align="center"><?php include("title.php"); ?></h2>
<h3 align="center">Ambulance Attender: <?php echo $name; ?></h3>

<?php
$q1=mysqli_query($connect,"select * from ph_service where uname='$uname'");
$n1=mysqli_num_rows($q1);
if($n1>0)
{
?>
     <table width="90%" border="1" align="center">
       <tr>
         <th align="center" class="bg-primary">Sno</th>
         <th align="center" class="bg-primary">Hospital Name</th>
         <th align="center" class="bg-primary">In Date </th>
         <th align="center" class="bg-primary">In Time</th>
         <th align="center" class="bg-primary">ECG</th>
		  <th align="center" class="bg-primary">BP</th>
         <th align="center" class="bg-primary">Heart Beat</th>
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
         <td><?php echo $r1['Hospital_name']; ?></td>
         <td><?php echo $r1['In_date']; ?></td>
         <td><?php echo $r1['In_time']; ?></td>
         <td><?php echo $r1['ECG']; ?></td>
         
         <td><?php echo $r1['BP']; ?></td>
         <td><?php echo $r1['Heart_Beat']; ?></td>
      
	   
                   
                    <td><?php
					if($r1['status']=="1")
					{
					echo " Waiting for Process";
					}
					
					else if($r1['status']=="2")
					{
					echo "Approved";
					}
					else
					{
					echo "Rejected";
					}
					
					?></td>
                  
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