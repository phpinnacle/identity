<?php
/*
 * This file is part of PHPinnacle/System.
 *
 * (c) PHPinnacle Team <dev@phpinnacle.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace PHPinnacle\Identity\Exception;

class InvalidUUID extends \RuntimeException
{
    /**
     * @param string $value
     */
    public function __construct(string $value)
    {
        parent::__construct(sprintf('Value "%s" not valid UUID string.', $value));
    }
}
