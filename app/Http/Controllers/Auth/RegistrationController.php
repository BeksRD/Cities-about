<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create(){
        return view('auth.signup');
    }
    public function store(StoreUserRequest $request, User $user){
        auth()->login($user->saveUser($request));
        return redirect()->to('/');
    }
}
