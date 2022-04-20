<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Candidates;
use App\Models\CandidatesTypesCandidates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CandidatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $response['candidatures'] = DB::select("select
        candidates_types_applications.id,
        candidates.municipe,
        candidates.fullName,
        candidates.email,
        candidates.telephoneNumber,
        candidates.sexo,
        candidates.marital_status,
        candidates.birthDate,
        candidates.fatherName,
        candidates.motherName,
        TIMESTAMPDIFF(YEAR,candidates.birthDate,CURDATE()) AS idade,
        academic_levels.nameAcademicLevel,
        candidates.nameProvince,
        courses.nameCourse,
        candidates.identification,
        candidates.identityCard,
        candidates_types_applications.schoolDocument,
        candidates_types_applications.created_at,
        candidates_types_applications.fk_idtypes_application,
        types_application.namesApplication,
        academies.nameAcademy
        from candidates_types_applications
        inner join candidates on candidates_types_applications.fk_idcandidates=candidates.id

        inner join academic_levels on candidates_types_applications.fk_idacademic_levels = academic_levels.id
        inner join academies  on candidates_types_applications.fk_idacademy=academies.id

        inner join courses on candidates_types_applications.fk_idcourse = courses.id
        inner join types_application on candidates_types_applications.fk_idtypes_application=types_application.id
        where types_application.id=2
          ");
         //var_dump($response);

        //$response['candidatures'] = CandidatesTypesCandidates::get();
        return view('admin.candidatures.list.index',$response);




    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**CandidatesTypesCandidates
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('admin.configuration.details.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $response['candidatures'] = DB::select("select
        candidates_types_applications.id,
        candidates.municipe,
        candidates.fullName,
        candidates.email,
        candidates.telephoneNumber,
        candidates.sexo,
        candidates.marital_status,
        TIMESTAMPDIFF(YEAR,candidates.birthDate,CURDATE()) AS idade,
        candidates.birthDate,
        candidates.fatherName,
        candidates.motherName,
        academic_levels.nameAcademicLevel,
        candidates.nameProvince,
        courses.nameCourse,
        candidates.identification,
        candidates.identityCard,
        candidates_types_applications.schoolDocument,
        candidates_types_applications.created_at,
        candidates_types_applications.fk_idtypes_application,
        types_application.namesApplication,
        academies.nameAcademy
        from candidates_types_applications
        inner join candidates on candidates_types_applications.fk_idcandidates=candidates.id
        inner join academic_levels on candidates_types_applications.fk_idacademic_levels = academic_levels.id
        inner join academies  on candidates_types_applications.fk_idacademy=academies.id
        inner join courses on candidates_types_applications.fk_idcourse = courses.id
        inner join types_application on candidates_types_applications.fk_idtypes_application=types_application.id
        where types_application.id=2 and candidates_types_applications.id= ?", [$id]);



            return view('admin.candidatures.details.index', $response);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $response['editarCandidaturas'] = Candidate::find($id);
        return view('admin.candidatures.edit.index', $response);


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

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CandidatesTypesCandidates::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
