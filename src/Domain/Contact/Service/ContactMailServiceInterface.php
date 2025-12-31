<?php

declare(strict_types=1);

/**
 * ContactMailServiceInterface.
 *
 * EI Yann Cario - 2025
 *
 * @category Domain
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

namespace App\Domain\Contact\Service;

use App\Application\Contact\Dto\ContactFormDto;

interface ContactMailServiceInterface
{
    public function send(ContactFormDto $dto): void;
}