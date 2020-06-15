
<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';

function clean_data($string) {  
    if (get_magic_quotes_gpc()) {     
        $string = stripslashes($string); } 
        $string = htmlspecialchars($string);
     return $string; 
}
function shapeSpace_check_email($email) {
	return preg_match('#^[a-z0-9.!\#$%&\'*+-/=?^_`{|}~]+@([0-9.]+|([^\s]+\.+[a-z]{2,6}))$#si', $email);
}

function shapeSpace_check_string($string) {
	$bad_strings = array(
		'content-type:', 
		'mime-version:', 
		'multipart/mixed', 
		'Content-Transfer-Encoding:', 
		'bcc:', 
		'cc:', 
		'to:',
		'from:',
	);
	foreach($bad_strings as $bad_string) {
		if ($bad_string == strtolower($string)) {
			return false;
		}
	}
	return true;
}
// source: https://wp-mix.com/php-securing-email-scripts/



if(isset($_POST["submit"])) {
    if(shapeSpace_check_email($_POST["email"])) {
        if(shapeSpace_check_email($_POST["email"]) ) {
                $mail = new PHPMailer(true);

                try {
                    //Server settings
                    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
                    $mail->isSMTP();                                           
                    $mail->Host       = 'mail.jaronvw.nl';                   
                    $mail->SMTPAuth   = true;                                  
                    $mail->Username   = 'contact@jaronvw.nl';                    
                    $mail->Password   = '@Gq12zR&981';                              
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
                    $mail->Port       = 587;                                    

                    //Recipients
                    $mail->setFrom($_POST["email"], $_POST["name"]);
                    $mail->addAddress('contact@jaronvw.nl', 'Jaron van Well');    
                    $mail->addReplyTo($_POST["email"], $_POST["name"]);




                    // Content
                    $mail->isHTML(true);                                  
                    $mail->Subject = clean_data($_POST["subject"]) ;
                    $mail->Body    ="<h3>afzender: ".clean_data($_POST["name"])."</h3>". clean_data($_POST["text"]);
                    $mail->AltBody = "<h3>afzender: ".clean_data($_POST["name"])."</h3>". clean_data($_POST["text"]);

                    $mail->send();
                    header("location: index.php");
                } catch (Exception $e) {
                    header("location: index.php");
            }
        }
        else {
            header("location mail.php");
        }

        
    } 
    else {
            header("location mail.php");
    }
    
}



