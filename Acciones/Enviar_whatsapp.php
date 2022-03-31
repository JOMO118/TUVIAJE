<?php 
use Twilio\Rest\Client; 
 class mensajes_whatsapp{
    public function Enviar_whatsapp($fecha, $hora){
// Update the path below to your autoload.php, 
// see https://getcomposer.org/doc/01-basic-usage.md 
require '../vendor/autoload.php';

 
$sid    = "AC215b6717340270f89d6a1b225b28a8c9"; 
$token  = "dcdbf8dd1e23274a0dac47c74189b64f"; 
$twilio = new Client($sid, $token); 
 
$message = $twilio->messages 
                  ->create("whatsapp:+573185149060", // to 
                           array( 
                               "from" => "whatsapp:+14155238886",       
                               "body" => "Señor(a) guia turistico, usted tiene una solicitud de un cliente para servirle de guia el dia  ".$fecha." a las ".$hora.", favor ingresa en tuviaje y responde esta solicitud." 
                           ) 
                  ); 
 
print($message->sid);


}

}