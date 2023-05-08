<?php

namespace Lazar\Wallet\Application\Contracts\UseCases;

use Lazar\Wallet\Application\DTOs\Output\WalletDTO;

interface GetSingleWalletUseCaseInterface
{
    public function execute(string $id): WalletDTO;

}