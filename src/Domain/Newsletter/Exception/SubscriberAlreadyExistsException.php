<?php

declare(strict_types=1);

/**
 * SubscriberAlreadyExistsException.
 *
 *
 * @category Domain
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

namespace App\Domain\Newsletter\Exception;

class SubscriberAlreadyExistsException extends \DomainException
{
    public function __construct()
    {
        parent::__construct('The subscriber already exists.');
    }
}