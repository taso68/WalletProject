<?php
declare(strict_types=1);

namespace Lazar\Wallet\Application\DTOs\Input;

use Lazar\Wallet\Application\DTOs\BaseDTO;

class UpdateWalletDTO extends BaseDTO
{
    public string $id;
    public float $amount;
    public string $name;

    public static function fromRequest(array $request) : self
    {
        return new self([
            'id' => (string)$request['id'],
            'amount' => (float)$request['amount'],
            'name' => (string)$request['name'],
        ]);
    }

}