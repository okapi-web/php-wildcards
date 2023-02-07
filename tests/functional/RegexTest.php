<?php

namespace Okapi\Wildcards\Tests\functional;

use Okapi\Wildcards\Regex;
use PHPUnit\Framework\TestCase;

class RegexTest extends TestCase
{
    public array $wildcards = [
        // Category
        '*'  => [
            // Should be tested
            'test' => [
                // Wildcard => Expected result
                'test'  => true,
                'test2' => false,
                't*t'   => true,
                't*t2'  => false,
                '*t'    => true,
                't*'    => true,
                '*t*'   => true,
                '*'     => true,
            ]
        ],
        '?'  => [
            'test' => [
                't??t'  => true,
                't??t2' => false,
                't?t'   => false,
                '????'  => true,
                '?????' => false,
            ]
        ],
        '[]' => [
            'test' => [
                'test[12]'     => true,
                't[e]st'       => true,
                't[e]est'      => true,
                '[big_]test'   => true,
                'small_[test]' => false,
            ]
        ],
        '|'  => [
            'test' => [
                'test|test2'          => true,
                'no_test|broken_test' => false,
            ]
        ],
    ];

    /**
     * @dataProvider provideFromWildcard
     */
    public function testFromWildcard(string $test, string $wildcard, bool $expected): void
    {
        $regex = Regex::fromWildcard($wildcard);
        $this->assertEquals(
            $expected,
            $regex->match($test),
            "Failed to test wildcard '$wildcard' for '$test'."
        );
    }

    public function provideFromWildcard(): array
    {
        $data = [];

        foreach ($this->wildcards as $tests) {
            foreach ($tests as $test => $wildcards) {
                foreach ($wildcards as $wildcard => $expected) {
                    $name = "match `$test` with wildcard `$wildcard`";
                    $data[$name] = [$test, $wildcard, $expected];
                }
            }
        }

        return $data;
    }
}
