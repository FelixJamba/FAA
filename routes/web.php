<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* SITE */
route::get('/', ['as' => 'site.home', 'uses' => 'Site\HomeController@index']);
/* noticias */
Route::get('/ao/Listas', ['as' => 'site.news', 'uses' => 'Site\NewsController@index']);
Route::get('/ao/Listas/{id}', ['as' => 'site.news.show', 'uses' => 'Site\NewsController@show']);

/* Eventos */
Route::get('/ao/evento', ['as' => 'site.event', 'uses' => 'Site\EventController@index']);
Route::get('/ao/evento/{id}', ['as' => 'site.event.show', 'uses' => 'Site\EventController@show']);


/* Galeria fotos */
Route::get('/ao/galeria/', ['as' => 'site.gallery', 'uses' => 'Site\GalleryController@index']);
Route::get('/ao/galeria/{id}', ['as' => 'site.gallery.show', 'uses' => 'Site\GalleryController@show']);
/* Galeria de Videos */
Route::get('/ao/videos/', ['as' => 'site.videos', 'uses' => 'Site\VideoController@index']);
Route::get('/ao/video/{id}', ['as' => 'site.video.show', 'uses' => 'Site\VideoController@show']);

/*Candidaturas*/

Route::get('/candidaturas/',['as' =>'site.candidatures.create', 'uses' => 'Site\CandidaturesController@create']);

//Select dependente Municipio
Route::get('getSelectSearchMunicipie/{id}',['as' =>'site.candidatures.getSelectSearchMunicipie/{$id}', 'uses' => 'Site\CandidaturesController@getSelectSearchMunicipie']);

//Select dependentes curso
Route::get('getSelectSearchCourses/{id}',['as' =>'site.candidatures.getSelectSearchCourses/{$id}', 'uses' => 'Site\CandidaturesController@getSelectSearchCourses']);

// Select dependente nivel académico
Route::get('getSelectSearchAcademicLevel/{id}',['as' =>'site.candidatures.getSelectSearchAcademicLevel/{$id}', 'uses' => 'Site\CandidaturesController@getSelectSearchAcademicLevel']);

//Select nivel academico com tipo de candidatura
Route::get('getSelectSearchAcademicLevelTypeApp/{id}',['as' =>'site.candidatures.getSelectSearchAcademicLevelTypeApp/{$id}', 'uses' => 'Site\CandidaturesController@getSelectSearchAcademicLevelTypeApp']);


Route::post('/candidaturas/', ['as'=> 'site.candidatures.store', 'uses'=> 'Site\CandidaturesController@store']);


//'admin/academy/create', ['as'=> 'admin.academy.create', 'uses'=> 'Admin\AcademyController@create'
/*Sobre nós */
Route::get('/quem-somos', ['as' =>'site.aboutUs', 'uses' => 'Site\AboutUsController@index']);
Route::put('/edit/admin/academy/edit',['as'=>'admin.news.edit.index','uses'=>'Site\candidaturesController@edit']);
/* view das especialidades do exército*/
Route::get('/exercito', function () {
    return view('site.militaryCareer.army.index');
});

/* view das especialidades da força aérea*/
Route::get('/força-aerea', function () {
    return view('site.militaryCareer.airForce.index');
});

/* view das especialidades da marinha*/
Route::get('/marinha-de-guerra', function () {
    return view('site.militaryCareer.navy.index');
});


/* perguntas frequentes*/
Route::get('/perguntas-frequentes', function () {
    return view('site.faq.index');
});

                      /*menu Recrutamento
/* condições de admisssão*/
Route::get('/condicoes-de-admissao', function () {
    return view('site.candidatures.admissionCondition.index');
});

/* Fases de admisssão*/
Route::get('/fases-de-admissao', function () {
    return view('site.candidatures.admissionPhases.index');
});
/* Documentos Legais- Menu Recrutamento*/

Route::get('/documento_legais', function () {
    return view('site.candidatures.laws.index');
});

/*onde estamos*/

Route::get('/onde-estamos', function () {
    return view('site.location.index');
});

/*Rota para recenseamento */
Route::get('/recenseamento/', ['as'=> 'site.recenseamento.create', 'uses'=> 'Site\MilitaryCensusController@create']);
Route::get('/documentos-legais', function(){
    return view('site.militaryCensus.laws.index');
});



/* END SITE */


/* inclui as rotas de autenticação do ficheiro auth.php */
require __DIR__ . '/auth.php';

require __DIR__ . '/admin.php';
