<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\AcademicLevel;
use App\Models\Academy;
use App\Models\Configuration;
use App\Models\Course;
use App\Models\Municipies;
use App\Models\Provinces;
use App\Models\Types_application;
use Illuminate\Http\Request;

class MilitaryCensusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $response['municipeCandidature'] = Municipies::get();

        //return view('site.militaryCensus.create.index');


        $response['types_application'] = Types_application::get();


        //$response['province'] = Provinces::get();
        //$response['municipe'] = Municipies::get();

        $response['academies'] = Academy::get();

        $response['localCandidatures'] = Provinces::get();
        $response['municipeCandidature'] = Municipies::get();

        $response['levelsAcademic'] = AcademicLevel::get();

        $response['course'] = Course::get();


        //echo "Olá Mundo";

      $status = Configuration::first();

        if($status->statusCandidatures =='Activo')
        {
        return view('site.militaryCensus.create.index', $response);
        }
        else
        {
            return redirect()->back();
        }


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
    }
}
