<?php

declare(strict_types=1);

namespace Web3\Formatters;

use Web3\Contracts\Formatter;

/**
 * @internal
 *
 * @implements Formatter<string, string>
 */
final class HexToIntOrFloat implements Formatter
{
    /**
     * {@inheritDoc}
     */
    public static function format(string $value): string
    {
        return (string) hexdec($value);
    }
}