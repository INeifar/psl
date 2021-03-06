<?php

declare(strict_types=1);

namespace Psl\Gen;

use Generator;

/**
 * Returns the keys of an iterable.
 *
 * Examples:
 *
 *      Gen\keys(['a' => 0, 'b' => 1, 'c' => 2])
 *      => Gen('a', 'b', 'c')
 *
 * @psalm-template Tk of array-key
 * @psalm-template Tv
 *
 * @psalm-param iterable<Tk, Tv> $iterable Iterable to get keys from
 *
 * @psalm-return Generator<int, Tk, mixed, void>
 */
function keys(iterable $iterable): Generator
{
    foreach ($iterable as $key => $_) {
        yield $key;
    }
}
