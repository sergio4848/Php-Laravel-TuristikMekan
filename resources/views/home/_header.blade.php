<header>
    <!-- Navbar
  ================================================== -->
    <div class="navbar navbar-static-top">

            <div class="container">
                <!-- logo -->
                <div class="logo">
                    <a href="index.html"><img src="{{asset('assets')}}/img/logo.png" alt="" /></a>
                </div>
                <!-- end logo -->
                    <br><br>
                <!-- top menu -->
                @php
                    $parentCategories=\App\Http\Controllers\HomeController::categoryList();
                @endphp
                <div class="navigation">
                    <nav>
                        <ul class="nav topnav" style="width: 1000px;">
                            <li class="active">
                                <a href="index.html"><i class="icon-home"></i> Ana Sayfa </a>
                            </li>



                                        @foreach($parentCategories as $rs)
                                            <li class="dropdown">
                                                <a href="#"><i class="icon-cog"></i> {{$rs->title}} <i class="icon-angle-down"></i></a>
                                                <ul class="dropdown-menu">

                                                    @if(count($rs->children))
                                                        @include('home.categorytree',['children'=>$rs->children])
                                                    @endif
                                                </ul>
                                            </li>
                                        @endforeach


                            <li>
                                <a href="contact.html"><i class="icon-envelope-alt"></i> Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- end menu -->

            </div>
        </div>

</header>
