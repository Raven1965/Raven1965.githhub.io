<?php
$result = Request::sendMessage([
    'chat_id' => $chat_id,
    'text'    => 'Your utf8 text 😜 ...',
]);
