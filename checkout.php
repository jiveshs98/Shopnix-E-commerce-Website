<!doctype html>
<html lang="en">
<?php
include("head.php");
?>
<body id="product" class="lang-en country-us currency-usd layout-left-column page-product tax-display-disabled product-id-2 product-exercitat-virginia product-id-category-7 product-id-manufacturer-2 product-id-supplier-1 product-on-sale product-available-for-order">
<main id="page">
<?php
include("header.php");
$prd=$_SESSION['product'];
$pd=explode("*",$prd);
$sql=mysqli_query($con,"select * from `product` where `p_id`='$pd[0]'");
$prd=mysqli_fetch_array($sql);
?>
</header>  
<section id="wrapper">
 <div class="container">
	<div id="content-wrapper" class="left-column col-xs-12 col-sm-12 col-md-12">
  <section id="main">
    <div class="cart-grid row">
      <div class="cart-grid-body col-xs-12 col-lg-8">
        <div class="card cart-container">
          <div class="card-block">
            <h1 class="h1">Shopping Cart</h1>
          </div>
          <hr class="separator">
  <div class="cart-overview js-cart">
        <ul class="cart-items">
              <li class="cart-item">
            <div class="product-line-grid">
  <!--  product left content: image-->
  <div class="product-line-grid-left col-md-3 col-xs-4">
    <span class="product-image media-middle">
      <img src="product/<?=$prd['p_image'];?>" alt="Accusantium doloremque">
    </span>
  </div>

  <!--  product left body: description -->
  <div class="product-line-grid-body col-md-4 col-xs-8">
    <div class="product-line-info">
      <a class="label" href="" data-id_customization="0"><?= $prd['p_name'];?></a>
    </div>

    <div class="product-line-info product-price h5 ">
            <div class="current-price">
        <span class="price">Rs <?= $prd['p_price']?></span>
              </div>
    </div>

    <br>

          <div class="product-line-info">
        <span class="label"><?= $prd['p_detail'];?></span>
      </div>
          
    
      </div>

  <!--  product left body: description -->
  <div class="product-line-grid-right product-line-actions col-md-5 col-xs-12">
    <div class="row">
      <div class="col-xs-4 hidden-md-up"></div>
      <div class="col-md-10 col-xs-6">
        <div class="row">
          <div class="col-md-6 col-xs-6 qty">
           <?= $pd[1];?>               
           </div>
          <div class="col-md-6 col-xs-2 price">
            <span class="product-price">
              <strong>
                  Rs<?= $pd[1]*$prd['p_price']; ?>
                              </strong>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="clearfix"></div>
</div>
          
        </li>
                  </ul>
      </div>
        </div>

        
          <a class="label" href="https://codezeel.com/prestashop/PRS03/PRS030054/index.php">
            <i class="material-icons">chevron_left</i>Continue shopping
          </a>
        

        <!-- shipping informations -->
        
          
        
      </div>

      <!-- Right Block: cart subtotal & cart total -->
      <div class="cart-grid-right col-xs-12 col-lg-4">

        
          <div class="card cart-summary">

            
              
            

            
              
<div class="cart-detailed-totals">

  <div class="card-block">
                  <div class="cart-summary-line" id="cart-subtotal-products">
          <span class="label js-subtotal">
                          2 items
                      </span>
          <span class="value">$208.00</span>
                  </div>
                                  <div class="cart-summary-line" id="cart-subtotal-shipping">
          <span class="label">
                          Shipping
                      </span>
          <span class="value">Free</span>
                        <div><small class="value"></small></div>
                  </div>
                      </div>

  
      

  <hr class="separator">

  <div class="card-block">
    <div class="cart-summary-line cart-total">
      <span class="label">Total (tax excl.)</span>
      <span class="value">$208.00</span>
    </div>

    <div class="cart-summary-line">
      <small class="label">Taxes</small>
      <small class="value">$0.00</small>
    </div>
  </div>

  <hr class="separator">
</div>

            

            
              
  <div class="checkout cart-detailed-actions card-block">
          <div class="text-sm-center">
        <a href="https://codezeel.com/prestashop/PRS03/PRS030054/index.php?controller=order" class="btn btn-primary">Proceed to checkout</a>
        
      </div>
      </div>

            

          </div>
        

        
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
 </div>
</section>
<?php
include("footer.php");
?>
    </main>
<script type="text/javascript" src="themes/BagShop/assets/cache/bottom-88d187.js" ></script>
  </body>
</html>