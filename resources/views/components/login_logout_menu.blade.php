@guest
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="modal" href="#loginModal" >Log in / Sign up</a>
    </li>
@endguest
@auth
    <x-account_drop/>
    <li class="nav-item">
        <a class="nav-link" href="{{route('logout')}}" >Logout</a>
    </li>
@endauth