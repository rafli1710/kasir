<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (auth::id()) {
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'petugas')
             {
                return view('dashboard');
            }
             elseif ($usertype == 'admin') 
            {
             return view('admin.adminhome');
            }
        }
    }
}
