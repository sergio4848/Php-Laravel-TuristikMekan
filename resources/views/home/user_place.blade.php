@extends('layouts.home')

@section('title', 'User Places')
@include('home._header')
@section('content')
    <section id="subintro">
        <div class="container">
            <div class="row">
                <div class="span8">
                    <ul class="breadcrumb">
                        <li><a href="{{route('home')}}"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                        <li><a href="{{route('myprofile')}}">User Profile</a><i class="icon-angle-right"></i></li>
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


                        <h5 class="title">Mekanlar</h5>

                        <p class="category">Mekanlar Listesini Görüntülemektesiniz.</p>
                        <a href="{{route('user_place_create')}}"><img src="{{asset('assets/admin/images')}}/add.jpg" width="100"></a>

                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th><b>Id</b></th>
                                <th><b>Category</b></th>
                                <th><b>Title(s)</b></th>
                                <th><b>Image</b></th>
                                <th><b>Image Gallery</b></th>
                                <th><b>City</b></th>
                                <th><b>Status</b></th>
                                <th><b>Edit</b></th>
                                <th><b>Delete</b></th>

                                </thead>


                                <tbody>
                                @foreach($datalist as $rs)
                                    <tr>
                                        <td>
                                            {{$rs->id}}
                                        </td>
                                        <td>
                                            {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title) }}
                                        </td>
                                        <td>
                                            <a href="{{route('place',['id'=>$rs->id,'slug'=>$rs->slug])}}" target="_blank">{{$rs->title}}</a>
                                        </td>
                                        <td>
                                            @if($rs->image)
                                                <img src="{{Storage::url($rs->image)}}" height="60" width="120" alt=""/>
                                            @endif

                                        </td>
                                        <td><a href="{{route('user_image_add',['place_id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"><img src="{{asset('assets/admin/images')}}/gallery.png" style="height: 30px;"></a></td>
                                        <td>
                                            {{$rs->city}}
                                        </td>
                                        <td>
                                            {{$rs->status}}
                                        </td>
                                        <td>
                                            <a href="{{route('user_place_edit',['id'=>$rs->id])}}"><img src="{{asset('assets/admin/images')}}/edit.png" width="30"></a>
                                        </td>
                                        <td>
                                            <a href="{{route('user_place_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"><img src="{{asset('assets/admin/images')}}/delete.png" width="30"></a>
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

