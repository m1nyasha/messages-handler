<?php

namespace Protasevich\Core;

interface LinksInterface
{
    public function handle(string $content): string;
}