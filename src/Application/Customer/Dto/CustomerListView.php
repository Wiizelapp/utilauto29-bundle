<?php

declare(strict_types=1);

/**
 * CustomerListView.
 *
 * Wiizel App - 2025
 *
 * @category Application
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

namespace Shared\Application\Customer\Dto;

final class CustomerListView
{
    public function __construct(
        public int $id,
        public string $fullName,
        public string $email,
        public ?string $phone = null,
        public ?string $address = null,
        public ?string $city = null,
        public ?int $customerNumber = null,
    ){}
}
