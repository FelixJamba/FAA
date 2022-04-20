@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Academias')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                Lista de Academias
            </h2>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <table class="table datatables table-hover table-bordered" id="dataTable-1">
                <thead class="" style="background-color:#a61a12">
                    <tr class="text-center">
                        <th>ID</th>
                        <th>Nome do Estabelecimento de Ensino</th>
                        <th>Província</th>
                        <th>Município</th>
                        <th>Acções</th>
                    </tr>
                </thead>
                <tbody class="bg-white">

                    @foreach ($localCandidatures as $item)

                        <tr >
                            <td class="text-center text-dark">{{ $item->id }}</td>

                            <td>   {{ $item->nameAcademy }}</td>
                            <td>   {{ $item->nameProvince }}</td>
                            <td>   {{ $item->nameMunicipe  }}</td>

                            @csrf
                            <td class="text-center text-dark">
                                <div class="dropdown">
                                    <button class="btn btn-warning btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-clone fa-sm" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a href='{{ url("admin/academy/show/{$item->id}") }}'
                                            class="dropdown-item">Detalhes</a>

                                        <a href='{{ url("admin/academy/edit/{$item->id}") }}'
                                            class="dropdown-item">Editar</a>


                                        <a href='{{ url("admin/academy/delete/{$item->id}") }}' class="dropdown-item">
                                            Eliminar
                                        </a>



                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>



@endsection

