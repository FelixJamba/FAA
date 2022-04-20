@extends('layouts.merge.site')
@section('titulo', 'FAA - Notícia')
@section('content')
    <section class="wf100 subheader">
        <div class="container">
            <h2>{{ $news->title }}</h2>
            <ul>
                <li> <a href="{{ route('site.home') }}">Início</a> </li>
                <li> <a href="{{ route('site.news') }}">Listas de Acesso</a> </li>
                <li>{{ $news->title }}</li>
            </ul>
        </div>
    </section>

    <div class="main-content p80">

        <!--News Details Page Start-->
        <div class="news-details">
            <div class="container">
                <div class="row">
                    <!--Content Col Start-->
                    <div class="col-md-4">
                        <div class="news-box">

                            <div class="new-txt">
                                <ul class="news-meta">
                                    <li>{{ date('d M Y', strtotime($news->date)) }}</li>
                                </ul>
                                <h4> {{ $news->title }}</h4>

                                <a href="/storage/{{ $news->path }}" target="_blank"> Visualizar</a>

                            </div>
                        </div>
                    </div>
                    <!--Content Col End-->

                </div>
            </div>
        </div>
        <!--News Details Page End-->
    </div>



@endsection
