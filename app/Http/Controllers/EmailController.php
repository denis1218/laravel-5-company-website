<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;

use Exception;
use Dompdf\FrameReflower\Image;
use GuzzleHttp\Exception\ConnectException;
use Illuminate\Contracts\Redis\LimiterTimeoutException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;


class EmailController extends Controller
{

    public function __construct()
    {

    }

    /**
     * show form sending emails
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $net = $this->is_connected();
        return view('mail.contact',compact('net'));
    }

    function is_connected()
    {
        try {
            $connected = fopen("http://www.google.com:80/", "r");
            if ($connected) {
                return true;
            } else {
                return false;
            }
        }catch (Exception $ex)
        {
            return false;
        }

    }


    /**
     * sending email with title and content from request
     */
    public function email_send(Request $request)
    {
            try{

                Mail::to('dentaclinic2018@gmail.com')->send(new SendEmail(
                    $request->input('title'),$request->input('content')
                ));

            }catch (Exception $ex) {
                echo "Something wrong with ".$ex->getMessage();
            }

        flash('message')->success();
        return redirect()->back()->with('message','Successfully Email Send to Paypol Company we will contact you soon');
    }

}
