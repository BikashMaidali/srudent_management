<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\User; 

class StaffController extends Controller
{
    public function std_detail()
    {
        $student = User::where('usertype', 0)->get();
        return view('staff.std_detail', compact('student'));

    }

    public function staff_detail()
    {
        $staff = User::where('usertype',2)->get();

        return view('staff.staff_detail', compact('staff'));
    }

}
