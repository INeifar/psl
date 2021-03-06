<?php

declare(strict_types=1);

namespace Psl\Iter;

use Psl\Gen;

/**
 * Chains the iterables that were passed as arguments.
 *
 * The resulting iterator will contain the values of the first iterable, then
 * the second, and so on.
 *
 * Examples:
 *
 *     Iter\chain(Iterable\range(0, 5), Iter\range(6, 10), Iter\range(11, 15))
 *     => Iter(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15)
 *
 * @psalm-template Tk of array-key
 * @psalm-template Tv
 *
 * @psalm-param    list<iterable<Tk, Tv>> $iterables Iterables to chain
 *
 * @psalm-return   Iterator<Tk, Tv>
 *
 * @see            Gen\chain()
 */
function chain(iterable ...$iterables): Iterator
{
    return new Iterator(Gen\chain(...$iterables));
}
