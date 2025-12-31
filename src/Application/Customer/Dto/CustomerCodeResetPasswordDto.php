<?php

declare(strict_types=1);

/**
 * CustomerCodeResetPasswordDto DTO.
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

use Shared\Application\CustomerToken\Dto\CustomerTokenView as TokenView;

final class CustomerCodeResetPasswordDto
{
    public function __construct(
        public TokenView $customerToken,
    ){}
}