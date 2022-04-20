@extends('layouts.merge.dashboard')
@section('titulo', 'Relatório')

@section('content')

<div class="card mb-2">
    <div class="card-body">
        <h2 class="h5 page-title">
          Relatório
        </h2>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <select id="ensino" name="fk_idtypes_application" class="meuestilo" name="tec" required="">
            <option>Seleccione uma opcção</option>
            @foreach ($types_application as $item)
            <option value="{{ $item -> id }}">{{ $item -> namesApplication }}</option>

            @endforeach
    </div>
</div>
@endsection
