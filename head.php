<?php
session_start();
?>
<title>Shopnix - Demo Store</title>
  <link rel="stylesheet" href="front/cache/theme-70d883.css" type="text/css" media="all">
  <link rel="stylesheet" href="font/css/font-awesome.css" type="text/css" media="all">
  <script src="front/jquery1/jquery-1.6.2.js"></script>
	<script src="front/jquery1/jquery.effects.core.js"></script>
	<script src="front/jquery1/jquery.effects.fold.js"></script>
	<script src="front/jquery1/jquery.effects.scale.js"></script>
	<script src="front/jquery1/jquery.cycle.all.js"></script>
	<script>
	function loginopen(){
		document.getElementById('login-pop').style.display="block";
	}
	function loginclose(){
		document.getElementById('login-pop').style.display="none";
	}
	</script>
  <style>
    #header .blockcart .blockcart-header:hover{
      cursor: pointer;
    }
    #login-pop{
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0,0.9);
    position:fixed;
    z-index: 50;
    display: none;
    }
    .login{
    	background:#fff;
    	background-size: cover;
    	background-position: center;
    	/*background-repeat:no-repeat;*/
    	position:fixed;
    	top: 150px;
    	left: 600px;
    	width: 400px;
    	height: 500px;
    	border-radius: 20px;
    }
    .login table{
    	margin:auto;
      margin-top: 70px;
    	background: rgba(150, 150, 150,0.5);
    }
    .login table tr td{
    	padding-top: 20px;
    }
    .login input{
    	height: 35px;
    	width: 270px;
    	padding-left: 20px;
    }
    .login input[type=submit]{
    	height: 45px;
    	width: 100px;
    	background: #764011;
    	color: #fff;
    	border: 2px solid #764011;
    	border-radius: 10px;
    	font-family: "Arial Rounded MT",sans-serif;
    	font-weight: bold;
    	font-size: 20px;
    	padding-left: 5px;
    	margin-left: 80px;
    }
    .login input[type=submit]:hover{
    	cursor: pointer;
    }
    .login-header{
    	background: #764011;
      height: 70px;
    	margin: 30px 0px;
    }
    .login-header h1{
    	margin:auto;

    	width: 110px;
    	font-family: arial,sans-serif;
    	color: #fff;
    }
  </style>
  <script type="text/javascript">
        var prestashop = {"cart":{"products":[],"totals":{"total":{"type":"total","label":"Total","amount":0,"value":"$0.00"},"total_including_tax":{"type":"total","label":"Total (tax incl.)","amount":0,"value":"$0.00"},"total_excluding_tax":{"type":"total","label":"Total (tax excl.)","amount":0,"value":"$0.00"}},"subtotals":{"products":{"type":"products","label":"Subtotal","amount":0,"value":"$0.00"},"discounts":null,"shipping":{"type":"shipping","label":"Shipping","amount":0,"value":"Free"},"tax":{"type":"tax","label":"Taxes","amount":0,"value":"$0.00"}},"products_count":0,"summary_string":"0 items","labels":{"tax_short":"(tax excl.)","tax_long":"(tax excluded)"},"id_address_delivery":0,"id_address_invoice":0,"is_virtual":false,"vouchers":{"allowed":0,"added":[]},"discounts":[],"minimalPurchase":0,"minimalPurchaseRequired":""},"currency":{"name":"US Dollar","iso_code":"USD","iso_code_num":"840","sign":"$"},"customer":{"lastname":null,"firstname":null,"email":null,"last_passwd_gen":null,"birthday":null,"newsletter":null,"newsletter_date_add":null,"ip_registration_newsletter":null,"optin":null,"website":null,"company":null,"siret":null,"ape":null,"outstanding_allow_amount":0,"max_payment_days":0,"note":null,"is_guest":0,"id_shop":null,"id_shop_group":null,"id_default_group":1,"date_add":null,"date_upd":null,"reset_password_token":null,"reset_password_validity":null,"id":null,"is_logged":false,"gender":{"type":null,"name":null,"id":null},"risk":{"name":null,"color":null,"percent":null,"id":null},"addresses":[]},"language":{"name":"English (English)","iso_code":"en","locale":"en-US","language_code":"en-us","is_rtl":"0","date_format_lite":"m\/d\/Y","date_format_full":"m\/d\/Y H:i:s","id":1},"page":{"title":"","canonical":null,"meta":{"title":"Bag Shop - Demo Store","description":"Shop powered by PrestaShop","keywords":"","robots":"index"},"page_name":"index","body_classes":{"lang-en":true,"lang-rtl":false,"country-US":true,"currency-USD":true,"layout-left-column":true,"page-index":true,"tax-display-disabled":true},"admin_notifications":[]},"shop":{"name":"Bag Shop - Demo Store","email":"sales@yourcompany.com","registration_number":"","long":false,"lat":false},"configuration":{"display_taxes_label":false,"low_quantity_threshold":3,"is_b2b":false,"is_catalog":false,"show_prices":true,"opt_in":{"partner":true},"quantity_discount":{"type":"discount","label":"Discount"},"voucher_enabled":0,"return_enabled":0,"number_of_days_for_return":14},"field_required":[],"breadcrumb":{"links":[{"title":"Home","url":"https:\/\/codezeel.com\/prestashop\/PRS03\/PRS030054\/index.php"}],"count":1},"link":{"protocol_link":"https:\/\/","protocol_content":"https:\/\/"},"time":1532849169,"static_token":"ccd652330b4ae3bffd3d38f15a3d1cf8","token":"f9548c43c897e6d6ea0099892a02038c"};
      </script>
