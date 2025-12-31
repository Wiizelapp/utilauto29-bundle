<?php

declare(strict_types=1);

/**
 * PowerFormatter.
 *
 * Wiizel App - 2025
 *
 * @category Application
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */


namespace Shared\Service\Formatter;

final class PowerFormatter
{
    public function format(int $fiscalHp, int $realHp): string
    {
        return "{$fiscalHp}cv/{$realHp}ch";
    }
}