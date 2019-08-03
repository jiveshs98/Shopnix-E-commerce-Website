<!doctype html>
<html lang="en">
<?php
include("head.php");
?>
  <body id="product" class="lang-en country-us currency-usd layout-left-column page-product tax-display-disabled product-id-2 product-exercitat-virginia product-id-category-7 product-id-manufacturer-2 product-id-supplier-1 product-on-sale product-available-for-order">
<main id="page">
<?php
include("header.php");
?>
</header>        
<aside id="notifications">
  <div class="container">
      </div>
</aside>
	 <section id="wrapper">
     <div class="container">
	   <div id="columns_inner">
		<?php
		include("side_left.php");
		$qs=$_REQUEST['n'];
		$sql=mysqli_query($con,"select * from `product` where `p_id`='$qs'");
		$pro=mysqli_fetch_array($sql);
		?>	 			
     </div>
			  

			  
  <div id="content-wrapper" class="left-column col-xs-12 col-sm-8 col-md-9" style="width:80.70%">
  <section id="main" itemscope itemtype="https://schema.org/Product">
    <meta itemprop="url" content="index13b2.html?id_product=2&amp;id_product_attribute=56&amp;rewrite=blouse&amp;controller=product&amp;id_lang=1#/1-size-s/14-color-blue">

    <div class="row">
      <div class="pp-left-column col-xs-12 col-sm-5 col-md-5">
        
          <section class="page-content" id="content">
            <div class="product-leftside">
			  <div class="images-container">
  
    <div class="product-cover">
      <a href='product/<?= $pro['p_image'];?>'>
	  <img class="js-qv-product-cover" src="product/<?= $pro['p_image'];?>" alt="" title="" style="width:100%;" itemprop="image">
      </a>
	  <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
        <i class="fa fa-arrows-alt zoom-in"></i>
      </div>
    </div>
	<div class="js-qv-mask mask additional_slider">		
					<ul class="cz-carousel product_list additional-carousel">			
		         <li class="thumb-container item">
            <img
              class="thumb js-thumb "
              src="product/<?= $pro['p_image'];?>"
              alt=""
              title=""
              width="95"
              itemprop="image"
            >
          </li>
               
              </ul>
	  
	  		
	  	  
    </div>
  
</div>
			</div>
          </section>
        </div>
        <div class="pp-right-column col-xs-12  col-sm-7 col-md-7">  
              <h1 class="h1 productpage_title" itemprop="name"><?= $pro['p_name'];?></h1>
          		  
			  	<div class="product-condition">
				  <label class="label">Condition: </label>
				  <link itemprop="itemCondition" href=""/>
				  <span>New product</span>
				</div>
		  <div class="product-information">
              <div id="product-description-short-2" itemprop="description"><p><?= $pro['p_detail'];?></p></div>
           <div class="product-actions">
				
		<div class="product-variants">
      <div class="clearfix product-variants-item">
      <span class="control-label">Size</span>
              <select
          id="group_1"
          data-product-attribute="1"
          name="group[1]">
                      <option value="1" title="S" selected="selected">S</option>
                      <option value="2" title="M">M</option>
                      <option value="3" title="L">L</option>
                  </select>
          </div>
      <div class="clearfix product-variants-item">
      <span class="control-label">Color</span>
              <ul id="group_3">
                <li class="pull-xs-left input-container">
              <input class="input-color" type="radio" data-product-attribute="3" name="group[3]" value="8">
              <span
                class="color" style="background-color: #ffffff"                               ><span class="sr-only">White</span></span>
            </li>
                      <li class="pull-xs-left input-container">
              <input class="input-color" type="radio" data-product-attribute="3" name="group[3]" value="14" checked="checked">
              <span
                class="color" style="background-color: #5D9CEC"                               ><span class="sr-only">Blue</span></span>
            </li>
                      <li class="pull-xs-left input-container">
              <input class="input-color" type="radio" data-product-attribute="3" name="group[3]" value="16">
              <span
                class="color" style="background-color: #F1C40F"                               ><span class="sr-only">Yellow</span></span>
            </li>
                  </ul>
          </div>
  </div>
  		<section class="product-discounts">
  </section>
					  <div class="product-prices">
    
              
      <div
        class="product-price h5 has-discount"
        itemprop="offers"
        itemscope
        itemtype="https://schema.org/Offer"
      >
        <link itemprop="availability" href=""/>
        <div class="current-price">
          <span itemprop="price" content="82.65">Rs <?= $pro['p_price']?></span>

                                    <span class="discount discount-percentage">Save 5%</span>
                              </div>
          
      </div>

    <div class="tax-shipping-delivery-label">
    </div>
  </div>
  <form method="post" action="action.php">
					<div class="product-add-to-cart">
      <div class="product-quantity">
        <div class="qty">
        <input type="hidden" value="<?= $qs;?>" name="pid">
          <input
            type="text"
            name="qty"
            id="quantity_wanted"
            value="1"
            class="input-group"
            min="1"
            aria-label="Quantity"
          >
        </div>

        <div class="add">
          <button name='book' class="btn btn-primary add-to-cart" type="submit" >
            Buy Now
          </button>
        </div>
      </div>
      
      <div class="clearfix"></div>
     <p class="product-minimal-quantity">
              </p>
  </div>
  </form>
					<div class="product-additional-info">
    
</div><input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="Refresh">
	</form>
            </div>
            	  <div id="block-reassurance">
    <ul>
              <li>
          <div class="block-reassurance-item">
            <img src="https://codezeel.com/prestashop/PRS03/PRS030054/modules/blockreassurance/img/ic_verified_user_black_36dp_1x.png" alt="Security policy">
            <span class="h6">Security policy</span>
          </div>
        </li>
              
              <li>
          <div class="block-reassurance-item">
            <img src="https://codezeel.com/prestashop/PRS03/PRS030054/modules/blockreassurance/img/ic_swap_horiz_black_36dp_1x.png" alt="Return policy">
            <span class="h6">Return policy</span>
          </div>
        </li>
          </ul>
  </div>
		</div>
      </div>
    </div>
	<section class="product-tabcontent">
		<div class="tabs">
              <ul class="nav nav-tabs">
                                <li class="nav-item">
                  <a class="nav-link active" href="#description">Description</a>
                </li>
             </ul>

              <div class="tab-content" id="tab-content">
               <div class="tab-pane fade in active" id="description">
                 
                   <div class="product-description"><p><b>The standard Lorem Ipsum passage, used since the 1500</b></p>
<p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which has since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance.</p>
<p><b>Contrary to popular belief, Lorem Ipsum is not simply random text. </b></p>
<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p></div>
                 
               </div>
			</div>
          </div>
	
	</section>
	
    
               <!-- Define Number of product for SLIDER -->
      <div class="modal fade js-product-images-modal" id="product-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
                <figure>
          <img class="js-modal-product-cover product-cover-modal" width="790" src="img/p/2/5/25-large_default.jpg" alt="" title="" itemprop="image">
          <figcaption class="image-caption">
          
            <div id="product-description-short" itemprop="description"><p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias.</p></div>
          
        </figcaption>
        </figure>
        <aside id="thumbnails" class="thumbnails js-thumbnails text-xs-center">
          
            <div class="js-modal-mask mask ">
              <ul class="product-images js-modal-product-images">
                                  <li class="thumb-container">
                    <img data-image-large-src="https://codezeel.com/prestashop/PRS03/PRS030054/img/p/4/5/45-large_default.jpg" class="thumb js-modal-thumb" src="img/p/4/5/45-home_default.jpg" alt="" title="" width="247" itemprop="image">
                  </li>
                                  <li class="thumb-container">
                    <img data-image-large-src="https://codezeel.com/prestashop/PRS03/PRS030054/img/p/2/5/25-large_default.jpg" class="thumb js-modal-thumb" src="img/p/2/5/25-home_default.jpg" alt="" title="" width="247" itemprop="image">
                  </li>
                                  <li class="thumb-container">
                    <img data-image-large-src="https://codezeel.com/prestashop/PRS03/PRS030054/img/p/4/6/46-large_default.jpg" class="thumb js-modal-thumb" src="img/p/4/6/46-home_default.jpg" alt="" title="" width="247" itemprop="image">
                  </li>
                                  <li class="thumb-container">
                    <img data-image-large-src="https://codezeel.com/prestashop/PRS03/PRS030054/img/p/4/7/47-large_default.jpg" class="thumb js-modal-thumb" src="img/p/4/7/47-home_default.jpg" alt="" title="" width="247" itemprop="image">
                  </li>
                                  <li class="thumb-container">
                    <img data-image-large-src="https://codezeel.com/prestashop/PRS03/PRS030054/img/p/4/8/48-large_default.jpg" class="thumb js-modal-thumb" src="img/p/4/8/48-home_default.jpg" alt="" title="" width="247" itemprop="image">
                  </li>
                                  <li class="thumb-container">
                    <img data-image-large-src="https://codezeel.com/prestashop/PRS03/PRS030054/img/p/4/9/49-large_default.jpg" class="thumb js-modal-thumb" src="img/p/4/9/49-home_default.jpg" alt="" title="" width="247" itemprop="image">
                  </li>
                              </ul>
            </div>
          
                      <div class="arrows js-modal-arrows">
              <i class="material-icons arrow-up js-modal-arrow-up">&#xE5C7;</i>
              <i class="material-icons arrow-down js-modal-arrow-down">&#xE5C5;</i>
            </div>
                  </aside>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
      <footer class="page-footer">
      </footer>
  </section>
  </div>
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