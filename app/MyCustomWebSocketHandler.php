<?php

namespace App;

use Ratchet\ConnectionInterface;
use Ratchet\RFC6455\Messaging\MessageInterface;
use Ratchet\WebSocket\MessageComponentInterface;

class MyCustomWebSocketHandler implements MessageComponentInterface
{
    public function onOpen(ConnectionInterface $connection){
        return $connection;
    }
    public function onClose(ConnectionInterface $connection){
        
    }
    public function onError(ConnectionInterface $connection,\Exception $e){
        
    }
    public function onMessage(ConnectionInterface $connection, MessageInterface $message){
        
    }
}