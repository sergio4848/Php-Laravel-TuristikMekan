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
                            <h1>HARİTADA GÖR</h1>
                            <p>{!! $data->detail !!}</p>
                            <h4>Comments</h4>
                            <ul class="media-list">
                                <li class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object" src="{{asset('assets')}}/img/small-avatar.png" alt="" />
                                    </a>
                                    <div class="media-body">
                                        <h5 class="media-heading"><a href="#">John doe</a></h5>
                                        <span>3 March, 2013</span>
                                        <p>
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                        </p>
                                        <a href="#" class="reply">Reply</a>
                                        <div class="clearfix">
                                        </div>
                                </li>
                            </ul>
                            <div class="comment-post">
                                <h4>Leave a comment</h4>
                                @livewire('review',['id'=>$data->id])
                            </div>



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
