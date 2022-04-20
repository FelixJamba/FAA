<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Configuration;
use Illuminate\Http\Request;


class ConfigurationController extends Controller
{


    /**
     * Display the specified resource.
     *

     * @return \Illuminate\Http\Response
     */

    //se Illuminate\Support\Facades\DB;
    public function show()
    {


        //
        $response['configuration'] = Configuration::first();
        return view('admin.configuration.details.index', $response);
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
        $response['configuration'] = Configuration::find($id);
        return view('admin.configuration.edit.index', $response);
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


        $validation = $request->validate([
            'facebook' => 'max:255',
            'youtube' => 'max:255',
            'instagram' => 'max:255',
            'telefone' => 'max:255',
            'email' => 'max:255',
            'twitter' => 'max:255',

        ]);

        Configuration::find($id)->update([
            'facebook' => $request->facebook,
            'youtube' => $request->youtube,
            'instagram' => $request->instagram,
            'telefone' => $request->telefone,
            'twitter' => $request->twitter,
            'email' => $request->email,
            'statusCandidatures' => $request->statusCandidatures
        ]);


        return redirect()->route('admin.configuration.show')->with('edit', '1');
    }
}
