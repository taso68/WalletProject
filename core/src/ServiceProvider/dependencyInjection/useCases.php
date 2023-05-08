<?php
declare(strict_types=1);

use Lazar\Wallet\Application\Contracts;
use Lazar\Wallet\Application;


return [
    Contracts\UseCases\CreateWalletUseCaseInterface::class => Application\UseCases\CreateWalletUseCase::class,
    Contracts\UseCases\UpdateWalletUseCaseInterface::class => Application\UseCases\UpdateWalletUseCase::class,
    Contracts\UseCases\GetAllWalletsUseCaseInterface::class => Application\UseCases\GetAllWalletsUseCase::class,
    Contracts\UseCases\GetSingleWalletUseCaseInterface::class => Application\UseCases\GetSingleWalletUseCase::class,
];