@extends('layouts.app')
@section('content')
<style>
    .col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
        position: relative;
        min-height: 1px;
        padding-right: 10px;
        padding-left: 1px;
    }
    h1, h2, h3, h4, h5, h6 {
    padding-top: 5px;
}
.top-margin{
  margin-bottom: 20px !important;
}
</style>

<?php
//index.php

$message = '';

function clean_text($string) {
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    return $string;
}

if (isset($_POST["submit"])) {
  $email = $_POST["email"];
  $name = $_POST["name"];
    $mail_from_website = '';
   // foreach ($_POST["message"] as $row) {
        $mail_from_website = 'dfds';
   // }
    $mail_from_website = substr($mail_from_website, 0, -2);
   // $path = 'upload/' . $_FILES["resume"]["name"];
   /// move_uploaded_file($_FILES["resume"]["tmp_name"], $path);
    $message = '
  <h3 align="center">Mail Details</h3>
  <table border="1" width="100%" cellpadding="5" cellspacing="5">
   <tr>
    <td width="30%">Name</td>
    <td width="70%">' . $_POST["name"] . '</td>
   </tr>
   <tr>
    <td width="30%">Email Address</td>
    <td width="70%">' . $_POST["email"] . '</td>
   </tr>
    <tr>
    <td width="30%">Phone Number</td>
    <td width="70%">' . $_POST["mobile"] . '</td>
   </tr>
   <tr>
    <td width="30%">Your Message</td>
    <td width="70%">' . $_POST["message_body"] . '</td>
   </tr>
  </table>
 ';

    require_once 'class/class.phpmailer.php';
    require_once 'class/class.smtp.php';
    $mail = new PHPMailer;
    $mail->IsSMTP();        //Sets Mailer to send message using SMTP
    $mail->Host = 'smtp.gmail.com';  //Sets the SMTP hosts of your Email hosting, this for Godaddy
    $mail->Port = 465;        //Sets the default SMTP server port
    $mail->SMTPAuth = true;       //Sets SMTP authentication. Utilizes the Username and Password variables
    $mail->Username = '';     //Sets SMTP username
    $mail->Password = '';     //Sets SMTP password
    $mail->SMTPSecure = 'ssl';
    $mail->IsHTML(true);      //Sets connection prefix. Options are "", "ssl" or "tls"
    //$mail->setFrom($email, $name);       //Sets connection prefix. Options are "", "ssl" or "tls"
   $mail->From = $_POST["email"];     //Sets the From email address for the message
    $mail->FromName = $_POST["name"];    //Sets the From name of the message
    $mail->addAddress("ashiq.cse2012@gmail.com");  //Adds a "To" address
    //$mail->WordWrap = 50;       //Sets word wrapping on the body of the message to a given number of characters
         //Sets message type to HTML
    //$mail->AddAttachment($path);     //Adds an attachment from a path on the filesystem
    $mail->Subject = 'Mail From Website';    //Sets the Subject of the message
    $mail->Body = 'dsfdsf';
//    $mail->send();     //An HTML or plain text message body
//    print_r($mail);
   if($mail->send()){
      $message ='send';
   }else{
     $message ='This is error';
   }

}
?>

<!--Contact area-->
<section  class="properties-area section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-2 col-sm-12 col-xs-12">
                <div class="section-heading-v1 text-center">
                    <h3><span>Contact</span> Us</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-area section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="mail-to">
                    <h4 class="top-margin">Send Us a Message</h4>
                    <!--                    <form>
                                            <ul>
                                                <li> <input type="text" name="full-name" placeholder="Your Name"/></li>
                                                <li><input type="email" name="email" placeholder="Your Email"/></li>
                                                <li><input type="text" name="number" placeholder="Phone Number"/></li>
                                            </ul>
                                            <textarea rows="8" placeholder="Your Messages"></textarea>
                                            <button type="submit" class="btn-b"><a href="mailto:ashiq.cse2012@gmail.com">Send Email</a></button>
                                        </form>-->
<?php print_r($message); ?>
                    <form method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Your Name</label>
                                    <input type="text" name="name" placeholder="Your Name" class="form-control" required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Your Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Your Email" required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" name="mobile" placeholder="Phone Number" class="form-control" pattern="\d*" required />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Your Message</label>
                                    <textarea name="message_body" placeholder="Type Your Message" class="form-control" required rows="8"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" align="center">
                            <input type="submit" name="submit" value="Submit" class="btn btn-info" />
                        </div>
                    </form>
                </div>
            </div>


            <div class="col-md-4 col-sm-12">
                <div class="list-sidber">
                    <h4>Contact Information</h4>
                    <p></p>
                    <ul>
                        <li>
                            <span class="ico-sp"><i class="fa fa-phone"></i></span>
                            <span class="txt-sp">(+88 0-2) 8399701-2, 8399870-1</span>
                        </li>
                        <li>
                            <span class="ico-sp"><i class="fa fa-envelope"></i></span>
                            <span class="txt-sp">info.armagroupbd@gmail.com</span>
                        </li>

                        <li>
                            <span class="ico-sp"><i class="fa fa-map-marker"></i></span>
                            <span class="txt-sp">CORPORATE OFFICE:"<a class="name" style="font-size: 15px;">ARMA</a> Complex"</span>
                            <span class="txt-sp">House # 1/B, Road # NS-1 (Main Rd), Block-A, Banasree, Dhaka 1219, Bangladesh </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact area-->
<br>

<!--Map Area Section-->
<section class="contact-area section" style="">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xl-12 col-sm-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3651.416902860263!2d90.42383326850893!3d23.76816415062252!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf3a3126932ff9bad!2sArma+Real+Estate+Limited!5e0!3m2!1sen!2sbd!4v1532600202281" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>
<!--Map Area Section-->
<br>
<br>

@endsection
