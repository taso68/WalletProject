<?php
declare(strict_types=1);

namespace App\Http\Controllers\Wallet;

use App\Http\Controllers\Controller;
use App\Models\WalletModel;
use Illuminate\Http\JsonResponse;
use Lazar\Wallet\Application\Contracts\UseCases\GetSingleWalletUseCaseInterface;

class GetSingleWalletController extends Controller
{
    public function __construct(
        private GetSingleWalletUseCaseInterface $getSingleWalletUseCase
    )
    {}

    public function execute(string $id): JsonResponse
    {
        $wallet = $this->getSingleWalletUseCase->execute($id);
            return response()->json(
                new WalletModel($wallet)
        );
    }
}
