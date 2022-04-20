@isset($event)


    <div class="col-12 col-lg-12">
        <div class="row align-items-center my-4">
            <div class="col">
                <h2 class="page-title">Capa Actual</h2>
            </div>

        </div>
        <div class="card-deck mb-4">

            <div class="card border-0 bg-transparent">
                <div class="card-img-top img-fluid rounded"
                    style='background-image:url("/storage/{{ $event->path }}");background-position:center;background-size:cover;height:200px;'>
                </div>

            </div> <!-- .card -->


        </div> <!-- .card-deck -->
    </div>
@endisset

<div class="col-md-12">
    <div class="form-group">
        <label for="title">Titulo</label>
        <input type="text" name="title" id="title" value="{{ isset($event->title) ? $event->title : '' }}"
            class="form-control border-secondary" placeholder="Titulo" required>
    </div>
</div> <!-- /.col -->
<div class="col-md-8">
    <div class="form-group">
        <label for="subtitle">Subtitulo</label>
        <input type="text" name="subtitle" id="subtitle" value="{{ isset($event->subtitle) ? $event->subtitle : '' }}"
            class="form-control border-secondary" placeholder="Subtitulo" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-4">
    <div class="form-group">
        <label for="date">Date de Inserção</label>
        <input type="date" name="date" id="date" value="{{ isset($event->date) ? $event->date : '' }}"
            class="form-control border-secondary" required>
    </div>
</div> <!-- /.col -->



@if (isset($event->state))
    @if (Auth::user()->level == 'admin' || Auth::user()->level == 'senior midia')
        <div class="col-md-6">
            <div class="form-group">
                <label for="state">Estado da Notícia</label>
                <select class="form-control border-dark" id="state" name="state" required>

                    @if (isset($event->state))
                        <option value="{{ $event->state }}" class="text-primary h6">
                            {{ $event->state }}
                        </option>
                    @else
                        <option selected disabled value="">Selecione o estado da Notícia</option>
                    @endif
                    <option value="Autorizada">Autorizada</option>
                    <option value="Não Autorizada">Não Autorizada</option>
                </select>
            </div>
        </div> <!-- /.col -->
    @endif

@endif

@if (isset($event->state) && Auth::user()->level != 'analist midia')
    <div class="col-md-6">
    @elseif(isset($event->state) && Auth::user()->level == 'analist midia')
        <div class="col-md-12">
        @else
            <div class="col-md-12">
@endif
<div class="form-group">
    <label for="typewriter">Autor da Matéria</label>
    <input type="text" name="typewriter" id="typewriter"
        value="{{ isset($event->typewriter) ? $event->typewriter : '' }}" class="form-control border-secondary"
        placeholder="Autor da Matéria" required>
</div>
</div> <!-- /.col -->

<div class="col-md-12">
    <div class="form-group">
        <div class="custom-file">
            <label class="form-label border-secondary" for="image">Selecione a Capa</label>
            <input type="file" class="form-control" name="image" id="image">

        </div>
    </div>
</div> <!-- /.col -->

<div class="col-md-12 mb-4">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Corpo da Matéria</h5>
            <p>Digite o corpo da matéria</p>
            <!-- Create the editor container -->
            <textarea name="body" style="min-height:300px; min-width:100%">
           {{ isset($event->body) ? $event->body : '' }}
            </textarea>
        </div>
    </div>
</div>
