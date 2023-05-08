<?php
declare(strict_types=1);

namespace Lazar\Wallet\Application\UseCases;

use Lazar\Wallet\Application\Contracts\UseCases\UpdateWalletUseCaseInterface;
use Lazar\Wallet\Application\DTOs\Input\UpdateWalletDTO;
use Lazar\Wallet\Application\DTOs\Output\WalletDTO;
use Lazar\Wallet\Domain\Contracts\Repositories\WalletRepositoryInterface;

class UpdateWalletUseCase implements UpdateWalletUseCaseInterface
{
    public function __construct(
        private WalletRepositoryInterface $walletRepository
    )
    {}

    public function execute(UpdateWalletDTO $updateWalletDTO): WalletDTO
    {
        $wallet = $this->walletRepository->getWalletById($updateWalletDTO->id);
        $wallet->setName($updateWalletDTO->name);
        $wallet->setAmount($updateWalletDTO->amount);
        $this->walletRepository->createOrUpdateWallet($wallet);
        return WalletDTO::fromEntity($wallet);
    }
}