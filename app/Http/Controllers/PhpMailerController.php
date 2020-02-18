<?php

namespace App\Http\Controllers;

use Request;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class PhpMailerController extends Controller
{
    
    public function sendEmail (Request $request) {
    
  	if(Request::isMethod('post')) {

      //  include 'C:\xampp\php\pear\PEAR';
      require '\vendor\autoload.php';			// load Composer's autoloader

        $mail = new PHPMailer(true);                            // Passing `true` enables exceptions

        try {
            // Server settings
            $mail->SMTPDebug = 0;                                	// Enable verbose debug output
            $mail->isSMTP();                                     	// Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';							// Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                              	// Enable SMTP authentication
            $mail->Username = 'phptestmail1856@gmail.com';             // SMTP username
            $mail->Password = 'onetwo12@';              // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('phptestmail1856@gmail.com', 'Mulary.com');
            $mail->addAddress('minal26patel@gmail.com', 'Minal Patel');	// Add a recipient, Name is optional
           // $mail->addReplyTo('your-email@gmail.com', 'Mailer');
           // $mail->addCC('his-her-email@gmail.com');
           // $mail->addBCC('his-her-email@gmail.com');

            //Attachments (optional)
            // $mail->addAttachment('/var/tmp/file.tar.gz');			// Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');	// Optional name

            //Content
            $mail->isHTML(true); 																	// Set email format to HTML
            $mail->Subject = Request::input('subject');
            $mail->Body    = Request::input('message');						// message

            $mail->send();
            return view('dashboard');
        } catch (Exception $e) {
            return back()->with('error','Message could not be sent.');
        }
    }
    return view('dashboard');
}
}
