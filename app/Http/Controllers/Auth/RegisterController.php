<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;

class RegisterController extends Controller
{


    public function register(UserRequest $request)
    {
        $data = $request->validated();
            $user = User::create([
                'email'    => $data['email'],
                'phone'    => $data['phone'],
                'password' => bcrypt($data['password']),
            ]);

           $user->createToken('admin')->plainTextToken;
            return redirect()->route('welcome');
    
    }


}
