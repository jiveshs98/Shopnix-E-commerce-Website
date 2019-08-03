<?php
session_start();
if($_SESSION['pay']!='payment')
{
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Payment </title>
<link href="css/framework.css" rel="stylesheet" media="all" />
<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
<script>

    $(function() {
      $('.adsense_btn_close').click(function() {
        $(this).closest('.adsense_fixed').css('display', 'none');
      });

      $('.adsense_btn_info').click(function() {
        if ($('.adsense_info_content').is(':visible')) {
          $('.adsense_info_content').css('display', 'none');
        } else {
          $('.adsense_info_content').css('display', 'block');
        }
      });

    });

  </script>
<body>
	<div class="main">
		<h1>Payment Form Widget</h1>
		<!---728x90--->

		<div class="content">
			
			<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
					<script type="text/javascript">
						$(document).ready(function () {
							$('#horizontalTab').easyResponsiveTabs({
								type: 'default', //Types: default, vertical, accordion           
								width: 'auto', //auto or any width like 600px
								fit: true   // 100% fit in a container
							});
						});
						
					</script>
						<div class="sap_tabs">
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								<div class="pay-tabs">
									<h2>Select Payment Method</h2>
									  <ul class="resp-tabs-list">
										  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span><label class="pic1"></label>Credit Card</span></li>
										  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span><label class="pic3"></label>Net Banking</span></li>
										  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span><label class="pic4"></label>PayPal</span></li> 
										  <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span><label class="pic2"></label>Debit Card</span></li>
										  <div class="clear"></div>
									  </ul>	
								</div>
								<div class="resp-tabs-container">
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="payment-info">
											<h3>Personal Information</h3>
											<form method="post" onsubmit="return valid()" name="frm" action="booking_order.php">
												<div class="tab-for">				
													<h5>EMAIL ADDRESS</h5>
														<input value="" type="text" name="emailid" required>
													<h5>FIRST NAME</h5>													
														<input value="" type="text" name="fname" required>
												</div>			
											
											<h3 class="pay-title">Credit Card Info</h3>
											
												<div class="tab-for">				
													<h5>NAME ON CARD</h5>
														<input value="" type="text" name="cname" required>
													<h5>CARD NUMBER</h5>													
														<input class="pay-logo" type="text" name="cno" required>
												</div>	
												<div class="transaction">
													<div class="tab-form-left user-form">
														<h5>EXPIRATION</h5>
															<ul>
																<li>
																	<input type="number" name="edate" required class="text_box" type="text"  />	
																</li>
																<li>
																	<input type="number" name='eyear' required class="text_box" type="text" />	
																</li>
																
															</ul>
													</div>
													<div class="tab-form-right user-form-rt">
														<h5>CVV NUMBER</h5>													
														<input type="text" required value="" name="cvv" required>
													</div>
													<div class="clear"></div>
												</div>
												<input value="SUBMIT" type="submit" name="sub">
											</form>
											<div class="single-bottom">
													<ul>
														<li>
															<input type="checkbox"  id="brand" value="">
															<label for="brand"><span></span>By checking this box, I agree to the Terms & Conditions & Privacy Policy.</label>
														</li>
													</ul>
											</div>
										</div>
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                                    <form method="post" action="booking_order.php">
										<div class="payment-info">
											<h3>Net Banking</h3>
											<div class="radio-btns">
												<div class="swit">								
													<div class="check_box"> <div class="radio"> <label><input name="radio" checked="" type="radio"><i></i>Andhra Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input name="radio" type="radio"><i></i>Allahabad Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input name="radio" type="radio"><i></i>Bank of Baroda</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input name="radio" type="radio"><i></i>Canara Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input name="radio" type="radio"><i></i>IDBI Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input name="radio" type="radio"><i></i>Icici Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input name="radio" type="radio"><i></i>Indian Overseas Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input name="radio" type="radio"><i></i>Punjab National Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input name="radio" type="radio"><i></i>South Indian Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input name="radio" type="radio"><i></i>State Bank Of India</label> </div></div>		
												</div>
												<div class="swit">								
													<div class="check_box"> <div class="radio"> <label><input name="radio" checked="" type="radio"><i></i>City Union Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input name="radio" type="radio"><i></i>HDFC Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input name="radio" type="radio"><i></i>IndusInd Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input name="radio" type="radio"><i></i>Syndicate Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input name="radio" type="radio"><i></i>Deutsche Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input name="radio" type="radio"><i></i>Corporation Bank</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input name="radio" type="radio"><i></i>UCO Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input name="radio" type="radio"><i></i>Indian Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input name="radio" type="radio"><i></i>Federal Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input name="radio" type="radio"><i></i>ING Vysya Bank</label> </div></div>	
												</div>
												<div class="clear"></div>
											</div>
											<input value="SUBMIT" type="submit" name="sub">
										</div>
									</div>
                                    </form>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
										<div class="payment-info">
											<h3>PayPal</h3>
											<h4>Already Have A PayPal Account?</h4>
											<div class="login-tab">
												<div class="user-login">
													<h2>Login</h2>
													
													<form method="post" action="booking_order.php">
														<input type="text"  name="email"  required>
														<input type="password"   name="pass"  required>
															<div class="user-grids">
																<div class="user-left">

																	<div class="single-bottom">
																			<ul>
																				<li>
																					<input type="checkbox"  id="brand1" value="">
																					<label for="brand1"><span></span>Remember me?</label>
																				</li>
																			</ul>
																	</div>
																</div>
																<div class="user-right">
																	<input value="LOGIN" name="sub" type="submit">
																</div>
																<div class="clear"></div>
															</div>
													</form>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">	
										<div class="payment-info">
											
											<h3 class="pay-title">Dedit Card Info</h3>
											<form method="post" action="booking_order.php">
												<div class="tab-for">				
													<h5>NAME ON CARD</h5>
														<input value="" type="text" required>
													<h5>CARD NUMBER</h5>													
														<input class="pay-logo" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0000-0000-0000-0000';}" required>
												</div>	
												<div class="transaction">
													<div class="tab-form-left user-form">
														<h5>EXPIRATION</h5>
															<ul>
																<li>
																	<input type="number" required class="text_box" type="text" value="6" min="1" />	
																</li>
																<li>
																	<input type="number" required class="text_box" type="text" value="1988" min="1" />	
																</li>
																
															</ul>
													</div>
													<div class="tab-form-right user-form-rt">
														<h5>CVV NUMBER</h5>													
														<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'xxxx';}" required>
													</div>
													<div class="clear"></div>
												</div>
												<input value="SUBMIT" type="submit" name="sub">
											</form>
											<div class="single-bottom">
													<ul>
														<li>
															<input type="checkbox"  id="brand" value="">
															<label for="brand"><span></span>By checking this box, I agree to the Terms & Conditions & Privacy Policy.</label>
														</li>
													</ul>
											</div>
										</div>	
									</div>
								</div>	
							</div>
						</div>	
		</div>
	</div>
    <script>
	function valid()
	{
		var a=frm.cno.value;
		var e=frm.emailid.value;
		var b=frm.edate.value;
		var c=frm.eyear.value;
		var d=frm.cvv.value;
		if(!e.match(/^([a-zA-Z0-9\.\_])+@(([a-zA-Z0-9])+\.).*([a-zA-Z])$/))
		{
			frm.emailid.style.border="2px solid #F33";
			return false;
		}
		else
		{
			frm.emailid.style.border="1px solid #ddd";
		}
		if(a.length<16 || a.length>16)
		{
			frm.cno.style.border="2px solid #F33";
			return false;
		}
		else
		{
			frm.cno.style.border="1px solid #ddd";
		}
		if(b>12)
		{
			frm.edate.style.border="2px solid #F33";
			return false;
		}
		if(b.length>2)
		{
			frm.edate.style.border="2px solid #F33";
			return false;
		}
		else
		{
			frm.edate.style.border="1px solid #ddd";
		}
		if(c.length>2)
		{
			frm.eyear.style.border="2px solid #F33";
			return false;
		}
		else
		{
			frm.eyear.style.border="1px solid #ddd";
		}
		if(d.length>3)
		{
			frm.cvv.style.border="2px solid #F33";
			return false;
		}
		else
		{
			frm.cvv.style.border="1px solid #ddd";
		}
	}
	</script>
         
</body>

</html>