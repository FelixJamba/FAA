<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $response['news'] = News::where([['state', 'Autorizada']])->orderBy('id', 'desc')->paginate(6);
        return view('site.news.all.index', $response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response['lasted'] = News::where([['state', 'Autorizada'], ['id','!=', $id]])->orderBy('id', 'desc')->limit(6)->get();
        $response['news'] = News::where([['state', 'Autorizada']])->find($id);
        return view('site.news.single.index', $response);
    }


}
