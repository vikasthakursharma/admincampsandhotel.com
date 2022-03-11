<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Auth;
use Illuminate\Support\Facades\Hash;
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
                $request->session()->put('admin_login',true);
                $request->session()->put('admin_name',$result->name);
                $request->session()->put('admin_email',$result->email);

                return redirect('/');

            }else{

                $request->session()->flash('error','Please enter valid password');
                return redirect('admin/auth/login');
            }

        }else{
            $request->session()->flash('error','Invalid credentails');
        }
    }

    public function logout(request $request){
        $request->session()->forget('admin_login');
        $request->session()->forget('admin_email');
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
        return redirect('/admin/auth/login');
    }
}
