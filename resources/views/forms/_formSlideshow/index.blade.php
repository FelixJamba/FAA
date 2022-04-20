@isset ($slideshow)


    <div class="col-12 col-lg-12">
        <div class="row align-items-center my-4">
            <div class="col">
                <h2 class="page-title">Imagem Actual</h2>
            </div>

        </div>
        <div class="card-deck mb-4">

            <div class="card border-0 bg-transparent">
                <div class="card-img-top img-fluid rounded"
                    style='background-image:url("/storage/{{ $slideshow->path }}");background-position:center;background-size:cover;height:200px;'>
                </div>

            </div> <!-- .card -->


        </div> <!-- .card-deck -->
    </div>
@endisset
@if (isset($slideshow->state))
    <div class="col-md-12">
        <div class="form-group">
            <label for="state">Estado</label>
            <select class="form-control border-secondary" id="state" name="state" required>

                @if (isset($slideshow->state))
                    <option value="{{ $slideshow->state }}" class="text-primary h6">
                        {{ $slideshow->state }}
                    </option>
                @else
                    <option selected disabled value="">Selecione o estado</option>
                @endif
                <option value="off">Desativado</option>
                <option value="on">Activado</option>
            </select>
        </div>
    </div> <!-- /.col -->
@endif
<div class="col-md-12">
    <div class="form-group">
        <label for="alt">Titulo</label>
        <input type="text" name="alt" id="alt" value="{{ isset($slideshow->alt) ? $slideshow->alt : '' }}"
            class="form-control border-secondary" placeholder="Titulo" required>
    </div>
</div> <!-- /.col -->


<div class="col-md-12">
    <div class="form-group">
        <label for="image">Imagem a carregar</label>
        <div class="custom-file">
            <input type="file" class="orm-control border-secondary" name="image" id="image">
            <label class="" for="image">Selecione a Imagem</label>
        </div>
    </div>
</div> <!-- /.col -->
