<?php
declare(strict_types=1);

namespace Lazar\Wallet\Application\UseCases;

use Doctrine\Common\Collections\ArrayCollection;
use Lazar\Wallet\Application\Contracts\UseCases\GetAllWalletsUseCaseInterface;
use Lazar\Wallet\Application\DTOs\Output\WalletDTO;
use Lazar\Wallet\Domain\Contracts\Repositories\WalletRepositoryInterface;

class GetAllWalletsUseCase implements GetAllWalletsUseCaseInterface
{
    public function __construct(
        private WalletRepositoryInterface $walletRepository
    )
    {}
    public function execute(): ArrayCollection
    {
        $entities = $this->walletRepository->findAllWallets();

        return WalletDTO::fromArray($entities);
    }

}