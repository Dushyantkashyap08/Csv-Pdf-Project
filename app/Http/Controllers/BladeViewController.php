<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeViewController extends Controller
{
    public function viewLoginPage()
    {
        return view('login');
    }
    public function viewChangePassword()
    {
        return view('changePassword');
    }
    public function viewUploadCSV()
    {
        return view('uploadCSV');
    }
    public function viewUploadImage()
    {
        return view('uploadImage');
    }
}
