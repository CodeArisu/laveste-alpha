@push('styles')
    <link rel="stylesheet" href="{{ asset('css/adminpage/admin-navbar.css') }}">
@endpush

<div class='sidenav_container'>
    <div class='sidenav_contents'>
        <ul class='nav_contents'>
           <li class="nav_item">
                <a href="{{ route('homepage') }}">
                    <i class="fa-solid fa-house"></i>
                </a>
            </li>
           <li class="nav_item">
                <a href="">
                    <i class="fa-solid fa-box"></i>
                </a>
            </li>
           <li class="nav_item">
                <a href="">
                    <i class="fa-solid fa-box-archive"></i>
                </a>
            </li>
           <li class="nav_item">
                <a href="">
                    <i class="fa-solid fa-tags"></i>
                </a>
            </li>
           <li class="nav_item">
                <a href="">
                    <i class="fa-solid fa-handshake-angle"></i>
                </a>
            </li>
           <li class="nav_item">
                <a href="">
                    <i class="fa-solid fa-hand-holding-dollar"></i>
                </a>
            </li>
           <li class="nav_item">
                <a href="">
                    <i class="fa-solid fa-truck"></i>
                </a>
            </li>
           <li class="nav_item">
                <a href="">
                    <i class="fa-solid fa-user"></i>
                </a>
            </li>
        </ul>
    </div>
</div>