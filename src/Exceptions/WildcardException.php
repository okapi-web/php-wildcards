<?php

namespace Okapi\Wildcards\Exceptions;

use RuntimeException;

/**
 * # Wildcard Exception
 *
 * Exception thrown when a wildcard is invalid.
 */
class WildcardException extends RuntimeException
{
    /**
     * WildcardException constructor.
     *
     * @param string $message
     */
    public function __construct(string $message = "")
    {
        parent::__construct($message, 1);
    }
}
