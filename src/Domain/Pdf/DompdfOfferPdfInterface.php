<?php

declare(strict_types=1);

/**
 * DomPdfInterface.
 *
 * EI Yann Cario - 2025
 *
 * @category Domain
 * @package  Unknown
 * @author   Yann <yann@wiizelapp.com>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://wiizelapp.com
 */

namespace App\Domain\Pdf;

use App\Application\Offer\Dto\OfferDetailView;

interface DompdfOfferPdfInterface
{
    public function generate(OfferDetailView $offer): string;
    public function streamOfferPdf(OfferDetailView $offer): ?string;
}