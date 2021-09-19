# Messages Handler

A magical tool that will make it easy to handle chat messages

## Install

```shell
$ composer require protasevich/messages-handler
```

## Using

```php
<?php

use Protasevich\MessagesHandler;

class App 
{
    public function execute($content)
    {
        $messagesHandler = new MessagesHandler();
        return $messagesHandler->prepareLinks($content);    
    }
}

```

### Possibilities

- Replace text links with real HTML note

### Testing

```shell
$ php vendor/bin/phpunit
```