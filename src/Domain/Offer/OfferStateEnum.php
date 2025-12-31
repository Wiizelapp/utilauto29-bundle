<?php

declare(strict_types=1);

namespace Shared\Domain\Offer;

enum OfferStateEnum: string
{
    case RESERVED = "Réservé";
    case SOLD = "Vendu";
    case PENDING = "En Prépa";
    case PROGRESS = "En vente";
}
