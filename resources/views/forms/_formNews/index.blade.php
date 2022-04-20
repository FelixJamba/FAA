
<div class="col-md-6">
    <div class="form-group">
        <label for="title">Titulo</label>
        <input type="text" name="title" id="title" value="{{ isset($news->title) ? $news->title : '' }}"
            class="form-control border-secondary" placeholder="Titulo" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-4">

    <div class="form-group">
        <label for="typewriter">Autor</label>
        <input type="text" name="typewriter" id="typewriter"
            value="{{ isset($news->typewriter) ? $news->typewriter : '' }}" class="form-control border-secondary"
            placeholder="Autor" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-4">
    <div class="form-group">
        <label for="date">Date de Inserção</label>
        <input type="date" name="date" id="date" value="{{ isset($news->date) ? $news->date : '' }}"
            class="form-control border-secondary" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-4">
    <div class="form-group">
        <label for="state">Estado da Lista</label>
        <select class="form-control border-dark" id="state" name="state" required>

            @if (isset($news->state))
                <option value="{{ $news->state }}" class="text-primary h6">
                    {{ $news->state }}
                </option>
            @else
                <option selected disabled value="">Selecione o estado da Lista</option>
            @endif
            <option value="Autorizada">Autorizada</option>
            <option value="Não Autorizada">Não Autorizada</option>
        </select>
    </div>
</div> <!-- /.col -->

<div class="col-md-12">
    <div class="form-group">
        <div class="custom-file">
            <label class="form-label border-secondary" for="image">Seleccione o arquivo</label>
            <input type="file" class="form-control" name="image" id="image">

        </div>
    </div>
</div> <!-- /.col -->

