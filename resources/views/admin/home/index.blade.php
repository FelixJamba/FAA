@extends('layouts.merge.dashboard')
@section('titulo', 'Portal Oficial do FAA')
@section('content')


    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                Portal de Candidaturas as Forças Armadas Angolanas <br>
                <small>Painel Administrativo</small>
            </h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow text-white" style="background-color: #a61a12">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-3 text-center">
                            <span class="circle circle-sm bg-warning-light">
                                <i class="fe fe-16 fe-rss text-white mb-0"></i>
                            </span>
                        </div>
                        <div class="col pr-0">
                            <p class="small text-light mb-0">Listas de Acesso</p>
                            <span class="h3 mb-0 text-white">{{ $count_news }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-3 text-center">
                            <span class="circle circle-sm bg-warning">
                                <i class="fe fe-16 fe-image text-white mb-0"></i>
                            </span>
                        </div>
                        <div class="col pr-0">
                            <p class="small text-dark mb-0">Galerias</p>
                            <span class="h3 mb-0 ">{{ $count_gallery }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-3 text-center">
                            <span class="circle circle-sm bg-warning">
                                <i class="fe fe-16 fe-video text-white mb-0"></i>
                            </span>
                        </div>
                        <div class="col pr-0">
                            <p class="small text-dark mb-0">Videos</p>
                            <span class="h3 mb-0">{{ $count_video }}</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow text-white" style="background-color: #a61a12">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-3 text-center">
                            <span class="circle circle-sm bg-warning-light">
                                <i class="fe fe-16 fe-users text-white mb-0"></i>
                            </span>
                        </div>
                        <div class="col pr-0">
                            <p class="small text-light mb-0">Utilizadores</p>
                            <span class="h3 mb-0 text-white">{{ $count_user }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
