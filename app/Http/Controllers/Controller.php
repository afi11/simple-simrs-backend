<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    
    public function respondWithToken($token, $user)
    {
        return response()->json([
            'token' => $token,
            'token_type' => 'bearer',
            'expires_in' => null,
            'user' => $user
        ], 200);
    }

}
