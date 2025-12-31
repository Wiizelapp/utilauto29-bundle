<?php

declare(strict_types=1);

/**
 * ModelId.
 *
 * ValueObject Class DTO
 *
 * @category Domain
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

namespace App\Domain\Wiizel\ValueObject;

final class ModelId
{
    private int $value;

    public function __construct(int $value)
    {
        if ($value < 0) {
            throw new \InvalidArgumentException('Model ID must be >= 0');
        }

        $this->value = $value;
    }

    public function value(): int
    {
        return $this->value;
    }
}