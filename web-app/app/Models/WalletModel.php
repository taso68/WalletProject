<?php
declare(strict_types=1);

namespace App\Models;

use Doctrine\Common\Collections\ArrayCollection;
use Lazar\Wallet\Application\DTOs\Output\WalletDTO;

class WalletModel
{
    public string $id;
    public string $amount;
    public string $name;

    public function __construct(WalletDTO $walletDTO)
    {
        $this->id = $walletDTO->id;
        $this->name = $walletDTO->name;
        $this->amount = number_format($walletDTO->amount, 2);
    }

    public static function listModel(ArrayCollection $collection): array
    {
        $list = [];
        if (!$collection->isEmpty()) {
            foreach ($collection as $walletDto) {
                if ($walletDto instanceof WalletDTO) {
                    $list[] = new self($walletDto);
                }
            }
        }

        return $list;
    }
}
