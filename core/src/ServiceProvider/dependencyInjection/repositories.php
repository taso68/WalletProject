<?php
declare(strict_types=1);

use Lazar\Wallet\Domain\Contracts;
use Lazar\Wallet\Infrastructure\DataAccess;


return [
    Contracts\Repositories\WalletRepositoryInterface::class => DataAccess\Repositories\WalletRepository::class,
];

