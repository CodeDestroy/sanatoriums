<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Hits;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /* $date = date("Y-m-d");
        $events = Event::whereDate('start_date', $date)
                ->orderBy('start_time')
                ->get(); */
        /* $events = Event::orderBy('start_date')->orderBy('start_time')->get(); */
        $hits = Hits::with('images')->latest()->take(10)->get();
        /* echo '<pre>';
        print_r($hits);
        echo '</pre>'; */
        return view('home', ['hits' => $hits]);
       // return view('home');
    }

    public function nikolaeva() 
    {
        return view('nikolaeva');
    }


    public function kochetkova() 
    {
        return view('kochetkova');
    }
    public function kurbatov() 
    {
        return view('kurbatov');
    }

    public function contacts() 
    {
        return view('contacts');
    }

    public function about() 
    {
        return view('about');
    }

    public function offer()
    {
        return view('documents.offer');
    }

    public function privacy()
    {
        return view('documents.privacy');
    }

    public function policy()
    {
        return view('documents.policy');
    }

    public function contract()
    {
        return view('documents.contract');
    }
    
    public function agreement()
    {
        return view('documents.agreement');
    }
    
    public function sanatoriums()
    {
        return view('sanatoriums');
    }
}
