<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
use App\models\User;

class UserRepository implements UserRepositoryInterface
{

    public function index(){
        return response()->json([
            'success' => true,
            'data' => User::All()
        ], 200);
    }

}