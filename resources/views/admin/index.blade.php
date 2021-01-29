@extends('layouts.admin')

@section('title', 'Admin Panel Home Page')


@section('content')

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body" style="text-align: center">
                        <img class="CSS_LIGHTBOX_SCALED_IMAGE_IMG" src="https://3.bp.blogspot.com/-Uc4GHvoZpo0/T5yqAtkll5I/AAAAAAAAAAM/sAmHjEWz_XE/s1600/welcome_1.gif" style="width: 1100px; height: 250px;">
                        <iframe src="https://giphy.com/embed/aDOJuoE0QCu0tK4MYD" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/certus-oficial-administracion-ifb-certus-aDOJuoE0QCu0tK4MYD"></a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('admin._content')


@endsection
