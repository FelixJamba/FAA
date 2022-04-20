@extends('layouts.merge.site')
@section('titulo', 'FAA - Eventos')
@section('content')

    <section class="wf100 subheader">
        <div class="container">
            <h2>Eventos</h2>
            <ul>
                <li> <a href="{{ route('site.home') }}">Início</a> </li>
                <li> <a href="#">Eventos</a> </li>
            </ul>
        </div>
    </section>
    <div class="main-content p80">
        <!--News Start-->
        <div class="news-wrapper news-grid">
            <div class="container">

                <div class="row">

                    @foreach ($events as $item)
                        <!--News Box Start-->
                        <div class="col-md-4 col-sm-6">
                            <div class="news-box">

                                <div class="new-thumb img-fluid rounded"
                                    style='background-image:url("/storage/{{ $item->path }}");background-position:center;background-size:cover;height:200px;'>
                                </div>

                                <div class="new-txt">
                                    <ul class="news-meta">
                                        <li>{{ date('d M Y', strtotime($item->date)) }}</li>
                                    </ul>
                                    <h6><a href="{{ url("/ao/noticia/$item->id") }}">{{ $item->title }}</a></h6>

                                </div>
                                <div class="news-box-f">

                                    <a href="{{ url("/ao/noticia/$item->id") }}">
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--event Box End-->
                    @endforeach
                </div>
                <div class="row">
                    <div class="site-pagination">
                        {{ $events->links() }}
                    </div>
                </div>

            </div>
        </div>
        <!--Events End-->
    </div>


@endsection
