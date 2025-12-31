<?php
/**
 * OfferNotFoundException.
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

namespace WiizelApp\UtilAuto29\Domain\Offer\Exception;

final class OfferNotFoundException extends \DomainException
{
    public function __construct(int $id)
    {
        parent::__construct(sprintf('Offer with ID %d not found.', $id));
    }
}