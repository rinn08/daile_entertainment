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
        return view('index');
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function aboutPage(){
        return view('about');
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function contactPage(){
        return view('contact');
    }
}
