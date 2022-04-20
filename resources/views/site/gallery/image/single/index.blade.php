@extends('layouts.merge.site')
@section('titulo', 'FAA - Por dentro de uma Galeria')
@section('content')


    @foreach ($gallery->images as $item)

        <a href="/storage/{{ $item->path }}" data-toggle="lightbox" data-gallery="gallery" data-footer="">
            <div class=" img-fluid rounded"
                style='background-image:url("/storage/{{ $item->path }}");background-position:center;background-size:cover;height:200px;'>
            </div>

        </a>

    @endforeach
    </div>
    <a href="{{ route('site.gallery') }}" class="voltar">Voltar</a>


@endsection
