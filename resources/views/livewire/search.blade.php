<div>

    <input wire:model="search" list="mylist" class="search-form" type="text" name="search" placeholder="Search here.." style="height: 28px;"/>
    @if(!empty($query))
        <datalist id="mylist">
            @foreach($datalist as $rs)
                <option value="{{$rs->title}}">{{$rs->category->title}}</option>
            @endforeach
        </datalist>
    @endif
    <button class="btn btn-dark" type="submit">Search</button>


</div>
