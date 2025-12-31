<?php
/**
 * CustomerCodeResetPasswordDto.
 *
 * Wiizel App - 2025
 *
 * @category Application
 * @package  Unknown
 * @author   Wiizel Softwares <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

declare(strict_types=1);

namespace WiizelApp\UtilAuto29\Application\Customer\Dto;

use WiizelApp\UtilAuto29\Application\CustomerToken\Dto\CustomerTokenView as TokenView;

final class CustomerCodeResetPasswordDto
{
    public function __construct(
        public TokenView $customerToken,
    ){}
}