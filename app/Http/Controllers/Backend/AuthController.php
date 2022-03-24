<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Backend\BannerController;
use Mail;
class AuthController extends Controller
{
    //
    public function index(){
        return view('backend.login');
    }

    public function login(Request $request){

        $email = $request['email'];

        $password = $request['password'];

        $result = Auth::where(['email'=>$email])->first();

        if($result){

            if(Hash::check($password, $result->password))
            {
                $user = array(
                    'user_name' => $result->name,
                    'user_email' => $result->email,
                    'active' => true
                );

                // put user data into session after login
                $request->session()->put('user', $user);

               return redirect('/home');

            }else{

                $request->session()->flash('error','Please enter valid password');
                return redirect('admin/auth/login');
            }

        }else{
            $request->session()->flash('error','Invalid credentails');
        }
    }

    public function logout(request $request){
        // delete user data from session after logout
        $request->session()->forget('user');
        return redirect('admin/auth/login');
    }

    public function register_user(){
       return view('backend.register');
    }

    public function register(Request $request){

        $auth = new Auth;
        $auth->name = $request['name'];

        $auth->email = $request['email'];
        $auth->password = Hash::make($request['password']);
        $auth->save();
        sendRegisterUserEmail($auth->name, $auth->email);
         return redirect('/admin/auth/login')->with('status', 'Successfully Register Check your email');
    }
}
