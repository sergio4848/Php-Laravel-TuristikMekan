@extends('layouts.home')

@section('title', 'User Reviews')
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
                <div class="col-md-4">

                    <div class="widget">
                        <div class="project-widget">
                            <h4 class="rheading">Profil Detayları: {{Auth::user()->name}}<span></span></h4>
                            <ul class="project-detail">
                                <li><a href="{{route('userprofile')}}">Profilim</a></li>
                                <li><a href="{{route('user_places')}}">Mekanlarım</a></li>
                                <li><a href="{{route('user_like')}}">Favorilerim</a></li>
                                <li><a href="{{route('user_review')}}">Mesajlarım</a></li>
                                <li><a href="{{route('logout')}}">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>Id</th>
                                <th>Place</th>
                                <th>Subject</th>
                                <th>Review</th>
                                <th>Rate</th>
                                <th>Status</th>
                                <th>Date</th>

                                <th colspan="3">Actions</th>

                                </thead>


                                <tbody>
                                @include('home.message')
                                @foreach($datalist as $rs)
                                    <tr>
                                        <td>
                                            {{$rs->id}}
                                        </td>
                                        <td>
                                            <a href="{{route('place',['id'=>$rs->place->id,'slug'=>$rs->place->slug])}}" target="_blank">{{$rs->place->title}}</a>
                                        </td>
                                        <td>
                                            {{$rs->subject}}
                                        </td>
                                        <td>
                                            {{$rs->review}}
                                        </td>
                                        <td>
                                            {{$rs->rate}}
                                        </td>
                                        <td>
                                            {{$rs->status}}
                                        </td>
                                        <td>
                                            {{$rs->created_at}}
                                        </td>
                                        <td>
                                            <a href="{{route('admin_review_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"><img src="{{asset('assets/admin/images')}}/delete.png" style="width: 30px;"></a>
                                        </td>
                                    </tr>

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

