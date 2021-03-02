<?php

namespace App\Http\Controllers\Back\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('back.auth.login');
    }

    public function login(Request $request)
    {
        // Validate the form data
        $credentials = $this->validate($request, [
            'username' => 'required',
            'password' => 'required|min:6|max:20'
        ]);

        $credentials['enable_flag'] = 1;

        if (Auth::guard('admin')->attempt($credentials, (request('remember') == 'on') ? true : false)) {
            return redirect()->route('back.home');
        }

        return redirect()->back()->withErrors(['username' => [trans('auth.failed')]])->withInput($request->only('username', 'remember'));
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        return $request->wantsJson()
            ? new Response('', 204)
            : redirect()->route('back.login');
    }
}
