<?php
require_once __DIR__ . "/../include/vendor/autoload.php";
use Twilio\Rest\Client;

class twilioController
{

    public  static function sendSmsCode($number,$message_code){

        $sid    = "AC2cc85f22de430e24df35a0bae8c81afa";
        $token  = "5a4f1398d10fcdbce7bb15c03529654e";
        $twilio = new Client($sid, $token);

       $message = $twilio->messages->create(
               $number, // to
                array(
                    "messagingServiceSid" => "MG0053bd6f7d332af5d94287e478cafefd",
                    "body" => $message_code
                )
            );
// print($message->sid);
}

}

// twilioController::sendSmsCode('+2347037810014','Helll Ofofo  kaywhytee APi');