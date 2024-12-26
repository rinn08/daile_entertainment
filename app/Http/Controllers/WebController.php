<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function homePage(){
        return view('web.index');
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function aboutPage(){
        return view('web.about');
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function contactPage(){
        return view('web.contact');
    }
}
