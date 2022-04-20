@isset($configuration)


    <div class="col-12 col-lg-12">
        <div class="row align-items-center my-4">
            <div class="col">

            </div>

        </div>
        <div class="card-deck mb-4">

            <div class="card border-0 bg-transparent">
                <div class="card-img-top img-fluid rounded">
                </div>

            </div> <!-- .card -->


        </div> <!-- .card-deck -->
    </div>
@endisset

<div class="col-md-4">


    <div class="form-group">
        <label for="title">Estado da Candidatura</label>
        <select class="form-control border-dark" id="statusCandidatures" name="statusCandidatures" required>

            @if (isset($configuration->statusCandidatures))
                <option value="{{ $configuration->statusCandidatures }}" class="text-primary h6">
                    {{ $configuration->statusCandidatures }}
                </option>
            @else
                <option selected disabled value="">Selecione o estado da Candidatura</option>
            @endif
            <option value="Activo">Activo</option>
            <option value="Desactivo">Desactivo</option>
        </select>
    </div>

</div>

<div class="col-md-4">


    <div class="form-group">
        <label for="title">Link do facebook</label>
        <input type="text" name="facebook" id="title"
            value="{{ isset($configuration->facebook) ? $configuration->facebook : '' }}"
            class="form-control border-secondary" placeholder="Titulo" required>
    </div>

</div>

<div class="col-md-4">
    <div class="form-group">
        <label for="title">Link do youtube</label>
        <input type="text" name="youtube" id="title"
            value="{{ isset($configuration->youtube) ? $configuration->youtube : '' }}"
            class="form-control border-secondary" placeholder="Titulo" required>
    </div>
</div>
<!-- /.col -->


<div class="col-md-4">
    <div class="form-group">
        <label for="subtitle">Link do instagram</label>
        <input type="text" name="instagram" id="subtitle"
            value="{{ isset($configuration->instagram) ? $configuration->instagram : '' }}"
            class="form-control border-secondary" placeholder="Subtitulo" required>
    </div>
</div>



<div class="col-md-4">
    <div class="form-group">
        <label for="subtitle">tel</label>
        <input type="text" name="tel" id="subtitle"
            value="{{ isset($configuration->tel) ? $configuration->tel : '' }}"
            class="form-control border-secondary" placeholder="Telefones" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        <label for="email">Link do email</label>
        <input type="text" name="email" id="email"
            value="{{ isset($configuration->email) ? $configuration->email : '' }}"
            class="form-control border-secondary" placeholder="Subtitulo" required>
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label for="twitter">Link do twitter</label>
        <input type="text" name="twitter" id="twitter"
            value="{{ isset($configuration->twitter) ? $configuration->twitter : '' }}"
            class="form-control border-secondary" placeholder="Twitter" required>
    </div>
</div>



<div class="col-md-4">
    <div class="form-group">
        <label for="address">Endereço</label>
        <input type="text" name="address" id="address"
            value="{{ isset($configuration->address) ? $configuration->address : '' }}"
            class="form-control border-secondary" placeholder="Endereço" required>
    </div>
</div>
