<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class mensajes_correo{
    public function send_email($email, $fecha, $hora){
        require '../vendor/autoload.php';

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
        
        try {
            //Server settings
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'tuviaje.tura@gmail.com';                     //SMTP username
            $mail->Password   = 'tuviaje2022';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('tuviaje.tura@gmail.com', 'tuviaje');
            $mail->addAddress($email, 'usuario');     //Add a recipient
            // $mail->addAddress('ellen@example.com');               //Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');
        
            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Solicitud reserva ';
            $mail->Body    = "<!DOCTYPE html>
            <html>
            
            <head>
            
            </head>
            
            <body style='font-family: arial;'>
            
                <div
                    style='width: 100%;margin-left: auto; margin-right: auto;background: #415eff; border-radius: 18px;display:block; float:center;'>
                    <h2 style='padding: 15px;color:#ffffff; font-weight: bold; text-align: center'>TUVIAJE</h2>
                </div>
                <div>
                <p style='text-align: center; color: #000000; line-height: 21px; font-size: 18px;'><span
                        style='font-size: 24px;'>Hola! C&oacute;mo estás?</span> <br>
                    !Han solicitado su servicio de gu&iacute;a! </p>
                <p style='text-align: center; color: #000000; line-height: 21px; font-size: 18px;'>
                    para el dia <b>'$fecha'</b> y hora <b>'$hora'</b> por favor confirmar</p>
                    <br>
               <a href='login.php'> <button style='margin-left: 45%; padding: .375rem .75rem; border-radius: .25rem;
                background-color: #007BFF; color: #fff; transition: background-color .15s ease-in-out;'> GO TO TUVIAJE</button> </a>
                </div>
                <div>
                    <table style='display: flex;justify-content: center;align-items: center;'
                        class='m_-3791644720194112676m_-5077930976808664309gmail-m_-7832111776023786876m_-1983291102630745082gmail-rnb-del-min-width m_-3791644720194112676m_-5077930976808664309gmail-m_-7832111776023786876m_-1983291102630745082gmail-rnb-tmpl-width'
                        width='100%' cellpadding='0' border='0' cellspacing='0' bgcolor='#f9fafc' name='Layout_'
                        id='m_-3791644720194112676m_-5077930976808664309gmail-m_-7832111776023786876m_-1983291102630745082gmail-Layout_'
                        style='min-width:590px;width:590px'>
                        <tbody>
                            <tr>
                                <td class='m_-3791644720194112676m_-5077930976808664309gmail-m_-7832111776023786876m_-1983291102630745082gmail-rnb-del-min-width'
                                    align='center' valign='top' bgcolor='#f9fafc' style='border-collapse:collapse;min-width:590px'>
                                    <table width='590'
                                        class='m_-3791644720194112676m_-5077930976808664309gmail-m_-7832111776023786876m_-1983291102630745082gmail-rnb-container'
                                        cellpadding='0' border='0' align='center' cellspacing='0'>
                                        <tbody>
                                            <tr>
                                                <td height='20' style='border-collapse:collapse;font-size:1px;line-height:1px'>
                                                    &nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td valign='top'
                                                    class='m_-3791644720194112676m_-5077930976808664309gmail-m_-7832111776023786876m_-1983291102630745082gmail-rnb-container-padding'
                                                    align='left'
                                                    style='border-collapse:collapse;font-size:14px;font-family:Arial,Helvetica,sans-serif;color:rgb(0, 0, 0)'>
                                                    <table width='100%' border='0' cellpadding='0' cellspacing='0'
                                                        class='m_-3791644720194112676m_-5077930976808664309gmail-m_-7832111776023786876m_-1983291102630745082gmail-rnb-columns-container'>
                                                        <tbody>
                                                            <tr>
                                                                <td class='m_-3791644720194112676m_-5077930976808664309gmail-m_-7832111776023786876m_-1983291102630745082gmail-rnb-force-col'
                                                                    valign='top'
                                                                    style='border-collapse:collapse;padding-right:20px;padding-left:20px'>
                                                                    <table border='0' valign='top' cellspacing='0' cellpadding='0'
                                                                        width='264' align='left'
                                                                        class='m_-3791644720194112676m_-5077930976808664309gmail-m_-7832111776023786876m_-1983291102630745082gmail-rnb-col-2'
                                                                        style='border-bottom:0px'>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td valign='top' style='border-collapse:collapse'>
                                                                                    <table cellpadding='0' border='0' align='left'
                                                                                        cellspacing='0'
                                                                                        class='m_-3791644720194112676m_-5077930976808664309gmail-m_-7832111776023786876m_-1983291102630745082gmail-rnb-btn-col-content'>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td valign='middle' align='left'
                                                                                                    class='m_-3791644720194112676m_-5077930976808664309gmail-m_-7832111776023786876m_-1983291102630745082gmail-rnb-text-center'
                                                                                                    style='border-collapse:collapse;font-family:Arial,Helvetica,sans-serif'>
                                                                                                    <div>
                                                                                                        <div>TUVIAJE<br>3153948574<br>
                                                                                                            <a
                                                                                                                href='Contacto.html'
                                                                                                                >TUVIAJE.COM</a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td class='m_-3791644720194112676m_-5077930976808664309gmail-m_-7832111776023786876m_-1983291102630745082gmail-rnb-force-col m_-3791644720194112676m_-5077930976808664309gmail-m_-7832111776023786876m_-1983291102630745082gmail-rnb-social-width'
                                                                    valign='top'
                                                                    style='border-collapse:collapse;padding-right:15px'>
                                                                    <table border='0' valign='top' cellspacing='0' cellpadding='0'
                                                                        width='246' align='right'
                                                                        class='m_-3791644720194112676m_-5077930976808664309gmail-m_-7832111776023786876m_-1983291102630745082gmail-rnb-last-col-2'>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td valign='top' style='border-collapse:collapse'>
                                                                                    <table cellpadding='0' border='0'
                                                                                        cellspacing='0'
                                                                                        class='m_-3791644720194112676m_-5077930976808664309gmail-m_-7832111776023786876m_-1983291102630745082gmail-rnb-social-align'
                                                                                        align='right' style='float:right'>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td valign='middle'
                                                                                                    class='m_-3791644720194112676m_-5077930976808664309gmail-m_-7832111776023786876m_-1983291102630745082gmail-rnb-text-center'
                                                                                                    width='85' align='right'
                                                                                                    style='border-collapse:collapse'>
                                                                                                    <div
                                                                                                        class='m_-3791644720194112676m_-5077930976808664309gmail-m_-7832111776023786876m_-1983291102630745082gmail-rnb-social-center'>
                                                                                                        <table align='left'
                                                                                                            border='0'
                                                                                                            cellpadding='0'
                                                                                                            cellspacing='0'
                                                                                                            style='float:left;display:inline-block'>
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td align='left'
                                                                                                                        style='border-collapse:collapse;padding:0px 5px 5px 0px'>
                                                                                                                        <span
                                                                                                                            style='color:rgb(255,255,255)'><a
                                                                                                                                href='https://www.facebook.com'>
                                                                                                                                <img
                                                                                                                                    alt='Facebook'
                                                                                                                                    border='0'
                                                                                                                                    hspace='0'
                                                                                                                                    vspace='0'
                                                                                                                                    src='https://ci5.googleusercontent.com/proxy/lSkv6A04VUKQTkRddYrPg7o-Bxzozl9Bnl7XN-mOrPTzj4Ob7cz30iOTkj1vi9pDIWO79R2VHrfWCTtJHIVLVweWPw1H5v1qF4PkbXI44wvL=s0-d-e1-ft#http://img.mailinblue.com/new_images/rnb/theme5/rnb_ico_fb.png'
                                                                                                                                    style='vertical-align:top'
                                                                                                                                    class='CToWUd'></a></span>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class='m_-3791644720194112676m_-5077930976808664309gmail-m_-7832111776023786876m_-1983291102630745082gmail-rnb-social-center'>
                                                                                                        <table align='left'
                                                                                                            border='0'
                                                                                                            cellpadding='0'
                                                                                                            cellspacing='0'
                                                                                                            style='float:left;display:inline-block'>
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td align='left'
                                                                                                                        style='border-collapse:collapse;padding:0px 5px 5px 0px'>
                                                                                                                        <span
                                                                                                                            style='color:rgb(255,255,255)'><a
                                                                                                                                href='https://www.instagram.com'>
                                                                                                                                <img
                                                                                                                                    alt='Instagram'
                                                                                                                                    border='0'
                                                                                                                                    hspace='0'
                                                                                                                                    vspace='0'
                                                                                                                                    src='https://ci4.googleusercontent.com/proxy/cUFg0Ysnzaor5bg_lrB83LzjqQ_6OvYzqQOIyy27-K-CpmcJljVWiMxNEFx-TLweor4hVeMQgjibDkDMuY7TdG6HsSHdGypnKXcc0OxbYdFE=s0-d-e1-ft#http://img.mailinblue.com/new_images/rnb/theme5/rnb_ico_ig.png'
                                                                                                                                    style='vertical-align:top'
                                                                                                                                    class='CToWUd'></a></span>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height='20' style='border-collapse:collapse;font-size:1px;line-height:1px'>
                                                    &nbsp;</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            
            </body>
            
            </html>
            ";
            $mail->AltBody = '';
        
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}

//Load Composer's autoloader
