@extends('layouts.merge.site')
@section('titulo', 'FAA - Galeria')
@section('content')

    <section class="wf100 subheader">
        <div class="container">
            <h2>Galeria de Fotos</h2>
            <ul>
                <li> <a href="{{ route('site.home') }}">Início</a> </li>
                <li> <a href="#">Galeria de Fotos</a> </li>
            </ul>
        </div>
    </section>

    <div class="main-content p80">
        <!-- Gallery Page Start -->
        <div class="img-gallery style-2 gallery">
            <div class="container">
                <div class="row">
                    <div class="portfolio classic-gallery">
                        <div class="isotope items">
                            @foreach ($galleries as $item)
                                <div class="item">
                                    <div class="gallery-thumb">
                                        <a href="/storage/{{ $item->cover }}"
                                            data-rel="prettyPhoto[gallery]">
                                            <i class="fas fa-search"></i>
                                        </a>
                                        <div class="card-img-top img-fluid rounded"
                                            style='background-image:url("/storage/{{ $item->cover }}");background-position:center;background-size:cover;height:200px;'>
                                        </div>
                                        <br>
                                        <h6 class="text-center"><b>{{ $item->name }}</b></h6>
                                    </div>

                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="site-pagination">
                        {{ $galleries->links() }}
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery Page Start -->
    </div>


@endsection
