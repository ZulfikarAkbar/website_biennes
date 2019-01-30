<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Alert;
class Contact extends Controller
{
    function showContactForm(){
        return view('contact-form');
    }
        /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    

    function sendMail(Request $request){
        
        $subject = "Contact dari " . $request->input('name');
        $name = $request->input('name');
        $emailAddress = $request->input('email');
        $message = $request->input('message');

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
            'captcha' => 'required|captcha'
        ]);

        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            // Pengaturan Server
            // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            // $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'mail.bimbel-biennes.com';                  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'support@bimbel-biennes.com';                 // SMTP username
            $mail->Password = '4dmin_bienne5';                           // SMTP password
            $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;                                    // TCP port to connect to

            // Siapa yang mengirim email
            $mail->setFrom($emailAddress, "contact.me@bimbel-biennes.com");

            // Siapa yang akan menerima email
            $mail->addAddress('support@bimbel-biennes.com', 'support@bimbel-biennes');     // Add a recipient
            // $mail->addAddress('ellen@example.com');               // Name is optional

            // ke siapa akan kita balas emailnya
            $mail->addReplyTo($emailAddress, $name);
            
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name


            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $message;
            $mail->AltBody = $message;

            $mail->send();

            $request->session();
            alert()->success('Berhasil','Kami sudah menerima pesan Anda.');
            return view('contact-form');

        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }

    }
}