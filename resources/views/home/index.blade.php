@extends('layouts.home')

@section('title', 'Ana Sayfa '.$setting->title)

@section('description'){{$setting->description}}@endsection

@section('keywords',$setting->description)
@include('home._header')
@include('home.search_content')
@include('home._slider')

@section('content')
    <section id="maincontent">
        <div class="container">

            <div class="row">
                <h1>Bugüne Özel Mekanlar</h1>
                @foreach($daily as $rs)
                    @php
                        $avgrev=\App\Http\Controllers\HomeController::avrgreview($rs->id);
                    @endphp

                <div class="span3 features e_pulse">
                    <img src="{{ Storage::url($rs->image) }}" style="width: 400px; height: 200px;" alt="" />
                    <div class="box">
                        <div class="divcenter">
                            <a href="{{route('place',['id' => $rs->id,'slug' => $rs->slug])}}"><i class="icon-circled icon-48 icon-magic active icon"></i></a>
                            <h4>{{$rs->title}}</h4>
                            <i class="fa fa-star @if ($avgrev>0) checked @endif"></i>
                            <i class="fa fa-star @if ($avgrev>1) checked @endif"></i>
                            <i class="fa fa-star @if ($avgrev>2) checked @endif"></i>
                            <i class="fa fa-star @if ($avgrev>3) checked @endif"></i>
                            <i class="fa fa-star @if ($avgrev>4) checked @endif"></i>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
            <div class="row">
                <h1>Son Eklenen Mekanlar</h1>
                @foreach($last as $rs)
                    @php
                        $avgrev=\App\Http\Controllers\HomeController::avrgreview($rs->id);
                    @endphp
                <div class="span3 features e_pulse">
                    <img src="{{ Storage::url($rs->image) }}" style="width: 400px; height: 200px;" alt="" />
                    <div class="box">
                        <div class="divcenter">
                            <a href="{{route('place',['id' => $rs->id,'slug' => $rs->slug])}}"><i class="icon-circled icon-48 icon-magic active icon"></i></a>
                            <h4>{{$rs->title}}</h4>
                            <i class="fa fa-star @if ($avgrev>0) checked @endif"></i>
                            <i class="fa fa-star @if ($avgrev>1) checked @endif"></i>
                            <i class="fa fa-star @if ($avgrev>2) checked @endif"></i>
                            <i class="fa fa-star @if ($avgrev>3) checked @endif"></i>
                            <i class="fa fa-star @if ($avgrev>4) checked @endif"></i>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
            <div class="row">
                <h1>Size Özel Mekanlar</h1>
                @foreach($picked as $rs)
                    @php
                        $avgrev=\App\Http\Controllers\HomeController::avrgreview($rs->id);
                    @endphp
                <div class="span3 features e_pulse">
                    <img src="{{ Storage::url($rs->image) }}" style="width: 400px; height: 200px;" alt="" />
                    <div class="box">
                        <div class="divcenter">
                            <a href="{{route('place',['id' => $rs->id,'slug' => $rs->slug])}}"><i class="icon-circled icon-48 icon-magic active icon"></i></a>
                            <h4>{{$rs->title}}</h4>
                            <i class="fa fa-star @if ($avgrev>0) checked @endif"></i>
                            <i class="fa fa-star @if ($avgrev>1) checked @endif"></i>
                            <i class="fa fa-star @if ($avgrev>2) checked @endif"></i>
                            <i class="fa fa-star @if ($avgrev>3) checked @endif"></i>
                            <i class="fa fa-star @if ($avgrev>4) checked @endif"></i>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>



        </div>
    </section>

@endsection


