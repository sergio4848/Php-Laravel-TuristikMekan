@extends('layouts.admin')

@section('title', 'Admin Panel Home Page')


@section('content')

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <img class="CSS_LIGHTBOX_SCALED_IMAGE_IMG" src="https://3.bp.blogspot.com/-Uc4GHvoZpo0/T5yqAtkll5I/AAAAAAAAAAM/sAmHjEWz_XE/s1600/welcome_1.gif" style="width: 1100px; height: 250px;">
                        <img style="-webkit-user-select: none;margin: auto;" src="https://lh3.googleusercontent.com/proxy/3XPUt1ZYGMuYkEKOeoF5OXdsmuwke5rb0R_GNXii3NM4ei2VC59GE8Kivf7OYMY1lr-HKWJ-K8S6NTkqM9hHlovx">
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('admin._content')


@endsection
