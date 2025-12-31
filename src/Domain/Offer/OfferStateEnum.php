<?php
/**
 * OfferStateEnum.
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

namespace WiizelApp\UtilAuto29\Domain\Offer;

enum OfferStateEnum: string
{
    case RESERVED = "Réservé";
    case SOLD = "Vendu";
    case PENDING = "En Prépa";
    case PROGRESS = "En vente";
}
