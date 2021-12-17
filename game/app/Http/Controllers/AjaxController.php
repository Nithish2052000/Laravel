<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function ajaxRequest()
    {
        return redirect('/');
    }


    public function ajaxRequestPost(Request $request)
    {
        
        $input = $request->gt;all();
        error_log($input);
        
        return redirect('/');
    }
}
