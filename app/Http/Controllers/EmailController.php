<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;

use Dompdf\Exception;
use Dompdf\FrameReflower\Image;
use Illuminate\Contracts\Redis\LimiterTimeoutException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;



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

        return view('mail.contact');
    }


    /**
     * sending email with title and content from request
     */
    public function email_send(Request $request)
    {
        $input           = Input::all();
        $file            = array_get($input, 'imagefile');
        $destinationPath = public_path('img');
        $fileName        = $request->imagefile->getClientOriginalName();
        $filepath        = $destinationPath.'/'.$fileName;

        try{
            Mail::to('mahdisafari.software.eng@gmail.com')->send(new SendEmail(
                $request->input('title'),$request->input('content'),$filepath
            ));
        }catch (LimiterTimeoutException $ex){
            return redirect('/contact')->withErrors('error','Something wrong with Internet connection of Email Server Try agin '.$ex);
        }
        return redirect('/contact')->with('success','Successfully Email Send to Paypol Company we will contact you soon');
    }

}
