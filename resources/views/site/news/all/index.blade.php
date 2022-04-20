@extends('layouts.merge.site')
@section('titulo', 'FAA - Notícias')
@section('content')

    <section class="wf100 subheader">
        <div class="container">
            <h2>Lista de Acesso</h2>
            <ul>
                <li> <a href="{{ route('site.home') }}">Início</a> </li>
                <li> <a href="#">Lista de Acesso</a> </li>
            </ul>
        </div>
    </section>
    <div class="main-content p80">
        <!--News Start-->
        <div class="news-wrapper news-grid">
            <div class="container">

                <div class="row">

                    @foreach ($news as $item)
                        <!--News Box Start-->
                        <div class="col-md-3 col-sm-6 col-lg-4">
                            <div class="news-box">

                                <div class="new-txt">
                                    <ul class="news-meta">
                                        <li> {{ date('d.m.Y', strtotime($item->date)) }}1</li>
                                    </ul>
                                    <h6><a href="{{ route('site.news.show', $item->id) }}">{{ $item->title }}</a>
                                    </h6>

                                </div>
                                <div class="news-box-f">
                                    <a href="{{ route('site.news.show', $item->id) }}">
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!--News Box End-->
                    @endforeach
                </div>
                <div class="row">
                    <div class="site-pagination">
                        {{ $news->links() }}
                    </div>
                </div>

            </div>
        </div>
        <!--News End-->
    </div>


@endsection
