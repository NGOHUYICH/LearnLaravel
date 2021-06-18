<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormDangNhap extends Controller
{
    //
    public function HienthiFormLogin(Request $request)
    {
        if(isset($_POST['send'])){
            return view('Ouput_Login');
        }else{
            return view('Input_Login');
        }
    }
}
