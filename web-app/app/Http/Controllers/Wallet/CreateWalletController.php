<?php
declare(strict_types=1);

namespace App\Http\Controllers\Wallet;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateWalletRequest;
use Illuminate\Http\JsonResponse;
use Lazar\Wallet\Application\Contracts\UseCases\CreateWalletUseCaseInterface;
use Lazar\Wallet\Application\DTOs\Input\CreateWalletDTO;


class CreateWalletController extends Controller
{
    public function __construct(
        private CreateWalletUseCaseInterface $createWalletUseCase
    )
    {}

    public function execute(CreateWalletRequest $request) : JsonResponse
    {

        $newWallet = $this->createWalletUseCase->execute(
            CreateWalletDTO::fromRequest($request->all())
        );

        return response()->json($newWallet);
    }
}
