<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Auth;
class UsersController extends Controller
{
    //
    public function index()
    {
        $auth = Auth::paginate(5);
        $data = compact('auth');
        return view('backend.users')->with($data);

    }



}
