<?php
$page_name = $_GET['page_name'];
$page_title = 'Search All Real Estate Listings in Citrus County MLS';
$matatag_description = 'Search all homes and lots for sale in Citrus County MLS';
include('header_inside.php');
?>
  <div class="content" align="center">
  <?php
		$display_firm = "086";
        $searchbox_width = "600";
		$display_agent = '95';
		include '/home/naturmls/public_html/search.php';
  ?>
  </div>

<?php
include('footer.php');
?>
