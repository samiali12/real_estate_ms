<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
    public function dashboard()
    {
        //
        return view('user.dashboard');
    }

    // This functionn handle user Signup functionality */
    public function userSignUp(Request $request){

        $name = $request->post('name');
        $email = $request->post('email');
        $password = $request->post('password');
        $cpassword = $request->post('cpassword'); 
        
        // new object of user
        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;

        // save the user data in database
        $user->save();

        Auth::login($user);

        return redirect('user/dashboard');

    }

    // This functionn handle user SignIn functionality */
    public function userSignIn(Request $request){

        $email = $request->post('email');
        $password = $request->post('password');

        $result = User::where(["email"=>$email, "password"=>$password])->get();

        if(isset($result['0']->id)){
            return redirect('user/dashboard');
        }
        else{
            $request->session()->flash('error', 'Please enter valid login details');
            return redirect('/');
        }

    }
}
