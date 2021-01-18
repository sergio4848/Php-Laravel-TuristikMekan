<div>

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif

        <form wire:submit.prevent="store">
            @csrf
            <div class="row">
                <div class="span4">
                    <label>Subject<span>*</span></label>
                    <input type="text" wire:model="subject" class="input-block-level" placeholder="Subject" />
                    @error('subject')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="span8">
                    <label>Comment <span>*</span></label>
                    <textarea rows="9" wire:model="review" class="input-block-level" placeholder="Your review"></textarea>

                    @error('review')<span class="text-danger">{{$message}}</span>@enderror
                </div>
            </div>
            @error('rate') <span class="text-danger">{{$message}}</span>@enderror
            <div class="rate">
                <input type="radio" wire:model="rate" id="star5"  value="5" />
                <label for="star5" title="text">5 stars</label>
                <input type="radio" wire:model="rate" id="star4"  value="4" />
                <label for="star4" title="text">4 stars</label>
                <input type="radio" wire:model="rate" id="star3"  value="3" />
                <label for="star3" title="text">3 stars</label>
                <input type="radio" wire:model="rate" id="star2"  value="2" />
                <label for="star2" title="text">2 stars</label>
                <input type="radio" wire:model="rate" id="star1"  value="1" />
                <label for="star1" title="text">1 star</label>
            </div>

            <br>
            <br>
            @auth
            <button class="btn btn-theme" type="submit">Submit review</button>
            @else
            <a href="/login" class="btn-primary">For submit please Login</a>
            @endauth
        </form>
    <style>*{
            margin: 0;
            padding: 0;
        }
        .rate {
            float: left;
            height: 46px;
            padding: 0 10px;
        }
        .rate:not(:checked) > input {
            position:absolute;
            top:-9999px;
        }
        .rate:not(:checked) > label {
            float:right;
            width:1em;
            overflow:hidden;
            white-space:nowrap;
            cursor:pointer;
            font-size:30px;
            color:#ccc;
        }
        .rate:not(:checked) > label:before {
            content: '★ ';
        }
        .rate > input:checked ~ label {
            color: #ffc700;
        }
        .rate:not(:checked) > label:hover,
        .rate:not(:checked) > label:hover ~ label {
            color: #deb217;
        }
        .rate > input:checked + label:hover,
        .rate > input:checked + label:hover ~ label,
        .rate > input:checked ~ label:hover,
        .rate > input:checked ~ label:hover ~ label,
        .rate > label:hover ~ input:checked ~ label {
            color: #c59b08;
        }
    </style>


</div>


