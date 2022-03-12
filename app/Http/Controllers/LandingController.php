<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.landing-page.index');
    }

    public function managers()
    {
        return view('pages.landing-page.managers');
    }

    public function clubs()
    {
        return view('pages.landing-page.clubs');
    }

    public function players()
    {
        return view('pages.landing-page.players');
    }

    public function stadiums()
    {
        return view('pages.landing-page.stadiums');
    }
}
