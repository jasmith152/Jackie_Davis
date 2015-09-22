<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $page_title; ?></title>
<meta name="description" content="<?php echo $matatag_description; ?>">
<meta name="title" content="<?php echo $page_title; ?>">
<meta name="robots" content="index, follow">
<link href="include/style.css" rel="stylesheet" type="text/css"/>
<!-- pop-up for contact form -->
<SCRIPT LANGUAGE='JAVASCRIPT' TYPE='TEXT/JAVASCRIPT'>
    <!--
    var win=null;
    function NewWindow(mypage,myname,w,h,pos,infocus){
    if(pos=="random"){myleft=(screen.width)?Math.floor(Math.random()*(screen.width-w)):100;mytop=(screen.height)?Math.floor(Math.random()*((screen.height-h)-75)):100;}
    if(pos=="center"){myleft=(screen.width)?(screen.width-w)/2:100;mytop=(screen.height)?(screen.height-h)/2:100;}
    else if((pos!='center' && pos!="random") || pos==null){myleft=0;mytop=20}
    settings="width=" + w + ",height=" + h + ",top=" + mytop + ",left=" + myleft + ",scrollbars=yes,location=no,directories=no,status=no,menubar=yes,toolbar=no,resizable=yes";win=window.open(mypage,myname,settings);
    win.focus();}
    // -->
    </script>
</head>

<body>

<div class="container">
<div class="header_inside"
<?php if($page_name == 'WATERFRONT')
{ 
	echo"style='background-image: url(images/waterfront_header.jpg);'";
}
elseif($page_name == 'INVERNESS')
{
	echo"style='background-image: url(images/Inverness/Inverness-lakefront.jpg);'";
}
elseif($page_name == 'BIKE TRAIL')
{
	echo"style='background-image: url(images/Bike_Trail/P1470714.jpg);'";
}
elseif($page_name == 'CITRUS HILLS')
{
	echo"style='background-image: url(images/Citrus_Hills_header.jpg);'";
}
elseif($page_name == 'GOLF COURSES')
{
	echo"style='background-image: url(images/golf_header.jpg);'";
}
elseif($page_name == 'PINE RIDGE')
{
	echo"style='background-image: url(images/pine_ridge_header.jpg);'";
}
elseif($page_name == 'WINDERMERE')
{
	echo"style='background-image: url(images/Windermere/Windermere-pool-cropped.jpg);'";
}
else
{
	echo"style='background-image: url(images/Floral_City/Floral-City-Lakefront-Homes.jpg);'";
}
?>>
<div class="header-pic1"><img src="images/header-pic1.png" width="960" height="110" usemap="#Map" border="0" />
  <map name="Map" id="Map">
    <area shape="rect" coords="712,12,761,31" href="index.php" />
    <area shape="rect" coords="767,11,837,32" href="location.php" />
    <area shape="rect" coords="888,12,951,32" href="javascript:NewWindow('contact_us.php','popup','620','750','center','front');" />
    <area shape="rect" coords="844,12,881,33" href="blog.php" />
  </map>
</div>
<div class='nav-bar2'>
<table width='960' height='40' border='0' cellspacing='0' cellpadding='0' style='font-family:Arial, Helvetica, sans-serif'>
  <tr align='center'>
    <td colspan='3'><a href='my_listings.php'><img src='images/view_listings.png' width='178' height='35' /></a></td>
    <td colspan='3'><a href='search_all.php'><img src='images/search_citrus_listing.png' width='233' height='34' /></a></td>
    <td colspan='3'><a href='community_listings.php'><img src='images/community_listing.png' width='220' height='34' /></a></td>
  </tr>
  <tr align='center'>
    <td><a href='waterfront.php' style='color:#fff;'>Waterfront</a></td>
    <td><a href='golf_course.php' style='color:#fff;'>Golf Course</a></td>
    <td><a href='bike_trail.php' style='color:#fff;'>Bike Trail</a></td>
	 <td><a href='windermere.php' style='color:#fff;'>Windermere</a></td>
	  <td><a href='pine_ridge.php' style='color:#fff;'>Pine Ridge</a></td>
	   <td><a href='citrus_hills.php' style='color:#fff;'>Citrus Hills</a></td>
	    <td><a href='inverness.php' style='color:#fff;'>Inverness</a></td>
		 <td><a href='floral_city.php' style='color:#fff;'>Floral City</a></td>
		 <td><a href='about_me.php' style='color:#fff;'>About Me</a></td>
  </tr>
</table>
</div><!-- end .nav-bar2 -->
</div><!-- end .header -->

  <div class="sidebar">
    <table width="180" border="0" cellspacing="0" cellpadding="0" style="font-family:Arial, Helvetica, sans-serif;font-size:14px">
  <tr>
    <td align="center"><img src="images/jackie-davis.png" width="172" height="214" style="margin-top:15px" /><br />
    <p><strong style="font-size:18px">Jackie Davis</strong><br />REALTOR, GRI</p></td>
  </tr>
  <tr>
    <td align="center"><img src="images/era.png" width="84" height="86" /></td>
  </tr>
  <tr>
    <td align="center"><p>ERA American Realty<br />
      & Investments</p>
      <p>117 S. Hwy. 41, <br />
      Inverness, FL 34450</p></td>
  </tr>
  <tr>
    <td align="center"><img src="images/citrus_realtor.png" width="124" height="68" /></td>
  </tr>
  <tr>
    <td align="center"><img src="images/florida_realtor.png" width="146" height="100" /></td>
  </tr>
  <tr>
    <td align="center"><img src="images/naor.png" width="146" height="64" /></td>
  </tr>
  <tr>
    <td align="center"><img src="images/mls.png" width="184" height="74" /></td>
  </tr>
</table>

</div><!-- end .sidebar1 -->