<?php
$page_title = 'Home Page';
$matatag_description = '';
include('header_inside.php');
?>
  <div class="content">
  <?php
echo "<p align='center' style='font-family: Arial,Helvetica,sans-serif;font-size: 16px;font-weight: bold;'>".$_GET['page_title']."</p>\n";

/* Set some variables */
$display_firm = '086';
$display_office = '3';
$agent_id = "95";
$where_custom = " LM_MST_CFF_LOT_DESCRIPTION Like '%On Golf Course%'";
include '/home/mychurchserver/domains/citrusmls.mychurchserver.com/public_html/listings.php';
?>
    </div>

<?php
include('footer.php');
?>
