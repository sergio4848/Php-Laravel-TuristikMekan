@extends('layouts.home')

@section('title', 'Ana Sayfa '.$setting->title)

@section('description'){{$setting->description}}@endsection

@section('keywords',$setting->description)
@include('home._header')
@include('home._slider')

@section('content')
    <section id="maincontent">
        <div class="container">

            <div class="row">
                <div class="span12">
                    <div class="call-action">

                        <div class="text">
                            <h2>You should love this stand out call action</h2>
                            <p>
                                Hover this call action box and see the call action button play nice animation to seek attention
                            </p>
                        </div>
                        <div class="cta">
                            <a class="btn btn-large btn-theme" href="#">
                                <i class="icon-plane icon-white"></i> Get a quote </a>
                        </div>

                    </div>
                    <!-- end tagline -->
                </div>
            </div>

            <div class="row">
                <div class="span3 features e_pulse">
                    <img src="{{asset('assets')}}/img/dummies/img1.jpg" alt="" />
                    <div class="box">
                        <div class="divcenter">
                            <a href="#"><i class="icon-circled icon-48 icon-magic active icon"></i></a>
                            <h4>Responsive <br />twitter bootstrap</h4>
                        </div>
                    </div>
                </div>

                <div class="span3 features e_pulse">
                    <img src="{{asset('assets')}}/img/dummies/img2.jpg" alt="" />
                    <div class="box">
                        <div class="divcenter">
                            <a href="#"><i class="icon-circled icon-48 icon-briefcase icon"></i></a>
                            <h4>Unparalleled <br />premium support</h4>
                        </div>
                    </div>
                </div>

                <div class="span3 features e_pulse">
                    <img src="{{asset('assets')}}/img/dummies/img3.jpg" alt="" />
                    <div class="box">
                        <div class="divcenter">
                            <a href="#"><i class="icon-circled icon-48 icon-cogs icon"></i></a>
                            <h4>Valid <br />HTML code</h4>
                        </div>
                    </div>
                </div>

                <div class="span3 features e_pulse">
                    <img src="{{asset('assets')}}/img/dummies/img4.jpg" alt="" />
                    <div class="box">
                        <div class="divcenter">
                            <a href="#"><i class="icon-circled icon-48 icon-bullhorn icon"></i></a>
                            <h4>Flexible <br />multi usage</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="span12">
                    <h4 class="rheading">Recent works<span></span></h4>
                    <div class="row">
                        <div class="span3">

                            <p class="hidden-phone">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in lacus rhoncus elit egestas luctus. Nullam at lectus augue.
                            </p>

                            <a href="#" class="btn btn-theme">Read More</a>
                        </div>

                        <div class="span9">
                            <div id="latest-work" class="carousel btleft">
                                <div class="carousel-wrapper">
                                    <ul class="da-thumbs">

                                        <li>
                                            <img src="{{asset('assets')}}/img/dummies/work1.jpg" alt="" />
                                            <article class="da-animate da-slideFromRight">
                                                <a class="zoom" data-pretty="prettyPhoto" href="{{asset('assets')}}/img/dummies/big1.jpg">
                                                    <i class="icon-zoom-in icon-rounded icon-48 active"></i>
                                                </a>
                                                <a href="portfolio-detail.html">
                                                    <i class="icon-link icon-rounded icon-48 active"></i>
                                                </a>
                                                <div class="hidden-tablet">
                                                    <p>Serenity theme</p>
                                                </div>
                                            </article>
                                        </li>

                                        <li>
                                            <img src="{{asset('assets')}}/img/dummies/work2.jpg" alt="" />
                                            <article class="da-animate da-slideFromRight">
                                                <a class="zoom" data-pretty="prettyPhoto" href="{{asset('assets')}}/img/dummies/big1.jpg">
                                                    <i class="icon-zoom-in icon-rounded icon-48 active"></i>
                                                </a>
                                                <a href="portfolio-detail.html">
                                                    <i class="icon-link icon-rounded icon-48 active"></i>
                                                </a>
                                                <div class="hidden-tablet">
                                                    <p>Dark apps</p>
                                                </div>
                                            </article>
                                        </li>

                                        <li>
                                            <img src="{{asset('assets')}}/img/dummies/work3.jpg" alt="" />
                                            <article class="da-animate da-slideFromRight">
                                                <a class="zoom" data-pretty="prettyPhoto" href="{{asset('assets')}}/img/dummies/big1.jpg">
                                                    <i class="icon-zoom-in icon-rounded icon-48 active"></i>
                                                </a>
                                                <a href="portfolio-detail.html">
                                                    <i class="icon-link icon-rounded icon-48 active"></i>
                                                </a>
                                                <div class="hidden-tablet">
                                                    <p>Mobile apps</p>
                                                </div>
                                            </article>
                                        </li>

                                        <li>
                                            <img src="{{asset('assets')}}/img/dummies/work4.jpg" alt="" />
                                            <article class="da-animate da-slideFromRight">
                                                <a class="zoom" data-pretty="prettyPhoto" href="{{asset('assets')}}/img/dummies/big1.jpg">
                                                    <i class="icon-zoom-in icon-rounded icon-48 active"></i>
                                                </a>
                                                <a href="portfolio-detail.html">
                                                    <i class="icon-link icon-rounded icon-48 active"></i>
                                                </a>
                                                <div class="hidden-tablet">
                                                    <p>Mobile template</p>
                                                </div>
                                            </article>
                                        </li>

                                        <li>
                                            <img src="{{asset('assets')}}/img/dummies/work5.jpg" alt="" />
                                            <article class="da-animate da-slideFromRight">
                                                <a class="zoom" data-pretty="prettyPhoto" href="{{asset('assets')}}/img/dummies/big1.jpg">
                                                    <i class="icon-zoom-in icon-rounded icon-48 active"></i>
                                                </a>
                                                <a href="portfolio-detail.html">
                                                    <i class="icon-link icon-rounded icon-48 active"></i>
                                                </a>
                                                <div class="hidden-tablet">
                                                    <p>Business theme</p>
                                                </div>
                                            </article>
                                        </li>

                                        <li>
                                            <img src="{{asset('assets')}}/img/dummies/work6.jpg" alt="" />
                                            <article class="da-animate da-slideFromRight">
                                                <a class="zoom" data-pretty="prettyPhoto" href="{{asset('assets')}}/img/dummies/big1.jpg">
                                                    <i class="icon-zoom-in icon-rounded icon-48 active"></i>
                                                </a>
                                                <a href="portfolio-detail.html">
                                                    <i class="icon-link icon-rounded icon-48 active"></i>
                                                </a>
                                                <div class="hidden-tablet">
                                                    <p>Portfolio graphic</p>
                                                </div>
                                            </article>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection


