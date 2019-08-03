<!doctype html>
<html lang="en">
<head>
  <?php
  	include("head.php");
  ?>
  </head>
  <body id="index" class="lang-en country-us currency-usd layout-left-column page-index tax-display-disabled">
<main id="page">
	<?php
		include("header.php");
	?>
<aside id="notifications">
  <div class="container">
      </div>
</aside>
	  		<nav data-depth="1" class="breadcrumb parallax_breadcrumb">
   <div class="container">
	  <ol itemscope itemtype="http://schema.org/BreadcrumbList">

		  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
			<a itemprop="item" href="">
			  <span itemprop="name">Home</span>
			</a>
			<meta itemprop="position" content="1">
		  </li>

			  </ol>
  </div>
</nav>


	  <section id="wrapper">




	<div class="flexslider" data-interval="3000" data-pause="true" style="height:460px; margin-bottom:10px;">
		<div class="loadingdiv spinner"></div>
		<ul class="slides">
							<li class="slide">
					<a href=" " title="sample-1">
						<img src="front/img/banner/images14.jpg" alt="sample-1" title="Sample 1" height="460px"/>
					</a>
				</li>
							<li class="slide">
					<a href=" " title="sample-2">
						<img src="front/img/banner/slider-22.jpg" height="460px" />
					</a>
				</li>
                <li class="slide">
					<a href=" " title="sample-3">
					<img src="front/img/banner/banner.jpg" height="460px"/>
					</a>
				</li>
                <li class="slide">
					<a href=" " title="sample-4">
					<img src="front/img/banner/mens-accessories-category-banner_(1).jpg" height="460px"/>
					</a>
				</li>
                <li class="slide">
					<a href=" " title="sample-5">
						<img src="front/img/banner/women-fashion3.jpg" height="460px"/>
					</a>
				</li>
                <li class="slide">
					<a href=" " title="sample-6">
						<img src="front/img/banner/banner-furniture-choice-furniture-superstore-images-banner-room-copy-wallpaper-and-background-photos-banner-furniture-outlet-hillsboro-or.jpg" height="460px"/>
					</a>
				</li>
                <li class="slide">
					<a href=" " title="sample-6">
						<img src="front/img/banner/kids-banner.jpg" height="460px"/>
					</a>
				</li>
                </li>
                <li class="slide">
					<a href=" " title="sample-6">
						<img src="front/img/banner/Flipkart_Summer_Sale_TVs_Appliances_Offers.jpg" height="460px"/>
					</a>
				</li>
                <li class="slide">
					<a href=" " title="sample-6">
						<img src="front/img/banner/1516252310Mens-banner-min.jpg" height="460px"/>
					</a>
				</li>
                <li class="slide">
					<a href=" " title="sample-6">
						<img src="front/img/banner/untitled.png" height="460px"/>
					</a>
				</li>
					</ul>
	</div>


		<div class="container">
		  <div id="columns_inner">
			<?php
			include('side_left.php');
			?>
  <div id="content-wrapper" class="left-column col-xs-12 col-sm-8 col-md-9" style="width:80.70%">
  <section id="main">
<section id="content" class="page-home">
<div id="czsubbannercmsblock" class="block czsubbanners">
	<div class="czsubbanner_container">
		<div class="subbanners">
<div class="one-third subbanner-part1">
<div class="subbanner-inner">
<div class="subbanner subbanner1">
<div class="subbanner-inner"><a href="#" class="banner-anchor"><img src="front/img/cms/sub-banner-1.jpg" alt="sub-banner1" class="subbanner-image1" /></a>
<div class="subbanner-text"><span class="main-title">New Collection Handbag</span> <a class="shop-now" href="#">View Collection</a></div>
</div>
</div>
</div>
</div>
<div class="one-third subbanner-part2">
<div class="subbanner-inner">
<div class="subbanner subbanner2">
<div class="subbanner-inner"><a href="#" class="banner-anchor"><img src="front/img/cms/sub-banner-2.jpg" alt="sub-banner2" class="subbanner-image2" /></a>
<div class="subbanner-text"><span class="main-title">Best Handbag Fashion</span> <a class="shop-now" href="#">View Collection</a></div>
</div>
</div>
</div>
</div>
<div class="one-third subbanner-part3">
<div class="subbanner-inner">
<div class="subbanner subbanner3">
<div class="subbanner-inner"><a href="#" class="banner-anchor"><img src="front/img/cms/sub-banner-3.jpg" alt="sub-banner3" class="subbanner-image3" /></a>
<div class="subbanner-text"><span class="main-title">New Fashionbag Collection</span> <a class="shop-now" href="#">View Collection</a></div>
</div>
</div>
</div>
</div>
</div>
	</div>
</div>
	<section class="cz-hometabcontent">
		<h2 class="h1 products-section-title text-uppercase">Featured Products</h2>
		<div class="tabs">
			<div class="tab-content">
				<div id="featureProduct" class="cz_productinner tab-pane active">
<section class="featured-products clearfix">
	<h2 class="h1 products-section-title text-uppercase">
		<span>Featured products</span>
	</h2>
	<div class="products">
					<ul id="feature-grid" class="featured_grid product_list grid row gridcount">
                    <?php
					$sql=mysqli_query($con,"select * from `product` order by `p_id` desc limit 0,8");
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
						if(strlen($str)>=30)
						{
						for($i=0;$i<=30;$i++)
						{
							echo (@$str[$i]);
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
</section>
				</div>
			</div>
		</div>
	</section>
<div id="czbannercmsblock" class="block czbanners">
	<div class="cmsbanners">
<div class="one-third cmsbanner-part1">
<div class="cmsbanner-inner">
<div class="cmsbanner cmsbanner1"><a href="#" class="banner-anchor"><img src="front/img/cms/cms-banner-1.jpg" alt="cms-banner1" class="banner-image1" /></a>
<div class="banner-detail"><span class="banner-title">New Fashion Bag</span><span class="sub-title">Collection</span></div>
</div>
</div>
</div>
<div class="one-third cmsbanner-part2">
<div class="cmsbanner-inner">
<div class="cmsbanner cmsbanner2"><a href="#" class="banner-anchor"><img src="front/img/cms/cms-banner-2.jpg" alt="cms-banner2" class="banner-image2" /></a>
<div class="banner-detail"><span class="banner-title">New Fashion</span> <span class="sub-title">Collection</span></div>
</div>
</div>
</div>
<div class="one-third cmsbanner-part3">
<div class="cmsbanner-inner">
<div class="cmsbanner cmsbanner3"><a href="#" class="banner-anchor"><img src="front/img/cms/cms-banner-3.jpg" alt="cms-banner3" class="banner-image3" /></a>
<div class="banner-detail"><span class="banner-title">Bag The</span> <span class="sub-title">New Collection</span></div>
</div>
</div>
</div>
</div>
</div>

<div id="cztestimonialcmsblock">
	<div class="parallax czparallax_2" data-source-url="modules/cz_testimonialcmsblock/views/img/parallax-bg.jpg">
		<div class="testimonial_container container">
			<div class="testimonial_wrapper">
<div class="testimonial-area">
<ul id="testimonial-carousel" class="cz-carousel product_list"><li class="item">
<div class="testimonial-item">
<div class="testimonial-image-inner">
<div class="item cms_face">
<div class="testimonial-image"><img src="front/img/cms/user1.jpg" alt="testimonial-user1" title="testimonial-user1" width="90" height="90" /></div>
<div class="title">
<div class="name"><a href="#">Taruna Goyal</a></div>
<span class="subheading">Webdesigner</span></div>
</div>
</div>
</div>
<div class="testimonial-detail">
<div class="description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, rem aperiam, eaque ipsa quae ab illo quasi.
<div class="quote-image"></div>
</div>
</div>
</li>
<li class="item">
<div class="testimonial-item">
<div class="testimonial-image-inner">
<div class="item cms_face">
<div class="testimonial-image"><img src="front/img/cms/user2.jpg" alt="testimonial-user2" title="testimonial-user2" width="90" height="90" /></div>
<div class="title">
<div class="name"><a href="#">Jivesh Singh</a></div>
<span class="subheading">Web Developer</span></div>
</div>
</div>
</div>
<div class="testimonial-detail">
<div class="description">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.
<div class="quote-image"></div>
</div>
</div>
</li>
<li class="item">
<div class="testimonial-item">
<div class="testimonial-image-inner">
<div class="item cms_face">
<div class="testimonial-image"><img src="front/img/cms/user3.jpg" alt="testimonial-user3" title="testimonial-user3" width="90" height="90" /></div>
<div class="title">
<div class="name"><a href="#">Sumit Aneja</a></div>
<span class="subheading">Web Developer</span></div>
</div>
</div>
</div>
<div class="testimonial-detail">
<div class="description">We love the approachable format, and the fact that they chose to feature customers that users can really relate to. When you click into any story.
<div class="quote-image"></div>
</div>
</div>
</li>
</ul></div>
</div>
		</div>
	</div>
</div>

<section class="brands">
	<h2 class="h1 products-section-title text-uppercase">
		<span>
		<a href=" " title="Top Brands">			Top Brands
		</a>		</span>
	</h2>
	<div class="products">
							<div class="customNavigation">
					<a class="btn prev brand_prev">&nbsp;</a>
					<a class="btn next brand_next">&nbsp;</a>
				</div>

				<ul id="brand-carousel" class="cz-carousel product_list">

							<li class="item">
					<div class="brand-image">
					<a href=" " title="Consectetur">
						<img src="front/img/m/2.jpg" alt="Consectetur" />
					</a>
					</div>
									</li>
							<li class="item">
					<div class="brand-image">
					<a href=" " title="Doloremque">
						<img src="front/img/m/6.jpg" alt="Doloremque" />
					</a>
					</div>
									</li>
							<li class="item">
					<div class="brand-image">
					<a href=" " title="Exercitation">
						<img src="front/img/m/1.jpg" alt="Exercitation" />
					</a>
					</div>
									</li>
							<li class="item">
					<div class="brand-image">
					<a href=" " title="Necessitatibus">
						<img src="front/img/m/3.jpg" alt="Necessitatibus" />
					</a>
					</div>
									</li>
							<li class="item">
					<div class="brand-image">
					<a href=" " title="Praesentium">
						<img src="front/img/m/4.jpg" alt="Praesentium" />
					</a>
					</div>
									</li>
							<li class="item">
					<div class="brand-image">
					<a href=" " title="Temporibus">
						<img src="front/img/m/7.jpg" alt="Temporibus" />
					</a>
					</div>
									</li>
							<li class="item">
					<div class="brand-image">
					<a href=" " title="Voluptatibus">
						<img src="front/img/m/5.jpg" alt="Voluptatibus" />
					</a>
					</div>
									</li>
			</ul>
			</div>
</section>
</section>
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
        <script type="text/javascript" src="front/cache/bottom-88d187.js" ></script>
  </body>
</html>
