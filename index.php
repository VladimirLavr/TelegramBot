<?php

require 'vendor/autoload.php';

use Telegram\Bot\Api;

$telegram = new Api('6268064568:AAG-9HsCU0av9zEveVTVo1O-wG9qzHFBVWI');

$result = $telegram->getWebhookUpdates();

$text = $result['message']['text'];
$chat_id = $result['message']['chat']['id'];
$name = $result['message']['from']['username'];
$first_name = $result['message']['from']['first_name'];
$last_name = $result['message']['from']['last_name'];

if ($text == '/start') {
    $reply = 'Hello' . $name;
    $telegram->sendMessage(['chat_id' => $chat_id, 'text' => $reply]);
}