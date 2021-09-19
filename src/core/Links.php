<?php

namespace Protasevich\Core;

class Links implements LinksInterface
{
    private const PREPARE_LINKS_PATTERN = "/(((http|https|ftp|ftps)\:\/\/)|(www\.))[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\:[0-9]+)?(\/\S*)?/";

    /**
     * @param string $content
     * @return string
     */

    public function handle(string $content): string
    {
        if (empty($content)) {
            return false;
        }

        preg_match_all(self::PREPARE_LINKS_PATTERN, preg_replace('#<[^>]+>#', ' ', $content), $links);

        if (count($links[0]) === 0) {
            return $content;
        }

        $prepareString = $content;

        foreach ($links[0] as $link) {
            $prepareString = str_replace($link, "<a href=\"$link\" target=\"_blank\">$link</a>", $prepareString);
        }

        return $prepareString;
    }
}