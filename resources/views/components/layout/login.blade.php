<!-- Login Pop-up -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
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
                                    <h2>Welcome Back!</h2>
                                    <p>Login to your account by entering the following details</p>
                                </div>

                                <div class="form-wrapper">
                                    <div id="invalid_login_data" class="error" style="display:none">Invalid email / phone number or password</div>
                                    <div id="success_register" class="success" style="display:none">Registered successfully, now you can login here</div>
                                    <form action="{{route('login')}}" class="form-common" id="login_form" method="POST" >
                                        @csrf
                                        <div class="row gy-3 gx-2">
                                            <div class="col-md-12">
                                                <div class="input-group flex-nowrap">
                                                    <span class="input-group-text" id="email-wrapping">
                                                        <img src="{{ asset('images/user-icon.svg') }}" class="img-fluid" alt="Essay Help" title="Essay Help"
                                                            width="24" height="24">
                                                    </span>
                                                    <input type="text" class="form-control" placeholder="Enter your email / phone number"
                                                        aria-label="Enter your email / phone number" aria-describedby="email-wrapping" name="email" onkeyup="error_form('invalid_login_data','success_register')">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-group flex-nowrap">
                                                    <span class="input-group-text" id="password-wrapping">
                                                        <img src="{{ asset('images/lock-icon.svg') }}" class="img-fluid" alt="Essay Help" title="Essay Help"
                                                            width="24" height="24">
                                                    </span>
                                                    <input type="password" class="form-control" placeholder="Enter your password"
                                                        aria-label="Enter your password" aria-describedby="password-wrapping" name="password" onkeyup="error_form('invalid_login_data','success_register')">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary w-100">Login</button>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="text-center my-4 text-muted">OR</div>

                                    <div class="row gy-3 social-auth">
                                        <a href="#" class="btn btn-google w-100">Continue with Google</a>
                                        <a href="#" class="btn btn-facebook w-100">Continue with Facebook</a>
                                        <a href="#" class="btn btn-apple w-100">Continue with Apple</a>
                                    </div>

                                    <p class="text-center mt-4 mb-2">Don’t have an account? <a data-bs-toggle="modal" href="#signupModal"
                                            class="link">Signup</a></p>
                                    <p class="text-center mt-2 mb-0">Forget Password? <a data-bs-toggle="modal" href="#forgetPasswordModal"
                                            class="link">Reset Now</a></p>
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

                            <img src="{{ asset('images/graduate-girl-small.png') }}" class="img-fluid" alt="Essay Help" title="Essay Help"
                                width="312" height="679">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Login Pop-up -->
<style>
.error{
    color:red;
    padding:5px;
}
.success{
    color:green;
    padding:5px;
}
.form-common .input-group-text{
    height: 62px;
}
</style>
