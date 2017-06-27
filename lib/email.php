<?php
require 'PHPMailer/PHPMailerAutoload.php';

// Email address verification
function isEmail($email) {
	return filter_var($email, FILTER_VALIDATE_EMAIL);
}

if($_POST) {

    $mail = new PHPMailer;

    //$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'cesarchamal@gmail.com';                 // SMTP username
    $mail->Password = 'ba286129';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML

    // Enter the email where you want to receive the message
    //$emailTo = 'tomaszseni@gmail.com';
    $emailTo = 'ces_ch@hotmail.com';
    //$emailTo = 'st@coaala.com';

    $name = addslashes(trim($_POST['name']));
    $lastname = addslashes(trim($_POST['lastname']));
    $email = addslashes(trim($_POST['email']));
    $comment = addslashes(trim($_POST['comment']));

    $array = array( 
                    'nameMessage' => '', 'lastnameMessage' => '',
                    'emailMessage' => '', 'commentMessage' => ''
                  );

    if($name == '') {
        $array['nameMessage'] = 'Nombre no valido';
    }
    
    if($lastname == '') {
        $array['lastnameMessage'] = 'Apellido no valido';
    }
    
    if(!isEmail($email)) {
        $array['emailMessage'] = 'Correo invalido!';
    }

    if($comment == '') {
        $array['commentMessage'] = 'Comentario no valido';
    }
    
    $message = "<h3 style='color: #000000;'>Comentario</h3>
                <div style='margin:0px;padding:0px;width:5%;box-shadow: 10px 10px 5px #888888;border:1px solid #000000;-moz-border-radius-bottomleft:0px;
                                -webkit-border-bottom-left-radius:0px;border-bottom-left-radius:0px;-moz-border-radius-bottomright:0px;
                                -webkit-border-bottom-right-radius:0px;border-bottom-right-radius:0px;-moz-border-radius-topright:0px;
                                -webkit-border-top-right-radius:0px;border-top-right-radius:0px;-moz-border-radius-topleft:0px;
                                -webkit-border-top-left-radius:0px;border-top-left-radius:0px;'>
                    <table style='border-collapse: collapse;border-spacing: 0;width:100%;height:100%;margin:0px;padding:0px;'>
                        <tr style='background-color:#ffaaaa;'> 
                            <td style='vertical-align:middle;border:1px solid #000000;border-width:1px 1px 1px 0px;text-align:left;
                            padding:7px;font-size:10px;font-family:Arial;font-weight:normal;color:#000000;'>
                                <label>Nombre</label>
                            </td>
                            <td style='vertical-align:middle;border:1px solid #000000;border-width:1px 1px 1px 1px;text-align:left;
                            padding:7px;font-size:10px;font-family:Arial;font-weight:normal;color:#000000;'>
                                <label>$name</label>
                           </td>
                        </tr>
                        <tr style='background-color:#ffaaaa;'> 
                            <td style='vertical-align:middle;border:1px solid #000000;border-width:1px 1px 1px 0px;text-align:left;
                            padding:7px;font-size:10px;font-family:Arial;font-weight:normal;color:#000000;'>
                                <label>Apellido</label>
                            </td>
                            <td style='vertical-align:middle;border:1px solid #000000;border-width:1px 1px 1px 1px;text-align:left;
                            padding:7px;font-size:10px;font-family:Arial;font-weight:normal;color:#000000;'>
                                <label>$lastname</label>
                           </td>
                        </tr>
                        <tr style='background-color:#ffffff;'> 
                            <td style='vertical-align:middle;border:1px solid #000000;border-width:0px 1px 1px 0px;text-align:left;
                            padding:7px;font-size:10px;font-family:Arial;font-weight:normal;color:#000000;'>
                                <label>Correo electronico</label>
                            </td>
                            <td style='vertical-align:middle;border:1px solid #000000;border-width:0px 1px 1px 0px;text-align:left;
                            padding:7px;font-size:10px;font-family:Arial;font-weight:normal;color:#000000;'>
                                <label>$email</label>
                           </td>
                        </tr>
                        <tr style='background-color:#ffaaaa;'> 
                            <td style='vertical-align:middle;border:1px solid #000000;border-width:0px 1px 1px 0px;text-align:left;
                            padding:7px;font-size:10px;font-family:Arial;font-weight:normal;color:#000000;'>
                                <label>Comentario</label>
                            </td>
                            <td style='vertical-align:middle;border:1px solid #000000;border-width:0px 1px 1px 0px;text-align:left;
                            padding:7px;font-size:10px;font-family:Arial;font-weight:normal;color:#000000;'>
                                <label>$comment</label>
                           </td>
                        </tr>
                    </table>
                </div>
               ";
    
    if( 
        $name != '' && isEmail($email) 
        && $lastname != '' && $comment != '' 
    ) {
        // Send email
		//$headers = "From: " . $clientEmail . " <" . $clientEmail . ">" . "\r\n" . "Reply-To: " . $clientEmail;
		//mail($emailTo, $name . " FMJJ registro torneo", $message, $headers);
        $mail->setFrom($email, 'Display Mexico');
        $mail->addReplyTo($email, 'No responder este correo');
        $mail->addAddress($emailTo, $name);     // Add a recipient
        $mail->Subject = $name . " Display Mexico comentario";
        $mail->Body    = $message;
        $mail->AltBody = $message;

        if(!$mail->send()) {
            //echo 'Message could not be sent.';
            //echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            //echo 'Message has been sent';
        }
        
    }

    //echo json_encode($array);
       
}

?>
