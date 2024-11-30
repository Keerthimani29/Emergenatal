<?php
session_start();
include("dbconnect.php");
extract($_REQUEST);

	
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
     <h2 align="center">Report</h2>

<form action="" method="post" name="form1">
<p align="center">
<select name="branch">
<option value="">-Branch-</option>
<?php
$cq=mysqli_query($connect,"select * from ph_branch");
while($cr=mysqli_fetch_array($cq))
{
?>
<option <?php if($cr['uname']==$branch) echo "selected"; ?>><?php echo $cr['uname']; ?></option>
<?php
}
?>
</select>
<select name="month">
<option value="">-Month-</option>
<?php
$cq2=mysqli_query($connect,"select distinct(month) from ph_purchase");
while($cr2=mysqli_fetch_array($cq2))
{
?>
<option <?php if($cr2['month']==$month) echo "selected"; ?>><?php echo $cr2['month']; ?></option>
<?php
}
?>
</select>
<select name="year">
<option value="">-Year-</option>
<?php
$cq1=mysqli_query($connect,"select distinct(year) from ph_purchase");
while($cr1=mysqli_fetch_array($cq1))
{
?>
<option <?php if($cr1['year']==$year) echo "selected"; ?>><?php echo $cr1['year']; ?></option>
<?php
}
?>
</select>
<input type="submit" name="btn" value="Submit">
</p>
</form>

 <?php
  $tot=0;
	 if(isset($btn))
	 {
	 $qry2=mysqli_query($connect,"select * from ph_purchase where branch='$branch' && month='$month' && year='$year' order by id desc");
   $num2=mysqli_num_rows($qry2);
	 if($num2>0)
	 {
	 
	 while($row2=mysqli_fetch_array($qry2))
	 {
	 ?><h4 align="center">Bill No.: <?php echo $row2['id']; ?>,Customer: <?php echo $row2['uname']; ?>, Date: <?php echo $row2['rdate']; ?></h4><?php
	 
	 
  $qry1=mysqli_query($connect,"select * from ph_cart where bno='".$row2['id']."' && uname='".$row2['uname']."' && status=1");
   $num1=mysqli_num_rows($qry1);
  
  if($num1>0)
  {

  
  ?>
  <table width="90%" border="1" align="center" cellpadding="5">
    <tr>
      <th width="47" class="bg1" scope="row">Sno</th>
      <th width="209" class="bg1">service</th>
      <th width="209" class="bg1">Price</th>
      <th width="265" class="bg1">Quantity</th>
    </tr>
	<?php
	$i=0;
	$w=0;
	$amt=0;
	//for($j=0;$j<count($ar1);$j++)
	while($row1=mysqli_fetch_array($qry1))
	{
	$i++;
 $qry=mysqli_query($connect,"select * from ph_services where id='".$row1['mid']."'");
  $row=mysqli_fetch_array($qry);
	?>
    <tr>
      <td class="bg2" scope="row">
      <?php echo $i; ?></td>
      <td class="bg2"><?php echo $row['services']; ?></td>
      <td class="bg2"><?php echo $row1['price']; ?></td>
      <td class="bg2"><?php echo $row1['qty']; ?></td>
    </tr>
		
	<?php
	}
	?>
  </table>
	
	<?php

  }//num
 $tot+= $row2['amount'];
  ?>
	<p align="center">Rs. <?php echo $row2['amount']; ?>
	<?php
	if($row2['paymode']=="1")
	{
	echo " (cash on pay)";
	}
	else if($row2['paymode']=="2")
	{
	echo " (Paid)";
	}
	else if($row2['paymode']=="3")
	{
	echo " (Card)";
	}
	
	if($row2['deliverst']=="1")
	{
	echo " Delivered";
	}
	else
	{
	echo " Not Delivered";
	}
	?>
	</p>
  	<?php
	}
	
	?><h3 align="center">Total Amount: Rs. <?php echo $tot; ?></h3><?php
	
	}
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