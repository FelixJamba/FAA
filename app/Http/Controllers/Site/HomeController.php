<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Event;
use App\Models\SlideShow;
use App\Models\Video;

class HomeController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



       // $response['lastedSlideshow'] = SlideShow::where([['state', '=', 'on']])->orderBy('id', 'desc')->limit(3)->first();
        $response['slideshows'] = SlideShow::where([['state', '=', 'on']])->orderBy('id', 'desc')->limit(3)->get();

        $response['news'] = News::where([['state', 'Autorizada']])->orderBy('id', 'desc')->limit(4)->get();


        return view('site.home.index', $response);
    }
}
