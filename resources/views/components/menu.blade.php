<li class="nav-item">
    <a class="nav-link {{ (request()->is('why_us') ) ? 'active' : '' }}" aria-current="page" href="{{ route('why_us') }}">Why us?</a>
</li>
<li class="nav-item">
    <a class="nav-link {{ (request()->is('refer_friend') ) ? 'active' : '' }}" href="{{ route('refer_friend') }}">Refer a friend</a>
</li>
<li class="nav-item">
    <a class="nav-link {{ (request()->is('blog') ) ? 'active' : '' }}" href="{{route('blog')}}">Blogs</a>
</li>
<li class="nav-item">
    <a class="nav-link " data-bs-toggle="modal" href="#feedbackModal">Contact us</a>
</li>
<li class="nav-item">
    <a class="nav-link {{ (request()->is('faq') ) ? 'active' : '' }}" href="{{route('faq')}}">FAQ</a>
</li>