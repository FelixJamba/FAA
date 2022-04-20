/*Multi-Step recenseamento Militar */
$(function(){

    var actual_fs, next_fs, prev_fs;

    var formulario = $('form[name=formularioRecenseamento]');

    function next(elem)
    {
        actual_fs =$(elem).parent();
        next_fs =$(elem).parent().next();


        $('#progress li').eq($('fieldset').index(next_fs)).addClass('activo');
        actual_fs.hide(800);
        next_fs.show (800); };



        $('input[name=next11]').click(function(){

           var bi = document.querySelector('#bi');

          //alert(bi);

                    if(bi.value=="" )
                    {
                        $('.resp').html('<div class="erros"><p>Preencha todos campos obrigatórios!!</p></div>');
                    }

                    else
                    {
                       $('.resp').html('');
                        next($(this));
                    }

      });


        $('input[name=next12]').click(function(){
            var telefone = document.querySelector('#telefone');
            var email = document.querySelector('#email');


          if(telefone.value=="" || email.value=="")
          {
              $('.resp').html('<div class="erros"><p>Preencha todos campos obrigatórios!!</p></div>');
          }

          else{
            $('.resp').html('');
            next($(this));
          }

      });

      $('input[name=next13]').click(function()
      {


         if(document.getElementById('provCand').selectedIndex == 0)
         {

            $('.resp').html('<div class="erros"><p>Preencha todos campos obrigatórios!!</p></div>');
         }
         else{
           $('.resp').html('');
           next($(this));
         }

     });


     $('input[type=submit]').click(function()
     {

        //alert(x)

         if(document.getElementById('bidoc').selectedIndex == 0)
         {
             //alert('ola');
            $('.resp').html('<div class="erros"><p>Preencha todos campos obrigatórios!!</p></div>');
         }

         else{
            $('.resp').html('<div class="erros"><p>Sucesso!!</p></div>');
         }

     });



        $('.prev').click(function()
     {
        actual_fs =$(this).parent();
        prev_fs =$(this).parent().prev();

        $('#progress li').eq($('fieldset').index(actual_fs)).removeClass('activo');
        actual_fs.hide(800);
        prev_fs.show (800);
     });

  });















/*MUlti-Step candidaturas */
$(function(){

    var actual_fs, next_fs, prev_fs;

    var formulario = $('form[name=formulario]');

    function next(elem)
    {
        actual_fs =$(elem).parent();
        next_fs =$(elem).parent().next();


        $('#progress li').eq($('fieldset').index(next_fs)).addClass('activo');
        actual_fs.hide(800);
        next_fs.show (800); };



        $('input[name=next1]').click(function(){

           var bi = document.querySelector('#bi');

            var ensino =  document.getElementById('ensino').selectedIndex;

            //alert(ensino);
                if(ensino==1){
                    if(bi.value=="" || document.getElementById('ensino').selectedIndex == 0)
                    {
                        $('.resp').html('<div class="erros"><p>Preencha todos campos obrigatórios!!</p></div>');
                    }

                    else
                    {
                       $('.resp').html('');
                        next($(this));
                    }
                }
                else{
                    if(bi.value=="" || document.getElementById('ensino').selectedIndex == 0 || document.getElementById('est').selectedIndex == 0)
                    {

                        $('.resp').html('<div class="erros"><p>Preencha todos campos obrigatórios!!</p></div>');
                    }

                    else{
                        var dataNasc = document.querySelector('#ano_idade');
                        ano_idade = dataNasc.value
                        data1=new Date(ano_idade)
                        var dataHoje = new Date()



                        var dataCandidatura = dataHoje.getFullYear()-data1.getFullYear()
                        if(dataCandidatura>=18 && dataCandidatura<=21){
                        //alert(dataCandidatura);
                        $('.resp').html('');
                        next($(this));

                      }
                      else{
                        $('.resp').html('<div class="erros"><p>Idade não permitida, idades permitida: 18 à 21 anos!!</p></div>');
                      }
                    }

                }



      });


        $('input[name=next2]').click(function(){
            var telefone = document.querySelector('#telefone');
            var email = document.querySelector('#email');


          if(telefone.value=="" || email.value=="")
          {
              $('.resp').html('<div class="erros"><p>Preencha todos campos obrigatórios!!</p></div>');
          }

          else{
            $('.resp').html('');
            next($(this));
          }

      });

      $('input[name=next3]').click(function()
      {


         if(document.getElementById('provCand').selectedIndex == 0)
         {

            $('.resp').html('<div class="erros"><p>Preencha todos campos obrigatórios!!</p></div>');
         }
         else{
           $('.resp').html('');
           next($(this));
         }

     });


     $('input[type=submit]').click(function()
     {

        //alert(x)

         if(document.getElementById('bidoc').selectedIndex == 0)
         {
             //alert('ola');
            $('.resp').html('<div class="erros"><p>Preencha todos campos obrigatórios!!</p></div>');
         }

         else{
            $('.resp').html('<div class="erros"><p>Sucesso!!</p></div>');
         }

     });



        $('.prev').click(function()
     {
        actual_fs =$(this).parent();
        prev_fs =$(this).parent().prev();

        $('#progress li').eq($('fieldset').index(actual_fs)).removeClass('activo');
        actual_fs.hide(800);
        prev_fs.show (800);
     });

  });















  //Habilitar select Estabelecimento

  $(document).ready(function() {
      $('#ensino').on('change', function () {

          var ensino = $(this).val();

          if (ensino == 2)
          {
              $("#estabelecimento").show();
              $("#est").prop('required', true);
          }
          else if(ensino == 1)
          {
              $("#estabelecimento").hide();
              $("#est").prop('required', false);
              $("#estabelecimento1").hide();
              $("#recg").prop('required', false);
          }

      });
  });


//Habilitar campo recenseamento
$(document).ready(function() {
   // $('sexo').on('change', function () {

        var input = document.querySelector("#sexo");
        var sexo = input.value;
        var sexo1 = "Masculino";
        //sexo = $(this).val();

        if (sexo==sexo1) {
            //console.log(sexo);
            $("#recenseamento").show();
            $("#docrec").prop('required', true);
        }
        else{
            $("#recenseamento").hide();
            $("#docrec").prop('required', false);
        }

//});
});

//Desabilitar o curso para Recrutamento geral

$(document).ready(function() {
    $('#ensino').on('change', function () {

        var ensino = $(this).val();

        if (ensino == 1) {

            $("#curso").hide();
            $("#selecCurso").prop('required', false);
        }
        else{
            $("#curso").show();
            $("#selecCurso").prop('required', true);
        }

    });
});



//Validar a classe para os estabelecimentos de ensino
/*$(document).ready(function()
{
    $('#ensino').on('change', function()
    {
        //var ensino = $(this).val();

        var ensino =  document.getElementById('ensino').selectedIndex;
        alert(ensino);
        if(ensino==2)
        {
           $('#gravar').click(function()
            {

                var ensino =  document.getElementById('ensino').selectedIndex;
                alert(ensino);
                var nivelAcademico = document.querySelector('#nivelAcademic');
                nivel = nivelAcademico.value


                if(nivel<9)
                {
                    var ensino = $(this).val();
                    Swal.fire({
                    icon: 'error',
                    title: 'Nível Académico não permitido',
                    showConfirmButton: true
                    })
                    $('.resp').html('<div class="erros"><p>Idade não permitida, idades permitida: 18 à 21 anos!!</p></div>');
                }


            });
          }

       });
  });*/


//Validar a idade para os estabelecimentos de ensino
/*
$(document).ready(function()
{
    $('#ensino').on('change', function()
    {
        var ensino = $(this).val();
        //alert(ensino);
        if(ensino==2)
        {
           $('#gravar').click(function()
            {
                var dataNasc = document.querySelector('#ano_idade');
                ano_idade = dataNasc.value
                data1=new Date(ano_idade)
                var dataHoje = new Date()

                var dataCandidatura = dataHoje.getFullYear()-data1.getFullYear()

                if(dataCandidatura >=18 && dataCandidatura <=21)
                {

                }
                else
                {
                    var ensino = $(this).val();
                    Swal.fire({
                    icon: 'error',
                    title: 'Idade não Permitida!',
                    showConfirmButton: true
                })
                    document.getElementById("gravar").disabled = true;
                    document.getElementById("next1").disabled = true;
                    //button.disabled = false;
                    //return false;
                }
            });
        }
    });
});*/









//Atribuir Valor estático a Academia e curso, caso seja recrutamento geral

$(document).ready(function() {
    $('#ensino').on('change', function () {

        var ensino = $(this).val();
        if (ensino == 1) {
            document.querySelector("[name='fk_idacademy1']").value = 5
            document.querySelector("[name='fk_idcourse1']").value = 3

        }
        else{

        }

    });
});



//Script para select dependente de provincia a municipio onde nasceu
/*
$(document).ready(function () {
                $('#naturalidade').on('change', function () {
                let id = $(this).val();
                $('#mun').empty();
                $('#mun').append('<option value="0" disabled selected>Processando...</option>');
                $.ajax({
                type: 'GET',
                url: 'getSelectSearchMunicipie/' + id,
                success: function (response) {
                var response = JSON.parse(response);
                console.log(response);
                $('#mun').empty();
                $('#mun').append(`<option value="0" disabled selected>Seleccione o Município</option>`);
                response.forEach(element => {
                    $('#mun').append(`<option value="${element['id']}">${element['nameMunicipe']}</option>`);
                    });
                }
            });
        });
    });*/


    //Script para select dependente de provincia a municipio onde candidata-se
$(document).ready(function ()
{
    $('#provCand').on('change', function ()
    {
        let id = $(this).val();
        $('#munCand').empty();
        $('#munCand').append('<option value="0" disabled selected>Processando...</option>');
          $.ajax(
          {
            type: 'GET',
            url: 'getSelectSearchMunicipie/' + id,
            success: function (response)
            {
                var response = JSON.parse(response);
                console.log(response);
                $('#munCand').empty();
                $('#munCand').append(`<option value="0" disabled selected>Seleccione o Município</option>`);
                response.forEach(element => {
                    $('#munCand').append(`<option value="${element['id']}">${element['nameMunicipe']}</option>`);
                    });
             }
          });
    });

});
















    //Script para select dependente de Academia para curso
    $(document).ready(function () {
        $('#est').on('change', function () {
        let id = $(this).val();
        $('#selecCurso').empty();
        $('#selecCurso').append('<option value="0" disabled selected>Processando...</option>');
        $.ajax({
        type: 'GET',
        url: 'getSelectSearchCourses/' + id,
        success: function (response) {
        var response = JSON.parse(response);
        console.log(response);
        $('#selecCurso').empty();
        $('#selecCurso').append(`<option value="0" disabled selected>Seleccione o Curso</option>`);
        response.forEach(element => {
            $('#selecCurso').append(`<option value="${element['id']}">${element['nameCourse']}</option>`);
            });
        }
    });
    });
    });

    //Script para select dependente de Tipo de candidatura para curso nivel Academico
    $(document).ready(function () {
        $('#ensino').on('change', function () {
        let id = $(this).val();
        $('#nivelAcademic').empty();
        $('#nivelAcademic').append('<option value="0" disabled selected>Processando...</option>');
        $.ajax({
        type: 'GET',
        url: 'getSelectSearchAcademicLevelTypeApp/' + id,
        success: function (response) {
        var response = JSON.parse(response);
        console.log(response);
        $('#nivelAcademic').empty();
        $('#nivelAcademic').append(`<option value="0" disabled selected>Seleccione a Classe</option>`);
        response.forEach(element => {
            $('#nivelAcademic').append(`<option value="${element['id']}">${element['nameAcademicLevel']}</option>`);
            });
        }
    });
    });
    });





    //Desabilitar a tecla direita da pagina

    window.onload=function(){
        document.oncontextmenu=function(){

        //alert('função desabilitada');
        return false;
    }
    }


//Script para carregar api minjust

// Verificar Utente

/*Fim solicitacao da API */





























/* Ass:MARCEL*/
