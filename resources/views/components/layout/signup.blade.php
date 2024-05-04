<!-- Signup Pop-up -->
<?php 
use App\Models\CountriesModel as Countries;
$ip = request()->ip();
$response = Http::get("https://ipapi.co/".$ip."/json/");
$data = $response->json();

// Retrieve the country code from the response
$countryCode = isset($data['country_code_iso3']) ? $data['country_code_iso3'] : 'IND';
$countries = Countries::all();
?>
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-body p-0">
        <div class="row">
            <div class="col-md-6">
            <div class="signup-form">  
                <div class="d-flex justify-content-between px-3">
                <img src="{{ asset('images/sop-craft-logo.svg')}}" alt="Essay Help" title="Essay Help" width="150" height="22">
                <button type="button" class="btn-close d-md-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="form-main mt-4">
                <div class="form-head">                   
                    <h2>Sign Up</h2>
                    <p>Create your account by filling up your details</p>
                </div>

                <div class="form-wrapper">
                    <div id="invalid_signup_data" class="error" style="display:none">Email or phone number already exists</div>
                    <form action="{{route('signup')}}" class="form-common" id="signup_form" method="POST" >
                        @csrf
                        <div class="row gy-3 gx-2">
                            <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Enter your first name" aria-label="Enter your first name" name="first_name">
                            </div>
                            <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Enter your last name" aria-label="Enter your last name" name="last_name">
                            </div>
                            <div class="col-md-6">
                            <input type="email" class="form-control" placeholder="Enter your email" aria-label="Enter your email" name="email">
                            </div>
                            <div class="col-md-6">
                                <select class="form-control" style="width: 22%;float: left;margin-right: 5px;" name="country_code">
                                    @if(!empty($countries))
                                        @foreach ($countries as $country1)
                                            <option value="{{$country1->dial}}" @if($country1->iso3 == $countryCode) selected @endif> {{$country1->dial}}</option>
                                        @endforeach
                                    @endif
                                </slect>
                                <input type="tel" class="form-control" placeholder="Enter your phone number" aria-label="Enter your phone number" name="phone_number" style="width: 75%;float: left;">
                            </div>
                            <div class="col-md-12">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="password-wrapping">
                                        <img src="{{ asset('images/lock-icon.svg') }}" class="img-fluid" alt="Essay Help" title="Essay Help" width="24" height="24">
                                    </span>
                                    <input type="password" class="form-control" placeholder="Enter your password" aria-label="Enter your password" aria-describedby="password-wrapping" name="password" id="password">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="repassword-wrapping">
                                        <img src="{{ asset('images/lock-icon.svg') }}" class="img-fluid" alt="Essay Help" title="Essay Help" width="24" height="24">
                                    </span>
                                    <input type="password" class="form-control" placeholder="Re-enter your password" aria-label="Re-enter your password" aria-describedby="repassword-wrapping" name="confirm_password">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                            </div>
                        </div>
                    </form>

                    <div class="text-center my-4 text-muted">OR</div>

                    <div class="row gy-3 social-auth">
                        <a href="#" class="btn btn-google w-100">Continue with Google</a>
                        <a href="#" class="btn btn-facebook w-100">Continue with Facebook</a>
                        <a href="#" class="btn btn-apple w-100">Continue with Apple</a>
                    </div>

                    <p class="text-center mt-4 mb-0">Already have an account? <a data-bs-toggle="modal" href="#loginModal" class="link">Login</a></p>
                </div>
                </div>
            </div>
            </div>
            <div class="col-md-6 d-none d-md-block">
            <div class="popup-content">                
                <div class="pc-wrapper">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">Close</button>
                    <h2>Your Essay Help account</h2>
                    <ul class="tickmark-list">
                        <li>Access to online tutors 24/7</li>
                        <li>Organize and manage your tasks</li>
                        <li>Homework help in any subject</li>
                    </ul>
                </div>

                <img src="{{ asset('images/graduate-girl-small.png') }}" class="img-fluid" alt="Essay Help" title="Essay Help" width="312" height="679">
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>