<section id="subintro">
    <div class="container">
        <div class="row">
            <div class="span8">
                <ul class="breadcrumb">
                    <li><a href="{{route('home')}}"><i class="icon-home"></i></a><i class="icon-angle-right"></i>ANASAYFA</li>
                </ul>
            </div>
            <div class="span4">
                <div class="search">
                    <form action="{{route('getplace')}}" method="post" class="input-append">
                        @csrf
                        @livewire('search')
                        <button class="btn btn-dark" type="submit">Search</button>
                    </form>
                    @section('footerjs')
                    @livewireScripts
                    @endsection
                </div>
            </div>
        </div>
    </div>
</section>
