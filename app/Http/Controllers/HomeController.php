<?php

namespace App\Http\Controllers;

use App\Vacancy;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $vacancy;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Vacancy $vacancy)
    {
        $this->vacancy = $vacancy;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');

    }

    public function details($slug)
    {
        $vacancy = $this->vacancy->whereSlug($slug)->first();

        return view('details', compact('vacancy'));
    }
}
