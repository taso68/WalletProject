<?php
declare(strict_types=1);

namespace Lazar\Wallet\Application\DTOs\Output;

use Doctrine\Common\Collections\ArrayCollection;
use Lazar\Wallet\Application\DTOs\BaseDTO;
use Lazar\Wallet\Domain\Entities\Wallet;

class WalletDTO extends BaseDTO
{
    public string $id;
    public float $amount;
    public string $name;

    public static function fromEntity(Wallet $wallet) : self
    {
        return new self([
            'id' => $wallet->getId(),
            'amount' => $wallet->getAmount(),
            'name' => $wallet->getName()
        ]);
    }

    public static function fromArray(array $wallets) : ArrayCollection
    {
        $collection = new ArrayCollection();
        if(!empty($wallets)) {
            foreach ($wallets as $wallet) {
                if($wallet instanceof Wallet) {
                    $collection->add(self::fromEntity($wallet));
                }
            }
        }

        return $collection;
    }
}