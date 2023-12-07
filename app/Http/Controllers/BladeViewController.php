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
        return view('change-password');
    }
    public function viewUploadCSV()
    {
        return view('upload-csv');
    }
    public function viewUploadImage()
    {
        return view('upload-image');
    }
}
