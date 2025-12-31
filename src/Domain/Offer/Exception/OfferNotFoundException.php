<?php

declare(strict_types=1);

/**
 * OfferNotFoundException.
 *
 *
 * @category Domain
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

namespace App\Domain\Offer\Exception;

final class OfferNotFoundException extends \DomainException
{
    public function __construct(int $id)
    {
        parent::__construct(sprintf('Offer with ID %d not found.', $id));
    }
}