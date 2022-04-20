<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Academy;
use App\Models\Municipies;
use Illuminate\Http\Request;
use App\Models\Provinces;
use Illuminate\Support\Facades\DB;

use Redirect,Response;



class AcademyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $response['localCandidatures'] = DB::table('academies')
                                ->join('municipies', 'academies.fk_idMunicipe', '=', 'municipies.id')
                                ->join('provinces', 'municipies.fk_idprovinces', '=', 'provinces.id')
                                ->select('academies.*','municipies.nameMunicipe', 'provinces.nameProvince')
                                ->where('academies.id', '!=',5)
                                ->get();

        return view('admin.academy.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$response['province'] = Provinces::get();
        //$response['municipe'] = Municipies::get();

        $response['localCandidatures'] = Provinces::get();
        $response['municipeCandidature'] = Municipies::get();

        return view('admin.academy.create.index',$response);
    }





    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//echo "oll"; die;
       $validation = $request->validate([
            'nameAcademy' => '|min:2|max:255',
        ]);


            $academy = Academy::create([
                'nameAcademy' => $request->nameAcademy,
                'fk_idMunicipe' => $request->muni,
            ]);

        return redirect("admin/academy/show/$academy->id")->with('create', '1');



        //return view('admin.academy.details.index');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //$response['localCandidatures'] = Academy::find($id);

      $response['localCandidatures'] = DB::table('academies')
        ->join('municipies', 'academies.fk_idMunicipe', '=', 'municipies.id')
        ->join('provinces', 'municipies.fk_idprovinces', '=', 'provinces.id')
        ->select('academies.*','municipies.nameMunicipe', 'provinces.nameProvince')
        ->where('academies.id','=', $id)
        ->get();

        /*var_dump($response['localCandidatures']);
        die();*/


        return view('admin.academy.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $response['academy'] = Academy::find($id);
       $response['municipeCandidature'] = Municipies::get();
       $response['localCandidatures'] = Provinces::get();



        return view('admin.academy.edit.index', $response)  ;

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
            'nameAcademy' => '|min:2|max:255',

        ]);


        if($request ->file('')){
            $file = $request->file('image')->edit('academy');

            Academy::find($id)->update([
                'nameAcademy' => $request->nameAcademy,

                'fk_idMunicipe' => $request->muni,
            ]);
        }else{

            Academy::find($id)->update([
                'nameAcademy' => $request->nameAcademy,
                'fk_idMunicipe' => $request->muni,
            ]);
        }
        return redirect()->route('admin.academy.index')->with('edit','=', '1');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        //Academy::find($id)->delete();


        DB::table('academies')->where('academies.id', '=', $id)->delete();

        return redirect()->back()->with('destroy', '1');
    }


   public function getProvincie($id)
    {
        echo json_encode(DB::table('municipies')->where('fk_idprovinces', $id)->get());


    }
}
