<html lang="en">
<?php
include("head.php");
?>
  <body id="address" class="lang-en country-us currency-usd layout-left-column page-address tax-display-disabled page-customer-account">
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
      NEW ADDRESS
  </h1>
        </header>
  <section id="content" class="page-content">
<aside id="notifications">
  <div class="container">
      </div>
</aside>
  <div class="address-form">
  <div class="js-address-form">
    <form method="POST" action= data-id-address="10" data-refresh-url=>
    <section class="form-fields">
    <input type="hidden" name="id_address" value="10">
  <input type="hidden" name="id_customer" value="8">
    <input type="hidden" name="back" value="">
    <input type="hidden" name="token" value="d8e4b34fd63295a81c7dad32d97b8296">
  <div class="form-group row ">
    <label class="col-md-3 form-control-label">
              Alias
          </label>
    <div class="col-md-6">
          <input class="form-control" name="alias" type="text" value="My Address" maxlength="32">
    </div>
    <div class="col-md-3 form-control-comment">
                 Optional
    </div>
  </div>
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              First name
          </label>
    <div class="col-md-6">
          <input class="form-control" name="firstname" type="text" value="SUMIT" maxlength="32" required>
    </div>
    <div class="col-md-3 form-control-comment">
    </div>
  </div>
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              Last name
          </label>
    <div class="col-md-6">
          <input class="form-control" name="lastname" type="text" value="ANEJA" maxlength="32" required>
    </div>
    <div class="col-md-3 form-control-comment">
    </div>
  </div>
  <div class="form-group row ">
    <label class="col-md-3 form-control-label">
              Company
          </label>
    <div class="col-md-6">
          <input class="form-control" name="company" type="text" value="" maxlength="255">
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
          <input class="form-control" name="address1" type="text" value="22 2nd floor rishi nagar" maxlength="128" required>
    </div>
    <div class="col-md-3 form-control-comment">
    </div>
  </div>
  <div class="form-group row ">
    <label class="col-md-3 form-control-label">
              Address Complement
          </label>
    <div class="col-md-6">
          <input class="form-control" name="address2" type="text" value="" maxlength="128">
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
          <input class="form-control" name="city" type="text" value="india" maxlength="64" required>
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
                          <option value="2">AE</option>
                          <option value="3">AP</option>
                          <option value="4">Alabama</option>
                          <option value="5">Alaska</option>
                          <option value="6">Arizona</option>
                          <option value="7">Arkansas</option>
                          <option value="8">California</option>
                          <option value="9">Colorado</option>
                          <option value="10">Connecticut</option>
                          <option value="11">Delaware</option>
                          <option value="12">Florida</option>
                          <option value="13">Georgia</option>
                          <option value="14">Hawaii</option>
                          <option value="15">Idaho</option>
                          <option value="16">Illinois</option>
                          <option value="17">Indiana</option>
                          <option value="18">Iowa</option>
                          <option value="19">Kansas</option>
                          <option value="20">Kentucky</option>
                          <option value="21">Louisiana</option>
                          <option value="22">Maine</option>
                          <option value="23">Maryland</option>
                          <option value="24">Massachusetts</option>
                          <option value="25">Michigan</option>
                          <option value="26">Minnesota</option>

                          <option value="27">Mississippi</option>
                          <option value="28">Missouri</option>
                          <option value="29">Montana</option>
                          <option value="30">Nebraska</option>
                          <option value="31">Nevada</option>
                          <option value="32">New Hampshire</option>
                          <option value="33">New Jersey</option>
                          <option value="34">New Mexico</option>
                          <option value="35" selected="">New York</option>
                          <option value="36">North Carolina</option>
                          <option value="37">North Dakota</option>
                          <option value="38">Ohio</option>
                          <option value="39">Oklahoma</option>
                          <option value="40">Oregon</option>
                          <option value="41">Pennsylvania</option>
                          <option value="42">Rhode Island</option>
                          <option value="43">South Carolina</option>
                          <option value="44">South Dakota</option>
                          <option value="45">Tennessee</option>
                          <option value="46">Texas</option>
                          <option value="47">Utah</option>
                          <option value="48">Vermont</option>
                          <option value="49">Virginia</option>
                          <option value="50">Washington</option>
                          <option value="51">West Virginia</option>
                          <option value="52">Wisconsin</option>
                          <option value="53">Wyoming</option>
                          <option value="54">Puerto Rico</option>
                          <option value="55">US Virgin Islands</option>
                          <option value="56">District of Columbia</option>
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

      
        
          <input class="form-control" name="postcode" type="text" value="10001" maxlength="12" required>
                  

      
      
              

    </div>

    <div class="col-md-3 form-control-comment">
      
              
    </div>
  </div>


              
                          
                
  <div class="form-group row ">
    <label class="col-md-3 form-control-label required">
              Country
          </label>
    <div class="col-md-6">

      
        
          <select class="form-control form-control-select js-country" name="id_country" required="">
            <option value="" disabled="" selected="">-- please choose --</option>
                          <option value="21" selected="">United States</option>
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

      
        
          <input class="form-control" name="phone" type="text" value="" maxlength="32">
                  

      
      
              

    </div>

    <div class="col-md-3 form-control-comment">
      
                 Optional
              
    </div>
  </div>


              
                      
        </section>
      

      
      <footer class="form-footer clearfix">
        <input type="hidden" name="submitAddress" value="1">
        
          <button class="btn btn-primary float-xs-right" type="submit">
            Save
          </button>
        
      </footer>
      

    </form>
  </div>


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

<?php
include("footer.php");
?>
        <script type="text/javascript" src="front/cache/bottom-88d187.js"></script>

    </main>

    </body>
    </html>    