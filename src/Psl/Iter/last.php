<?php

declare(strict_types=1);

namespace Psl\Iter;

use Psl\Arr;

/**
 * Get the last value of an iterable, if the iterable is empty, returns null.
 *
 * @psalm-template Tk of array-key
 * @psalm-template Tv
 *
 * @psalm-param    array<Tk, Tv> $iterable
 *
 * @psalm-return   null|Tv
 *
 * @see            Arr\last()
 */
function last(iterable $iterable)
{
    /** @psalm-var null|Tv */
    return Arr\last(to_array_with_keys($iterable));
}
