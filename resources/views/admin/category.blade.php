@extends('layouts.admin')

@section('title','Kategoriler Listesi')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Kategoriler</h5>
                    <p class="category">Kategoriler Listesini Görüntülemektesiniz.</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>Id</th>
                            <th>Parent</th>
                            <th>Title</th>
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
                                    {{$rs->parent_id}}
                                </td>
                                <td>
                                    {{$rs->title}}
                                </td>
                                <td>
                                    {{$rs->status}}
                                </td>
                                <td>
                                    Edit
                                </td>
                                <td>
                                    Delete
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
