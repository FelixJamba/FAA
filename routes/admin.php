<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Editor;
use App\Http\Middleware\Operador;
use App\Http\Middleware\Administrador;
use Illuminate\Support\Facades\DB;

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




/* Grupo de rotas autenticadas */
Route::middleware(['auth'])->group(function () {
    /* Manager Dashboard  */
    route::get('admin/painel', ['as' => 'admin.home', 'uses' => 'Admin\DashboardController@index']);

    Route::middleware([Administrador::class])->group(function () {

        /* User */
        Route::get('admin/user/index', ['as' => 'admin.user.index', 'uses' => 'Admin\UserController@index']);
        Route::get('admin/user/show/{id}', ['as' => 'admin.user.show', 'uses' => 'Admin\UserController@show'])->withoutMiddleware(Administrador::class);

        Route::get('admin/user/edit/{id}', ['as' => 'admin.user.edit', 'uses' => 'Admin\UserController@edit'])->withoutMiddleware(Administrador::class);;
        Route::put('admin/user/update/{id}', ['as' => 'admin.user.update', 'uses' => 'Admin\UserController@update'])->withoutMiddleware(Administrador::class);;

        Route::get('admin/user/delete/{id}', ['as' => 'admin.user.delete', 'uses' => 'Admin\UserController@destroy']);
        /* end user */

        /* configuration */
        Route::get('admin/configuration/show', ['as' => 'admin.configuration.show', 'uses' => 'Admin\ConfigurationController@show']);

        Route::get('admin/configuration/edit/{id}', ['as' => 'admin.configuration.edit', 'uses' => 'Admin\ConfigurationController@edit']);
        Route::put('admin/configuration/update/{id}', ['as' => 'admin.configuration.update', 'uses' => 'Admin\ConfigurationController@update']);
        /* end configuration */
    });
    Route::middleware([Editor::class])->group(function () {
        /* gallery */
        Route::get('admin/gallery/index', ['as' => 'admin.gallery.index', 'uses' => 'Admin\GalleryController@list']);
        Route::get('admin/gallery/show/{id}', ['as' => 'admin.gallery.show', 'uses' => 'Admin\GalleryController@show']);

        Route::get('admin/gallery/create', ['as' => 'admin.gallery.create', 'uses' => 'Admin\GalleryController@create']);
        Route::post('admin/gallery/store', ['as' => 'admin.gallery.store', 'uses' => 'Admin\GalleryController@store']);

        Route::get('admin/gallery/edit/{id}', ['as' => 'admin.gallery.edit', 'uses' => 'Admin\GalleryController@edit']);
        Route::put('admin/gallery/update/{id}', ['as' => 'admin.gallery.update', 'uses' => 'Admin\GalleryController@update']);

        Route::get('admin/gallery/delete/{id}', ['as' => 'admin.gallery.delete', 'uses' => 'Admin\GalleryController@destroy']);
        /* end gallery */

        /* video */
        Route::get('admin/video/index', ['as' => 'admin.video.index', 'uses' => 'Admin\VideoController@list']);
        Route::get('admin/video/show/{id}', ['as' => 'admin.video.show', 'uses' => 'Admin\VideoController@show']);

        Route::get('admin/video/create', ['as' => 'admin.video.create', 'uses' => 'Admin\VideoController@create']);
        Route::post('admin/video/store', ['as' => 'admin.video.store', 'uses' => 'Admin\VideoController@store']);

        Route::get('admin/video/edit/{id}', ['as' => 'admin.video.edit', 'uses' => 'Admin\VideoController@edit']);
        Route::put('admin/video/update/{id}', ['as' => 'admin.video.update', 'uses' => 'Admin\VideoController@update']);

        Route::get('admin/video/delete/{id}', ['as' => 'admin.video.delete', 'uses' => 'Admin\VideoController@destroy']);
        /* end video */

        /* imageGallery */
        Route::get('admin/imageGallery/create/{id}', ['as' => 'admin.imageGallery.create', 'uses' => 'Admin\ImageGalleryController@create']);
        Route::post('admin/imageGallery/store/{id}', ['as' => 'admin.imageGallery.store', 'uses' => 'Admin\ImageGalleryController@store']);

        Route::get('admin/imageGallery/delete/{id}', ['as' => 'admin.imageGallery.delete', 'uses' => 'Admin\ImageGalleryController@destroy']);
        /* End imageGallery */

        /* slideshow */
        Route::get('admin/slideshow/index', ['as' => 'admin.slideshow.index', 'uses' => 'Admin\SlideShowController@list']);
        Route::get('admin/slideshow/show/{id}', ['as' => 'admin.slideshow.show', 'uses' => 'Admin\SlideShowController@show']);

        Route::get('admin/slideshow/create', ['as' => 'admin.slideshow.create', 'uses' => 'Admin\SlideShowController@create']);
        Route::post('admin/slideshow/store', ['as' => 'admin.slideshow.store', 'uses' => 'Admin\SlideShowController@store']);

        Route::get('admin/slideshow/edit/{id}', ['as' => 'admin.slideshow.edit', 'uses' => 'Admin\SlideShowController@edit']);
        Route::put('admin/slideshow/update/{id}', ['as' => 'admin.slideshow.update', 'uses' => 'Admin\SlideShowController@update']);

        Route::get('admin/slideshow/delete/{id}', ['as' => 'admin.slideshow.delete', 'uses' => 'Admin\SlideShowController@destroy']);
        /* end slideshow */



        /* news */
        Route::get('admin/news/index', ['as' => 'admin.news.index', 'uses' => 'Admin\NewsController@list']);
        Route::get('admin/news/show/{id}', ['as' => 'admin.news.show', 'uses' => 'Admin\NewsController@show']);

        Route::get('admin/news/create', ['as' => 'admin.news.create', 'uses' => 'Admin\NewsController@create']);
        Route::post('admin/news/store', ['as' => 'admin.news.store', 'uses' => 'Admin\NewsController@store']);

        Route::get('admin/news/edit/{id}', ['as' => 'admin.news.edit', 'uses' => 'Admin\NewsController@edit']);
        Route::put('admin/news/update/{id}', ['as' => 'admin.news.update', 'uses' => 'Admin\NewsController@update']);

        Route::get('admin/news/delete/{id}', ['as' => 'admin.news.delete', 'uses' => 'Admin\NewsController@destroy']);
        /* end news */

        /* Events */
        Route::get('admin/event/index', ['as' => 'admin.event.index', 'uses' => 'Admin\EventController@list']);
        Route::get('admin/event/show/{id}', ['as' => 'admin.event.show', 'uses' => 'Admin\EventController@show']);

        Route::get('admin/event/create', ['as' => 'admin.event.create', 'uses' => 'Admin\EventController@create']);
        Route::post('admin/event/store', ['as' => 'admin.event.store', 'uses' => 'Admin\EventController@store']);

        Route::get('admin/event/edit/{id}', ['as' => 'admin.event.edit', 'uses' => 'Admin\EventController@edit']);
        Route::put('admin/event/update/{id}', ['as' => 'admin.event.update', 'uses' => 'Admin\EventController@update']);

        Route::get('admin/event/delete/{id}', ['as' => 'admin.event.delete', 'uses' => 'Admin\EventController@destroy']);
        /* end Events */
    });

    Route::middleware([Operador::class])->group(function () {
        /*Candidaturas_Academias*/
        Route::get('admin/candidature/index', ['as' => 'admin.candidature.index', 'uses' => 'Admin\CandidatureController@index']);
        Route::get('admin/candidature/edit/{id}', ['as'=> 'admin.candidature.edit', 'uses' => 'Admin\CandidatureController@edit']);
        Route::get('admin/candidature/show/{id}',['as' => 'Admin\CandidatureController@show', 'uses' => 'Admin\CandidatureController@show']);
        Route::get('admin/candidature/delete/{id}', ['as' => 'admin.candidature.delete', 'uses' => 'Admin\CandidatureController@destroy']);
        /* end Candidaturas */

        /*Candidaturas_Geral*/
        Route::get('admin/candidatureGeral/index', ['as' => 'admin.candidatureGeral.index', 'uses' => 'Admin\CandidatureGeralController@index']);
        //Route::get('admin/candidature/edit/{id}', ['as'=> 'admin.candidature.edit', 'uses' => 'Admin\CandidatureController@edit']);
        Route::get('admin/candidatureGeral/show/{id}',['as' => 'Admin\CandidatureGeralController@show', 'uses' => 'Admin\CandidatureGeralController@show']);
        Route::get('admin/candidatureGeral/delete/{id}', ['as' => 'admin.candidatureGeral.delete', 'uses' => 'Admin\CandidatureGeralController@destroy']);
        /* end Candidaturas */


        /*Academias*/
        Route::get('admin/academy/index', ['as'=>'admin.academy.index', 'uses'=> 'Admin\AcademyController@index']);
        Route::get('admin/academy/create', ['as'=> 'admin.academy.create', 'uses'=> 'Admin\AcademyController@create']);
        Route::post('admin/academy/store', ['as'=> 'admin.academy.store', 'uses'=> 'Admin\AcademyController@store']);
        Route::get('admin/academy/show/{id}', ['as'=> 'admin.academy.show', 'uses'=> 'Admin\AcademyController@show']);
        Route::get('admin/academy/edit/{id}', ['as'=> 'admin.academy.edit', 'uses'=> 'Admin\AcademyController@edit']);
        Route::get('admin/academy/delete/{id}', ['as'=> 'admin.academy.delete', 'uses'=>'Admin\AcademyController@destroy']);
        Route::put('admin/academy/update/{id}', ['as' => 'admin.academy.update', 'uses' => 'Admin\AcademyController@update']);

        Route::get('pdfEducationalEstablishment', 'PdfEducationalEstablishmentController@gerarPdf');
        Route::get('/getProvincie/{id}', 'Admin\AcademyController@getProvincie');


//Route::get('/getCity/{id}', 'DropdownController@getCity'); // for get city list

      });
          //Route::get('getSelectSearchMunicipie/{id}',['as' =>'site.candidatures.getSelectSearchMunicipie/{$id}', 'uses' => 'Site\CandidaturesController@getSelectSearchMunicipie']);




    /*Relatórios */

      Route::get('admin/report/index',['as'=>'admin.report.index', 'uses'=>'Admin\ReportController@index']);

});
