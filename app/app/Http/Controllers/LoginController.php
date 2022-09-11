<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
  public function login(LoginRequest $request){
    $login = $request->all();
    $email = $login['email'];
    $user = User::where('email', $email)->first();
    if($user!=null && $user['password'] == md5($login['password'])){
      return response()->json([
            'message' => 'Login successful',
      ], 200);
    }else{
      return response()->json([
          'message' => 'Unauthorized',
      ], 400);
    }
  }
}
