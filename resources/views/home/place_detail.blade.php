@extends('layouts.home')

@section('title', 'Mekanlar '.$data->title)

@section('description'){{$data->description}}@endsection

@section('keywords',$data->description)

<head>

    <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @livewireStyles
    <style>
        .checked {
            color: orange;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        function myFunction(x) {
            x.classList.toggle("fa-thumbs-down");
        }
    </script>
    <style>*{
            margin: 0;
            padding: 0;
        }
        .rate {
            float: left;
            height: 46px;
            padding: 0 10px;
        }
        .rate:not(:checked) > input {
            position:absolute;
            top:-9999px;
        }
        .rate:not(:checked) > label {
            float:right;
            width:1em;
            overflow:hidden;
            white-space:nowrap;
            cursor:pointer;
            font-size:30px;
            color:#ccc;
        }
        .rate:not(:checked) > label:before {
            content: '★ ';
        }
        .rate > input:checked ~ label {
            color: #ffc700;
        }
        .rate:not(:checked) > label:hover,
        .rate:not(:checked) > label:hover ~ label {
            color: #deb217;
        }
        .rate > input:checked + label:hover,
        .rate > input:checked + label:hover ~ label,
        .rate > input:checked ~ label:hover,
        .rate > input:checked ~ label:hover ~ label,
        .rate > label:hover ~ input:checked ~ label {
            color: #c59b08;
        }
    </style>
</head>

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
                            @php
                                $avgrev=\App\Http\Controllers\HomeController::avrgreview($data->id);
                                $countreview=\App\Http\Controllers\HomeController::countreview($data->id);
                                $countlike=\App\Http\Controllers\HomeController::countlike($data->id);
                            @endphp

                            <div class="span12">
                                <h4 class="rheading">İNCELE<span></span></h4>
                                <div class="tabbable tabs-top">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#one" data-toggle="tab"><i class="icon-briefcase"></i> Haritada Gör</a></li>
                                        <li><a href="#two" data-toggle="tab">Yorumlar({{$countreview}})</a></li>

                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="one">
                                            <p>{!! $data->detail !!}</p>
                                        </div>

                                        <div class="tab-pane" id="two">
                                            @foreach($reviews as $rs)
                                            <ul class="media-list">
                                                <li class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object" src="{{asset('assets')}}/img/small-avatar.png" alt="" />
                                                    </a>
                                                    <div class="media-body">
                                                        <h5 class="media-heading"><a href="{{route('userprofile',['id' => $rs->id,'slug' => $rs->slug])}}">{{$rs->user->name}}</a></h5>
                                                        <span>{{$rs->created_at}}</span>
                                                        <strong>{{$rs->subject}}</strong>
                                                        <p>{{$rs->review}}</p>
                                                            <i class="fa fa-star @if ($rs->rate>0) checked @endif"></i>
                                                            <i class="fa fa-star @if ($rs->rate>1) checked @endif"></i>
                                                            <i class="fa fa-star @if ($rs->rate>2) checked @endif"></i>
                                                            <i class="fa fa-star @if ($rs->rate>3) checked @endif"></i>
                                                            <i class="fa fa-star @if ($rs->rate>4) checked @endif"></i>

                                                    </div>
                                                </li>
                                            </ul>
                                            @endforeach
                                                <div class="comment-post">
                                                    @include('home.message')
                                                    <h4>Leave a comment</h4>
                                                    <form action="{{route('sendreview',['id'=>$data->id,'slug'=>$data->slug])}}" method="post" class="comment-form" name="review-form">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="span8">
                                                                <label>Subject <span>*</span></label>
                                                                <input type="text" name="subject" id="subject" class="input-block-level" placeholder="Your subject" />
                                                            </div>
                                                            <div class="span8">
                                                                <label>Review <span>*</span></label>
                                                                <textarea rows="9" name="review" id="review" class="input-block-level" placeholder="Your comment"></textarea>

                                                            </div>
                                                        </div>
                                                        <div class="rate">
                                                            <input type="radio" name="rate" id="star5"  value="5" />
                                                            <label for="star5" title="text">5 stars</label>
                                                            <input type="radio" name="rate" id="star4"  value="4" />
                                                            <label for="star4" title="text">4 stars</label>
                                                            <input type="radio" name="rate" id="star3"  value="3" />
                                                            <label for="star3" title="text">3 stars</label>
                                                            <input type="radio" name="rate" id="star2"  value="2" />
                                                            <label for="star2" title="text">2 stars</label>
                                                            <input type="radio" name="rate" id="star1"  value="1" />
                                                            <label for="star1" title="text">1 star</label>
                                                        </div>
                                                        @auth
                                                            <button class="btn btn-theme" type="submit">Submit review</button>
                                                        @else
                                                            <a href="/login" class="btn btn-theme">For submit please Login</a>
                                                        @endauth
                                                    </form>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end tab -->
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
                                            <li>

                                                <i class="fa fa-star @if ($avgrev>0) checked @endif"></i>
                                                <i class="fa fa-star @if ($avgrev>1) checked @endif"></i>
                                                <i class="fa fa-star @if ($avgrev>2) checked @endif"></i>
                                                <i class="fa fa-star @if ($avgrev>3) checked @endif"></i>
                                                <i class="fa fa-star @if ($avgrev>4) checked @endif"></i>

                                            </li>
                                            <li><a href="#two">{{$countreview}} Review(s) {{$avgrev}} / Add Review</a></li>

                                            <li>
                                                @include('home.message')
                                                <form action="{{route('like',['id'=>$data->id,'slug'=>$data->slug])}}" method="post"  name="like-form">
                                                    @csrf

                                                    @auth
                                                    <button type="submit" class="btn btn-primary btn-large e_flip"  name="like" value="Submit">LIKE!</button>
                                                    @else
                                                    <a href="/login" class="btn-theme">FOR SUBMIT LOGIN</a> / <a href="/login" class="btn-theme">FOR SUBMIT REGISTER</a>
                                                    @endauth
                                                </form>
                                                <p><strong>{{$countlike}}</strong> people liked this place!</p>

                                            </li>



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
