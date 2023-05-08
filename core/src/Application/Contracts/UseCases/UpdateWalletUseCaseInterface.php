<?php
declare(strict_types=1);

namespace Lazar\Wallet\Application\Contracts\UseCases;

use Lazar\Wallet\Application\DTOs\Input\UpdateWalletDTO;
use Lazar\Wallet\Application\DTOs\Output\WalletDTO;

interface UpdateWalletUseCaseInterface
{
    public function execute(UpdateWalletDTO $updateWalletDTO): WalletDTO;

}