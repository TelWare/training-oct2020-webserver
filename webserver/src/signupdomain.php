<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	<title>
	Domain Signup Page</title>
			<link rel="shortcut icon" type="image/x-icon" href="https://sandbox-core1.telware.net/SiPbx/getimage.php?filename=favicon.gif&server=oneclouduc.telware.net" />
		<link rel="icon" type="image/x-icon" href="https://sandbox-core1.telware.net/SiPbx/getimage.php?filename=favicon.gif&server=oneclouduc.telware.net" />
			
		<link rel="stylesheet" href="https://sandbox-core1.telware.net/portal/css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="https://sandbox-core1.telware.net/portal/css/jquery-ui-1.10.bootstrap.css" type="text/css">
	
		<link rel="stylesheet" href="https://sandbox-core1.telware.net/portal/css/portal.php?background=%23eeefe9&primary1=%21865B1&primary2=%2338A6DE&bar1=%238c8c8c&bar2=%23cccccc" type="text/css">
						
		
</head>
<body>
	<div class="fixed-container">
			</div>
	<div id="login-container">
		
<div id="login-group">
	<div id="login-box" style="
    width: 350px;
">
		
		<div id="login-logo">
		
		
					
		<img src="https://sandbox-core1.telware.net/SiPbx/getimage.php?server=oneclouduc.telware.net&filename=portal_landing.png&server=oneclouduc.telware.net" style="width:302px;height:56px;" />
		</div>
		
		<div id="login-text"  style="width: 330px;  font-size: 90%;text-align: center; padding-top: 10px;padding-left: 10px;padding-right: 10px;">
		
		
		Example creating a new domain... Please enter the data below.
		
		</div>
		
		<form action="adddomain.php" class="form-stacked" id="LoginLoginForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST" /></div>		<div id="login-fields">
			
			<div>
				<label for="reseller">Reseller Name</label>
				<div>
					<input name="reseller" type="text" value="hacktober" id="" />				</div>
			</div>
			<div>
				<label for="domain">Prefered Domain Name</label>
				<div>
					<input name="domain" type="text" id="" />				</div>
			</div>
			<div>
				<label for="email">Email</label>
				<div>
					<input  name="email"  type="text" id="" />				</div>
			</div>
			
		</div>
		<BR>
<div id="login-submit" style="padding-bottom: 15px;">
        		<div class="submit"><input class="btn btn-large color-primary" update="#login" complete="hideModalIf(&quot;#login&quot;);" type="submit" value="Create Domain"></div>    		</div>	
	</div>
	<div id="footer">
					<p>Copyright &#169; 2020 by TelWare Corporation</p>	
			<p>Domain Creation Script </p>
	
	</div><!-- /login-box -->
	<?php  if (isset($_REQUEST['error'])){
		
		if ($_REQUEST['error'] == "noResources")
			echo '<div class="alert alert-danger flashMessage login-message">We are currently unable to process do to lack of Available phone numbers. </div>';
		if ($_REQUEST['error'] == "domain")
			echo '<div class="alert alert-danger flashMessage login-message">The Domain already Exists. </div>';
		if ($_REQUEST['error'] == "reseller")
			echo '<div class="alert alert-danger flashMessage login-message">The Reseller doesn\'t exist. </div>';
		if ($_REQUEST['error'] == "incomplete")
			echo '<div class="alert alert-danger flashMessage login-message">Please fill out all of the fields. </div>';
		if ($_REQUEST['error'] == "server")
			echo '<div class="alert alert-danger flashMessage login-message">Sorry! Something went wrong on our side. Please try again later. </div>';
		
		
	} ?>
	
</div><!-- /login-group -->
	
	</div>	
	<!-- majority of javascript at bottom so the page displays faster -->
		
</body>

</html>