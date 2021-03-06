<?php

declare(strict_types=1);

namespace Psl\Str\Byte;

use Psl;

/**
 * @throws Psl\Exception\InvariantViolationException If the $offset is out-of-bounds.
 *
 * @psalm-pure
 */
function after(string $haystack, string $needle, int $offset = 0): ?string
{
    $position = search($haystack, $needle, $offset);
    if (null === $position) {
        return null;
    }

    $position += length($needle);

    return slice($haystack, $position);
}
