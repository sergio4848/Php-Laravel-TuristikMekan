<section id="intro">

    <div class="container">
        <div class="row">
            <div class="span12">
                <!-- Place somewhere in the <body> of your page -->
                <div id="mainslider" class="flexslider">
                    <ul class="slides">
                        @php
                        $i=0;
                        @endphp

                        @foreach($slider as $rs)
                            @php
                            $i+=1;
                            @endphp
                            @php
                                $countreview=\App\Http\Controllers\HomeController::countreview($rs->id);
                                $countlike=\App\Http\Controllers\HomeController::countlike($rs->id);
                            @endphp
                        <li data-thumb="{{ Storage::url($rs->image) }}" class="@if($i==1) active @endif">
                            <img src="{{ Storage::url($rs->image) }}" style="height: 400px; width: 940px;" alt="" />
                            <div class="flex-caption primary">
                                <h2>{{$rs->title}}</h2>
                                <p><strong>{{$countlike}}</strong> kişi bu mekanı beğendi!</p>
                                <p><strong>{{$countreview}}</strong> tane yorum yapıldı!</p>
                                <div class="cta">
                                    <a class="btn btn-primary btn-large e_tada" href="{{route('place',['id' => $rs->id,'slug' => $rs->slug])}}">

                                        <i class="icon-plane icon-white"></i> Mekanı İncele! </a>
                                </div>
                            </div>
                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>

</section>
