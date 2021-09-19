<?php

namespace Protasevich;

interface MessagesHandlerInterface
{
    public function prepareLinks(string $content): string;
}