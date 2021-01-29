@extends('layouts.admin')

@section('title','Like List')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Likes</h5>

                    </div>


                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>Id</th>
                                <th>User</th>
                                <th>Place</th>
                                <th>Notifications</th>
                                <th>When</th>

                                </thead>


                                <tbody>

                                @foreach($datalist as $rs)
                                    @php
                                        $countlike=\App\Http\Controllers\HomeController::countlike($rs->id);
                                    @endphp
                                    <tr>
                                        <td>
                                            {{$rs->id}}
                                        </td>
                                        <td>
                                            <a href="{{route('admin_user_show',['id'=>$rs->user->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">{{$rs->user->name}}</a>
                                        </td>
                                        <td>
                                            <a href="{{route('place',['id'=>$rs->place->id,'slug'=>$rs->place->slug])}}" target="_blank">{{$rs->place->title}}</a>
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
    </div>

@endsection

