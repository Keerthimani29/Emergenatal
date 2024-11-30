<?php
session_start();
include("dbconnect.php");
extract($_REQUEST);
$uname=$_SESSION['uname'];

$q1=mysqli_query($connect,"select * from ph_register where uname='$uname'");
$r1=mysqli_fetch_array($q1);
$name=$r1['name'];

if($act=="cart")
{

$mq=mysqli_query($connect,"select max(id) from ph_cart");
	 $mr=mysqli_fetch_array($mq);
	 $id=$mr['max(id)']+1;
	 
	 $q3=mysqli_query($connect,"select * from ph_services where id=".$mid."");
	 $r3=mysqli_fetch_array($q3);
	 $pr=$r3['price'];
	 
	 
	 $ins=mysqli_query($connect,"insert into ph_cart(id,uname,branch,mid,price,qty,amount,bno,status) values($id,'$uname','$branch','$mid','$pr','0','0','0','0')");
	
	
	?>
<script language="javascript">
window.location.href="cus_search.php?act=add&branch=<?php echo $branch; ?>";
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
<h2 align="center">Customer: <?php echo $name; ?></h2>
<form name="form1" method="post" action="">
  <div align="center">Services
    <input type="text" name="data" value="<?php echo $data; ?>">
    <input type="submit" name="btn" value="Search">
  </div>
</form>
<?php
if($act=="add")
{
?>
<p align="center" class="alert-success">Added to Cart..</p>
<?php
}
if($data!="")
{
$q1=mysqli_query($connect,"select * from ph_services where branch='$branch' && (medicine like '%$data%' || description like '%$data%')");
$n1=mysqli_num_rows($q1);
}
else
{
$q1=mysqli_query($connect,"select * from ph_services where branch='$branch'");
$n1=mysqli_num_rows($q1);
}

if($n1>0)
{
?> <?php
	   $i=0;
	   while($r1=mysqli_fetch_array($q1))
	   {
	   $i++;
	   ?>
     <table width="90%" border="0" align="center" cellpadding="5" class="bor">
	  
       <tr>
         <td width="37%" rowspan="4" align="center" valign="middle"><?php echo '<img src="upload/'.$r1['pimage'].'" width="150" height="150">'; ?></td>
         <td width="63%"><h3><?php echo $r1['services']; ?></h3></td>
       </tr>
       <tr>
         <td>Rs. <?php echo $r1['price']; ?></td>
       </tr>
       <tr>
         <td><?php echo $r1['description']; ?></td>
       </tr>
       <tr>
         <td align="right"><a href="cus_search.php?act=cart&mid=<?php echo $r1['id']; ?>&branch=<?php echo $branch; ?>">Add to Cart </a></td>
       </tr>
     </table> 
     <?php
	   }
	   ?>
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