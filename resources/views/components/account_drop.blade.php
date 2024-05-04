<li class="nav-item dropdown user-dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <?= Auth::user()->first_name.' '.Auth::user()->last_name;?>
		<?php 

use App\Models\Website as Website_Model;

$website_id = env('WEBSITE_ID');

$website_arr = Website_Model::where('id',$website_id)->get()->toArray()[0];


?>
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink" style="z-index:9999">
        <li class="px-3 user-amount">
        <p class="mb-0">Wallet Amount: <span>{{ $website_arr['currency']}} 0</span></p>
        <p class="mb-0">Free Credit: <span>{{$website_arr['currency']}} 0</span></p>
        </li>
        <li><hr class="dropdown-divider mt-0"></li>
        <li><a class="dropdown-item fs-7" href="{{route('student.profile')}}"> <?= Auth::user()->email;?></a></li>
        <li><a class="dropdown-item fs-7" href="{{route('order.transactions')}}">View Transaction(s)</a></li>
        <li><a class="dropdown-item fs-7" href="{{route('student.profile')}}">My Profile</a></li>		<li><a class="dropdown-item fs-7" href="{{route('student.changepass')}}">Change Password</a></li>
        <li><a class="dropdown-item fs-7" href="{{route('order.refer_friend')}}">Refer A Friend</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item fs-7" href="{{route('logout')}}">Logout</a></li>
    </ul>
</li>  