<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Hotdelivery\RegisterNewUser\Services\RegisterNewAccount;


class RegisterNewUserController extends Controller
{
    
    /**
     * register a new master user
     *
     * @param Request $request
     * @return void
     */
    public function insert(Request $request)
    {

        $data['company_name'] = $request->company_name; 
        $data['user_name']    = $request->user_name;
        $data['email']        = $request->email; 
        $data['password']     = $request->password;
        
        (new RegisterNewAccount)->register($data);

    }

}