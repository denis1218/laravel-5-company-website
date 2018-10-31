<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;

use Exception;
use Dompdf\FrameReflower\Image;
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

        return view('mail.contact');
    }


    /**
     * sending email with title and content from request
     */
    public function email_send(Request $request)
    {

        if($request->input('imagefile') != null)
        {
            $input           = Input::all();
            $file            = array_get($input, 'imagefile');
            $destinationPath = public_path('img');
            $fileName        = $request->imagefile->getClientOriginalName();
            $filepath        = $destinationPath.'/'.$fileName;
            try{
//            Mail::to('mahdisafari.software.eng@gmail.com')->send(new SendEmail(
//                $request->input('title'),$request->input('content'),$filepath
//            ));

            }catch (Exception $ex) {
                return redirect('/contact')->withErrors('errors', 'error hapingaosjd');
            }

        }else{
            try{
//            Mail::to('mahdisafari.software.eng@gmail.com')->send(new SendEmail(
//                $request->input('title'),$request->input('content')
//            ));
            }catch (Exception $ex){
                return redirect('/contact');
            }
        }
        flash('message')->success();
        return redirect()->back()->with('message','Successfully Email Send to Paypol Company we will contact you soon');
    }

}
