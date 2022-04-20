<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Event;

use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

          $response['events'] = event::where([['state', 'Autorizada']])->orderBy('id', 'desc')->paginate(6);
          return view('site.event.all.index', $response);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $response['lasted'] = event::where([['state', 'Autorizada'], ['id', '!=', $id]])->orderBy('id', 'desc')->limit(6)->get();
        $response['event'] = event::where([['state', 'Autorizada']])->find($id);
        return view('site.event.single.index', $response);
    }

    /**
     * Show the form for editing the specified resource.

     * @return \Illuminate\Http\Response
     */

}
