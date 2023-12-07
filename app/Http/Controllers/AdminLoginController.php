<?php

namespace App\Http\Controllers;
use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;


class AdminLoginController extends Controller
{
    public function loginUser(Request $request)
    {
        try {
            $request->validate([
                'username' => 'required',
                'password' => 'required|max:6',
            ]);
    
            $credentials = $request->only('username', 'password');
    
            // Retrieve the user from the database based on the provided username
            $user = Login::where('username', $credentials['username'])->first();
    
            if ($user && $user->password === $credentials['password']) {
    
                Session::put('admin_session','loggedIn');
                // Authentication successful
                Auth::login($user);
                return redirect()->intended('csv');
            }
    
            return redirect("/")->with('error', 'Oops! You have entered invalid credentials');
        } catch (\Exception $e) {
            // Handle any exceptions that occur during the execution of the code
            Log::error($e->getMessage());
            return redirect("/")->with('error', 'An error occurred while processing your request. Please try again later.');
        }
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return Redirect('/');
    }

    public function changePassword(Request $request)
    {
        try {
            if ($request->isMethod('POST')) {
                $oldPassword = $request->get('oldPassword');
                $newPassword = $request->get('newPassword');
                $cNewPassword = $request->get('cNewPassword');

                if ($newPassword == $cNewPassword) {
                    $oldpass = Login::where('password', $oldPassword)->first();

                    if (isset($oldpass)) {
                        $oldpass->password = $newPassword;
                        $oldpass->save();
                        return redirect()->back()->with("success", "password updated successfully");
                    } else {
                        return redirect()->back()->with("error", "password did not updated successfully");
                    }
                } else {
                    return redirect()->back()->with("error", "Inavlid Credentials");
                }
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with("error", "An error occurred while processing your request. Please try again later.");
        }
    }
}
