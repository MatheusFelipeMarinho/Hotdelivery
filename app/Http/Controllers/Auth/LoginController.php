<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    /**
     * perform login
     *
     * @param Request $request
     * @return void
     */
    public function login(Request $request)
    {
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            return response()->json('loginFailed', 422); 
            
        }

    }

}