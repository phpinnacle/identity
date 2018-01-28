<?php
/*
 * This file is part of PHPinnacle ecosystem.
 *
 * (c) PHPinnacle Team <dev@phpinnacle.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace PHPinnacle\Identity;

use Ramsey\Uuid\Uuid as Implementation;

class UUID implements ID
{
    /**
     * @var string
     */
    private $value;

    /**
     * @param string $value
     */
    public function __construct(string $value)
    {
        if (false === Implementation::isValid($value)) {
            throw new Exception\InvalidUUID($value);
        }

        $this->value = $value;
    }

    /**
     * @return self
     */
    public static function time(): self
    {
        return new self(Implementation::uuid1()->toString());
    }

    /**
     * @return self
     */
    public static function random(): self
    {
        return new self(Implementation::uuid4()->toString());
    }

    /**
     * @param string $value
     *
     * @return self
     */
    public static function url(string $value): self
    {
        return new self(Implementation::uuid5(Implementation::NAMESPACE_URL, $value)->toString());
    }

    /**
     * {@inheritdoc}
     */
    public function equals(ID $other): bool
    {
        return $this->value === (string) $other;
    }

    /**
     * {@inheritdoc}
     */
    public function __toString(): string
    {
        return $this->value;
    }
}
