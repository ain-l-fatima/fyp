<?php 
$returnMsg = ''; 
 
if(isset($_POST['submit'])){ 
    
	// Form fields validation check
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone'])){ 
         
        // reCAPTCHA checkbox validation
        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){ 
            // Google reCAPTCHA API secret key 
            $secret_key = '6Le3gUEnAAAAAKYLaMSNX9iNDAR0WRyR2OtJmkTL'; 
             
            // reCAPTCHA response verification
            $verify_captcha = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']); 
             
            // Decode reCAPTCHA response 
            $verify_response = json_decode($verify_captcha); 
             
            // Check if reCAPTCHA response returns success 
            if($verify_response->success){ 
                $name = $_POST['name']; 
                $email = $_POST['email']; 
                $phone = $_POST['phone'];
				

                // Send user registration notification to the admin 
                $to = "ainul.zahra72@gmail.com"; 
                $subject = "New User Registration"; 
                $body = "<h1>New User Details</h1> 
                    <p><strong>User Name: </strong>".$name."</p> 
                    <p><strong>Email: </strong>".$email."</p> 
                    <p><strong>Phone: </strong>".$phone."</p> 
		  
                "; 
                 
                // Set email header content type
                $headers = "MIME-Version: 1.0" . "\r\n"; 
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
                $headers .= 'From:'.$name.' <'.$email.'>' . "\r\n"; 
                 
                // Send email to Admin
                @mail($to,$subject,$body,$headers); 
                $returnMsg = 'Your registration has been submitted successfully.'; 
            }else{ 
                $returnMsg = 'reCaptch verification failed, please verify again.'; 
            } 
        }else{ 
            $returnMsg = 'Please check the CAPTCHA box.'; 
        } 
    }else{ 
        $returnMsg = 'Please fill all the required fields.'; 
    } 
} 
echo $returnMsg;
?>