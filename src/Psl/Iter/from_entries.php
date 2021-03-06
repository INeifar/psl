<?php

declare(strict_types=1);

namespace Psl\Iter;

use Psl\Gen;

/**
 * Returns an iterator where each mapping is defined by the given key/value
 * tuples.
 *
 * @psalm-template Tk of array-key
 * @psalm-template Tv
 *
 * @psalm-param    iterable<array{0: Tk, 1: Tv}> $entries
 *
 * @psalm-return   Iterator<Tk, Tv>
 *
 * @see            Gen\from_entries()
 */
function from_entries(iterable $entries): Iterator
{
    return new Iterator(Gen\from_entries($entries));
}
