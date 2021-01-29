<section id="subintro">
    <div class="container">
        <div class="row">
            <div class="span4" style="padding-top: 30px;">
                @auth
                <a href="{{route('user_place_create')}}" class="btn btn-primary btn-large e_wobble">MEKAN EKLE</a>
                @else
                <a href="/login" class="btn btn-primary btn-large e_wobble">GİRİŞ</a>
                @endauth
                    <a href="{{route('allplacelist')}}" class="btn btn-primary btn-large e_pulse">KEŞFET</a>

            </div>
            <div class="span8">
                <div class="search">
                    <form action="{{route('getplace')}}" method="post" class="input-append">
                        @csrf
                        @livewire('search')

                    </form>
                    @section('footerjs')
                    @livewireScripts
                    @endsection
                </div>
            </div>
        </div>
    </div>
</section>
