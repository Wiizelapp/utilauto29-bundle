<?php

declare(strict_types=1);

/**
 * SubscriberNotFoundException.
 *
 *
 * @category Domain
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

namespace App\Domain\Newsletter\Exception;

class SubscriberNotFoundException extends \DomainException
{
    public function __construct()
    {
        parent::__construct('Subscriber not found.');
    }
}