<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Input;

class loginController extends Controller
{
    public function check(Request $request) {

        $request->validate([
            'useremail'     => 'required',
            'userpassword'  => 'required'
        ]);
    }
}
