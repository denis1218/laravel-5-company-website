<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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


//    protected function validateLogin(Request $request)
//    {
//        $this->validate($request, [
//            $this->username() => 'required|string',
//            'password' => 'required|string',
//        ]);

//
//    }
    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }

//    }


    /**
     * LoginController constructor.
     * this method implement middle guest as login page and logout page
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     * override method showLoginForm to new form login
     * if user already authticated login it
     * or else return to view login.
     */
//    public function showLoginForm()
//    {
//        if (Auth::check()) {
//            return redirect('/dash');
//        }
//        return view('login');
//    }



    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * get value from form email , password and attempt to Auth::
     * if successfull match got to route /dash else got to route:login
     */
    public function login(Request $request)
    {
//        $this->validateLogin($request);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dash');
        }
    }




    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * override method logout it logout the page got to logout route and
     * delete session from Auth
     */
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }


}
