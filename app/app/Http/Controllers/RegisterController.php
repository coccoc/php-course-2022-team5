<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Throwable;

class RegisterController extends Controller
{
  public function register(UserRequest $request){
    $isAdmin = 0;
    try{
      $data = $request->all();
      $user= new User();
      $user->email = $data['email'];
      $user->password = md5($data['password']);
      $user->is_dmin = $isAdmin;
      $check = $user->save();
      if($check){
        return response()->json([
          'message' => 'success',
          'user' => $user
        ]);
      }
      return $data;
    }catch(Throwable $e){
      return $e;
    }
  }
}
