   <!--Header Start-->
   <header class="wf100 header-two">
       <div id="closetopbar" class="topbar wf100">
           <div class="container">
               <div class="row">
                   <div class="col-md-6 col-sm-7">
                       <p><b>CANDIDATURA ÀS FORÇAS ARMADAS ANGOLANAS</b></p>
                   </div>
               </div>
           </div>
       </div>
       <div class="h3-logo-row wf100">
           <div class="container">
               <div class="row" style="padding-bottom: 15px;">
                   <div class="col-md-7 col-sm-7">
                       <div class="h3-logo">
                           <div class="row">
                               <div class="colmd4" style="float:left">
                                   <a href="{{ route('site.home') }}" class="col-md-2">
                                       <img src="/images/logo/faa.png" class="img-responsiver" height="125" alt="">
                                   </a>
                               </div>
                               <div class="colmd8" style="float:right">
                                   <h5 class="col-md-10 hide-search" style="margin-top: 7%;">FORÇAS ARMADAS
                                       ANGOLANAS<br></h5>
                                   <h6 class="col-md-10 hide-search" style="margin-top: 2%;">
                                       <div style="color: #a61a12;"><i>Firmes Perante os Desafios do Futuro</i></div>
                                   </h6>
                               </div>
                           </div>
                           <h5 class="col-md-10 hide-modlogos" style="margin-top: 7%;">FORÇAS ARMADAS ANGOLANAS<br>
                           </h5>
                           <h6 class="col-md-10 hide-modlogos" style="margin-top: 2%;">
                               <div style="color: #a61a12;"><i>Firmes Perante os Desafios do Futuro</i></div>
                           </h6>
                       </div>
                   </div>
                   <form class="row hide-search navbar-form" style="float: right;display:none">
                       <div class="form-group">
                           <input class="form-control" type="text" placeholder="Pesquise no nosso Portal"
                               style="width: 200px;">
                           <button class=" btn" style="background-color: #a61a12; color: #fff;">
                               <i class="fas fa-search"></i>
                           </button>
                       </div>
                   </form>
               </div>
           </div>
       </div>
       <div class="h3-navbar wf100">
           <div class="container">
               <nav class="navbar">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                           data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span
                               class="sr-only">Toggle navigation</span> <span class="icon-bar"></span>
                           <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                   </div>
                   <!-- Collect the nav links, forms, and other content for toggling -->
                   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                       <ul class="nav navbar-nav">
                           <li class="">
                               <a href="{{ route('site.home') }}">
                                   INÍCIO
                               </a>
                           </li>

                           <li class=" dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Recenseamento<span
                                    class="ion ion-ios-arrow-down"></span></a>
                            <ul class="dropdown-menu">
                                <li class="">
                                    <a href="{{ url('/documentos-legais') }}">
                                        Documentos Legais
                                    </a>
                                </li>
                                <li class="">
                                    <a href="{{ url('/recenseamento') }}">
                                        Recensie-se
                                    </a>
                                </li>
                            </ul>
                        </li>

                           <li class=" dropdown">
                               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false">Recrutamento<span
                                       class="ion ion-ios-arrow-down"></span></a>
                               <ul class="dropdown-menu">

                                   <li>
                                       <a href="{{ url('/condicoes-de-admissao') }}">
                                           condições de admissão
                                       </a>
                                   </li>
                                   <li>
                                    <a href="{{ url('/fases-de-admissao') }}">
                                        fases de admissão
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('/documento_legais') }}">
                                        documentos legais
                                    </a>
                                </li>

                                   <li>
                                       @if ($configurations->statusCandidatures=="Activo")
                                            <a href="{{ url('/candidaturas') }}">
                                                Candidate-se
                                            </a>
                                       @endif

                                </li>

                               </ul>
                           </li>
                           <li class=" dropdown">
                               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false">Carreira militar <span
                                       class="ion ion-ios-arrow-down"></span></a>
                               <ul class="dropdown-menu">
                                   <li class="">
                                       <a href="{{ url('/exercito') }}">Exército</a>
                                   </li>
                                   <li class="">
                                       <a href="{{ url('/força-aerea') }}">Força Aérea</a>
                                   </li>
                                   <li><a href="{{ url('/marinha-de-guerra') }}">marinha de guerra</a></li>
                               </ul>
                           </li>

                           <li>
                               <a href="{{ url('/perguntas-frequentes') }}">Perguntas frequentes</a>
                           </li>


                        <li>
                            <a href="{{ url('/onde-estamos') }}">Onde estamos</a>
                        </li>
                       </ul>
                   </div>
               </nav>
           </div>
       </div>
   </header>
   <!--Header End-->

   <style>
       .limitpar2 {
           display: block;

       }

       .limitpar2>p:first-child,
       .limitpar2>div:first-child>div:first-child {
           display: block;
           overflow: hidden;
           text-overflow: ellipsis;
           display: -webkit-box;
           -webkit-line-clamp: 3;
           -webkit-box-orient: vertical;
           -moz-line-clamp: 3;
           -moz-box-orient: vertical;
       }

       .limitpar2>p,
       .limitpar2>div>div {
           display: none;
       }

   </style>
