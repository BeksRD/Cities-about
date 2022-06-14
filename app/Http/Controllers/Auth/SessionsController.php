<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create(){
        return view('auth.signin');
    }
    public function store(Request $request){
        if (!auth()->attempt(request(['email', 'password']),$request->post('remember'))) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
        return redirect()->to('/');
    }
    public function destroy(){
        auth()->logout();

        return redirect()->to('/');
    }
}
