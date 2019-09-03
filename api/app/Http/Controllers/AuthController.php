<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use \Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function register(Request $request)
    {
        try {
            $user = new User();
            $user->store($request);
            return $this->login($request);
        } catch(\Exception $exception) {
            return response()
                ->json(['error' => 'Error: ' . $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if ($token = $this->guard()->attempt($credentials)) {
            return response()
                ->json(['success' => 'Successfully logged in'], Response::HTTP_OK)
                ->header('Authorization', $token);
        }
        return response()
            ->json(['error' => 'Error: your credentials not found'], Response::HTTP_NOT_FOUND);
    }

    /**
     * @return JsonResponse
     */
    public function logout()
    {
        $this->guard()->logout();
        return response()
            ->json(['success' => 'Successfully logged out'], Response::HTTP_OK);
    }

    /**
     * @return JsonResponse
     */
    public function user()
    {
        return response()
            ->json(['user' => auth()->user()], Response::HTTP_OK);
    }

    /**
     * @return JsonResponse
     */
    public function refresh()
    {
        if ($token = $this->guard()->refresh()) {
            return response()
                ->json(['success' => 'Token was refreshed'], Response::HTTP_OK)
                ->header('Authorization', $token);
        }
        return response()
            ->json(['error' => 'Error: token was not refreshed'], Response::HTTP_UNAUTHORIZED);
    }

    /**
     * @return mixed
     */
    private function guard()
    {
        return Auth::guard();
    }
}
