<?php

declare(strict_types=1);

/**
 * CustomerFormResetDto DTO.
 *
 * EI Yann Cario - 2025
 *
 * @category Interface
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

namespace Shared\Application\Customer\Dto;

class CustomerFormResetDto
{
    public function __construct(
        public ?string $identifier = null,
    ){}
}