<!doctype html>
<html lang="en">
<?php
include("head.php");
?>
<body id="checkout" class="lang-en country-us currency-usd layout-left-column page-product tax-display-disabled product-id-2 product-exercitat-virginia product-id-category-7 product-id-manufacturer-2 product-id-supplier-1 product-on-sale product-available-for-order">
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

        <section id="checkout-addresses-step" class="checkout-step -current -reachable -complete js-current-step">
    <h1 class="step-title h3">
      <i class="material-icons done"></i>
      <span class="step-number">2</span>
      Addresses
     
    </h1>

    <div class="content">
      
  <div class="js-address-form">
    <form method="POST" action="pay.php" data-refresh-url="">

      
              <p>
          The selected address will be used both as your personal address (for invoice) and as your delivery address.
        </p>
      
              <div id="delivery-address">
          
  <div class="js-address-form">
    
    
    


      
        <section class="form-fields">
          
                          
      
                
  
    <input type="hidden" name="pid" value="<?= $pd[0];?>">
  


              
  
                          
      
                
  
    <input type="hidden" name="qunt" value="<?= $pd[1];?>">
  


              
  
                          
      
                
  
    <input type="hidden" name="back" value="">
  


              
  
                          
      
                
  
    <input type="hidden" name="token" value="d8e4b34fd63295a81c7dad32d97b8296">
  


              
  
                          
      
  
                          
      
                
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              First name
          </label>
    <div class="col-md-6">
<input class="form-control" name="firstname" type="text" value="<?= $user['name'];?>" maxlength="32" required>
 </div>

    <div class="col-md-3 form-control-comment">
    </div>
  </div>
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              Last name
          </label>
    <div class="col-md-6">
          <input class="form-control" name="lastname" type="text" value="<?= $user['last_name'];?>" maxlength="32" required>
                  

      
      
              

    </div>

    <div class="col-md-3 form-control-comment">
      
              
    </div>
  </div>


              
  
                          
      
                
  <div class="form-group row ">
    <label class="col-md-3 form-control-label">
              Company
          </label>
    <div class="col-md-6">

      
        
          <input class="form-control" name="company" type="text" value="<?= $user['Company'];?>" maxlength="255">
                  

      
      
              

    </div>

    <div class="col-md-3 form-control-comment">
      
                 Optional
              
    </div>
  </div>


              
  
                          
      
                
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              Address
          </label>
    <div class="col-md-6">

      
        
          <input class="form-control" name="address1" type="text" value="<?= $user['address'];?>" maxlength="128" required>
                  

      
      
              

    </div>

    <div class="col-md-3 form-control-comment">
      
              
    </div>
  </div>


              
  
                          
      
                
  <div class="form-group row ">
    <label class="col-md-3 form-control-label">
              Address Complement
          </label>
    <div class="col-md-6">

      
        
          <input class="form-control" name="address2" type="text" value="<?= $user['address_complement'];?>" maxlength="128">
                  

      
      
              

    </div>

    <div class="col-md-3 form-control-comment">
      
                 Optional
              
    </div>
  </div>


              
  
                          
      
                
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              City
          </label>
    <div class="col-md-6">

      
        
          <input class="form-control" name="city" type="text" value="<?= $user['City'];?>" maxlength="64" required>
                  

      
      
              

    </div>

    <div class="col-md-3 form-control-comment">
      
              
    </div>
  </div>


              
  
                          
      
                
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              State
          </label>
    <div class="col-md-6">

      
        
          <select class="form-control form-control-select" name="id_state" required="">
            <option value="" disabled="" selected="">-- please choose --</option>
                          <option value="1">Delhi</option>
                          <option value="2">Haryana</option>
                          <option value="3">UP</option>
                          <option value="4">MP</option>
                          <option value="5">Bihar</option>
                          <option value="6">Arunachal Pradesh</option>
                          <option value="7">Andhra Pradesh</option>
                          <option value="8">Uttarakhand</option>
                          <option value="9">Chattisgarh</option>
                          <option value="10">Mizoram</option>
                          <option value="11">Assam</option>
                          <option value="12">Nagaland</option>
                          <option value="13">Maharashtra</option>
                          <option value="14">Orissa</option>
                          <option value="15">Tamil Nadu</option>
                          <option value="16">Karnataka</option>
                          <option value="17">Kerala</option>
                          <option value="18">Goa</option>
                          <option value="19">Punjab</option>
                          <option value="20">Telangana</option>
                          <option value="21">Daman diu</option>
                          <option value="22">West bengal</option>
                          <option value="23">Manipur</option>
                          <option value="24">Massachusetts</option>
                          <option value="25">Michigan</option>
                          <option value="26">Minnesota</option>
                          <option value="27">Mississippi</option>
                          <option value="28">Missouri</option>
                          <option value="29">Montana</option>
                          
                      </select>
        

      
      
              

    </div>

    <div class="col-md-3 form-control-comment">
      
              
    </div>
  </div>


              
  
                          
      
                
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              Zip/Postal Code
          </label>
    <div class="col-md-6">

      
        
          <input class="form-control" name="postcode" type="text" value="<?= $user['zip/postal_code'];?>" maxlength="12" required>
                  

      
      
              

    </div>

    <div class="col-md-3 form-control-comment">
      
              
    </div>
  </div>


              
  
                          
      
                
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              Country
          </label>
    <div class="col-md-6">

      
        
          <select class="form-control form-control-select" name="country" required="">
            <option value="" disabled="" selected="">-- please choose --</option>
                          <option value="21">United States</option>
                          <option value="22">India</option>
                          <option value="23">UK</option>
                          <option value="24">China</option>
                          <option value="25">Japan</option>
                      </select>
       

      
      
              

    </div>

    <div class="col-md-3 form-control-comment">
      
              
    </div>
  </div>


              
  
                          
      
                
  <div class="form-group row ">
    <label class="col-md-3 form-control-label">
              Phone
          </label>
    <div class="col-md-6">

      
        
          <input class="form-control" name="phone" type="text" value="<?= $user['Phone'];?>" maxlength="32">
                  

      
      
              

    </div>

    <div class="col-md-3 form-control-comment">
      
                 Optional
              
    </div>
  </div>


              
  
                      
  <input type="hidden" name="saveAddress" value="delivery">
      <div class="form-group row">
      <div class="col-md-9 col-md-offset-3">
        <input name="use_same_address" type="checkbox" value="1" checked="">
        <label>Use this address for invoice too</label>
      </div>
    </div>
  
        </section>
      

      
      <footer class="form-footer clearfix">
        <input type="hidden" name="submitAddress" value="1">
           
  
      </footer>
      

    
  </div>


        </div>
      
      
      
    
  </div>

    </div>
  </section>
        

        <!-- shipping informations -->
        
          
        
      </div>

      <!-- Right Block: cart subtotal & cart total -->
      <div class="cart-grid-right col-xs-12 col-lg-4">

        
          <div class="card cart-summary">

            
              
            

            
              
<div class="cart-detailed-totals">

  <div class="card-block">
                  <div class="cart-summary-line" id="cart-subtotal-products">
          <span class="label js-subtotal">
                            <?= $pd[1];?> items
                      </span>
          <span class="value">Rs <?= $pd[1]*$prd['p_price'];?></span>
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
      <span class="value">Rs <?= $pd[1]*$prd['p_price'];?></span>
    </div>

    <div class="cart-summary-line">
      <small class="label">Taxes</small>
      <small class="value">RS 0.00</small>
    </div>
  </div>

  <hr class="separator">
</div>

            

       
              
  <div class="checkout cart-detailed-actions card-block">
          <div class="text-sm-center">
        <button type="submit" name="sub" class="btn btn-primary">Proceed to payment</button>
        
      </div>
      </div>

            </form>

          </div>
        

        
            <div id="block-reassurance">
    <ul>
              <li>
          <div class="block-reassurance-item">
            <img src="https://codezeel.com/prestashop/PRS03/PRS030054/modules/blockreassurance/img/ic_verified_user_black_36dp_1x.png" alt="Security policy (edit with module Customer reassurance)">
            <span class="h6">Security policy</span>
          </div>
        </li>
              <li>
          <div class="block-reassurance-item">
            <img src="https://codezeel.com/prestashop/PRS03/PRS030054/modules/blockreassurance/img/ic_local_shipping_black_36dp_1x.png" alt="Delivery policy (edit with module Customer reassurance)">
            <span class="h6">Delivery policy</span>
          </div>
        </li>
              <li>
          <div class="block-reassurance-item">
            <img src="https://codezeel.com/prestashop/PRS03/PRS030054/modules/blockreassurance/img/ic_swap_horiz_black_36dp_1x.png" alt="Return policy (edit with module Customer reassurance)">
            <span class="h6">Return policy</span>
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
        <script type="text/javascript" src="front/cache/bottom-88d187.js"></script>

  </body>
</html>