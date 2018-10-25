<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;


class LanguageController extends Controller
{
    /**
     * @desc To change the current language
     * @request Ajax
     */
    public function index(){
        if (!Session::has('locale')){
            \Session::put('locale',Input::get('locale'));
        }else{
            \Session::put('locale',Input::get('locale'));
        }
        return Redirect::back();
    }
}
