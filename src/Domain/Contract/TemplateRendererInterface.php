<?php

declare(strict_types=1);

/**
 * TemplateRendererInterface.
 *
 * EI Yann Cario - 2025
 *
 * @category Domain
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

namespace App\Domain\Contract;

interface TemplateRendererInterface
{
    public function render(string $template, array $context = []): string;
}