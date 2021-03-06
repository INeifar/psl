<?php

declare(strict_types=1);

namespace Psl\Gen;

use Closure;
use Generator;

/**
 * Returns a generator containing only the keys for which the given predicate
 * returns `true`. The default predicate is casting the key to boolean.
 *
 * Example:
 *
 *      Gen\filter_keys([0 => 'a', 1 => 'b'])
 *      => Gen(1 => 'b')
 *
 *      Gen\filter_keys([0 => 'a', 1 => 'b', 2 => 'c'], fn($key) => $key <= 1);
 *      => Gen(0 => 'a', 1 => 'b')
 *
 * @psalm-template Tk of array-key
 * @psalm-template Tv
 *
 * @psalm-param iterable<Tk, Tv>            $iterable
 * @psalm-param null|(callable(Tk): bool)   $predicate
 *
 * @psalm-return Generator<Tk, Tv, mixed, void>
 */
function filter_keys(iterable $iterable, ?callable $predicate = null): Generator
{
    /** @psalm-var (callable(Tk): bool) $predicate */
    $predicate = $predicate ?? Closure::fromCallable('Psl\Internal\boolean');
    foreach ($iterable as $k => $v) {
        if ($predicate($k)) {
            yield $k => $v;
        }
    }
}
