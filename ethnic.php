<!doctype html>
<html>
<head>
	<title>Ethnic Wear</title>
	<?php
	 	include("head.php");
	?>
  </head>
  <body id="category" class="lang-en country-us currency-usd layout-left-column page-category tax-display-disabled category-id-5 category-ethnic-wear category-id-parent-4 category-depth-level-4">
 <main id="page">

			<?php
			  	include("header.php");
				$qs=$_REQUEST['n'];
				$sql=mysqli_query($con,"select * from `sub_category` where `sub_category_id`='$qs'");
				$sub=mysqli_fetch_array($sql);
			?>
<section id="wrapper">



		<div class="container">

		  <div id="columns_inner">

				<?php
				include("side_left.php");
				?>



  <div id="content-wrapper" class="left-column col-xs-12 col-sm-8 col-md-9" style="width:80.70%">



  <section id="main">



	<input id="getCartLink" name="getCartLink" value="https://codezeel.com/prestashop/PRS03/PRS030054/index.php?controller=cart" type="hidden">
	<input id="getTokenId" name="getTokenId" value="ccd652330b4ae3bffd3d38f15a3d1cf8" type="hidden">

	<div class="block-category card card-block ">
				<div class="category-cover">
			<img src="img/c/5-category_default.jpg" alt="">
		</div>
				<h1 class="h1"><?=$sub['s_name'];?></h1>
			</div>



    <section id="products">

        


          <div id="" class="hidden-sm-down">
            <section id="js-active-search-filters" class="hide">
  </section>

          </div>


        <div id="">

            <div id="js-product-list">
	<div class="products row">
		<ul class="product_list grid gridcount"> <!-- removed product_grid-->
			<?php
			$sql=mysqli_query($con,"select * from `product` where `scid`='$qs' order by `p_id` desc limit 0,8");
					while($pro=mysqli_fetch_array($sql))
					{
						?>
					<li class="product_item col-xs-12 col-sm-6 col-md-4 col-lg-3">
                      <div class="product-miniature js-product-miniature">
                        <div class="thumbnail-container">
                         <a href="ethnic.php?n=<?=$pro['scid'];?>" class="thumbnail product-thumbnail"><img src ="product/<?= $pro['p_image'];?>" alt = "Consectetur Hampden" style="height:300px"></a>
                        </div>
                        <div class="product-description">
                        <span class="h3 product-title" itemprop="name"><a href=""><?php $str=$pro['p_name'];
						if(strlen($str)>=24)
						{
						for($i=0;$i<=24;$i++)
						{
							echo @$str[$i];
						}
						echo '...';
						}
						else
						{
							echo $str;
						}?></a></span>
                          <div class="product-price-and-shipping"><span itemprop="price" class="price">Rs <?= $pro['p_price'];?></span></div>
                          <div class="product-actions">
					  <a href="detail.php?n=<?=$pro['p_id'];?>" >
						<button class="btn btn-primary add-to-cart" type="submit" >Buy Now</button></a>
                          </div>
                        </div>
                     </div>
                  </li>
                  <?php
					}
				  ?>
		</ul>
	</div>
</div>

        </div>

        <div id="js-product-list-bottom">

            <div id="js-product-list-bottom"></div>

        </div>

          </section>

  </section>


  </div>



		  </div>
        </div>

      </section>

      <?php include("footer.php"); ?>

    </main>


               <script type="text/javascript" src="front/cache/bottom-88d187.js"></script>








  </body>
</html>
