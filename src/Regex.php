<?php

namespace Okapi\Wildcards;

/**
 * # Regex Helper
 *
 * Convert a wildcard to a Regex string.
 */
class Regex
{
    private ?string $wildcard = null;

    /**
     * @param string $regex
     */
    public function __construct(private string $regex) {}

    /**
     * Convert a wildcard to a Regex string.<br><br>
     *
     * <b>Wildcards:</b><br>
     * <b>*</b>  = any number of characters<br>
     * <b>?</b>  = any single character<br>
     * <b>[]</b> = optional characters<br>
     * <b>()</b> = group<br>
     * <b>|</b>  = or<br>
     *
     * @param string $wildcard
     *
     * @return self
     */
    public static function fromWildcard(string $wildcard): self
    {
        $regex = preg_quote($wildcard, '/');

        $regex = str_replace('\*', '.*', $regex);
        $regex = str_replace('\?', '.', $regex);
        $regex = str_replace('\(', '(', $regex);
        $regex = str_replace('\)', ')', $regex);
        $regex = str_replace('\[', '(', $regex);
        $regex = str_replace('\]', ')?', $regex);
        $regex = str_replace('\|', ')|(', $regex);

        $regex = new self("/^($regex)\$/");
        $regex->wildcard = $wildcard;

        return $regex;
    }

    /**
     * Get the regex.
     *
     * @return string
     */
    public function getRegex(): string
    {
        return $this->regex;
    }

    /**
     * Get the wildcard.
     *
     * @return string|null
     */
    public function getWildcard(): ?string
    {
        return $this->wildcard;
    }

    /**
     * Match the given subject.
     *
     * @param string $subject
     *
     * @return bool
     */
    public function match(string $subject): bool
    {
        return preg_match($this->regex, $subject) === 1;
    }

    /**
     * To string.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->regex;
    }
}
