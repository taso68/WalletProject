<?php
declare(strict_types=1);

namespace Lazar\Wallet\Domain\Contracts\Repositories;

use Lazar\Wallet\Domain\Entities\Wallet;

interface WalletRepositoryInterface
{
    public function getWalletById(string $id): Wallet;

    public function createOrUpdateWallet(Wallet $wallet): void;

    public function deleteWallet(Wallet $wallet): void;

    public function findAllWallets() : array;
}