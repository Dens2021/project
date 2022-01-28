<?php

namespace App\Http\Controllers;

use App\Models\Entities\UserEntity;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function logout(Request $request)
    {

        Auth::logout();
        return redirect('/');

    }

}
