<?php
require_once "vendor/autoload.php";
use Twilio\Rest\Client;

class twilioController
{

    public  static function sendSmsCode($number,$message_code){

        $sid    = "sid_key";
        $token  = "token_goes_here";
        $twilio = new Client($sid, $token);

       $message = $twilio->messages->create(
               $number, // to
                array(
                    "messagingServiceSid" => "messagingServiceSid_goes_here",
                    "body" => $message_code
                )
            );
// print($message->sid);
}

}

// twilioController::sendSmsCode('+2347037810014','Helll Ofofo  kaywhytee APi');