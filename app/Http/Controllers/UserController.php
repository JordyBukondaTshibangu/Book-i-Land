<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function signUp(Request $request)
    {
       $my_profile = User::create([
           'name' => 'Jordy Tshibangu',
           'email' => 'jordytshibss@gmail.com',
           'password' => '123456789'
       ]);

       return response()->json([
           'Message' => 'Your Admin profile was succesfully created!',
           'me' => $my_profile
       ], 202);
    }

    public function login(Request $request)
    {
        //
    }

    public function profile($id)
    {
        $my_profile = User::find($id);

        return response()->json([
            'Message' => 'Your Admin profile',
            'me' => $my_profile
        ], 200);

    }

    public function update(Request $request, $me)
    {
        
    }
    
    public function logout($me)
    {
        //
    }
}
