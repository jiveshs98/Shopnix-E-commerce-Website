<!doctype html>
<html lang="en">
<head>
<?php
include("head.php");
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
		  <li itemprop="itemListElement" itemscope itemtype="">
			<a itemprop="item" href="">
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
  Create an account
</h1>
        </header>
      <section id="content" class="page-content card card-block">
      <section class="register-form">
        <p>Already have an account? <a href="">Log in instead!</a></p>
<form action="action.php" class="js-customer-form" method="post">
  <section>
    <input type="hidden" name="id_customer" value="">
    <br>
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              First name
          </label>
    <div class="col-md-6">
          <input
            class="form-control"
            name="firstname"
            type="text"
            value=""
                                    required          >
    </div>
    <div class="col-md-3 form-control-comment">
    </div>
  </div>
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              Last name
          </label>
    <div class="col-md-6">
          <input
            class="form-control"
            name="lastname"
            type="text"
            value=""
                                    required          >
    </div>
    <div class="col-md-3 form-control-comment">
    </div>
  </div>
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              Contact
          </label>
    <div class="col-md-6">
          <input class="form-control" name="mobile"    type="text" value="" required>
    </div>
    <div class="col-md-3 form-control-comment">
    </div>
  </div>
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
              <!-- <button
                class="btn"
                type="button"
                data-action="show-password"
                data-text-show="Show"
                data-text-hide="Hide"
              >
                Show
              </button> -->
            </span>
          </div>
    </div>
    <div class="col-md-3 form-control-comment">
    </div>
  </div>
  <div class="form-group row ">
    <label class="col-md-3 form-control-label">
              Birthdate
          </label>
    <div class="col-md-6">
          <input
            class="form-control"
            name="birthday"
            type="text"
            value=""
            placeholder="YYYY/MM/DD"                                  >
                      <span class="form-control-comment">
              (E.g.: 2018/01/19)
            </span>
    </div>
  </div>


  </section>
    <footer class="form-footer clearfix">
      <input type="hidden" name="submitCreate" value="1">
        <button name="sub" class="btn btn-primary form-control-submit float-xs-right" data-link-action="save-customer" type="submit">
          Save
        </button>
    </footer>
</form>
      </section>
      </section>
      <footer class="page-footer">
      </footer>
  </section>
  </div>
		  </div>
        </div>
      </section>
          </main>
            <?php
			include("footer.php");
			?>
              <script type="text/javascript" src="front/cache/bottom-88d187.js"></script>

 </body>
</html>
