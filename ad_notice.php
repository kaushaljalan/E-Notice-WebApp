<!DOCTYPE html>

<html>
<head>

<title>MIS - Home</title>

<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

<link rel="shortcut icon" href="bmslogo.png" />


<link rel="stylesheet" href="css/not_style.css" type="text/css" media="all" />


<script src="js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
	<!--[if IE 6]>

<script src="js/DD_belatedPNG-min.js" type="text/javascript" charset="utf-8"></script>
	<![endif]-->



<script src="js/jquery.jcarousel.min.js" type="text/javascript" charset="utf-8"></script>

<script src="js/functions.js" type="text/javascript" charset="utf-8"></script>
</head>

<body>

<!-- Begin Wrapper -->
	<div id="wrapper">

<!-- Begin Header -->

<!--
<div id="header">

<body style="margin-bottom:80px;background-color: #c9bda7;
	background-image: url(css/images/templatemo_body.jpg);">
<div class="shell" style="margin-bottom:45px;">

<center><br><img src="bmslogo.png">
</center>
</body>
<div class="cl">&nbsp;</div>


</div>
-->
<!-- End Shell -->

</div>
		<!-- End Header -->

<!-- Begin Navigation -->

<div id="navigation">

<!-- Begin Shell -->

<div class="shell">

<ul>

<li ><a href="index.php" title="home">Home</a></li>


<li><a href="login.php" title="student">Student(login)</a>	</li>
</ul>
</div>
</li>
<li><a href="registration.php" title="admin">Student(Registration)</a></li>

</ul></br></br></br>



<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />




<div id="templatemo_main_top"></div>

<div id="templatemo_main_wrapper1">
<div class="post" style="width:800px;margin-left:26px;">
<br>
<center><h2 style="margin-left:12px;margin-top:;font-size:24px;">A message from Your Principal</h2>
</center>
<br>
<img src="images/person.jpg" alt="Post Image" width="135" height="159"/>

<p style="color:#6E6E6E;font: 18px Arial, Helvetica, sans-serif;margin-left:12px;text-align:justify;">
<?php
    require_once('connection.php');
    $sql=mysqli_query($conn,"select * from msg");
    $res=mysqli_fetch_assoc($sql); 
    echo $res['prin_msg']; 
    ?>
<br><br>  <strong> <h3 style="font-size:22px;text-align:right;color:#87CEFA;margin-top:px;">Principal </p>
					</p>
					<div class="cl">&nbsp;</div>
						</div>
			<!-- End Content -->
							<div class="cl">&nbsp;</div>

<h2 style="margin-left:350px;margin-top:;width:500px;font-size:20px;"><center>A message from your HOD (C.S)</center></h2>

<br>
<img src="images/person.jpg" alt="Post Image" align="right" width="135" style="margin-left:10px;margin-right:10px;" height="159" />

<p style="color:#6E6E6E;font: 18px vardna, Helvetica, sans-serif;margin-left:12px;margin-right:50px;text-align:justify;">
<?php
    require_once('connection.php');
    $sql=mysqli_query($conn,"select * from msg");
    $res=mysqli_fetch_assoc($sql); 
    echo $res['hod_msg']; 
    ?>

<br><br>  <strong> <h3 style="font-size:22px;text-align:right;color:#87CEFA;margin-top:-10px;">HOD</p>
			</p>

<div style="margin-top:150px;margin-left:60px;">
<h6 style="font-family: Arial, Helvetica, sans-serif;
    font-size: 18px;
    font-weight: normal;
    color: #ffffff;
    background: url(css/images/contact_but.png) no-repeat top left;
    text-align: center;
    width: 274px;
    height: 40px;
    padding-top: 14px;margin-left:-37px;">Fresh News</h6>

<div   style="margin-top:-14px;margin-left:-35px;height:18em;width:265px;-moz-border-radius: 1em 4em 1em 4em;
border-radius: 0em 0em 2em 2em;
border-bottom: 1px  black solid;border-left: 1px  black solid;border-right: 1px  black solid;font: 15px Arial, Helvetica, sans-serif;color:#666666;">
			<div class="align-content">
<marquee onmouseover="stop()"  onmouseout="start()" direction="up" align="center"  scrollamount="2"
            scrolldelay="1">
<ul>

<?php

require_once('connection.php');
$sql=mysqli_query($conn,"select * from public_notifications");
//$res=mysqli_fetch_assoc($sql);  

$i=1;
while($row=mysqli_fetch_assoc($sql))
{


echo "<li>".$i."&nbsp;&nbsp;</li>"."<li>"."<li>".$row['title']."</li>"."<br/>"."<img src ='css/images/new.gif'/>";
echo "<li>".$row['link']." &nbsp;&nbsp;</li>"."<li>"."<li>".$row['date']."</li>"."<br/>"."<br/>";

$i++;
}
?>
</ul>
</marquee>
</div>
<div style="margin-top:-320px;margin-left:630px;width: 253px;
	float: left;
	margin-left: ;">
<br><br><br><br><br><br><h6 style="font-family: Arial, Helvetica, sans-serif;
    font-size: 18px;
    font-weight: normal;
    color: #ffffff;
    background: url(css/images/contact_but.png) no-repeat top left;
    text-align: center;
    width: 274px;
    height: 40px;
    padding-top: 14px;margin-left:-65px;">Contact Information</h6>

    <?php
    require_once('connection.php');
    $sql=mysqli_query($conn,"select * from cont_info");
    $res=mysqli_fetch_assoc($sql);  
    ?>
<div style="margin-top:-15px;margin-left:-61px;height:18em;width:265px;-moz-border-radius: 1em 4em 1em 4em;
border-radius: 0em 0em 2em 2em;
border-bottom: 1px  black solid;border-left: 1px  black solid;border-right: 1px  black solid;color:#454545;text-align:left">
                <div style="height:15px"></div>
                <div style="padding-left:10px">
                    <div  class="box_us">
                          <div  class="box_us_l">
                            <img src="css/images/fish_us1.png" alt="" />
                          </div>
                          <div  class="box_us_r">
                                <b class="lh"><?php echo $res['clg_name'];?></b>
                          </div>
                          <div style="clear: both; height:10px;"></div>
                    </div>
			<br>
                    <div  class="box_us">
                          <div  class="box_us_l">
                            <img src="css/images/fish_us2.png" alt="" />
                          </div>
                          <div  class="box_us_r">
                                <b class="lh"><?php echo $res['clg_phone'];?>
                                </b>
                          </div>
                          <div style="clear: both; height:10px;"></div>
                    </div>
			<br>
                    <div  class="box_us">
                          <div  class="box_us_l">
                            <img src="css/images/fish_us3.png" alt="" />
                          </div>
                          <div  class="box_us_r">
                                <b class="lh" ><?php echo $res['clg_email'];?></b>
                          </div>
                          <div style="clear: both; height:10px;"></div>
                    </div>
           		</div>
   		</div>


<h6 style="font-family: Arial, Helvetica, sans-serif;
    font-size: 18px;
    font-weight: normal;
    color: #ffffff;
    background: url(css/images/contact_but.png) no-repeat top left;
    text-align: center;
    width: 274px;
    height: 40px;
    padding-top: 14px;margin-left:-350px;margin-top:-50px;">You Are Visitor No :

				<?php
				$count_my_page = ("hitcounter.txt");
				$hits = file($count_my_page);
				$hits[0] ++;
				$fp = fopen($count_my_page , "w");
				fputs($fp , "$hits[0]");
				fclose($fp);
				echo $hits[0];
				 ?>

</h6>





</div></div>








</div> <!-- end of main -->
</div> <!-- end of main wrapper -->
<div id="templatemo_footer" style="margin-bottom:-10px;">
	</div>

    <div class="cleaner"></div>
<div id="footercopy"  style="margin-bottom:-50px;">
	<p>Copyright &copy; 2020 BMSCE. All rights reserved.<br />
	</p>

</div>
</div> <!-- end of footer -->

</body>
</html>
