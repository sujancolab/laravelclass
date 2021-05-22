<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index()
    {
        return view('index');
    }
    function signup()
    {
        return view('signup');
    }
    function signupuser(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        $data = $request->all();
        $profile = new Profile;
        $profile->username = $data['user_name'];
        $profile->password = $data['password'];
        $profile->save();
        echo "save successfully";
    }
}
