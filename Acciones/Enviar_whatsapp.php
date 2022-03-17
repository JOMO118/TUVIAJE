<?php 
use Twilio\Rest\Client; 
 class mensajes_whatsapp{
    public function Enviar_whatsapp($fecha, $hora){
// Update the path below to your autoload.php, 
// see https://getcomposer.org/doc/01-basic-usage.md 
require '../vendor/autoload.php';

 
$sid    = "AC3590820266fb607545d7d4f31506efc0"; 
$token  = "3f5800b2ab0a6be6f7c61cdf31ae3007"; 
$twilio = new Client($sid, $token); 
 
$message = $twilio->messages 
                  ->create("whatsapp:+573003027866", // to 
                           array( 
                               "from" => "whatsapp:+14155238886",       
                               "body" => "Señor(a) guia turistico, usted tiene una solicitud de un cliente para servirle de guia el dia  ".$fecha." a las ".$hora.", favor ingresa en tuviaje y responde esta solicitud." 
                           ) 
                  ); 
 
print($message->sid);


}

}