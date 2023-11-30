<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User; 

use Illuminate\Support\Facades\Hash;

use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Response;

class Admincontroller extends Controller
{
    
    public function view_student()
    {
        $student = User::where('usertype', 0)->get();
        return view ('admin.view_student', compact('student'));
    }
    public function staff_management()
    {
        $staff = User::where('usertype', 2)->get();
        return view('admin.staff_management',compact('staff'));
    }
    public function add_staff(Request $request)
    {
        $staff=new User;
        

        $staff->name=$request->name;

        $staff->student_no=$request->student_no;

        $staff->email=$request->email;

        $staff->phone=$request->phone;

        $staff->associated_subject=$request->associated_subject;

        $staff->usertype = 2;

        $password = $request->input('password');

        $staff->password = Hash::make($password);

        $staff->save();


    // Redirect back or wherever you want after adding staff
    return redirect()->back()->with('message', 'Staff added successfully');
    }
    public function delete_staff($id)
    {
        $data = user::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function delete_std($id)
    {
        $data = user::find($id);

        $data->delete();

        return redirect()->back();
    }



}
    



