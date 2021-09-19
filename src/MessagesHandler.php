<?php

namespace Protasevich;

use Protasevich\Core\Links;

class MessagesHandler implements MessagesHandlerInterface
{

    private Links $links;

    public function __construct()
    {
        $this->links = new Links();
    }

    public function prepareLinks(string $content): string
    {
        return $this->links->handle($content);
    }
}