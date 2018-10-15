<?php

use Illuminate\Support\Facades\Session;

  public function notificationMessage($type, $message){
    Session::put($type,$message);
}


