@extends('layouts.admin')

@section('title', 'Admin Panel Home Page')


@section('content')

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <p style="font-size: 120px; text-align: center;">ADMIN PANELİNE HOŞ GELDİNİZ!</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('admin._content')


@endsection
