<?php

declare(strict_types=1);

/**
 * PictureReorder.
 *
 * ValueObject Class DTO
 *
 * @category Domain
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

namespace App\Domain\Offer\ValueObject;

final class PictureReorder
{
    private int $value;

    public function __construct(int $value)
    {
        if ($value < 0) {
            throw new \InvalidArgumentException('Picture order must be >= 0');
        }

        $this->value = $value;
    }

    public function value(): int
    {
        return $this->value;
    }
}