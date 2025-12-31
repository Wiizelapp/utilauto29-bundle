<?php

declare(strict_types=1);

/**
 * UserView.
 *
 * @category Domain
 * @package  Unknown
 * @author   Yann <yann@proaxive.fr>
 * @license  GNU <https://www.gnu.org/licenses/licenses.fr.html>
 * @link     https://utilauto29.fr
 */

namespace Shared\Application\User\Dto;

final readonly class UserView
{
    public function __construct(
        private int $id,
        private string $email,
        private string $username,
        private array|string $roles,
        private ?string $token = null,
        private ?string $apiToken = null,
        private ?bool $isSecure2Fa = null,
    ){}

    public function getId(): int{ return $this->id; }
    public function getEmail(): string{ return $this->email; }
    public function getUsername(): string{ return $this->username; }
    public function getRoles(): array{ return $this->roles; }
    public function getToken(): ?string{ return $this->token; }
    public function getApiToken(): ?string{ return $this->apiToken; }
    public function isSecure2Fa(): bool{ return $this->isSecure2Fa; }
}