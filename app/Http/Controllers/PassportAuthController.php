<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PassportAuthController extends Controller
{
    /**
     * Registration
     */
    public function register(Request $request)
    {
        $file = '';
        if ($request->photo) {
            $folderPath = "uploads/";

            $image_base64 = base64_decode($request->photo);
            $file = $folderPath . 'cartingly_'.uniqid().time() . '.jpg';

            file_put_contents($file, $image_base64);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'twitter' => $request->tw,
            'fb' => $request->fb,
            'pin' => $request->pin,
            'photo' => env('APP_URL') . '/' . $file,
        ]);

        return response()->json(['token' => $user->createToken($request->email.uniqid())->plainTextToken], 200);
    }

    /**
     * Login
     */
    public function login(Request $request) {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            //'remember_me' => 'boolean'
        ]);
        $credentials = request(['email', 'password']);
        if(!Auth::attempt($credentials))
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        $user = $request->user();
        $tokenResult = $user->createToken('Laravel Personal Access Client');
        $token = $tokenResult->token;
        if ($request->remember_me)
            $token->expires_at = Carbon::now()->addWeeks(1);
        $token->save();
        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString()
        ]);
    }
}
