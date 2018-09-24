<?php

namespace App\Http\Controllers;

use Hamcrest\Core\IsEqual;
use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    function index(){
      return view('login');

    }
    function  authenticat(Request $request){


            $user = User::all();
            foreach ($user as $usr) {
                if ($request->email == $usr->email && $request->pass == $usr->password) {
                    return redirect('dash');
                } else {

                    return back();


                }
            }




    }
}
