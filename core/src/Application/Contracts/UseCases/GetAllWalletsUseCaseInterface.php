<?php
declare(strict_types=1);

namespace Lazar\Wallet\Application\Contracts\UseCases;

use Doctrine\Common\Collections\ArrayCollection;

interface GetAllWalletsUseCaseInterface
{
    public function execute() : ArrayCollection;
}