<?php
declare(strict_types=1);

namespace App\Http\Controllers\Wallet;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateWalletRequest;
use Illuminate\Http\JsonResponse;
use Lazar\Wallet\Application\Contracts\UseCases\UpdateWalletUseCaseInterface;
use Lazar\Wallet\Application\DTOs\Input\UpdateWalletDTO;

class UpdateWalletController extends Controller
{
    public function __construct(
        private UpdateWalletUseCaseInterface $updateWalletUseCase
    ) {}

    public function execute(UpdateWalletRequest $request) : JsonResponse
    {
        $this->updateWalletUseCase->execute(
            UpdateWalletDTO::fromRequest($request->all())
        );

        return response()->json();
    }
}
