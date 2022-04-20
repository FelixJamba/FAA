<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Candidatura</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <link href='/site/form/css/bootstrap-datepicker.css' rel="stylesheet"/>
    <script src="/site/form/js/bootstrap-datepicker.min.js"></script>
    <script src="/site/form/js/bootstrap-datepicker.pt-BR.min.js" charset="UTF-8"></script>
    <link rel="stylesheet" href="site/form/css_awesome/font-awesome.min.css">

    <link rel="stylesheet" href="/css/sweetalert2.css">
    <script src="/js/sweetalert2.all.min.js"></script>
    <!--codigos trazidos da pagina militar para ajudar no teste-->

    <link rel="stylesheet" type="text/css" href="site/form/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/site/form/css/novo_estilo.css">
    <link rel="stylesheet" type="text/css" href='/site/form/css/style.css'>
    <script type="text/javascript" src="//code.jquery.com/jquery-3.1.1.min.js"> </script>
    <script type="text/javascript" src="/site/form/js/function.js"> </script>



<link rel="stylesheet" href="<?= asset("/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css") ?>">
<link rel="stylesheet" href="<?= asset("/plugins/colorpicker/bootstrap-colorpicker.min.css") ?>">
<link rel="stylesheet" href="<?= asset("/plugins/select2/select2.min.css") ?>">
<link rel="stylesheet" href="<?= asset("/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css") ?>">
<link rel="stylesheet" href="https://unpkg.com/vue-multiselect@2.1.0/dist/vue-multiselect.min.css">

<script src="<?= asset("/plugins/jquery-validation/additional-methods.min.js") ?>"></script>
<script src="<?= asset("/plugins/daterangepicker/daterangepicker.js") ?>"></script>
<script src="<?= asset("/plugins/moment/moment.min.js") ?>"></script>
<script src="<?= asset("/plugins/inputmask/jquery.inputmask.min.js") ?>"></script>

<script src="<?= asset("/plugins/select2/js/select2.full.min.js") ?>"></script>

<script src="<?= asset("/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js") ?>"></script>
<script src="<?= asset("/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js") ?>"></script>

<script src="<?= asset("/plugins/colorpicker/bootstrap-colorpicker.min.js") ?>"></script>
<script src="https://unpkg.com/vue-multiselect@2.1.0"></script>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

</head>



<body>


<div class="conteudo" style="position:relative; margin-top:10%;">
<div class="resp"></div>

        @if ($errors->any())
        <div class="alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

<div class="titulo_form">
    <h2 style="text-align: center ">Recenseamento Militar</h2>
</div>

<form id="formulario" name="formularioRecenseamento" method="post"  enctype="multipart/form-data">
    @csrf
    @method('post')
          <fieldset>
              <p class="titlesection">Informações Pessoais</p>
              <hr>
            <div class="row" >
                <div class="col-xs-12 col-sm-3 col-md-4">
                    <label>Número Identificação<span class="required-field">*</span></label>
                    <input type="text" pattern = "[0-9]{9}[A-Z]{2}[0-9]{3}$" id="bi" name="bi" class="form-control" required="" maxlength="14">
                    <span id="bi-message" reaquired="" style="font-size: .8em; color: gray; font-style: italic;"></span>
                  </div>
            </div>

              <div class="row" >
                  <div class="col-xs-12 col-sm-3 col-md-4">
                      <label>Nome Completo</label>
                      <input type="text" name="fullName" placeholder="Nome Completo" required readonly>
                  </div>

                <div class="col-xs-12 col-sm-3 col-md-4">
                      <label>Nome do Pai</label>
                      <input type="text" name="pai" placeholder="Nome do Pai" required readonly>
                </div>

                <div class="col-xs-12 col-sm-3 col-md-4">
                  <label>Nome da Mãe</label>
                  <input type="text" name="mae" placeholder="Nome da Mãe" required readonly>
                </div>
               </div>

                <div class="row" >
                    <div class="col-xs-12 col-sm-3 col-md-4">
                      <label>Data de Nascimento</label>
                      <input type="date" name="ano_idade" id="ano_idade" placeholder="" required readonly>
                  </div>
                <div class="col-xs-12 col-sm-3 col-md-4">
                      <label>Género</label>

                        <input type="text"  name="sexo" id="sexo" placeholder="" required readonly>

                    </select>
                  </div>
               </div>
             <input type="button" name="next11" id="next11" class="next acao" value="Proximo" required>

          </fieldset>

        <fieldset>
              <h1 class="titlesection">Informações Complementares</h1>
              <hr>
               <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-4">
                    <label>Natural</label>

                    <input type="text" name="naturalidade" id="naturalidade" placeholder="" required readonly>

                  </div>


                  <div class="col-xs-12 col-sm-3 col-md-4">

                    <label>Município</label>
                    <input type="text" name="mun" id="mun" placeholder="" required readonly>
                  </div>


                 <div class="col-xs-12 col-sm-3 col-md-4">

                    <label>Estado Civil</label>

                    <input type="text" name="estadoCivil" id="estadoCivil" placeholder="" required readonly>

                  </div>


             </div>


            <div class="row">


                    <div class="col-xs-12 col-sm-3 col-md-6">

                      <label>Nº do Telefone</label>
                      <input type="text" id="telefone" name="telefone" placeholder="Insira seu Melhor Contacto" required>
                    </div>

                    <div class="col-xs-12 col-sm-3 col-md-6">

                      <label>E-mail</label>
                      <input type="email" name="email" id="email" placeholder="Insira seu melhor E-mail" required>
                    </div>

            </div>

         <input type="button" name="prev" class="prev acao" value="Anterior">
         <input type="button" name="next12" class="next acao" value="Próximo"><br><br><br>


          </fieldset>


          <fieldset>
            <h1 class="titlesection">Dados para o Recenseamento</h1>
            <hr>
             <div class="row">
                  <div class="col-xs-12 col-sm-3 col-md-3">
                  <label>Província</label>
                  <select class="meuestilo" name="fk_idProvincie" id="provCand" required>
                    <option>Seleccione uma opção</option>
                      @foreach ($localCandidatures as $item)
                      <option value="{{ $item -> id }}">{{ $item -> nameProvince }}</option>

                      @endforeach
                  </select>
                </div>

                <div class="col-xs-12 col-sm-3 col-md-3">

                  <label>Município</label>
                  <select class="meuestilo" name="fk_idmunicipies" id="munCand" required>
                    <option>Seleccione uma opção</option>


                  </select>


                </div>

               <div class="col-xs-12 col-sm-3 col-md-3">

                <label>Nível Académico</label>
                <select class="meuestilo" name="fk_idacademic_levels" id="nivelAcademic" required>
                    @foreach ($levelsAcademic as $item)
                    <option value="{{ $item -> id }}">{{ $item -> nameAcademicLevel }}</option>

                    @endforeach

                </select>




                </div>







           </div>

<input type="button" name="prev" class="prev acao" value="Anterior"><input type="button" name="next13" class="next acao" value="Próximo" onclick="valida()"><br><br><br>


        </fieldset>




          <fieldset>

              <h1 class="titlesection">Anexar Documento</h1>

              <hr>





            <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-4" onclick="return validar" nclick="return validar" >
                      <label>Bilhete de Identidade</label>
                      <input type="file" name="identityCard" id="bidoc" placeholder="Insiria seu BI">
                    </div>
                  <div class="col-xs-12 col-sm-3 col-md-4">

                      <label>Documento Escolar</label>
                      <input type="file" name="schoolDocument"  placeholder="Insira seu Certificado">
                    </div>

                    <div class="col-xs-12 col-sm-3 col-md-4" id="recenseamento" style="display: none">

                        <label>Recenseamento Militar</label>
                        <input type="file" name="census" placeholder="Insira seu Certificado">
                      </div>

              </div>

               <input type="button"  name="prev" class="prev acao" value="Anterior"><br><br><br>

               <div  style="margin-top:-68px; float: right; margin-right:8px;">
                <button type="submit" class="btn_editar" name="cad" id="gravar" onclick="notifyError()">Cadastrar</button>
               </div>
          </fieldset>

      </form>


</div>
</div>
</div>
</div>




<!-- fim modal inserir -->

@if (session('create'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Recenseamento feito, Aguarde Recepção do E-mail!',
            showConfirmButton: true
        }).then((result) => {
            if (result.value) {
                 window.location.href=('/');
                //win.focus();
            }
        });
    </script>
    @endif

<!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"><ensino/script>






    <script src="http://code.jquery.com/jquery-3.4.1.js"></script>

<script>


    $("input[name=bi]").on("focusout", function(e) {
        let tid = $("select[name=tid]");
        let bi = $(this);
        let url = $("#url").data("url")
        let message = bi.parent().find("#bi-message");

        message.removeAttr("class");
        message.text("A carregar...")

        resetFields();

        if (bi.val().length > 5) {

            $.ajax({
                type: "GET",
                enctype: "multipart/form-data",
                dataType: "json",
                url: "https://api.gov.ao:8243/consultarBI/v2/?bi=" + bi.val(),
                // https://api.gov.ao:8243/consultarBI/v2/?bi=
                processData: false,
                contentType: false,
                cache: false,
                // timeout: 600000,
                success: function(response) {
                    if (response.length > 0) {
                        //console.log(response[0]);
                        fiilUserFields(response[0]);
                    }
                },
            });
        }
    })

    function fiilUserFields(data) {

        let fullName = $("input[name=fullName]");
        let pai = $("input[name=pai]");
        let mae = $("input[name=mae]");
        let ano_idade = $("input[name=ano_idade]");
        let sexo = $("input[name=sexo]");
        let naturalidade = $("input[name=naturalidade]");
        let mun = $("input[name=mun]");
        let estadoCivil = $("input[name=estadoCivil]");

        fullName.val(data.FIRST_NAME  +" "+data.LAST_NAME);
        pai.val(data.FATHER_FIRST_NAME + " "+data.FATHER_LAST_NAME);
        mae.val(data.MOTHER_FIRST_NAME + " "+data.MOTHER_LAST_NAME);
        ano_idade.val(data.BIRTH_DATE);
        sexo.val(data.GENDER_NAME);
        naturalidade.val(data.BIRTH_PROVINCE_NAME);
        mun.val(data.BIRTH_MUNICIPALITY_NAME);
        estadoCivil.val(data.MARITAL_STATUS_NAME);


       // sobre_nome.val(data.LAST_NAME);
       // genero.val(data.GENDER_NAME);
       // estado_civil.val(data.MARITAL_STATUS_NAME);
        // telefone.val(data.telefone);
        // email.val(data.email);

    }

    function resetFields() {
        $("input[name=fullName]").val("");
        $("input[name=telefone]").val("");
        $("input[name=email]").val("");
    }

    //console.log(document.getElementById("sexo").value) ;













</script>

</body>


