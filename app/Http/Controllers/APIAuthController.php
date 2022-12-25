<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class APIAuthController extends Controller
{


    public function registerUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);


        if ($validator->fails()) {
            return response()->json(['Error', $validator->errors()]);
        }


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return response()->json(['Novi user', $user]);
    }




    public function loginUser(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);



        if ($validator->fails()) {
            return response()->json(['Error', $validator->errors()]);
        }



        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['Error - Please try again']);
        }


        $user = User::where('email', $request['email'])->first();

        $login_token = $user->createToken('login_token')->plainTextToken;

        return response()->json(['Token', $login_token]);
    }




    public function logoutUser(Request $request)
    {

        auth()->user()->tokens()->delete();

        return response()->json('User logout');
    }
}
