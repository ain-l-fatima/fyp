<html>
  <head>
    <title>Google reCAPTCHA v2 Checkbox</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
<div class="container">
<form action="verify_recaptcha.php" method="post">
    
    <div class="form-group">
        <input type="text" name="name" value="" placeholder="Employee Name" required="" />
    </div>
    <div class="form-group">	
        <input type="email" name="email" value="" placeholder="Email" required="" />
    </div>
	<div class="form-group">	
        <input type="text" name="phone" value="" placeholder="Phone" required="" />
    </div>
    
		
    
        <div class="g-recaptcha" data-sitekey="6Le3gUEnAAAAAMYnVEczskvWj-67lAoGad5VLdVi"></div>
        <input class="btn btn-info" type="submit" name="submit" value="SUBMIT" >
    </form>
    </div>
    </body>
    </html>