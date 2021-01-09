@extends('layouts.home')

@section('title', 'Mekanlar '.$data->title)

@section('description'){{$data->description}}@endsection

@section('keywords',$data->description)
@include('home._header')

@section('content')
<section id="subintro">
    <div class="container">
        <div class="row">
            <div class="span8">
                <ul class="breadcrumb">
                    <li><a href="{{route('home')}}"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                    <li class="active">{{$data->title}}</li>
                </ul>
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
                        <h4>{{$data->title}}</h4>
                    </div>
                    <div class="clearfix">
                    </div>
                    <div class="row">
                        <div class="span8">
                            <!-- start flexslider -->
                            <div class="flexslider">
                                <ul class="slides">
                                    @foreach($datalist as $rs)
                                    <li>
                                        <img src="{{ Storage::url($rs->image) }}" alt="" />
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                            <h4>HARİTADA GÖR</h4>
                            <!-- end flexslider -->
                            <p>{!! $data->detail !!}</p>
                        </div>
                        <div class="span4">
                            <aside>
                                <div class="widget">
                                    <div class="project-widget">
                                        <h4 class="rheading">{{$data->title}}<span></span></h4>
                                        <ul class="project-detail">
                                            <li><label>Şehir:</label> {{$data->city}}</li>
                                            <li><label>Adres :</label> {{$data->address}}</li>
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
