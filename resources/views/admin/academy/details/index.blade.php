@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes da Academia')
@foreach ($localCandidatures as $item)


@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                <a href="{{ route('admin.academy.index') }}"><u>Listar Academias</u></a> > {{ $item->nameAcademy }}
            </h2>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="h3 m-4 page-title">{{ $item->id }}</h2>
                        <div class="row m-5 align-items-center">

                            <div class="col">
                                <div class="row align-items-center">
                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">

                                            Nome do Estabelecimento de Ensino:   {{ $item->nameAcademy }}

                                        </h5>
                                        Localidade:   {{ $item->nameMunicipe }}  <br>
                                        Província:   {{ $item->nameProvince }}

                                    </div>
                                </div>
                                <hr style="border: 1px solid;color:black;">

                                <div class="row align-items-center">
                                    <div class="col-md-7 mb-2">

                                        <p class="mb-1 text-dark"><b>Data de Cadastro:</b> {{ $item->created_at }}
                                        </p>
                                        <p class="mb-1 text-dark"><b>Última Actualização:</b> {{ $item->updated_at }}
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>



                    </div> <!-- /.col-12 -->
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->
            @endforeach

        </div>
    </div>
    <div class="card shadow mt-2">
        <div class="card-body">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <div class="row align-items-center my-4">
                                                </div>
                        </div>
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->
        </div>
    </div>

@endsection
