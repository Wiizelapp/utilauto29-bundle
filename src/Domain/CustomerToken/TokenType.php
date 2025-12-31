<?php
/**
 * TokenType.
 *
 * Wiizel App - 2025
 *
 * @category Domain
 * @package  Unknown
 * @author   Wiizel Softwares <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

declare(strict_types=1);

namespace WiizelApp\UtilAuto29\Domain\CustomerToken;

enum TokenType: string
{
    case INVITATION = 'invitation';
    case RESET_PASSWORD = 'reset_password';
    case VERIFY_EMAIL = 'verify_email';
}