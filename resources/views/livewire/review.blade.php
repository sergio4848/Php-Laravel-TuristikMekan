<div>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif

    <form wire:submit.prevent="store" class="review-form">
        @csrf
        <div class="row">
            <div class="span4">
                <input wire:model="subject" type="text" class="input" placeholder="Subject" />
                @error('subject') <span class="text-danger">{{$message}}</span>
            </div>
            <div class="span4">

                <input wire:model="review" type="text" class="input" placeholder="Your review" />
                @error('review') <span class="text-danger">{{$message}}</span>
            </div>
            <div class="input-rating">
                @error('rate') <span class="text-danger">{{$message}}</span>
                <strong class="text-uppercase">Your Rating: </strong>
                <div class="stars">
                    <input type="radio" id="star5" wire:model="rate" value="5"/><label for="star5"></label>
                    <input type="radio" id="star4" wire:model="rate" value="4"/><label for="star4"></label>
                    <input type="radio" id="star3" wire:model="rate" value="3"/><label for="star3"></label>
                    <input type="radio" id="star2" wire:model="rate" value="2"/><label for="star2"></label>
                    <input type="radio" id="star1" wire:model="rate" value="1"/><label for="star1"></label>
                </div>
            </div>
            <div class="span8">
                @auth
                    <button class="btn btn-theme" type="submit" value="save">Submit comment</button>
                @else
                    <a href="/login" class="btn-primary">For submit review Login</a>
                @endauth

            </div>
        </div>
    </form>
</div>
