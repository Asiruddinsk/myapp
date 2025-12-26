<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function Admin()
    {
        if(Auth::user()->usertype == 'admin')
        {
            return view('admin.dashboard');
        }else{
            return redirect('/login');
        }
    }

    public function Catagory()
    {
        return view('admin.catagory');
    }
}
