<?php
declare(strict_types=1);

namespace Lazar\Wallet\Application\DTOs\Input;

use Lazar\Wallet\Application\DTOs\BaseDTO;

class CreateWalletDTO extends BaseDTO
{
    public float $amount;
    public string $name;

    public static function fromRequest(array $request) : self
    {
        return new self([
            'amount' => (float)$request['amount'],
            'name' => (string)$request['name'],
        ]);
    }

}