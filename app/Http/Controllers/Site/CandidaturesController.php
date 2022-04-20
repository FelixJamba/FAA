<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\AcademicLevel;
use App\Models\Academy;
use App\Models\Candidate;
use App\Models\CandidatesTypesCandidates;
use App\Models\Configuration;
use App\Models\Course;
use App\Models\Municipies;
use App\Models\Provinces;
use App\Models\Types_application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CandidaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

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
        return view('site.candidatures.create.index', $response);
        }
        else
        {
            return redirect()->back();
        }
    }


    public function store(Request $request)
    {
            $request->validate([
            'identification' => 'unique:candidates|string|min:2|max:255',
            'fullName' => 'min:10|max:255',
            'fatherName' => 'min:2|max:255|',
            'motherName' => 'min:2|max:255',
            'birthDate' => 'min:2|max:255',
            'telephoneNumber' => 'min:2|max:255',
            'sexo' => 'min:2|max:255',
            'email' => 'required|min:2|max:255',
            'identityCard' =>'mimes:jpg,png,pdf',
            ]);

        $file = $request->file('identityCard')->store('BI');
        $schoolDocument = $request->file('schoolDocument')->store('schoolDocument');

          if(isset($census))
            {
            $census= $request->file('census')->store('census');
            }

                $candidate = Candidate::create([
                'fullName' => $request->fullName,
                'identification' => $request->bi,
                'fatherName' => $request->pai,
                'motherName' => $request->mae,
                'birthDate' => $request->ano_idade,
                'telephoneNumber' => $request->telefone,
                'sexo' => $request->sexo,
                'email' => $request->email,
                'municipe' => $request->mun,
                'nameProvince' => $request->naturalidade,
                'marital_status'=>$request->estadoCivil,
                'identityCard'=>$file
                ]);

           if($request->fk_idtypes_application==1)
           {
                if(isset($census))
                {
                    CandidatesTypesCandidates::create([
                    'fk_idcandidates'=> $candidate->id,
                    'fk_idtypes_application' => $request->fk_idtypes_application,
                    'fk_idacademy' =>$request->fk_idacademy1,
                    'fk_idmunicipies' => $request->fk_idmunicipies,
                    'fk_idcourse'  =>$request->fk_idcourse1,
                    'fk_idacademic_levels'=>$request->fk_idacademic_levels,
                    'schoolDocument'=> $schoolDocument ,
                    'census'=>$census,
                     ]);
                }
                else{
                  CandidatesTypesCandidates::create([
                    'fk_idcandidates'=> $candidate->id,
                    'fk_idtypes_application' => $request->fk_idtypes_application,
                    'fk_idacademy' =>$request->fk_idacademy1,
                    'fk_idmunicipies' => $request->fk_idmunicipies,
                    'fk_idcourse'  =>$request->fk_idcourse1,
                    'fk_idacademic_levels'=>$request->fk_idacademic_levels,
                    'schoolDocument'=> $schoolDocument ,
                    ]);
                }
            }

               else{
                  if(isset($census))
                  {
                    CandidatesTypesCandidates::create([
                    'fk_idcandidates'=> $candidate->id,
                    'fk_idtypes_application' => $request->fk_idtypes_application,
                    'fk_idacademy' =>$request->fk_idacademy1,
                    'fk_idmunicipies' => $request->fk_idmunicipies,
                    'fk_idcourse'  =>$request->fk_idcourse,
                    'fk_idacademic_levels'=>$request->fk_idacademic_levels,
                    'schoolDocument'=> $schoolDocument ,
                    'census'=>$census,
                     ]);
                  }

               else{
               CandidatesTypesCandidates::create([
                'fk_idcandidates'=> $candidate->id,
                'fk_idtypes_application' => $request->fk_idtypes_application,
                'fk_idacademy' =>$request->fk_idacademy1,
                'fk_idmunicipies' => $request->fk_idmunicipies,
                'fk_idcourse'  =>$request->fk_idcourse,
                'fk_idacademic_levels'=>$request->fk_idacademic_levels,
                'schoolDocument'=>$schoolDocument,
               ]);
            }

        }

        return redirect()->back()->with('create', '1');

  }

//Select dependente de Provincia
    public function getSelectSearchMunicipie($id){
        echo json_encode(DB::table('municipies')->where('fk_idprovinces', $id)->get());
    }


//Select dependente de Curso
    public function getSelectSearchCourses($id){
        echo json_encode(DB::table('courses')->where('fk_idacademy', $id)->get());
    }


    public function getSelectSearchAcademicLevelTypeApp($id){
        echo json_encode(DB::table('academic_level_types_applications')->select('academic_levels.nameAcademicLevel','academic_levels.id')
        ->join('academic_levels','academic_levels.id', '=', 'academic_level_types_applications.fk_idAcademicLevel')
        ->where('fk_idTypes_application', $id)->get());
    }

    //Select dependente de Curso
    /*
    public function getSelectSearchAcademicLevel($id){
        echo json_encode(DB::table('academic_levels')->where('id', $id)->get());
    }*/



}
