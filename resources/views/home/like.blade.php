@extends('layouts.home')

@section('title','User Like List')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">My Favorite Places</h5>

                    </div>


                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>Place</th>
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

