
<div class="conteudo" style="position:relative; margin-top:10%;">

    <form id="formulario" name="formulario" method="post" action="pupload"  >
        @csrf
        @method('post')
              <fieldset>
                  <p class="titlesection">Informações Pessoais</p>
                  <hr>
                  <div class="row" >
                      <div class="col-xs-12 col-sm-3 col-md-4"  id="divEnsino">
                        <label>Tipo de Candidatura</label>
                        <select id="ensino" name="fk_idtypes_application" class="meuestilo" name="tec" required="">
                            <option>Seleccione uma opcção</option>
                            @foreach ($types_application as $item)
                            <option value="{{ $item -> id }}">{{ $item -> namesApplication }}</option>

                            @endforeach
                        </select>
                    </div>

                    <div class="col-xs-12 col-sm-3 col-md-4" name="estabelecimento" id="estabelecimento" style="display: none;">
                        <label>Estabelecimento de Ensino</label>
                        <select id="est" class="meuestilo" name="fk_idacademy" required="">
                            <option>Seleccione uma opcção</option>

                                    @foreach ($academies as $item)
                                        @if ($item->id!=5)
                                        <option value="{{ $item -> id }}">{{ $item -> nameAcademy  }}</option>
                                        @endif
                                    @endforeach

                        </select>
                    </div>

                    <div class="col-xs-12 col-sm-3 col-md-4" name="estabelecimento1" id="estabelecimento" style="display: none;">
                        <label>Estabelecimento de Ensino</label>
                        <select id="recg" class="meuestilo" name="fk_idacademy1" required="">


                                    @foreach ($academies as $item)
                                        @if ($item->id==5)
                                        <option value="{{ $item -> id }}">{{ $item -> nameAcademy  }}</option>
                                        @endif
                                    @endforeach

                        </select>
                    </div>





                    <div class="coNúmerol-xs-12 col-sm-3 col-md-4">
                      <label>Número Identificação<span class="required-field">*</span></label>
                      <input type="text" pattern = "[0-9]{9}[A-Z]{2}[0-9]{3}$" name="bi" class="form-control" onkeyup="this.value=this.value.toUpperCase()" maxlength="14">
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
                 <input type="button" name="next1" id="next1" class="next acao" value="Proximo" required>
                 enctype="multipart/form-data"
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

                      enctype="multipart/form-data"
                     <div class="col-xs-12 col-sm-3 col-md-4">

                        <label>Estado Civil</label>

                        <input type="text" name="estadoCivil" id="estadoCivil" placeholder="" required readonly>

                      </div>


                 </div>


                <div class="row">


                        <div class="col-xs-12 col-sm-3 col-md-6">

                          <label>Nº do Telefone</label>
                          <input type="text" name="telefone" placeholder="Insira seu Melhor Contacto" required>
                        </div>

                        <div class="col-xs-12 col-sm-3 col-md-6">

                          <labenctype="multipart/form-data"el>E-mail</label>
                          <input type="email" name="email" placeholder="Insira seu melhor E-mail" required>
                        </div>

                </div>

             <input type="button" name="prev" class="prev acao" value="Anterior"><input type="button" name="prev" class="next acao" value="Próximo"><br><br><br>


              </fieldset>


              <fieldset>
                <h1 class="titlesection">Dados para a Candidatura</h1>
                <hr>
                 <div class="row">
                      <div class="col-xs-12 col-sm-3 col-md-4">
                      <label>Província de Candidatura </label>
                      <select class="meuestilo" name="fk_idProvincie" id="provCand" required>
                        <option>Seleccione uma opção</option>
                          @foreach ($localCandidatures as $item)
                          <option value="{{ $item -> id }}">{{ $item -> nameProvince }}</option>

                          @endforeach
                      </select>
                    </div>

                    <div class="col-xs-12 col-sm-3 col-md-4">

                      <label>Município de Candidatura</label>
                      <select class="meuestilo" name="fk_idmunicipies" id="munCand" required>
                        <option>Seleccione uma opção</option>
                          @foreach ($municipeCandidature as $item)
                          <option value="{{ $item -> id }}">{{ $item -> nameMunicipe }}</option>

                          @endforeach

                      </select>


                    </div>

                   <div class="col-xs-12 col-sm-3 col-md-4">

                    <label>Nível Académico</label>
                    <select class="meuestilo" name="fk_idacademic_levels" required>
                        @foreach ($levelsAcademic as $item)
                        <option value="{{ $item -> id }}">{{ $item -> nameAcademicLevel }}</option>

                        @endforeach

                    </select>


                    </div>

                    <div class="col-xs-12 col-sm-3 col-md-4" id="curso" style="">
                        <label>Curso Para Candidatura</label>
                        <select class="meuestilo" id="selecCurso" name="fk_idcourse" required>
                            <option>Seleccione uma opcção</option>

                                        @if ($types_application->id=1)

                                            @foreach ($course as $item)

                                            @if ($item -> id==3)
                                            <option value="{{ $item -> id }}">{{ $item -> nameCourse }}</option>
                                            @endif

                                            @endforeach

                                        @endif

                        </select>
                    </div>


               </div>

    <input type="button" name="prev" class="prev acao" value="Anterior"><input type="button" name="prev" class="next acao" value="Próximo"><br><br><br>


            </fieldset>




              <fieldset>

                  <h1 class="titlesection">Anexar Documento</h1>

                  <hr>


     <div class="row">


                <div class="row">

                        <div class="col-xs-12 col-sm-3 col-md-6">

                          <label>Bilhete de Identidade</label>
                          <input type="file" name="identityCard" placeholder="Insiria seu BI">
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-6">

                          <label>Documento Escolar</label>
                          <input type="file" name="schoolDocument" placeholder="Insira seu Certificado">
                        </div>

                        <div class="col-xs-12 col-sm-3 col-md-6" id="recenseamento" style="display: none">

                            <label>Recenseamento Militar</label>
                            <input type="file" name="census" placeholder="Insira seu Certificado">
                          </div>

                </div>

                   <input type="button" onclick="return validar"  name="prev" class="prev acao" value="Anterior"><br><br><br>

              </fieldset>





          </form>


    </div>
    </div>
    </div>
    </div>
    <!-- fim modal inserir -->
