@extends('layouts.merge.site')
@section('titulo', ' Portal de Candidaturas das FAA')
@section('content')
    <!--Wrapper Start-->
    <div class="wrapper">

        <!--Slider Start-->
        <div class="main-slider wf100">
            <div class="home2-slider rev_slider_wrapper">

                <!-- START REVOLUTION SLIDER -->
                <div class="rev_slider_wrapper fullwidthbanner-container">
                    <div id="rev-slider2" class="rev_slider fullwidthabanner">
                        <ul>
                            @foreach ($slideshows as $item)


                                <li data-transition="fade">
                                    <img src="/storage/{{ $item->path }}" alt="" width="1920" height="685"
                                        data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                        data-bgparallax="1">
                                    <div class="tp-caption  tp-resizeme"
                                        style="float:right;color:white;padding: 20px; background:rgba(0,0,0,.6);"
                                        data-x="right" data-hoffset="100" data-y="bottom" data-voffset="100"
                                        data-transform_idle="o:1;"
                                        data-transform_in="x:[-75%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                        data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none"
                                        data-splitout="none" data-start="700">
                                        <div class="slide-content-box">
                                            <h3 style="float:right;color:white;">{{ $item->alt }}</h3><br>

                                        </div>
                                    </div>

                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- END REVOLUTION SLIDER -->

            </div>
        </div>
        <!--Slider End-->




        <div class="main-content">
            <!--Mayor Msg with Video Start-->
            <section class="Mayor-video-msg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-5">
                            <!--Mayor Msg Start-->
                            <div class="city-tour gallery" style="background-color: #ddb82d;">
                                <!-- <strong> Chefe do Estado Maior General das Faa</strong>   -->
                                <img src="{{ asset('site/images/faa/EXE.jpg') }}" alt="">
                            </div>
                            <!--Mayor Msg End-->
                        </div>
                        <div class="col-md-8 col-sm-7">
                            <div class="Mayor-welcome">
                                <h5>Candidatura de Ingresso às Forças Armadas Angolanas...</h5>
                                <p style="margin-bottom: 0;">
                                    Candidatura de Ingresso às
                                    Forças Armadas Angolanas.
                                    Bem-vindo ao site de Candidaturas Online!

                                            @if ($configurations->statusCandidatures=="Activo")
                                                <a href="{{ url('/candidaturas') }}"
                                                    style="border: none !important;color:white;font-weight: bold;">
                                                    Candidata-se aqui!
                                                </a>
                                            @endif



                                </p><br>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Mayor Msg with Video End-->

            <!-- News Start-->
            <section class="wf100 city-news p75">
                <div class="container">
                    <div class="title-style-3">
                        <h3>Publicação de Listas de Acesso</h3>
                        <p>Veja abaixo </p>
                    </div>
                    <div class="row">

                        @foreach ($news as $item)


                            <!--News Box Start-->
                            <div class="col-md-3 col-sm-6 col-lg-4">
                                <div class="news-box">

                                    <div class="new-txt">
                                        <ul class="news-meta">
                                            <li> {{ date('d.m.Y', strtotime($item->date)) }}1</li>
                                        </ul>
                                        <h6><a href="{{ route('site.news.show', $item->id) }}">{{ $item->title }}</a>
                                        </h6>

                                    </div>
                                    <div class="news-box-f">
                                        <a href="{{ route('site.news.show', $item->id) }}">
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--News Box End-->
                        @endforeach


                    </div>
                </div>
            </section>
            <!-- News End-->



        </div>
        <!--Main Content End-->



    @endsection
