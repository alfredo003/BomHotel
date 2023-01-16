<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
   
        return view('login',[
            'title' => 'BomHotel - Sistema de gestão de Hotel',
        ]);
    }

    public function verificLogin(Request $request)
    {
       var_dump($request->all());

       $credentials =[
           'username' => $request->username,
           'password' => $request->password

       ];

       if(Auth::attempt($credentials)){
           return redirect()->route('admin.home');
           /*$login['success'] = true;
           echo json_encode($login);*/
       }

      return redirect()->back()->withInput()->withErrors(['erro']);
     /* $login['success'] = false;
      $login['message'] = 'Os dados informados não Conferem!';
      echo json_encode($login);*/

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.index');
    }
}
