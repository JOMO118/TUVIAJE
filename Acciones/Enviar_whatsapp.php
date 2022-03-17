<?php 
use Twilio\Rest\Client; 
 class mensajes_whatsapp{
    public function Enviar_whatsapp(){
// Update the path below to your autoload.php, 
// see https://getcomposer.org/doc/01-basic-usage.md 
require '../vendor/autoload.php';

 
$sid    = "AC3590820266fb607545d7d4f31506efc0"; 
$token  = "9128b3f36b61036cd172ddeb893e5284"; 
$twilio = new Client($sid, $token); 
 
$message = $twilio->messages 
                  ->create("whatsapp:+573003027866", // to 
                           array( 
                               "from" => "whatsapp:+14155238886",       
                               "body" => "Señor(a) guia turistico, usted tiene una solicitud de un cliente para servirle de guia, favor ingresa en tuviaje y responde esta solicitud." 
                           ) 
                  ); 
 
print($message->sid);


}

}