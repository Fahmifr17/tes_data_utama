<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   public function register() {
   	$data['title'] = 'Register';
   	return view('user/register', $data);

   }

      public function register_action(Request $request) {
   	$request->validate([
   		'name' => 'request',
   		'username' => 'required|unique:users',
   		'password' => 'required',
   		'password_confirmation' => 'required|same:password',
   	]);

   	$user = new user([
   		'name' => $request->name,
   		'username' => $request->username,
   		'password' => Hash::make($request->username),
   	]);

   	$user->save();
   	return redirect()->route('login')->with('success', 'Registration Success, Please Login!');
   	
   }
}
