<?php

namespace App\Http\Controllers;

use Auth;
use Analytics;
use Illuminate\Http\Request;
use Spatie\Analytics\Period;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $visit = Analytics::fetchVisitorsAndPageViews(Period::days(7));
        $device = Analytics::fetchTopBrowsers(Period::days(7), 10);
        $refer = Analytics::fetchTopReferrers(Period::days(7), 10);

        $title = 'Dashboard';

        return view('home', compact('visit', 'device', 'refer', 'data', 'title'));
    }
}
