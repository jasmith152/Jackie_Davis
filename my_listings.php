<?php
$page_name = $_GET['page_name'];
$page_title = 'View Homes For Sale by Jackie Davis Inverness Florida Realtor ERA American Realty Listings';
$matatag_description = 'View Jackie Davis real estate listings from MLS, Jackie is a Realtor at ERA American Realty specializing in golf course and waterfront, lakefront homes and property.';
include('header_inside.php');
?>
  <div class="content">
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber5">
										<tr>
											<td colspan="3" valign="top"><p align="center" style="font-family: Arial,Helvetica,sans-serif;font-size: 13px;color: #000;"><a href="#Residential" style="color: #000;">Residential</a> | <a href="#Mobile" style="color: #000;">Mobile</a> | <a href="#Condo" style="color: #000;">Condo</a> | <a href="#Vacant_Land" style="color: #000;">Vacant Land</a> | <a href="#Multi_Res" style="color: #000;">Multi-Residential</a> | <a href="#Commercial" style="color: #000;">Commercial</a> | <a href="#Business_Op" style="color: #000;">Business Op</a></p>
											<?php
                                                                                        // Establish GET & POST variables
                                                                                        import_request_variables("gp");
											$firm_id = "086";
											$agent_id = "95";
											include include '/home/naturmls/public_html/listings.php';
											?>
												<p></p>
											</td>
										</tr>
									</table>
    </div>

<?php
include('footer.php');
?>
