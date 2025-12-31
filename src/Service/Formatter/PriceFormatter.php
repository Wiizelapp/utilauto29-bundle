<?php

declare(strict_types=1);

/**
 * PriceFormatter.
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

final class PriceFormatter
{
    public function __construct(private string $locale = 'fr_FR') {}

    public function format(float|int $amount, string $currency = 'EUR'): string
    {
        $formatter = new \NumberFormatter($this->locale, \NumberFormatter::CURRENCY);
        $formatted = $formatter->formatCurrency($amount, $currency);

        return str_replace([" ", " "], ' ', $formatted);
        // " " = \u00A0 (espace insécable)
        // " " = \u202F (fine espace insécable)
    }
}