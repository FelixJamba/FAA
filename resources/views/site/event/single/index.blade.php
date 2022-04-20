@extends('layouts.merge.site')
@section('titulo', 'FAA - Eventos')
@section('content')
    <section class="wf100 subheader">
        <div class="container">
            <h2>{{ $event->title }}</h2>
            <ul>
                <li> <a href="{{ route('site.home') }}">Início</a> </li>
                <li> <a href="{{ route('site.event') }}">Notícia</a> </li>
                <li>{{ $event->title }}</li>
            </ul>
        </div>
    </section>

    <div class="main-content p80">

        <!--Event Details Page Start-->
        <div class="news-details">
            <div class="container">
                <div class="row">
                    <!--Content Col Start-->
                    <div class="col-md-8">
                        <div class="news-box">
                            <div class="new-thumb">

                                <span class="cat c4">{{ $event->typewriter }}</span>
                                <div class="new-thumb img-fluid rounded"
                                    style='background-image:url("/storage/{{ $event->path }}");background-position:center;background-size:cover;height:500px;'>
                                </div>

                            </div>
                            <div class="new-txt">
                                <ul class="news-meta">
                                    <li>{{ date('d M Y', strtotime($event->date)) }}</li>
                                </ul>
                                <h4> {{ $event->title }}</h4>


                                {!! html_entity_decode($event->body) !!}

                                <div class="single-post-tags">
                                    <a href="#"> {{ $event->typewriter }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Content Col End-->
                    <!--Sidebar Start-->
                    <div class="col-md-4">
                        <div class="sidebar">
                            <!--Widget Start-->
                            <div class="widget">
                                <h4>OUTROS EVENTOS</h4>
                                <div class="recent-posts inner">
                                    <ul>
                                        @foreach ($lasted as $item)
                                            <li>
                                                <img src="/storage/{{ $item->path }}" alt="{{ $item->title }}">

                                                <strong>{{ date('d M Y', strtotime($item->date)) }}</strong>
                                                <h6>
                                                    <a href="{{ url("/ao/evento/$item->id") }}">{{ $item->title }}
                                                    </a>
                                                </h6>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!--Widget End-->
                        </div>
                    </div>
                    <!--Sidebar End-->
                </div>
            </div>
        </div>
        <!--Event Details Page End-->
    </div>





@endsection
