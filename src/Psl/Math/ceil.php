<?php

declare(strict_types=1);

namespace Psl\Math;

/**
 * Return the smallest integer value greater than or equal to the given number.
 *
 * Example:
 *
 *      Math\ceil(5.5)
 *      => Float(6.0)
 *
 *      Math\ceil(-10.0)
 *      => Float(-10.0)
 *
 *      Math\ceil(-5.5)
 *      => Float(-5.0)
 */
function ceil(float $float): float
{
    return \ceil($float);
}
