<?php

namespace App\Http\Controllers;
use Auth;
use Exception;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getLogin()
    {
    	return view('auth.login');   
    }
    public function postLogin(Request $request)
    {
    	try{

     $params =[

     'email' =>$request->input('email'),
     'password' =>$request->input('password'),
     ];

     if (!Auth::attempt($params)) {
     	throw new Exception ("Invalide User", 401);
     }flash('Login sussfully')->success();
     return redirect()->route('get.home');
 }catch(Exception $e){
 	flash($e->getMessage())->error();
 	return redirect()->route('login');
     
    }
 }
}
