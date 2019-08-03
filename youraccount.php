<html lang="en">
<?php 
include("head.php");
?>
  <body id="identity" class="lang-en country-us currency-usd layout-left-column page-identity tax-display-disabled page-customer-account">
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
  Your personal information
</h1>
        </header>
  <section id="content" class="page-content">
<aside id="notifications">
  <div class="container">
      </div>
</aside>

<form action="updateuser.php?n=<?= $user['uid'];?>" id="customer-form" class="js-customer-form" method="post">
  <section>
    <input type="hidden" name="id_customer" value="8">
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              First name
          </label>
    <div class="col-md-6">

      
        
          <input class="form-control" name="firstname" type="text" value="<?= $user['name'];?>" required>
                  

      
      
              

    </div>

    <div class="col-md-3 form-control-comment">
      
              
    </div>
  </div>


        
              
          
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              Last name
          </label>
    <div class="col-md-6">

      
        
          <input class="form-control" name="lastname" type="text" value="<?= $user['last_name'];?>" required>
                  

      
      
              

    </div>

    <div class="col-md-3 form-control-comment">
      
              
    </div>
  </div>


        
              
          
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              Email
          </label>
    <div class="col-md-6">

      
        
          <input class="form-control" name="email" type="email" value="<?= $user['email'];?>" required disabled>
                  

      
      
              

    </div>

    <div class="col-md-3 form-control-comment">
      
              
    </div>
  </div>
        
  <div class="form-group row ">
    <label class="col-md-3 form-control-label">
              New password
          </label>
    <div class="col-md-6">

          <div class="input-group js-parent-focus">
            <input class="form-control js-child-focus js-visible-password" name="password" type="password" value="" pattern=".{5,}">
            <span class="input-group-btn">
              <button class="btn" type="button" data-action="show-password" data-text-show="Show" data-text-hide="Hide">
                Show
              </button>
            </span>
          </div>
        
    </div>
  </div>


        
              
          
  <div class="form-group row ">
    <label class="col-md-3 form-control-label">
              Birthday
          </label>
    <div class="col-md-6">

      
        
          <input class="form-control" name="birthday" type="text" value="<?= $user['birthday'];?>" placeholder="YYYY/MM/DD">
                      <span class="form-control-comment">
              (E.g.: 1970/02/01)
            </span>
                  

      
      
              

    </div>

    <div class="col-md-3 form-control-comment">
      
                 Optional
              
    </div>
  </div>
   
  </section>

  
    <footer class="form-footer clearfix">
      <input type="hidden" name="submitCreate" value="1">
      
        <button class="btn btn-primary form-control-submit float-xs-right" data-link-action="save-customer" type="submit" name="save">
          Save
        </button>
      
    </footer>
  

</form>
  </section>
      <footer class="page-footer">
  <a href="">
    <i class="material-icons"></i>
    <span>Back to your account</span>
  </a>
  <a href="" class="account-link">
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
      <?php
	  include("footer.php");
	  ?>
              <script type="text/javascript" src="front/cache/bottom-88d187.js"></script>

    </main>
</footer>
</body>
</html>