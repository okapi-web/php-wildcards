<?php

namespace Okapi\Wildcards\Tests\unit;

use Okapi\Wildcards\Regex;
use PHPUnit\Framework\TestCase;

class RegexTest extends TestCase
{
    public function testGetRegex(): void
    {
        $regexString = '/^test$/';
        $regex = new Regex($regexString);

        $this->assertEquals(
            $regexString,
            $regex->getRegex()
        );
    }

    public function testGetWildcard(): void
    {
        $wildcard = 'test';
        $regex = Regex::fromWildcard($wildcard);

        $this->assertEquals(
            $wildcard,
            $regex->getWildcard()
        );
    }

    public function testMatch(): void
    {
        $regex = Regex::fromWildcard('t*st');

        $this->assertTrue($regex->matches('test'));
        $this->assertFalse($regex->matches('test2'));
    }

    public function testToString(): void
    {
        $regexString = '/^test$/';
        $regex = new Regex($regexString);

        $this->assertEquals(
            $regexString,
            (string) $regex
        );
    }
}
