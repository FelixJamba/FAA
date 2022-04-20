@isset($academy)


    <div class="col-12 col-lg-12">
        <div class="row align-items-center my-4">
            <div class="col">
                <h2 class="page-title">Capa Actual</h2>
            </div>

        </div>
        <div class="card-deck mb-4">

</div> <!-- /.col -->
<div class="card border-0 bg-transparent">
                <div class="card-img-top img-fluid rounded"
                    style='background-image:url("/storage/{{ $academy->path }}");background-position:center;background-size:cover;height:200px;'>
                </div>

            </div> <!-- .card -->


        </div> <!-- .card-deck -->
    </div>
@endisset


<div class="col-md-12">
    <div class="form-group">
        <label for="title">Nome</label>
        <input type="text" name="title" id="title" value="{{ isset($academy->title) ? $academy->title : '' }}"
            class="form-control border-secondary" placeholder="Nome da Academia" required>
    </div>

</div>

<div class="col-md-6">
    <div class="form-group">
        <label for="state">Provincia</label>
        <select class="form-control academyborder-dark" placeholder="seleccione a província" id="prov" name="state" required>

            @foreach ($academy as $item)
            <option value="{{ $item -> id }}">{{ $item -> nameProvince }}</option>

            @endforeach

        </select>
    </div>


</div> <!-- /.col -->


<div class="col-md-6">
    <div class="form-group">
        <label for="state">Município</label>
        <select class="form-control academyborder-dark" placeholder="seleccione a província" id="mun" name="muni" required>
            @foreach ($municipe as $item)
            <option value="{{ $item -> id }}">{{ $item -> nameMunicipe }}</option>

            @endforeach

        </select>


    </div>


</div> <!-- /.col -->



