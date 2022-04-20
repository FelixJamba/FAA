
@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes do Candidato')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">    
            
                Detalhes da Candidatura para Recrutamento Geral{{-- $item->id --}}
            </h2>
        </div>
    </div>

@foreach ($candidatures as $item)

    <div class="card shadow mb-4">
        <div class="card-body">

            <div class="container-fluid">
                <div class="row justify-content-center">
                  
                    <div class="col-12">
                        <h2 class="h5 page-title" style="text-align: center">    
                            Dados do Candidato
                          </h2>
                          <hr>
                          <span><b style="color: black">Nome Completo: </b>{{ $item->fullName }}</span><br>
                          <span><b style="color: black">Nome do Pai: </b>{{ $item->fatherName }}</span> &nbsp; &nbsp; &nbsp; &nbsp;
                          <span><b style="color: black">Nome da Mãe: </b>{{ $item->motherName }}</span><br>
                          <span style="color: black"><b style="color: black">BI Nº:</b></span>&nbsp;<span> {{ $item->identification }}</span>
                          <span style="color: black"><b style="color: black">&nbsp; &nbsp; &nbsp; &nbsp;Data de Nascimento:</b></span>&nbsp;<span> {{ $item->birthDate }}</span><br>
                          <span style="color: black"><b style="color: black">Sexo:</b></span>&nbsp;<span> {{ $item->sexo }}</span>
                          <span style="color: black"><b style="color: black">&nbsp; &nbsp; &nbsp; &nbsp;Estado Cívil:</b></span>&nbsp;<span> {{ $item->marital_status }}</span><br>
                          <span style="color: black"><b style="color: black">Contacto Telefónico:</b></span>&nbsp;<span> {{ $item->telephoneNumber }}</span>
                          <span style="color: black"><b style="color: black">&nbsp; &nbsp; &nbsp; &nbsp;Email:</b></span>&nbsp;<span> {{ $item->email }}</span><br>
                          <span style="color: black"><b style="color: black">Ficheiro BI:</b></span>&nbsp;<span><a href="/storage/{{ $item->identityCard }}" target="__blank">Ver BI</a> </span><br>
                          
                         

                        <br>
                        <br>

                    </div> <!-- /.col-12 -->
                    <div class="col-12">
                        <h2 class="h5 page-title" style="text-align: center">    
                            Dados da Candidatura
                          </h2>
                          <hr>
                          @php
                          $date1 = $item->created_at ;
                          $dataCandidatura = date('d/m/Y',  strtotime($date1));
                      @endphp
                          <span><b style="color: black">Data da Candidatura: </b>{{ $dataCandidatura }}</span>&nbsp; &nbsp; &nbsp; &nbsp;
                          <span><b style="color: black">Tipo de Candidatura: </b>{{ $item->namesApplication }}</span> &nbsp; &nbsp; &nbsp; &nbsp;
                          <span><b style="color: black">DRM de Candidatura: </b>{{ $item->nameProvince }}</span><br>
                          

                          <span style="color: black"><b style="color: black">Nível Académico:</b></span>&nbsp;<span> {{ $item->nameAcademicLevel }}</span><br>
                         
                          <span style="color: black"><b style="color: black">Documento Escolar:</b></span>&nbsp;<span><a href="/storage/{{ $item->schoolDocument }}" target="__blank">Ver Documento Escolar</a> </span><br>
                          
                          



                    </div> <!-- /.col-12 -->
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->

            
        </div>
    </div>
    @endforeach

    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">    
            
                
            </h2>
        </div>
    </div>



@endsection
