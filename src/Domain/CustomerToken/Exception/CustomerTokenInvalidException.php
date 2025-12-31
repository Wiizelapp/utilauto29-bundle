<?php
/**
 * CustomerTokenInvalidException.
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

namespace WiizelApp\UtilAuto29\Domain\CustomerToken\Exception;

use Throwable;

class CustomerTokenInvalidException extends \DomainException
{
    public function __construct()
    {
        parent::__construct('Lien invalide ou expiré.');
    }
}