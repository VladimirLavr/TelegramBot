
<?php
require 'vendor/autoload.php';

use Telegram\Bot\Api;


$telegram = new Api('6280488506:AAFtVTmxR-S021zN2gopg1iHyxHK290TU9g');

$result = $telegram->getWebhookUpdates();

$text = $result['message']['text'];
$chat_id = $result['message']['chat']['id'];
$name = $result['message']['from']['username'];


$reply = 'HElLO';
$telegram->sendMessage(['chat_id' => $chat_id, 'text' => $reply]);
