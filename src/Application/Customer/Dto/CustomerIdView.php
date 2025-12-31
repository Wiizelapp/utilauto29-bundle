<?php

declare(strict_types=1);

/**
 * CustomerIdView.
 *
 * EI Yann Cario - 2025
 *
 * @category Application
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

namespace Shared\Application\Customer\Dto;

final class CustomerIdView
{
    public function __construct(
        public int $id,
        public string $fullName,
        public string $email,
        public ?string $token = null,
        public ?int $code = null,
    ){}
}