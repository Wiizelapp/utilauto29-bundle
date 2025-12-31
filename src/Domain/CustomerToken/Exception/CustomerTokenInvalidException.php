<?php

declare(strict_types=1);

namespace App\Domain\CustomerToken\Exception;

use Throwable;

class CustomerTokenInvalidException extends \DomainException
{
    public function __construct()
    {
        parent::__construct('Lien invalide ou expiré.');
    }
}