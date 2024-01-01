<?php 

	include "mail.php";
	//send_mail($recipient,$subject,$message);
    send_mail("stitchery73@gmail.com","tset","hello");
	$error = "";

	if(count($_POST) > 0)
	{

		//something was posted
		$recipient = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];

		if(empty($recipient)){
			$error .= "recipient can not be empty<br>";
		}

		if(empty($subject)){
			$error .= "subject can not be empty<br>";
		}

		if(empty($message)){
			$error .= "message can not be empty<br>";
		}
		
		if($error == "")
		{
			if(send_mail($recipient,$subject,$message))
			{
				$error .= "Message sent!<br>";
			}else
			{
				$error .= "Message NOT sent!<br>";
			}
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="media.css">
    <link rel="stylesheet" href="/stichery/fstyle.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link href="adminpanel.css" rel="stylesheet">
     
    <script src='https://kit.fontawesome.com/4c729db828.js' crossorigin='anonymous'></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="order.css" href="tailor.css">
	<title>Website</title>
</head>

<body style="font-family: tahoma;">

	<style type="text/css">
		
		form{
			width: 300px;
			padding: 10px;
			box-shadow: 0px 0px 10px #aaa;
			margin: auto;
			margin-top: 20px;
			border-radius: 10px;
		}

		form input{
			width: 270px;
			padding: 10px;
			border: solid thin #aaa;
			border-radius: 10px;
			margin: 5px;
			outline: none;
		}

		.btn{

			width: 290px;
			cursor: pointer;
		}

		.text{
			border: solid thin #aaa;
			border-radius: 10px;
			border: solid thin #aaa;
			width: 270px;
			margin-left: 5px;
			padding: 10px;
		}

	</style>




<div class="header">
    <div class="nav_bar-top">
        <div class="container-fluid">
            <div class="text-container">
                <div class="text-content">
                  <p class="para-text"><span class="span-text"><i class="fa-solid fa-envelope"></i></span>stitchery73@gmail.com</p>
                  <p class="para-text"><span class="span-text"><i class="fa-solid fa-phone"></i></span>03114263619</p>
                </div>

                <div class="social-links">
                    <i class="fa-brands icon-social fa-facebook"></i>
                    <i class="fa-brands icon-social fa-snapchat"></i>
                    <i class="fa-brands icon-social fa-whatsapp"></i>
                    <i class="fa-brands icon-social fa-instagram"></i>
                </div>

                <!-- navbar -->

                <div class="navbar-container">
                    <nav class="navbar navbar-expand-lg ">
                        <div class="container-fluid">
                          <a class="navbar-brand" href="#">
                            <h3 class="heading-logo">STITCH<span>ERY</span></h3>
                          </a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav ms-auto">
                              <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="#">About</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">Categories</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">cataloge</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">Contact Us</a>
                              </li>
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Services
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Stitching</a></li>
                                  <li><a class="dropdown-item" href="#">Alteration</a></li>
                                  <li><a class="dropdown-item" href="#">Unstitch fabric</a></li>
                                </ul>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- navbar end -->

  <div class="container-form">
	<form method="post">
		<h3>Send Email</h3>
		<div>
			<?php if($error != ""):?>
				<span style="color: red;"><?=$error?></span>
			<?php endif;?>
		</div>
		<input type="text" name="email" placeholder="Receiver Email" autofocus="true"><br> 
		<input type="text" name="subject" placeholder="Subject"><br> 
		<textarea class="text" name="message"></textarea><br><br>
		<input class="btn" type="submit" value="Send">

	</form>
	</div>
</body>
</html>