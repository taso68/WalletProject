<?php
declare(strict_types=1);
namespace Lazar\Wallet\Application\Contracts\UseCases;

use Lazar\Wallet\Application\DTOs\Input\CreateWalletDTO;
use Lazar\Wallet\Application\DTOs\Output\WalletDTO;

interface CreateWalletUseCaseInterface
{
    public function execute(CreateWalletDTO $createWalletDTO) : WalletDTO;
}