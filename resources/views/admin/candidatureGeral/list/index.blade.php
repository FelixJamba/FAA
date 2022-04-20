

@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Candidaturas')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                Lista de Candidaturas
            </h2>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <table class="table datatables table-hover table-bordered" id="dataTable-1">
                <thead class="thead" style="background-color:#a61a12">
                    <tr class="text-center">
                        <th> # </th>
                        <th>NOME COMPLETO</th>
                        <th>D.C</th>
                        <th>T.C</th>
                        <th>L.C</th>
                        <th>N.A</th>
                        
                        <th>ACÇÕES</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    
                    @foreach ($candidatures as $item)
                    
                      
                        <tr class="text-center text-dark">
                            
                            <td>{{ $item->id }} </td>
                            <td>{{ $item->fullName }} </td>
                            
                            @php
                                $date1 = $item->created_at ;
                                $dataCandidatura = date('d/m/Y',  strtotime($date1));
                            @endphp
                            <td>{{  $dataCandidatura }} </td>
                            <td>{{  $item->namesApplication }} </td>
                           
                            <td>{{  $item->nameProvince }} </td>
                            <td>{{ $item->nameAcademicLevel }} Classe </td>
                            
                            
                            
                            @csrf
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-warning btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-clone fa-sm" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a href='{{ url("admin/candidatureGeral/show/{$item->id}") }}'
                                            class="dropdown-item">Detalhes</a>

                                       {{--  <a href='{{ url("admin/candidatureGeral/edit/{$item->id}") }}'
                                            class="dropdown-item">Editar</a>


                                        <a href='{{ url("admin/candidatureGeral/delete/{$item->id}") }}' class="dropdown-item">
                                            Eliminar
                                        </a> --}}



                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
                
            </table>
<br>
<br>
           <span style="color: #a61a12">Legendas:</span>
              <ul>
                  <li>D.C: Data da Candidatura</li>
                  <li>T.C: Tipo de Candidatura</li>
                  <li>L.C: Local da Candidatura</li>
                  <li>N.A: Nível Académico</li>
                 
              </ul>
        </div>
    </div>
    


@endsection
