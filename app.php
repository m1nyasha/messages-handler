<?php

require_once __DIR__ . "/vendor/autoload.php";

$entity = new \Protasevich\MessagesHandler();
print_r($entity->detectLinks("http://test.ru привет мир"));