<?php

use PHPUnit\Framework\TestCase;

class NicoTest extends TestCase {
    public function testItCanEncodeString()
    {
        $this->assertEquals(
            'cseerntiofarmit on  ',
            Nico::encode("crazy", "secretinformation")
        );

        $this->assertEquals(
            'abcd  ',
            Nico::encode("abc", "abcd")
        );

        $this->assertEquals(
            '2143658709',
            Nico::encode("ba", "1234567890")
        );

        $this->assertEquals(
            'message',
            Nico::encode("a", "message")
        );

        $this->assertEquals(
            'eky',
            Nico::encode("key", "key")
        );
    }
}
