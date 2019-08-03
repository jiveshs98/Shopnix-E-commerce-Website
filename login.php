<!doctype html>
<html lang="en">
<head>
<?php
include("head.php");
if(@$_SESSION['ses']=="asdf6778ysdf")
{
	echo "<script>location='booking.php'</script>";
}
?>
</head>
<body id="authentication" class="lang-en country-us currency-usd layout-left-column page-authentication tax-display-disabled page-customer-account">
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
			<a itemprop="item" href="index-2.html">
			  <span itemprop="name">Home</span>
			</a>
			<meta itemprop="position" content="1">
		  </li>
		  
			  </ol>
  </div>
</nav>
	  <section id="wrapper">
		<div class="container">
		  <div id="columns_inner">
			  
				<div id="left-column" class="col-xs-12" style="width:19.30%">
</div>
		  				</div>
  <div id="content-wrapper" class="left-column col-xs-12 col-sm-8 col-md-9" style="width:80.70%">
    
  <section id="main">
    <header class="page-header">
          <h1>
  Log in to your account
</h1>
        </header>
      <section id="content" class="page-content card card-block">
      <section class="login-form">
  <form id="login-form" action="action.php" method="post">
    <section>
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              Email
          </label>
    <div class="col-md-6">
          <input
            class="form-control"
            name="email"
            type="email"
            value=""
                                    required          >
    </div>
    <div class="col-md-3 form-control-comment">
    </div>
  </div>
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              Password
          </label>
    <div class="col-md-6">
          <div class="input-group js-parent-focus">
            <input
              class="form-control js-child-focus js-visible-password"
              name="password"
              type="password"
              value=""
              pattern=".{5,}"
              required            >
            <span class="input-group-btn">
              <button
                class="btn"
                type="button"
                data-action="show-password"
                data-text-show="Show"
                data-text-hide="Hide"
              >
                Show
              </button>
            </span>
          </div>
    </div>
    <div class="col-md-3 form-control-comment">
    </div>
  </div>
    </section>
   <footer class="form-footer text-sm-center clearfix">
       
        <button name="signin" class="btn btn-primary" data-link-action="sign-in" type="submit" class="form-control-submit">
            Sign in
          </button>
      </footer>
  </form>
    </section>
      <hr/>
      <div class="no-account">
        <a href="indexc94a.html?controller=authentication&amp;create_account=1" data-link-action="display-register-form">
          No account? Create one here
        </a>
      </div>
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
        <script type="text/javascript" src="front/cache/bottom-88d187.js"></script>

  </body>
</html>