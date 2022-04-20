@extends('layouts.merge.site')
@section('titulo', 'FAA - Vídeos')
@section('content')


    <section class="main-banner text-center-xs">
        <!-- Nested Container Starts -->
        <div class="container text-lite-color">
            <h3 style="font-weight: bold;" class="text-medium">Galeria de Videos</h3>
        </div>
        <!-- Nested Container Ends -->
    </section>
    <div class="container gallery-container">
        <div class="tz-gallery">
            <div class="row">
                @foreach ($videos as $item)
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail" style="height: 250px;">
                            <a class="lightbox">
                                <iframe class="img-responsive img-center" width="auto" height="200"
                                    src="{{ $item->link }}" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </a>
                            <div class="caption">
                                <p>{{ $item->title }} ({{ date('d.M.Y', strtotime($item->date)) }})</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-12">
                    <h4 class="text-center"><b>{{ $videos->links() }}</b></h4>
                </div>

            </div>
        </div>
    </div>



@endsection
