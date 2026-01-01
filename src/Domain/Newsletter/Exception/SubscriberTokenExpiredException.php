<?php
/**
 * SubscriberTokenExpiredException.
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

namespace WiizelApp\UtilAuto29\Domain\Newsletter\Exception;

class SubscriberTokenExpiredException extends \DomainException
{
    public function __construct(string $message = "Le token de confirmation est expiré !")
    {
        parent::__construct($message);
    }
}