<?php
declare(strict_types=1);

namespace Lazar\Wallet\Application\UseCases;


use Lazar\Wallet\Application\Contracts\UseCases\GetSingleWalletUseCaseInterface;
use Lazar\Wallet\Application\DTOs\Output\WalletDTO;
use Lazar\Wallet\Domain\Contracts\Repositories\WalletRepositoryInterface;

class GetSingleWalletUseCase implements GetSingleWalletUseCaseInterface
{
    public function __construct(
        private WalletRepositoryInterface $walletRepository
    )
    {}

    public function execute(string $id): WalletDTO {
        return WalletDTO::fromEntity(
            $this->walletRepository->getWalletById($id)
        );
    }
}