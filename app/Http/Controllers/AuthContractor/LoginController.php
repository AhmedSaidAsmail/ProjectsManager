<?php

namespace App\Http\Controllers\AuthContractor;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * @return \Illuminate\Http\Response
     */

    public function showLoginForm()
    {
        return view('ContractorAuth.Login');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     */

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);
        if (Auth::guard('contractor')->attempt(['email' => $request->email, 'password' => $request->password, 'active' => 1], $request->remember)) {
            return redirect()->intended(route('contractor.welcome'));
        }
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {
        Auth::guard('contractor')->logout();
        return redirect()->route('contractor.login');
    }
}
