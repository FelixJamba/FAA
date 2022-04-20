
<div class="col-md-12">
    <div class="form-group">
        <label for="title">Nome</label>
        <input type="text" name="nameAcademy" id="nameAcademy" value="{{ isset($academy->nameAcademy) ? $academy->nameAcademy : '' }}"
            class="form-control border-secondary" placeholder="Nome da Academia" required>
    </div>

</div>

<div class="col-md-6">
    <div class="form-group">
        <label for="state">Provincia</label>
        <select class="form-control eventborder-dark" placeholder="seleccione a província" id="provAcademia" name="state" required>
            <meta name="_token" content="{{ csrf_token() }}">




            @foreach ($localCandidatures as $item)

            <option value="{{  $item -> id }}">{{ $item -> nameProvince }}</option>


            @endforeach

        </select>
    </div>


</div> <!-- /.col -->


<div class="col-md-6">
    <div class="form-group">
        <label for="state">Município</label>
        <select class="form-control eventborder-dark" placeholder="seleccione a província" id="munAcademia" name="muni" required>




        </select>


    </div>


</div> <!-- /.col -->



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 <script>

    //Script para select dependente de provincia a municipio onde candidata-se
$(document).ready(function () {

    $('#provAcademia').on('change', function () {
    let id = $(this).val();
    $('#munAcademia').empty();
    $('#munAcademia').append('<option value="0" disabled selected>Processando...</option>');




    $.ajax({
    type: 'GET',
    url: '/getProvincie/' + id,

    success: function (response) {
    var response = JSON.parse(response);
    console.log(response);


    $('#munAcademia').empty();
    $('#munAcademia').append(`<option value="0" disabled selected>Seleccione o Município</option>`);
    response.forEach(element => {
        $('#munAcademia').append(`<option value="${element['id']}">${element['nameMunicipe']}</option>`);
        });
    }



});



/*$.ajax({
    url: '/getProvincie/' + id,
    method: "Get",
    //data: formData,
    processData: false,
    contentType: false,
    success: function (response) {
        var response = JSON.parse(response);
        console.log(response);
        $('#munAcademia').empty();
        $('#munAcademia').append(`<option value="0" disabled selected>Seleccione o Município</option>`);
        response.forEach(element => {
            $('#munAcademia').append(`<option value="${element['id']}">${element['nameMunicipe']}</option>`);
            });


    },
    error: function (xhr) {

            console.log(xhr);


    }

});*/
});
});

    </script>
