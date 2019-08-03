<html lang="en">
<?php
include("head.php");
?>
<body id="addresses" class="lang-en country-us currency-usd layout-left-column page-addresses tax-display-disabled">
 <main id="page">
<?php
include("header.php");
?>
	  <section id="wrapper">
		<div class="container">
  <div id="content-wrapper" class="left-column col-xs-12 col-sm-8 col-md-9" style="width:80.70%">
  <section id="main">
        <header class="page-header">
          <h1>
  Your addresses
</h1>
        </header>
  <section id="content" class="page-content">
<aside id="notifications">
  <div class="container">
      </div>
</aside>
      <div class="col-lg-4 col-md-6 col-sm-6">
  <article id="address-10" class="address" data-id-address="10">
    <div class="address-body">
      <h4>My Address</h4>
      <address><?= $user['name'];?> <?= $user['last_name'];?><br><?= $user['address'];?><br><?= $user['country'];?> <?= $user['zip/postal_code'];?></address>
    </div>
      <div class="address-footer">
        <a href="update_address.php" data-link-action="edit-address">
          <i class="material-icons"></i>
          <span>Update</span>
        </a>
      </div>
    
  </article>

    
    </div>
    <div class="clearfix"></div>
  <div class="addresses-footer">
    <a href="create_newaddress.php" data-link-action="add-address">
      <i class="material-icons"></i>
      <span>Create new address</span>
    </a>
  </div>

  </section>


    
      <footer class="page-footer">
        
  
    
  <a href= class="account-link">
    <i class="material-icons"></i>
    <span>Back to your account</span>
  </a>
  <a href= class="account-link">
    <i class="material-icons"></i>
    <span>Home</span>
  </a>
     </footer>
</section>

  </div>
	  
		  </div>
        </div>
  </section>
   <footer id="footer">

<a class="top_button" href="#" style="">&nbsp;</a>
      </footer>
    </main>
       <?php
	   include("footer.php");
	   ?>
               <script type="text/javascript" src="front/cache/bottom-88d187.js"></script>

	</body>
    </html>        


    

    
    
    
  

