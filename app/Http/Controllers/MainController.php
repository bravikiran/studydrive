<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Input;

use Hash;
use Mail;
use Auth;
use Redirect;
use Sessions;

class MainController extends Controller
{
    public function store(Request $request){
       
        $request->validate([
            'useremail'     => 'required|email',
            'userpassword'  => 'required|min:5'
        ]);
        
        $userdata = array(
            'email' =>  Input::get('useremail'),
            'password' =>  Input::get('userpassword')
        );

        if (User::where('email', '=', input::get('useremail'))->exists()) {
            
            if (Auth::attempt($userdata))
            {
                $user = Auth::user();
                return view('logout')->with("user",$user);                
            } else
            {   
                return Redirect::to('/')->withErrors($validator);               
            }
        } else {
           
            $confirmation_code = str_random(60);
        
            $user = new User;
            $user->email = Input::get('useremail');
            $user->password = Hash::make(Input::get('userpassword'));
            $user->confirmation_code = $confirmation_code;
            $user->save();

            $data = array('confirmation_code' => $confirmation_code);
            
            Mail::send('emails.emailverification', $data, function($message) use ($user)
            {
                $message->from('ravi.byg@gmail.com');
                $message->to($user->email)
                    ->subject('Verify your email address with Activation code');
            });
            
            return redirect::to('/');
        }
    }

    public function logout()
    {        
        Auth::logout();
        return Redirect::to('/');
    }
}
