<?php
declare(strict_types=1);

namespace Lazar\Wallet\Infrastructure\DataAccess\Repositories;

use Lazar\Wallet\Domain\Contracts\Repositories\WalletRepositoryInterface;
use Lazar\Wallet\Domain\Entities\Wallet;
use Lazar\Wallet\Infrastructure\DataAccess\Exceptions\EntityNotFoundException;

class WalletRepository extends BaseRepository implements WalletRepositoryInterface
{
    protected string $entity = Wallet::class;

    /**
     * @throws EntityNotFoundException
     */
    public function getWalletById(string $id): Wallet
    {
        return $this->findById($id);
    }
    public function createOrUpdateWallet(Wallet $wallet): void
    {
        $this->createOrUpdate($wallet);
    }
    public function deleteWallet(Wallet $wallet): void
    {
        $this->delete($wallet);
    }
    public function findAllWallets(): array
    {
       return $this->findAll();
    }
}