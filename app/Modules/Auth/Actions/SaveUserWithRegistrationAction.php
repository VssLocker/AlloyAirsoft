<?php

namespace App\Modules\Auth\Actions;

use App\Models\User;
use App\Modules\Auth\Dto\SaveUserDto;
use App\Modules\Player\Db\IPlayerDb;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

final class SaveUserWithRegistrationAction
{
    private User $userModel;
    private IPlayerDb $playerDb;

    public function __construct(User $userModel, IPlayerDb $playerDb)
    {
        $this->userModel = $userModel;
        $this->playerDb = $playerDb;
    }

    public function handle(SaveUserDto $dto): void
    {
        $idCreatedPlayer = $this->playerDb->createPlayer($dto);
        $user = $this->userModel->createUser($dto, $idCreatedPlayer);
        Auth::login($user);
    }

}
