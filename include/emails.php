<?php

  class sendEmails{

    public function RegistrationSuccessful($email, $subject, $name){


      mail($email, $subject, $message);
    }

  }

 ?>

<!--
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
-
- -->

 <!-- PHPMailer Template -->
 <?php

    // use PHPMailer\PHPMailer\PHPMailer;
    // use PHPMailer\PHPMailer\Exception;
    // Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;


    require '../PHPMailer/src/Exception.php';
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/SMTP.php';


    // Defining the variable collected from the post forma
    $userName      = isset($_POST['name'])      ?  $_POST['name']      : "John Doe";
    $userEmail     = isset($_POST['email'])     ?  $_POST['email']     : "test@test.com";
    $phoneNo       = isset($_POST['phoneNo'])   ?  $_POST['phoneNo']   : "No Mobile Phone Number";
    $course        = isset($_POST['course'])    ?  $_POST['course']    : "No course selected";
    $userMessage   = 'Name: ' . $userName . '<br>'. 'Email: ' . $userEmail . '<br>' . 'Phone: ' . $phoneNo . '<br>' . 'Course: ' . $course;

    $recipientEmail = "weybansky@gmail.com";


    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        // $mail->isSMTP();                                      // Set mailer to use SMTP
        // $mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
        // $mail->SMTPAuth = true;                               // Enable SMTP authentication
        // $mail->Username = 'user@example.com';                 // SMTP username
        // $mail->Password = 'secret';                           // SMTP password
        // $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        // $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        // $mail->setFrom('from@example.com', 'Mailer');
        $mail->setFrom($userEmail, $userName.' from ChefMobile');

        // $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
        $mail->addAddress($recipientEmail);               // Name is optional

        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'ChefMobile Course Registration';
        $mail->Body    = $userMessage;
        $mail->AltBody = $userMessage;

        $mail->send();

        $sentEmailReport    = "Your request has been sent we will get back to you soon";
        $alertMsgStyle      = 'alert-success';
        $icon               = 'fa-check-circle';
        $iconColor          = 'green';
        // echo 'Message has been sent';
    } catch (Exception $e) {
        $alertMsgStyle      = 'alert-danger';
        $icon               = 'fa-times';
        $iconColor          = 'red';
        $sentEmailReport    = 'Mailer Error: ' . $mail->ErrorInfo;

        // echo 'Message could not be sent.';
        // echo 'Mailer Error: ' . $mail->ErrorInfo;
    }

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>Registration Report</title>
     <link rel="stylesheet" href="../css/bootstrap.css">
     <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css"> -->
     <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
 </head>
 <body>
    <div class="container" style="margin-top: 50px;">
        <div class="row text-center">
            <div class="col-md-4 col-md-offset-4">
                <div class="alert <?php echo $alertMsgStyle; ?>">
                    <i style="color: <?php echo $iconColor;?>; font-weight: bold;" class="fa <?php echo $icon; ?> fa-3x" aria-hidden="true"></i>
                    <p style="min-height: 50px; vertical-align: middle; margin: auto;"><?php echo $sentEmailReport; ?></p>
                </div>
            </div>
        </div>
    </div>

 </body>
 </html>
