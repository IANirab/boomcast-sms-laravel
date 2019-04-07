<?php

namespace nirab\boomcastsms\Models;

use Illuminate\Database\Eloquent\Model;

class SendSms extends Model
{
    static function send($number,$msg)
    {
        $masking = env('BOOMCAST_MASKING');
        $userName = env('BOOMCAST_USERNAME');
        $password = env('BOOMCAST_PASSWORD');
        $MsgType = "TEXT";
        $receiver = $number;
        $message = $msg;
        $url = 'http://api.boom-cast.com/boomcast/WebFramework/boomCastWebService/externalApiSendTextMessage.php';
        $myvars = 'masking=' . $masking . '&userName=' . $userName. '&password=' . $password. '&MsgType=' . $MsgType. '&receiver=' . $receiver. '&message=' . $message;
        $ch = curl_init( $url );
        curl_setopt( $ch, CURLOPT_POST, 1);
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $myvars);
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt( $ch, CURLOPT_HEADER, 0);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec( $ch );
    }
}
