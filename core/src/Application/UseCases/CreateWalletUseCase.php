<?php
declare(strict_types=1);

namespace Lazar\Wallet\Application\UseCases;

use Lazar\Wallet\Application\Contracts\UseCases\CreateWalletUseCaseInterface;
use Lazar\Wallet\Application\DTOs\Input\CreateWalletDTO;
use Lazar\Wallet\Application\DTOs\Output\WalletDTO;
use Lazar\Wallet\Domain\Contracts\Repositories\WalletRepositoryInterface;
use Lazar\Wallet\Domain\Entities\Wallet;

class CreateWalletUseCase implements  CreateWalletUseCaseInterface
{
    public function __construct(
        private WalletRepositoryInterface $walletRepository
    )
    {}

    public function execute(CreateWalletDTO $createWalletDTO) : WalletDTO
    {
        $wallet = new Wallet();
        $wallet->setAmount($createWalletDTO->amount);
        $wallet->setName($createWalletDTO->name);
        $this->walletRepository->createOrUpdateWallet($wallet);
        return WalletDTO::fromEntity($wallet);
    }
}