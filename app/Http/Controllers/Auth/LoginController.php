<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
     private $errors= [];
    protected $redirectTo = '/admin-dashboard';

    public function loginForm(){
        return view('auth.login');
    }

    public function loginCheck(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $auth = User::where('email','=', $request->email)->first();
        //dd($auth);
        if ($auth) {
            if (Hash::check($request->password, $auth->password)) {
                session([
                    'id' =>$auth->id,
                    'email' =>$auth->email,
                    'phone' =>$auth->phone,
                    'first_name' =>$auth->first_name,
                    'last_name' =>$auth->last_name,
                    'role' =>$auth->role,
                    'photo' =>$auth->photo,
                    'status' =>$auth->status
                ]);

                //dd($auth->role);
                if ($auth->status == 1) {
                    if ($auth->role == 'admin') {
                        //dd("status ok");
                        return redirect('/admin-dashboard');
                    }
                } else {
                    return redirect('/')->with('failed','Opps! You Are Not Active!.');
                }
            } else {
                return redirect('/')
                ->withInput($request->only('email'))
                ->with('error', 'Password do not match.');
            }
        } else {
            return back()->with('error', 'No account for this email');
        }
    }

    protected function guard()
    {
        return Auth::guard('guest');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }
}
