<?php

namespace App\Http\Controllers;

use App\Mail\TalToUs;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        return view('home');
    }



    public function SendUsMessage()
    {
        $data = $this->validateMessage();
        Mail::to('akrofibooks@gmail.com')->send(new TalToUs($data));
        return back();
    }

    public function validateMessage()
    {
        return request()->validate([
            'name' => 'required|string|max:100',
            'subject' => 'required|string',
            'body' => 'required'
        ]);

    }
}
