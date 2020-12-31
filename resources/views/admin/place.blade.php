@extends('layouts.admin')

@section('title','Mekanlar Listesi')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('admin_place_create')}}" style="position: absolute; right: 25px; background-color: #00bbff;" class="now-ui-icons ui-1_simple-add">Mekan Ekle</a>

                    <h5 class="title">Mekanlar</h5>

                    <p class="category">Mekanlar Listesini Görüntülemektesiniz.</p>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>Id</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>

                            </thead>


                            <tbody>
                            @foreach($datalist as $rs)
                            <tr>
                                <td>
                                    {{$rs->id}}
                                </td>
                                <td>
                                    {{$rs->category_id}}
                                </td>
                                <td>
                                    {{$rs->title}}
                                </td>
                                <td>
                                    @if($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" height="60" width="120" alt=""/>
                                    @endif

                                </td>
                                <td>
                                    {{$rs->status}}
                                </td>
                                <td>
                                    <a href="{{route('admin_place_edit',['id'=>$rs->id])}}">Edit</a>
                                </td>
                                <td>
                                    <a href="{{route('admin_place_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')">Delete</a>
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
</div>
@endsection
