<!doctype html>
<html lang="en">
<?php
include("head.php");
?>
<body id="checkout" class="lang-en country-us currency-usd layout-left-column page-product tax-display-disabled product-id-2 product-exercitat-virginia product-id-category-7 product-id-manufacturer-2 product-id-supplier-1 product-on-sale product-available-for-order">
<main id="page">
<?php
include("header.php");
$userid=$user['uid'];
$sql=mysqli_query($con,"select * from `order` where `uid`='$userid'");
?>
</header>  
<section id="wrapper">
 <div class="container">
	<div id="content-wrapper" class="left-column col-xs-12 col-sm-12 col-md-12">
  <section id="main">
    <div class="cart-grid row">
      <div class="cart-grid-body col-xs-12 col-lg-12">
        <div class="card cart-container">
          <div class="card-block">
            <h1 class="h1">ORDER CONFIRM</h1>
          </div>
          <hr class="separator">
   <?php
   while($rec=mysqli_fetch_array($sql))
   {
	   $pd=mysqli_query($con,"select * from `product` where `p_id`='$rec[p_id]'");
	   $prd=mysqli_fetch_array($pd);
   ?>       
  <div class="cart-overview js-cart">
        <ul class="cart-items">
              <li class="cart-item">
            <div class="product-line-grid">
  <!--  product left content: image-->
  <div class="product-line-grid-left col-md-2 col-xs-4">
    <span class="product-image media-middle">
      <img src="product/<?=$prd['p_image'];?>" alt="Accusantium doloremque" height="100px">
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
  <div class="product-line-grid-right product-line-actions col-md-4 col-xs-12">
    <div class="row">
      <div class="col-xs-4 hidden-md-up"></div>
      <div class="col-md-10 col-xs-6">
        <div class="row">
          <div class="col-md-6 col-xs-6 qty">
           <?= $rec['quantity'];?>               
           </div>
          <div class="col-md-6 col-xs-2 price">
            <span class="product-price">
              <strong>
                  Rs<?= $rec['quantity']*$prd['p_price']; ?>
                              </strong>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-2">
  	<a href="javascript:orderdell(<?= $rec[0];?>)">
        Remove order
      </a>
  </div>
  <div class="clearfix"></div>
</div>
          
        </li>
                  </ul>
      </div>
      <?php
	  }
	  ?>
      
        </div>
        
      </div>

    </div>
  </section>
  </div>
 
 </div>
</section>
     
<script>
function orderdell(id)
{
	var a=confirm("are Your sour to order cancel");
	if(a==true)
	{
		location="orderdell.php?n="+id;
	}
}
</script>

<?php
include("footer.php");
?>
    </main>
<script type="text/javascript" src="front/cache/bottom-88d187.js"></script>
  </body>
</html>