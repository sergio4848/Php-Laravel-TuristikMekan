@extends('layouts.home')

@section('title', 'User Profile')


@section('content')
    <section id="subintro">
        <div class="container">
            <div class="row">
                <div class="span8">
                    <ul class="breadcrumb">
                        <li><a href="{{route('home')}}"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                        <li><a href="#">User Profile</a><i class="icon-angle-right"></i></li>
                        <li class="active">Portfolio detail</li>
                    </ul>
                </div>
                <div class="span4">
                    <div class="search">
                        <form class="input-append">
                            <input class="search-form" id="appendedPrependedInput" type="text" placeholder="Search here.." />
                            <button class="btn btn-dark" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="maincontent">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <article>
                        <div class="heading">
                            <h4>Single portfolio name here</h4>
                        </div>
                        <div class="clearfix">
                        </div>
                        <div class="row">
                            <div class="span8">
                                <!-- start flexslider -->
                                <div class="flexslider">
                                    <ul class="slides">
                                        <li>
                                            <img src="assets/img/slides/flexslider/img1.jpg" alt="" />
                                        </li>
                                        <li>
                                            <img src="assets/img/slides/flexslider/img2.jpg" alt="" />
                                        </li>
                                        <li>
                                            <img src="assets/img/slides/flexslider/img3.jpg" alt="" />
                                        </li>
                                    </ul>
                                </div>
                                <!-- end flexslider -->
                                <p>
                                    Cu cum noster euismod appellantur, mundi vitae vim ut, ea sea scripta expetendis vituperatoribus. Et cibo dicat impetus cum, id his quodsi scripserit. Nec purto habeo recteque eu. Posse oportere accusamus an sit, ex quando phaedrum sapientem ius. Perfecto
                                    ocurreret no nam, eu quas cetero qui, vel ea minim nusquam salutatus. Nemore integre his ei, tollit eirmod eam at.
                                </p>
                            </div>
                            <div class="span4">
                                <aside>
                                    <div class="widget">
                                        <div class="project-widget">
                                            <h4 class="rheading">Portfolio detail<span></span></h4>
                                            <ul class="project-detail">
                                                <li><label>Project name :</label> Clean business theme</li>
                                                <li><label>Category :</label> Web design</li>
                                                <li><label>Project date :</label> 12 Apr 2013</li>
                                                <li><label>Project link :</label><a href="#">www.somelink.com</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </article>
                    <!-- end article full post -->
                </div>
            </div>
        </div>
    </section>
@endsection
