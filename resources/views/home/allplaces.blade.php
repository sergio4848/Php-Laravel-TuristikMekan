@extends('layouts.home')

@section('title', 'Keşfet '.$setting->title)

@section('description'){{$setting->description}}@endsection

@section('keywords',$setting->keywords)
@include('home._header')

@section('content')
    <section id="subintro">
        <div class="container">
            <div class="row">
                <div class="span8">
                    <ul class="breadcrumb">
                        <li><a href="{{route('home')}}"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                        <li>Keşfet<i class="icon-angle-right"></i></li>


                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="maincontent">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <h1>TÜM MEKANLARI KEŞFET</h1>
                </div>
            </div>

            <div class="row">

                <ul class="portfolio-area da-thumbs">
                    @foreach($datalist as $rs)
                    <li class="portfolio-item" data-id="id-0" data-type="web">
                        <div class="span4">
                            <div class="thumbnail">
                                <div class="image-wrapp">
                                    <img src="{{ Storage::url($rs->image) }}" style="width: 400px; height: 200px;" alt="Portfolio name" title="" />
                                    <article class="da-animate da-slideFromRight">
                                        <a href="{{route('place',['id' => $rs->id,'slug' => $rs->slug])}}">
                                            <i class="icon-link icon-rounded icon-48 active"></i>
                                        </a>
                                        <div class="hidden-tablet">
                                            <p>
                                                {{$rs->title}}
                                            </p>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <h4 style="text-align: center"><a href="{{route('place',['id' => $rs->id,'slug' => $rs->slug])}}">{{$rs->title}}</a></h4>
                    </li>

                    @endforeach
                </ul>

            </div>


        </div>
    </section>
@endsection
