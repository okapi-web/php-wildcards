<?php

namespace Okapi\Wildcards\Tests\functional;

use Okapi\Wildcards\Exceptions\WildcardException;
use Okapi\Wildcards\Regex;
use PHPUnit\Framework\TestCase;

class RegexTest extends TestCase
{
    public array $wildcards = [
        // Category
        '*' => [
            // Should be tested
            'test' => [
                // Wildcard => Expected result (null = exception)
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

        '?' => [
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
                'test[1'       => null,
            ]
        ],

        '|' => [
            'test' => [
                'test|test2'          => true,
                'no_test|broken_test' => false,
            ]
        ],

        '()' => [
            'test' => [
                'test(test2)' => false,
                'test2(test)' => false,
                '(test)'      => true,
                '(test'       => null,
            ]
        ],

        'mix' => [
            'test' => [
                '(test)|(test2)'    => true,
                '(no_test)|(test2)' => false,
                '(test)*'           => true,
                '(test)*2'          => false,
            ],

            'image.png' => [
                '(*.png)|(*.jpg)' => true,
                '(*.php)|(*.js)'  => false,
                '*.png|*.jpg'     => true,
                '*.php|*.js'      => false,
                '*.(png|jpg)'     => true,
                '*.(php|js)'      => false,
            ],

            'hello' => [
                '(hello)|(world)' => true,
                'hello'           => true,
                'no_hello'        => false,
            ],

            'world' => [
                '(hello)|(world)' => true,
                'world'           => true,
                'no_world'        => false,
            ],

            'index.php' => [
                'index[*].php' => true,
                'index[*].js'  => false,
            ],

            'index.test.php' => [
                'index[*].php' => true,
                'index[*].js'  => false,
            ],

            'index_2.php' => [
                'index[*].php' => true,
                'index[*].js'  => false,
            ],
        ]
    ];

    /**
     * @dataProvider provideFromWildcard
     */
    public function testFromWildcard(string $test, string $wildcard, ?bool $expected): void
    {
        $regex = Regex::fromWildcard($wildcard);

        if (gettype($expected) === 'boolean') {
            $this->assertEquals(
                $expected,
                $regex->match($test),
                "Failed to test wildcard '$wildcard' for '$test'."
            );
        } else {
            $this->expectException(WildcardException::class);
            $regex->match($test);
        }
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
