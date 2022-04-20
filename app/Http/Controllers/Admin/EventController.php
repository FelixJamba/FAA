<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        //
        $response['event'] = Event::get();
        return view('admin.event.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.event.create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $validation = $request->validate([
            'title' => 'required|min:10|max:255',
            'subtitle' => 'required|min:10|max:255',
            'typewriter' => 'required|min:2|max:255',
            'body' => 'required||min:10',
            'image' => 'required|min:2',
            'date' => 'required',

        ]);
        $file = $request->file('image')->store('event');
        if(Auth::user()->level == 'analist midia'){
            $news = event::create([
                'path' => $file,
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'typewriter' => $request->typewriter,
                'body' => $request->body,
                'date' => $request->date,
                'state' => 'Não Autorizada'
            ]);
        }else{
            $news = event::create([
                'path' => $file,
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'typewriter' => $request->typewriter,
                'body' => $request->body,
                'date' => $request->date,
                'state' => 'Autorizada'
            ]);
        }
        return redirect("admin/event/show/$news->id")->with('create', '1');
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
        $response['event'] = event::find($id);
        return view('admin.event.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $response['event'] = event::find($id);
        return view('admin.event.edit.index', $response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validation = $request->validate([
            'title' => 'required|min:10|max:255',
            'subtitle' => 'required|min:10|max:255',
            'typewriter' => 'required|min:2|max:255',
            'body' => 'required||min:10',
            'date' => 'required',
        ]);
        if( $request->file('image')){
            $file = $request->file('image')->store('news');

            event::find($id)->update([
                'path' => $file,
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'typewriter' => $request->typewriter,
                'body' => $request->body,
                'state' => $request->state,
                'date' => $request->date,
            ]);
        }else{
            event::find($id)->update([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'typewriter' => $request->typewriter,
                'body' => $request->body,
                'state' => $request->state,
                'date' => $request->date,
            ]);
        }

        return redirect()->route('admin.event.index')->with('edit', '1');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
          //
          event::find($id)->delete();
          return redirect()->back()->with('destroy', '1');
    }
}
