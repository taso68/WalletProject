<?php
declare(strict_types=1);

namespace App\Http\Controllers\Wallet;

use App\Http\Controllers\Controller;
use App\Models\WalletModel;
use Illuminate\Http\JsonResponse;
use Lazar\Wallet\Application\Contracts\UseCases\GetAllWalletsUseCaseInterface;

class GetAllWalletsController extends Controller
{
    public function __construct(
        private GetAllWalletsUseCaseInterface $getAllWalletsUseCase
    )
    {}

    public function execute(): JsonResponse
    {
        $wallets = $this->getAllWalletsUseCase->execute();
        return response()->json(WalletModel::listModel($wallets));
    }

}
