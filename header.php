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
    
<link rel="stylesheet" type="text/css" href="include/bgstretcher.css" />

<script type="text/javascript" src="include/jquery-1.5.2.min.js"></script>
<script type="text/javascript" src="include/bgstretcher.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
	
        //  Initialize Backgound Stretcher	   
		$('span').bgStretcher({
			images: ['images/slide1.png', 'images/slide2.png', 'images/slide3.jpg', 'images/slide4.jpg'],
			imageWidth: 960, 
			imageHeight: 524, 
			slideDirection: 'N',
			slideShowSpeed: 3000,
			transitionEffect: 'fade',
			sequenceMode: 'fast',
			buttonPrev: '#prev',
			buttonNext: '#next',
			pagination: '#nav',
			anchoring: 'left center',
			anchoringImg: 'left center'
		});
		
	});
</script>

</head>

<body>

<div class="container">
<span><div id="headerslide" class="header">
<div class="header-pic1"><img src="images/header-pic1.png" width="960" height="110" usemap="#Map" border="0" />
  <map name="Map" id="Map">
    <area shape="rect" coords="712,12,761,31" href="index.php" />
    <area shape="rect" coords="767,11,837,32" href="location.php" />
    <area shape="rect" coords="888,12,951,32" href="javascript:NewWindow('contact_us.php','popup','620','750','center','front');" />
    <area shape="rect" coords="844,12,881,33" href="blog.php" />
  </map>
</div>

<div class='nav-bar1'>
<table width='960' height='40' border='0' cellspacing='0' cellpadding='0' style='font-family:Arial, Helvetica, sans-serif'>
  <tr align='center'>
    <td><a href='my_listings.php' style='color:#fff;'>View My Listings</a></td>
    <td><a href='search_all.php' style='color:#fff;'>Search All Citrus Listings</a></td>
    <td><a href='community_listings.php' style='color:#fff;'>Listings By Community</a></td>
    <td><a href='about_me.php' style='color:#fff;'>About Me</a></td>
  </tr>
</table>
</div><!-- end .nav-bar1 -->
</div></span><!-- end .header -->
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