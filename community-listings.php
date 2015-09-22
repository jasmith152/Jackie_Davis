<?php
$page_name = $_GET['page_name'];
$page_title = 'Search All Real Estate Listings in Citrus County MLS';
$matatag_description = 'Search all homes and lots for sale in Citrus County MLS';
include('header_inside.php');
?>
  <div class="content" align="center">
  <?php
	    if (!empty($_GET['search_title'])) {
   if ($relink_url_var_num > 0) { $relink_url_vars .= "&"; }
   $relink_url_vars .= "search_title=".$_GET['search_title'];
   $relink_url_var_num++;
}
if (!empty($_GET['subdivision'])) {
   if ($relink_url_var_num > 0) { $relink_url_vars .= "&"; }
   $relink_url_vars .= "subdivision=".$_GET['subdivision'];
   $relink_url_var_num++;
   if ($_GET['subdivision'] == 'Citrus Hills') {
      $where_custom = " Subdivision Like 'Citrus Hills' OR Subdivision Like 'Belmont Hills' OR Subdivision Like 'Brentwood' OR Subdivision Like 'Cambridge Greens/Citrus Hills' OR Subdivision Like 'Canterbury Lake Estates' OR Subdivision Like 'Celina Hills' OR Subdivision Like 'Clearview Est.' OR Subdivision Like 'Fairview Est.' OR Subdivision Like 'Hampton Hills' OR Subdivision Like 'Kensington Est.' OR Subdivision Like 'Meadowview' OR Subdivision Like 'Presidential Est.' OR Subdivision Like 'Terra Vista' OR Subdivision Like 'Hampshire Hills' OR Subdivision Like 'Greenbriar' OR Subdivision Like 'Forest Ridge'";
   } else {
      $where_custom = " Subdivision Like '%".$_GET['subdivision']."%'";
   }
}
if (!empty($_GET['city'])) {
   if ($relink_url_var_num > 0) { $relink_url_vars .= "&"; }
   $relink_url_vars .= "city=".$_GET['city'];
   $relink_url_var_num++;
   $listingsin_city = $_GET['city'];
}
if (!empty($_GET['waterfront'])) {
   if ($relink_url_var_num > 0) { $relink_url_vars .= "&"; }
   $relink_url_vars .= "waterfront=".$_GET['waterfront'];
   $relink_url_var_num++;
   $waterfront_yn = $_GET['waterfront'];
}
if (!empty($_GET['golf'])) {
   if ($relink_url_var_num > 0) { $relink_url_vars .= "&"; }
   $relink_url_vars .= "golf=".$_GET['golf'];
   $relink_url_var_num++;
   $where_custom = " LotDescription Like '%On Golf Course%'";
}
if (!empty($_GET['farm'])) {
   if ($relink_url_var_num > 0) { $relink_url_vars .= "&"; }
   $relink_url_vars .= "farm=".$_GET['farm'];
   $relink_url_var_num++;
   $where_custom = " Restrictions Like '%Horses Allowed%'";
}
if (!empty($_GET['condo'])) {
   if ($relink_url_var_num > 0) { $relink_url_vars .= "&"; }
   $relink_url_vars .= "condo=".$_GET['condo'];
   $relink_url_var_num++;
   $where_custom = " PropertyType = 'Condo/Villa/Townhome'";
}
if (!empty($_GET['show'])) {
   if ($relink_url_var_num > 0) { $relink_url_vars .= "&"; }
   $relink_url_vars .= "show=".$_GET['show'];
   $relink_url_var_num++;
   $show = $_GET['show'];
}
      if (empty($listingsin_subdivision) && empty($waterfront_yn) && empty($listingsin_city) && empty($where_custom)) {
         $agent_id = '95';
         $office_id = '0';
      } else {
         $display_agent = '95';
         $display_office = '0';
      }
      if (!empty($_GET['display_agent'])) {
         $display_agent = $_GET['display_agent'];
      }
			include '/home/naturmls/public_html/listings.php';
?>
    </div>

<?php
include('footer.php');
?>
