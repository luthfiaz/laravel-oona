<?php

namespace App\Api\V1\Controllers;

use JWTAuth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class LogoutController extends Controller
{
    public function logout()
    {
        JWTAuth::invalidate( JWTAuth::getToken() );

        return response()
            ->json([
                'status' => 'ok',
                'message' => 'You have been logged out. Token is no longer valid.'
            ]);
    }
}
