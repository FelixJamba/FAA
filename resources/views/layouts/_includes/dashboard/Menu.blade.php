<nav class="topnav navbar navbar-light" style="background-color: #a61a12;">
    <button type="button" class="navbar-toggler text-white mt-2 p-0 mr-3 collapseSidebar">
        <i class="fe fe-menu navbar-toggler-icon"></i>
    </button>

    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link text-white my-2" href="#" id="modeSwitcher" data-mode="light">
                <i class="fe fe-moon fe-16"></i>
            </a>

        </li>

        <li class="nav-item dropdown">

            <a class="nav-link dropdown-toggle text-white pr-0" href="#" id="navbarDropdownMenuLink" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="fe fe-user fe-16"></span>
                {{-- <span class="avatar avatar-sm mt-2">
                     @php
                        $img = Auth::User()->profile_photo_path;
                    @endphp
                    @if (isset($img))
                        <img src="{{ url("storage/{$img}") }}" alt="..." class="avatar-img rounded-circle">
                    @endif
                </span> --}}
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ route('admin.user.show', Auth::User()->id) }}">Perfil</a>
                <a class="dropdown-item" href="{{ route('admin.user.edit', Auth::user()->id) }}">Configurações</a>
                <a class="nav-link text-danger" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Terminar a Sessão
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </div>
        </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
        </form>
    </ul>
</nav>

@if (null !== Auth::user())
    <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
            <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
            <!-- nav bar -->
            <div class="w-100  d-flex">
                <a class="navbar-brand mx-auto  flex-fill text-center" href="{{ route('admin.home') }}">
                    <img rel="icon" src="/images/logo/faa.png" style="width:60px; margin:auto" />

                </a>
            </div>

            <ul class="navbar-nav flex-fill w-100 mb-2">
                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Painel</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="{{ route('admin.home') }}">
                            <i class="fe fe-home fe-16"></i>
                            <span class="ml-3 item-text">Painel</span>
                        </a>
                    </li>
                </ul>

                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item w-100">
                        <a class="nav-link" href="{{ route('site.home') }}" target="_blank">
                            <i class="fe fe-globe fe-16"></i>
                            <span class="ml-3 item-text">Ir ao Site</span>
                        </a>
                    </li>
                </ul>


                @if ('Gestor' == Auth::user()->level || 'Operador' == Auth::user()->level || 'Administrador' == Auth::user()->level)

                    {{-- Menu Candidaturas --}}
                    <p class="text-muted nav-heading mt-4 mb-1">
                        <span> Candidaturas </span>
                    </p>
                    {{-- categoria de Notícias --}}
                    <li class="nav-item dropdown">
                        <a href="#candidature" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-edit fe-16"></i>
                            <span class="ml-3 item-text">Candidaturas</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="candidature">

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.candidature.index') }}">
                                    <span class="ml-1 item-text"> Listar Candidaturas Estabelecimento de Ensino</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.candidatureGeral.index') }}">
                                    <span class="ml-1 item-text"> Listar Candidaturas Recrutamento Geral</span>
                                </a>
                            </li>

                        </ul>
                    </li>


                    {{-- Menu de Academias --}}
                    <p class="text-muted nav-heading mt-4 mb-1">
                        <span>Academias</span>
                    </p>




                  {{-- Academia --}}
                  <li class="nav-item dropdown">
                    <a href="#academy" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                        <i class="fe fe-book fe-16"></i>
                        <span class="ml-3 item-text">Academias</span>
                    </a>
                    <ul class="collapse list-unstyled pl-4 w-100" id="academy">

                        <li class="nav-item">
                            <a class="nav-link pl-3" href="{{ route('admin.academy.create') }}">
                                <span class="ml-1 item-text">Cadastrar Academia</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="{{ route('admin.academy.index') }}">
                                <span class="ml-1 item-text">Listar Academias</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Relatório</span>
                 </p>


                {{-- Relatório --}}
                <li class="nav-item dropdown">
                    <a href="#report" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                        <i class="fe fe-upload fe-16"></i>
                        <span class="ml-3 item-text">Relatório</span>
                    </a>
                    <ul class="collapse list-unstyled pl-4 w-100" id="report">

                        <li class="nav-item">
                            <a class="nav-link pl-3" href="{{ route('admin.report.index') }}">
                                <span class="ml-1 item-text">Gerar Relatório</span>
                            </a>
                        </li>
                    </ul>
                </li>


                    {{-- Menu de listas de acesso --}}



                @endif

                @if ('Gestor' == Auth::user()->level || 'Editor' == Auth::user()->level || 'Administrador' == Auth::user()->level)

                    {{-- Menu de Listas de Acesso --}}

                    <p class="text-muted nav-heading mt-4 mb-1">
                        <span>Acesso</span>
                    </p>
                    {{-- categoria das listas --}}
                    <li class="nav-item dropdown">
                        <a href="#news" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                            <i class="fe fe-edit-3 fe-16"></i>
                            <span class="ml-3 item-text">Lista de Acesso</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="news">

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.news.create') }}">
                                    <span class="ml-1 item-text">Cadastrar Lista de Acesso</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.news.index') }}">
                                    <span class="ml-1 item-text">Listar Acesso</span>
                                </a>
                            </li>
                        </ul>
                    </li>




                    {{-- Menu de Eventos --}}
                    <p class="text-muted nav-heading mt-4 mb-1">
                        <span> Eventos</span>
                    </p>
                    {{-- categoria de Eventos --}}
                    <li class="nav-item dropdown">
                        <a href="#events" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                            <i class="fe fe-folder fe-16"></i>
                            <span class="ml-3 item-text">Eventos</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="events">

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.event.create') }}">
                                    <span class="ml-1 item-text">Cadastrar Eventos</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.event.index') }}">
                                    <span class="ml-1 item-text">Listar Eventos</span>
                                </a>
                            </li>
                        </ul>
                    </li>


                    {{-- Menu de Slideshows --}}
                    <p class="text-muted nav-heading mt-2 mb-1">
                        <span> Slideshows, Galerias & Videos</span>
                    </p>
                    <li class="nav-item dropdown">
                        <a href="#slideshow" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-image fe-16"></i>
                            <span class="ml-3 item-text"> Slideshows</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="slideshow">

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.slideshow.create') }}">
                                    <span class="ml-1 item-text">Cadastrar Slideshow</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.slideshow.index') }}">
                                    <span class="ml-1 item-text">Listar Slideshows</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#gallery" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-image fe-16"></i>
                            <span class="ml-3 item-text"> Galerias</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="gallery">

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.gallery.create') }}">
                                    <span class="ml-1 item-text">Cadastrar Galeria</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.gallery.index') }}">
                                    <span class="ml-1 item-text">Listar Galerias</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#video" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                            <i class="fe fe-video fe-16"></i>
                            <span class="ml-3 item-text"> Videos</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="video">

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.video.create') }}">
                                    <span class="ml-1 item-text">Cadastrar Video</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.video.index') }}">
                                    <span class="ml-1 item-text">Listar Videos</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif


                @if ('Administrador' == Auth::user()->level)
                    {{-- Menu de Utilizadores --}}
                    <p class="text-muted nav-heading mt-2 mb-1">
                        <span> Utilizadores</span>
                    </p>
                    <li class="nav-item dropdown">
                        <a href="#user" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                            <i class="fe fe-user-plus fe-16"></i>
                            <span class="ml-3 item-text"> Utilizadores</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="user">

                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('register') }}">
                                    <span class="ml-1 item-text">Cadastrar Utilizador</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.user.index') }}">
                                    <span class="ml-1 item-text">Listar Utilizadores</span>
                                </a>
                            </li>
                        </ul>
                    </li>


                    {{-- Menu de Configurações --}}
                    <p class="text-muted nav-heading mt-4 mb-1">
                        <span>Configurações</span>
                    </p>

                    <li class="nav-item dropdown">
                        <a href="#configuration" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle nav-link">
                            <i class="fe fe-settings fe-16"></i>
                            <span class="ml-3 item-text">Configurações</span>
                        </a>
                        <ul class="collapse list-unstyled pl-4 w-100" id="configuration">
                            <li class="nav-item">
                                <a class="nav-link pl-3" href="{{ route('admin.configuration.show') }}">
                                    <span class="ml-1 item-text">Visualizar</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                @endif


            </ul>

        </nav>
    </aside>

@endif
