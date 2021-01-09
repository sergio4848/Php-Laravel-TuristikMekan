<div class="sidebar" data-color="orange">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
    <div class="logo">
        <a href="{{route('admin_home')}}" class="simple-text logo-mini">
            AYT
        </a>
        <a href="{{route('admin_home')}}" class="simple-text logo-normal">
            ADMIN YÖNETİCİ PANELİ
        </a>
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
            <li>
                <a href="{{route('admin_home')}}">
                    <i class="now-ui-icons design_app"></i>
                    <p>Ana Sayfa</p>
                </a>
            </li>
            <li>
                <a href="{{route('admin_category')}}">
                    <i class="now-ui-icons design_bullet-list-67"></i>
                    <p>Kategoriler</p>
                </a>
            </li>
            <li>
                <a href="{{route('admin_places')}}">
                    <i class="now-ui-icons location_map-big"></i>
                    <p>Mekanlar</p>
                </a>
            </li>
            <li>
                <a href="{{route('admin_message')}}">
                    <i class="now-ui-icons location_map-big"></i>
                    <p>İletişim Mesajları</p>
                </a>
            </li>
            <li>
                <a href="{{route('admin_setting')}}">
                    <i class="now-ui-icons loader_gear"></i>
                    <p>Ayarlar</p>
                </a>
            </li>

        </ul>
    </div>
</div>
