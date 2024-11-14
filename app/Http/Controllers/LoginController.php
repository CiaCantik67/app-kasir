<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Login;


class LoginController extends Controller
{
   public function showLogin(){
    if(Auth::check()){
        return redirect('/')->with('error'=>'Anda Sedang Login');
    }else{
        return view('login');

    }
 }

   public function actionlogin(Request $request) {
    $data = [
        'email' => $request->email,
        'password'=> $request->password,
    ];

}
}
