@extends('layouts.home')

@section('title','User Like List')
@include('home._header')

@section('content')
    <section id="subintro">
        <div class="container">
            <div class="row">
                <div class="span8">
                    <ul class="breadcrumb">
                        <li><a href="{{route('home')}}"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                        <li><a href="{{route('userprofile')}}">User Profile</a><i class="icon-angle-right"></i></li>
                        <li class="active">{{Auth::user()->name}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="maincontent">
        <div class="container">
            <div class="row">
                <div class="col-md-3">

                    <div class="widget">
                        <div class="project-widget">
                            <h4 class="rheading">Profil Detayları: {{Auth::user()->name}}<span></span></h4>
                            <ul class="project-detail">
                                <li><a href="{{route('myprofile')}}">Profilim</a></li>
                                <li><a href="{{route('user_places')}}">Mekanlarım</a></li>
                                <li><a href="{{route('user_like')}}">Favorilerim</a></li>
                                <li><a href="{{route('user_review')}}">Mesajlarım</a></li>
                                <li><a href="{{route('logout')}}">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card-header">


                        <h5 class="title">Favorilerim</h5>

                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th colspan="2">Place</th>
                                <th>Notifications</th>
                                <th>When</th>

                                </thead>


                                <tbody>

                                @foreach($datalist as $rs)
                                    <tr>
                                        <td>
                                            <a href="{{route('place',['id'=>$rs->place->id,'slug'=>$rs->place->slug])}}" target="_blank">{{$rs->place->title}}</a>
                                        </td>
                                        <td>
                                            @if($rs->place->image)
                                                <img src="{{Storage::url($rs->place->image)}}" height="60" width="120" alt=""/>
                                            @endif
                                        </td>
                                        <td>
                                            Liked!
                                        </td>
                                        <td>
                                            {{$rs->created_at}}
                                        </td>

                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
