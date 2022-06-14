<?php

namespace App\Http\Controllers\Api;

//php artisan make:controller Api/ApiAuthController --api --model=TaiKhoan

use App\Http\Controllers\Controller;
use App\Models\TaiKhoan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return login token
     */
    public function login(Request $request)
    {
        //kiem tra du lieu
        $validate = Validator::make($request->all(), [
            'Username' => ['required'],
            'MatKhau' => ['required'],
        ]);
        //neu du lieu no' sai thi`tra? ve` loi~
        if ($validate->fails())
            return response()->json($validate->errors(), 400);


        //select * from TaiKhoan where MatKhau=$MatKhau and (Email=$Email or Username=$Username or Phone=$Phone)
        $data = TaiKhoan::where('MatKhau', $request['MatKhau'])
            ->Where(function ($query) use ($request) {
                $query->orwhere('Email', $request['Email'])
                    ->orwhere('Username', $request['Username'])
                    ->orwhere('Phone', $request['Phone']);
            })
            ->first();

        //neu du lieu rong~ thi tra ve status 400

        if (empty($data))
            return response()->json(["message" => "Username or password is wrong"], 400);

        //ko co rong~ thi tra ve voi status la 200
        $tokenResult = $data->createToken('Login')->plainTextToken;

        return response()->json([
            'message' => 'Login Successfully',
            "token" => $tokenResult,
            "user" => $data,
        ], 200);
    }
    public function logout(Request $request)
    {
        // Revoke all tokens...
        $request->user()->tokens()->delete();

        // Revoke the token that was used to authenticate the current request...
        // $request->user()->currentAccessToken()->delete();

        // Revoke a specific token...
        // $user->tokens()->where('id', $tokenId)->delete();


        return response()->json(['message' => 'Successfully logged out'], 200);

        //     $bearer = $request->bearerToken();
        // if ($token = DB::table('personal_access_tokens')->where('token',hash('sha256',$bearer))->first())
        // {
        //     if ($user = \App\User::find($token->tokenable_id))
        //     {
        //         Auth::login($user);
        //         return $next($request);
        //     }
        // }

        // return response()->json([
        //     'success' => false,
        //     'error' => 'Access denied.',
        // ]);
    }
    public function MyProfile(Request $request)
    {
        return response()->json($request->user(), 200);
    }
}
