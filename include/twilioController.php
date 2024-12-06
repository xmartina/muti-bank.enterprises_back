<?php
const rootDir = '/home/questcom/domains/dashboard.muti-bank.enterprises/public_html/';
require rootDir . 'include/vendor/autoload.php';
require_once "vendor/autoload.php";
use Twilio\Rest\Client;

class twilioController
{

    public  static function sendSmsCode($number,$message_code){

        $sid    = "AC2cc85f22de430e24df35a0bae8c81afa";
        $token  = "eb9a4edefb5807f883857a729f262003";
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