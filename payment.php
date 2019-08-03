<html lang="en">
<?php
include("head.php");
?>
  <body id="checkout" class="lang-en country-us currency-usd layout-left-column page-order tax-display-disabled">
	<main id="page">
<?php
include("header.php");
?>
 <section id="wrapper">

      <div class="container ggdg">
  <section id="content">
          <div class="row">
            <div class="col-md-8">
           
  <section id="checkout-personal-information-step" class="checkout-step -reachable -complete">
    <h1 class="step-title h3">
      <i class="material-icons done"></i>
      <span class="step-number">1</span>
      Personal Information
      <span class="step-edit text-muted"><i class="material-icons edit">mode_edit</i> Edit</span>
    </h1>

    <div class="content">
      
  
    <p class="identity">
      
      Connected as <a href="https://codezeel.com/prestashop/PRS03/PRS030054/index.php?controller=identity">SUMIT ANEJA</a>.
    </p>
    <p>
      
      Not you? <a href="https://codezeel.com/prestashop/PRS03/PRS030054/index.php?mylogout=">Log out</a>
    </p>
          <p><small>If you sign out now, your cart will be emptied.</small></p>
    
  
    </div>
  </section>


  
  <section id="checkout-addresses-step" class="checkout-step -current -reachable js-current-step">
    <h1 class="step-title h3">
      <i class="material-icons done"></i>
      <span class="step-number">2</span>
      Addresses
      <span class="step-edit text-muted"><i class="material-icons edit">mode_edit</i> Edit</span>
    </h1>

    <div class="content">
      
  <div class="js-address-form">
    <form method="POST" action="https://codezeel.com/prestashop/PRS03/PRS030054/index.php?controller=order" data-refresh-url="//codezeel.com/prestashop/PRS03/PRS030054/index.php?controller=order&amp;ajax=1&amp;action=addressForm">

      
              <p>
          The selected address will be used both as your personal address (for invoice) and as your delivery address.
        </p>
      
              <div id="delivery-addresses" class="address-selector js-address-selector">
          
      <article class="address-item selected" id="id-address-delivery-address-10">
      <header class="h4">
        <label class="radio-block">
          <span class="custom-radio">
            <input type="radio" name="id_address_delivery" value="10" checked="">
            <span></span>
          </span>
          <span class="address-alias h4">My Address</span>
          <div class="address">SUMIT ANEJA<br>22 2nd floor rishi nagar<br>india, New York 10001<br>United States</div>
        </label>
      </header>
      <hr>
      <footer class="address-footer">
                  <a class="edit-address text-muted" data-link-action="edit-address" href="//codezeel.com/prestashop/PRS03/PRS030054/index.php?controller=order&amp;id_address=10&amp;editAddress=delivery&amp;token=d8e4b34fd63295a81c7dad32d97b8296">
            <i class="material-icons edit"></i>Edit
          </a>
          <a class="delete-address text-muted" data-link-action="delete-address" href="//codezeel.com/prestashop/PRS03/PRS030054/index.php?controller=order&amp;id_address=10&amp;deleteAddress=1&amp;token=d8e4b34fd63295a81c7dad32d97b8296">
            <i class="material-icons delete"></i>Delete
          </a>
              </footer>
    </article>
        <p>
      <button class="ps-hidden-by-js form-control-submit center-block" type="submit" style="display: none;">Save</button>
    </p>
  
        </div>

        <p class="add-address">
          <a href="https://codezeel.com/prestashop/PRS03/PRS030054/index.php?controller=order&amp;newAddress=delivery"><i class="material-icons"></i>add new address</a>
        </p>

                  <p>
            <a data-link-action="different-invoice-address" href="https://codezeel.com/prestashop/PRS03/PRS030054/index.php?controller=order&amp;use_same_address=0">
              Billing address differs from shipping address
            </a>
          </p>
        
      
      
              <div class="clearfix">
          <button type="submit" class="btn btn-primary continue float-xs-right" name="confirm-addresses" value="1">
              Continue
          </button>
        </div>
      
    </form>
  </div>

    </div>
  </section>


  
  <section class="checkout-step -unreachable" id="checkout-delivery-step">
    <h1 class="step-title h3">
      <span class="step-number">3</span> Shipping Method
    </h1>
  </section>


  
  <section class="checkout-step -unreachable" id="checkout-payment-step">
    <h1 class="step-title h3">
      <span class="step-number">4</span> Payment
    </h1>
  </section>



              
            </div>
            <div class="col-md-4">

              
                <section id="js-checkout-summary" class="card js-cart" data-refresh-url="https://codezeel.com/prestashop/PRS03/PRS030054/index.php?controller=cart?ajax=1&amp;action=refresh">
  <div class="card-block">
    
      
    

    
      <div class="cart-summary-products">

        <p>2 items</p>

        <p>
          <a href="#" data-toggle="collapse" data-target="#cart-summary-product-list">
            show details
          </a>
        </p>

        
          <div class="collapse" id="cart-summary-product-list">
            <ul class="media-list">
                              <li class="media">
  <div class="media-left">
    <a href="https://codezeel.com/prestashop/PRS03/PRS030054/index.php?id_product=2&amp;id_product_attribute=56&amp;rewrite=blouse&amp;controller=product&amp;id_lang=1#/1-size-s/14-color-blue" title="Exercitat Virginia">
      <img class="media-object" src="https://codezeel.com/prestashop/PRS03/PRS030054/img/p/2/5/25-cart_default.jpg" alt="Exercitat Virginia">
    </a>
  </div>
  <div class="media-body">
    <span class="product-name">Exercitat Virginia</span>
    <span class="product-quantity">x1</span>
    <span class="product-price float-xs-right">$82.65</span>
    
  </div>

</li>
                              <li class="media">
  <div class="media-left">
    <a href="https://codezeel.com/prestashop/PRS03/PRS030054/index.php?id_product=1&amp;id_product_attribute=49&amp;rewrite=faded-short-sleeves-tshirt&amp;controller=product&amp;id_lang=1#/1-size-s/13-color-orange" title="Consectetur Hampden">
      <img class="media-object" src="https://codezeel.com/prestashop/PRS03/PRS030054/img/p/2/4/24-cart_default.jpg" alt="Consectetur Hampden">
    </a>
  </div>
  <div class="media-body">
    <span class="product-name">Consectetur Hampden</span>
    <span class="product-quantity">x1</span>
    <span class="product-price float-xs-right">$98.00</span>
    
  </div>

</li>
                          </ul>
          </div>
        
      </div>
    

    
                        <div class="cart-summary-line cart-summary-subtotals" id="cart-subtotal-products">
            <span class="label">Subtotal</span>
            <span class="value">$180.65</span>
          </div>
                                              <div class="cart-summary-line cart-summary-subtotals" id="cart-subtotal-shipping">
            <span class="label">Shipping</span>
            <span class="value">Free</span>
          </div>
                                

  </div>

  
      

  <hr class="separator">

  
    <div class="card-block cart-summary-totals">

  
    <div class="cart-summary-line cart-total">
      <span class="label">Total (tax excl.)</span>
      <span class="value">$180.65</span>
    </div>
  

  
    <div class="cart-summary-line">
      <span class="label sub">Taxes</span>
      <span class="value sub">$0.00</span>
    </div>
  

</div>
  

</section>
              

                <div id="block-reassurance">
    <ul>
              <li>
          <div class="block-reassurance-item">
            <img src="https://codezeel.com/prestashop/PRS03/PRS030054/modules/blockreassurance/img/ic_verified_user_black_36dp_1x.png" alt="Security policy (edit with module Customer reassurance)">
            <span class="h6">Security policy (edit with module Customer reassurance)</span>
          </div>
        </li>
              <li>
          <div class="block-reassurance-item">
            <img src="https://codezeel.com/prestashop/PRS03/PRS030054/modules/blockreassurance/img/ic_local_shipping_black_36dp_1x.png" alt="Delivery policy (edit with module Customer reassurance)">
            <span class="h6">Delivery policy (edit with module Customer reassurance)</span>
          </div>
        </li>
              <li>
          <div class="block-reassurance-item">
            <img src="https://codezeel.com/prestashop/PRS03/PRS030054/modules/blockreassurance/img/ic_swap_horiz_black_36dp_1x.png" alt="Return policy (edit with module Customer reassurance)">
            <span class="h6">Return policy (edit with module Customer reassurance)</span>
          </div>
        </li>
          </ul>
  </div>

            </div>
          </div>
        </section>
      
      </div>
      
    </section>

    <footer id="footer">
      
        <div class="footer-before">
	
	  
<div id="czfootercmsblock" class="footer-cms-block links block">  
	<div class="container">
		<div id="footerlogo">
			<div class="footerdiv">
<div class="footerlogo"></div>
<ul><li class="footerdesc">
<div class="footer-address"><i class="fa fa-map-marker"></i><span>Bag Shop - Demo Store United States</span></div>
</li>
<li class="footerdesc">
<div class="footer-email"><i class="fa fa-envelope-o"></i><span>sales@yourcompany.com</span></div>
</li>
<li class="footerdesc">
<div class="footer-mobile"><i class="fa fa-phone"></i><span>+91 888-888-8888</span></div>
</li>
</ul></div> 
		</div>
	</div>
</div>


  <div class="block-social">
    <ul>
              <li class="facebook"><a href="#" target="_blank"><span>Facebook</span></a></li>
              <li class="twitter"><a href="#" target="_blank"><span>Twitter</span></a></li>
              <li class="youtube"><a href="#" target="_blank"><span>YouTube</span></a></li>
              <li class="googleplus"><a href="#" target="_blank"><span>Google +</span></a></li>
              <li class="pinterest"><a href="#" target="_blank"><span>Pinterest</span></a></li>
              <li class="vimeo"><a href="#" target="_blank"><span>Vimeo</span></a></li>
              <li class="instagram"><a href="#" target="_blank"><span>Instagram</span></a></li>
          </ul>
  </div>


	
</div>
<div class="footer-container">
  <div class="container">
    <div class="row footer">
      
        <div class="col-md-4 links block">
      <h3 class="h3 hidden-md-down">Products</h3>
            <div class="title h3 block_title hidden-lg-up" data-target="#footer_sub_menu_51441" data-toggle="collapse">
        <span class="">Products</span>
        <span class="pull-xs-right">
          <span class="navbar-toggler collapse-icons">
            <i class="fa-icon add"></i>
            <i class="fa-icon remove"></i>
          </span>
        </span>
      </div>
      <ul id="footer_sub_menu_51441" class="collapse block_content">
                  <li>
            <a id="link-product-page-prices-drop-1" class="cms-page-link" href="https://codezeel.com/prestashop/PRS03/PRS030054/index.php?controller=prices-drop" title="Our special products">
              Prices drop
            </a>
          </li>
                  <li>
            <a id="link-product-page-new-products-1" class="cms-page-link" href="https://codezeel.com/prestashop/PRS03/PRS030054/index.php?controller=new-products" title="Our new products">
              New products
            </a>
          </li>
                  <li>
            <a id="link-product-page-best-sales-1" class="cms-page-link" href="https://codezeel.com/prestashop/PRS03/PRS030054/index.php?controller=best-sales" title="Our best sales">
              Best sales
            </a>
          </li>
                  <li>
            <a id="link-static-page-contact-1" class="cms-page-link" href="https://codezeel.com/prestashop/PRS03/PRS030054/index.php?controller=contact" title="Use our form to contact us">
              Contact us
            </a>
          </li>
                  <li>
            <a id="link-static-page-sitemap-1" class="cms-page-link" href="https://codezeel.com/prestashop/PRS03/PRS030054/index.php?controller=sitemap" title="Lost ? Find what your are looking for">
              Sitemap
            </a>
          </li>
              </ul>
</div>
<div class="col-md-4 links block">
      <h3 class="h3 hidden-md-down">Our company</h3>
            <div class="title h3 block_title hidden-lg-up" data-target="#footer_sub_menu_89121" data-toggle="collapse">
        <span class="">Our company</span>
        <span class="pull-xs-right">
          <span class="navbar-toggler collapse-icons">
            <i class="fa-icon add"></i>
            <i class="fa-icon remove"></i>
          </span>
        </span>
      </div>
      <ul id="footer_sub_menu_89121" class="collapse block_content">
                  <li>
            <a id="link-cms-page-1-2" class="cms-page-link" href="https://codezeel.com/prestashop/PRS03/PRS030054/index.php?id_cms=1&amp;controller=cms&amp;id_lang=1" title="Our terms and conditions of delivery">
              Delivery
            </a>
          </li>
                  <li>
            <a id="link-cms-page-2-2" class="cms-page-link" href="https://codezeel.com/prestashop/PRS03/PRS030054/index.php?id_cms=2&amp;controller=cms&amp;id_lang=1" title="Legal notice">
              Legal Notice
            </a>
          </li>
                  <li>
            <a id="link-cms-page-3-2" class="cms-page-link" href="https://codezeel.com/prestashop/PRS03/PRS030054/index.php?id_cms=3&amp;controller=cms&amp;id_lang=1" title="Our terms and conditions of use">
              Terms and conditions of use
            </a>
          </li>
                  <li>
            <a id="link-cms-page-4-2" class="cms-page-link" href="https://codezeel.com/prestashop/PRS03/PRS030054/index.php?id_cms=4&amp;controller=cms&amp;id_lang=1" title="Learn more about us">
              About us
            </a>
          </li>
                  <li>
            <a id="link-cms-page-5-2" class="cms-page-link" href="https://codezeel.com/prestashop/PRS03/PRS030054/index.php?id_cms=5&amp;controller=cms&amp;id_lang=1" title="Our secure payment method">
              Secure payment
            </a>
          </li>
              </ul>
</div>

<div id="block_myaccount_infos" class="col-md-2 links wrapper">
  <h3 class="myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="https://codezeel.com/prestashop/PRS03/PRS030054/index.php?controller=my-account" rel="nofollow">
      Your account
    </a>
  </h3>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Your account</span>
    <span class="pull-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="fa-icon add"></i>
		<i class="fa-icon remove"></i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li>
          <a href="https://codezeel.com/prestashop/PRS03/PRS030054/index.php?controller=addresses" title="Addresses" rel="nofollow">
            Addresses
          </a>
        </li>
            <li>
          <a href="https://codezeel.com/prestashop/PRS03/PRS030054/index.php?controller=order-slip" title="Credit slips" rel="nofollow">
            Credit slips
          </a>
        </li>
            <li>
          <a href="https://codezeel.com/prestashop/PRS03/PRS030054/index.php?controller=history" title="Orders" rel="nofollow">
            Orders
          </a>
        </li>
            <li>
          <a href="https://codezeel.com/prestashop/PRS03/PRS030054/index.php?controller=identity" title="Personal info" rel="nofollow">
            Personal info
          </a>
        </li>
        
	</ul>
</div>
<!--?php
/**
 * tawk.to
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to support@tawk.to so we can send you a copy immediately.
 *
 * @copyright   Copyright (c) 2014 tawk.to
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
?--><!--Start of tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();

   Tawk_API.visitor = {
        name  : 'SUMIT ANEJA',
        email : 'sumitaneja8@gmail.com'
    };

(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5aaf6e96d7591465c708ae89/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of tawk.to Script-->

      
    </div>      
    </div>
  </div>


<div class="footer-after">
  <div class="container">
	  
        
<!-- Block payment logo module -->
<div id="payement_logo_block_left" class="payement_logo_block">
	<a href="https://codezeel.com/prestashop/PRS03/PRS030054/index.php?id_cms=1&amp;controller=cms&amp;id_lang=1">
		<img src="https://codezeel.com/prestashop/PRS03/PRS030054/modules/cz_blockpaymentlogo/views/img/visa.png" alt="visa" width="32" height="20">
		<img src="https://codezeel.com/prestashop/PRS03/PRS030054/modules/cz_blockpaymentlogo/views/img/discover.png" alt="discover" width="32" height="20">
		<img src="https://codezeel.com/prestashop/PRS03/PRS030054/modules/cz_blockpaymentlogo/views/img/american_express.png" alt="american_express" width="32" height="20">
		<img src="https://codezeel.com/prestashop/PRS03/PRS030054/modules/cz_blockpaymentlogo/views/img/google_wallet.png" alt="google_wallet" width="32" height="20">
		<!--<img src="https://codezeel.com/prestashop/PRS03/PRS030054/modules/cz_blockpaymentlogo/views/img/paypal.png" alt="paypal" width="32" height="20" />
		<img src="https://codezeel.com/prestashop/PRS03/PRS030054/modules/cz_blockpaymentlogo/views/img/bitcoin.png" alt="bitcoin" width="32" height="20" />
		<img src="https://codezeel.com/prestashop/PRS03/PRS030054/modules/cz_blockpaymentlogo/views/img/master_card.png" alt="master_card" width="32" height="20" />
		<img src="https://codezeel.com/prestashop/PRS03/PRS030054/modules/cz_blockpaymentlogo/views/img/western_union.png" alt="western_union" width="32" height="20" />
		<img src="https://codezeel.com/prestashop/PRS03/PRS030054/modules/cz_blockpaymentlogo/views/img/2co.png" alt="2co" width="32" height="20" />-->
	</a>
</div>
<!-- /Block payment logo module -->
      
	
	<div class="copyright">
	  
		  <a class="_blank" href="http://www.prestashop.com" target="_blank">
			© 2018 - Ecommerce software by PrestaShop™
		  </a>
	   
	</div>
		
  </div>
</div>

<a class="top_button" href="#" style="">&nbsp;</a>
      
    </footer>

    
        <script type="text/javascript" src="https://codezeel.com/prestashop/PRS03/PRS030054/themes/BagShop/assets/cache/bottom-88d187.js"></script>


    

    
      
    
	</main>

  

<ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all" id="ui-id-1" tabindex="0" style="display: none;"></ul><div id="lightboxOverlay" class="lightboxOverlay" style="display: none;"></div><div id="lightbox" class="lightbox" style="display: none;"><div class="lb-outerContainer"><div class="lb-container"><img class="lb-image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="><div class="lb-nav"><a class="lb-prev" href=""></a><a class="lb-next" href=""></a></div><div class="lb-loader"><a class="lb-cancel"></a></div></div></div><div class="lb-dataContainer"><div class="lb-data"><div class="lb-details"><span class="lb-caption"></span><span class="lb-number"></span></div><div class="lb-closeContainer"><a class="lb-close"></a></div></div></div></div><div id="MbwvtwB-1533237778989" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: auto !important; position: fixed !important; border: 0px !important; min-height: 0px !important; min-width: 0px !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: auto !important; height: auto !important; z-index: 2000000000 !important; cursor: auto !important; float: none !important; bottom: 0px !important; right: 0px !important; left: auto !important; display: block;"><iframe id="nE2hCoJ-1533237778989" src="about:blank" frameborder="0" scrolling="no" title="chat widget" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: auto !important; right: auto !important; bottom: auto !important; left: auto !important; position: static !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 320px !important; height: 400px !important; z-index: 999999 !important; cursor: auto !important; float: none !important; display: none !important;"></iframe><iframe id="PzkoyWG-1533237778990" src="about:blank" frameborder="0" scrolling="no" title="chat widget" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; position: fixed !important; border: 0px !important; padding: 0px !important; transition-property: none !important; z-index: 1000001 !important; cursor: auto !important; float: none !important; height: 40px !important; min-height: 40px !important; max-height: 40px !important; width: 260px !important; min-width: 260px !important; max-width: 260px !important; transform: rotate(0deg) translateZ(0px) !important; transform-origin: 0px center 0px !important; margin: 0px !important; top: auto !important; bottom: 0px !important; right: 10px !important; left: auto !important; display: block !important;"></iframe><iframe id="rupWhfR-1533237778991" src="about:blank" frameborder="0" scrolling="no" title="chat widget" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; position: fixed !important; border: 0px !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; display: none !important; z-index: 1000003 !important; cursor: auto !important; float: none !important; top: auto !important; bottom: 40px !important; right: 10px !important; left: auto !important; width: 260px !important; max-width: 260px !important; min-width: 260px !important; height: 37px !important; max-height: 37px !important; min-height: 37px !important;"></iframe><div id="Kyqae3Q-1533237778989" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none rgb(255, 255, 255) !important; opacity: 0 !important; top: 1px !important; bottom: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: auto !important; height: 45px !important; display: block !important; z-index: 999997 !important; cursor: move !important; float: none !important; left: 0px !important; right: 96px !important;"></div><div id="BJx9Pxi-1533237778989" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: 96px !important; bottom: auto !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 6px !important; height: 100% !important; display: block !important; z-index: 999998 !important; cursor: w-resize !important; float: none !important;"></div><div id="xOYn9gR-1533237778989" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: 0px !important; bottom: auto !important; left: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 6px !important; height: 100% !important; display: block !important; z-index: 999998 !important; cursor: e-resize !important; float: none !important;"></div><div id="eU0TwvJ-1533237778989" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: 0px !important; bottom: auto !important; left: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 100% !important; height: 6px !important; display: block !important; z-index: 999998 !important; cursor: n-resize !important; float: none !important;"></div><div id="PH7M2Dm-1533237778989" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: auto !important; right: 0px !important; bottom: 0px !important; left: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 100% !important; height: 6px !important; display: block !important; z-index: 999998 !important; cursor: s-resize !important; float: none !important;"></div><div id="zC9aTYE-1533237778989" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: auto !important; bottom: auto !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 12px !important; height: 12px !important; display: block !important; z-index: 999998 !important; cursor: nw-resize !important; float: none !important;"></div><div id="pa7k1dv-1533237778989" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: 0px !important; bottom: auto !important; left: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 12px !important; height: 12px !important; display: block !important; z-index: 999998 !important; cursor: ne-resize !important; float: none !important;"></div><div id="c4tdqCm-1533237778989" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: auto !important; right: auto !important; bottom: 0px !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 12px !important; height: 12px !important; display: block !important; z-index: 999998 !important; cursor: sw-resize !important; float: none !important;"></div><div id="UkqCdZt-1533237778989" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: auto !important; right: 0px !important; bottom: 0px !important; left: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 12px !important; height: 12px !important; display: block !important; z-index: 999999 !important; cursor: se-resize !important; float: none !important;"></div><div class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: auto !important; bottom: auto !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 100% !important; height: 100% !important; display: none !important; z-index: 1000001 !important; cursor: move !important; float: left !important;"></div></div><iframe src="about:blank" title="chat widget logging" style="display: none !important;"></iframe></body></html>