@foreach($children as $subcategory)
    <li class="dropdown">
        @if(count($subcategory->children))
            <li class="dropdown"><a href="#">{{$subcategory->title}}<i class="icon-angle-right"></i></a></li>
                <ul class="dropdown-menu sub-menu">
                   @include('home.categorytree',['children' => $subcategory->children])
                </ul>

        @else
            <li><a href="icons.html">{{$subcategory->title}}</a></li>

        @endif

    </li>

@endforeach
