<?php

declare(strict_types=1);

/**
 * TokenType. (ENUM)
 *
 * EI Yann Cario - 2025
 *
 * @category Application
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

namespace App\Domain\CustomerToken;

enum TokenType: string
{
    case INVITATION = 'invitation';
    case RESET_PASSWORD = 'reset_password';
    case VERIFY_EMAIL = 'verify_email';
}