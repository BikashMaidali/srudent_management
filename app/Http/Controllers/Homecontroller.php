<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

use App\Models\student;

class Homecontroller extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
                return view('user.home');
            } elseif (Auth::user()->usertype == '1') {
                return view('admin.home');
            } elseif (Auth::user()->usertype == '2') {
                return view('staff.home');
            } else {
                // Handle other user types if needed
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }
    public function index()

    {
        if(Auth::id())
        {
            return redirect('home');
        }

        else

        {
      
        return view('user.home');
        }
    }
    public function about()
    {
        return view('user.about');
    }
}
