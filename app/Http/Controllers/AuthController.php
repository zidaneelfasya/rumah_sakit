<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request){
        // dd($request->email);
        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required',
        // ]);
        // dd($request->email);
        $user = User::where('email', $request->email)->first();
        // dd($user->email,$user->password);
        if (! $user || ! Hash::check($request->password, $user->password)) {dd($request->email,$request->password);
            throw ValidationException::withMessages([
                
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
        $user->createToken($request->email)->plainTextToken;
        return redirect('admin');
    }
}
