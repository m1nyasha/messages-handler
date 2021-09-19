<?php

use PHPUnit\Framework\TestCase;
use Protasevich\MessagesHandler;

class ExampleTest extends TestCase
{

    private const TEST_CONTENT = "Hi! Im Michael. This - http://some.com link to my profile.";
    private const TEST_CONTENT_APPROVE = "Hi! Im Michael. This - <a href=\"http://some.com\" target=\"_blank\">http://some.com</a> link to my profile.";

    private MessagesHandler $messagesHandler;

    protected function setUp(): void
    {
        parent::setUp();
        $this->messagesHandler = new MessagesHandler();
    }

    public function test_links()
    {
        $result = $this->messagesHandler->prepareLinks(self::TEST_CONTENT);
        $this->assertEquals(self::TEST_CONTENT_APPROVE, $result);
    }
}