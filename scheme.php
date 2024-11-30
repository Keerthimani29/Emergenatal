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

if(isset($btn))
{
$aa=explode("-",$adate);
$adate1=$aa[2]."-".$aa[1]."-".$aa[0];

$mq=mysqli_query($connect, "select max(id) from appoint");
$mr=mysqli_fetch_array($mq);
$id=$mr['max(id)']+1;

$rdate=date("d-m-Y");

	$q1=mysqli_query($connect, "select * from appoint where adate='$adate1'");
	$n1=mysqli_num_rows($q1);

	if($n1<11)	
	{
		$atime=$arr[$n1];
$ins=mysqli_query($connect, "insert into appoint(id,uname,doctor,adate,atime,amount,status,rdate) values($id,'$uname','$doctor','$adate1','$atime','100','0','$rdate')");
					
	?>
	<script language="javascript">
	//alert("Appointment has sent");
	window.location.href="pat_pay.php";
	</script>
	<?php
	}
	else
	{
	?>
	<script language="javascript">
	alert("No Appointment");
	window.location.href="appoint.php";
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
                 <h3>Government Schemes</h3>
                </center>
			<br><br>
		 		
	 			<?php
				
				
				$qry=mysqli_query($connect, "select * from schemes order by id desc");
				$num=mysqli_num_rows($qry);
				
				if($num>0)
				{
				
				?>
                <center>
                <table width="727" height="59" border="1">
                  <tr>
                    <th width="70" class="bg-info">Sno</th>
                    <th width="196" class="bg-info">Scheme Name</th>
                    <th width="105" class="bg-info">Description</th>
                    <th width="189" class="bg-info">Added Date </th>
                  </tr>
				  <?php
				  $i=0;
				  while($row=mysqli_fetch_array($qry))
				  {
				  $i++;
				  ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['scheme_name']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                     <td><?php echo $row['rdate']; ?></td>

                  </tr>
				  <?php
				  }
				  
				  ?>
                </table>
				<?php
				}
			
				?>	

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