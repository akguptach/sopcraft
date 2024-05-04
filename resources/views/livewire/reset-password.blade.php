<div class="form-main mt-4">
    <div class="form-head">
        @if($formState == 'send-email')
            <h2>Reset Password!</h2>
            <p>Validate Your Identity to Get Reset Password Email</p>
        @endif
        @if($formState == 'verify-email')
            <h2>Email Verification!</h2>
            <p>Verify Your Email to Reset Your Password</p>
        @endif
        @if($formState == 'reset-password')
            <h2>Update Password!</h2>
            <p>Set a New Strong Password</p>
        @endif
        @if($formState == 'login-now')
            <h2>Password Updated!</h2>
            <p>Your Reset Your Password Successfully</p>
        @endif
    </div>
    <div class="form-wrapper">
        @if($formState == 'send-email')
            <form autocomplete="off" class="form-common" wire:submit="sendEmail">
                <div class="row gy-3 gx-2">
                    <div class="col-md-12">
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="email-wrapping">
                                <img src="{{ asset('images/user-icon.svg') }}" class="img-fluid" alt="Essay Help" title="Essay Help"
                                                            width="24" height="24">
                            </span>
                            <input type="text" class="form-control shadow-none" placeholder="Enter your registered email"
                                                        aria-label="Enter your registered email" aria-describedby="email-wrapping" wire:model="email">
                        </div>
                        @error('email')
                            <small class="text-danger">
                                <em>
                                    {{$message}}
                                </em>
                            </small>
                        @enderror
                        @if(session()->has('sending_email'))
                            <small class="text-success">
                                <em>
                                    {{session('sending_email')}}
                                </em>
                            </small>
                        @endif
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary w-100">
                            Send Verification Email
                        </button>
                    </div>
                </div>
            </form>
        @endif
        @if($formState == 'verify-email')
            <form autocomplete="off" class="form-common" wire:submit="verifyEmail">
                <div class="row gy-3 gx-2">
                    <div class="col-md-12">
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="email-wrapping">
                                <img src="{{ asset('images/user-icon.svg') }}" class="img-fluid" alt="Essay Help" title="Essay Help"
                                                            width="24" height="24">
                            </span>
                            <input type="text" class="form-control shadow-none" placeholder="Enter 6 digit verification code"
                                                        aria-label="Enter 6 digit verification code" aria-describedby="email-wrapping" wire:model="code">
                        </div>
                        @error('code')
                            <small class="text-danger">
                                <em>
                                    {{$message}}
                                </em>
                            </small>
                        @enderror
                        @if(session()->has('code_verfied'))
                            <small class="text-success">
                                <em>
                                    {{session('code_verfied')}}
                                </em>
                            </small>
                        @endif
                        @if(session()->has('invalid_code'))
                            <small class="text-danger">
                                <em>
                                    {{session('invalid_code')}}
                                </em>
                            </small>
                        @endif
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary w-100">
                            Verify
                        </button>
                    </div>
                </div>
            </form>
        @endif
        @if($formState == 'reset-password')
            <form autocomplete="off" class="form-common" wire:submit="resetPassword">
                <div class="row gy-3 gx-2">
                    <div class="col-md-12">
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="email-wrapping">
                                <img src="{{ asset('images/lock-icon.svg') }}" class="img-fluid" alt="Essay Help" title="Essay Help"
                                                            width="24" height="24">
                            </span>
                            <input type="password" class="form-control shadow-none" placeholder="Enter Your New Password"
                                                        aria-label="Enter Your New Password" aria-describedby="email-wrapping" wire:model="password">
                        </div>
                        @error('password')
                            <small class="text-danger">
                                <em>
                                    {{$message}}
                                </em>
                            </small>
                        @enderror
                        <div class="input-group flex-nowrap mt-3">
                            <span class="input-group-text" id="email-wrapping">
                                <img src="{{ asset('images/lock-icon.svg') }}" class="img-fluid" alt="Essay Help" title="Essay Help"
                                                            width="24" height="24">
                            </span>
                            <input type="password" class="form-control shadow-none" placeholder="Re-enter Your New Password"
                                                        aria-label="Re-enter Your New Password" aria-describedby="email-wrapping" wire:model="confirm_password">
                        </div>
                        @error('confirm_password')
                            <small class="text-danger">
                                <em>
                                    {{$message}}
                                </em>
                            </small>
                        @enderror
                        @if(session()->has('password_changed'))
                            <small class="text-success">
                                <em>
                                    {{session('password_changed')}}
                                </em>
                            </small>
                        @endif
                        @if(session()->has('password_confirmation_failed'))
                            <small class="text-danger">
                                <em>
                                    {{session('password_confirmation_failed')}}
                                </em>
                            </small>
                        @endif
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary w-100">
                            Reset Password
                        </button>
                    </div>
                </div>
            </form>
        @endif
        @if($formState == 'login-now')
            <div class="row gy-3 gx-2">
                <div class="col-md-12 text-center">
                    <h4 class="text-success">
                        <em>
                            “Your Password Updated Successfully, Now You Can Login”
                        </em>
                    </h4>
                </div>
                <div class="col-md-12">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" class="btn btn-primary w-100">
                            Login Now
                    </button>
                </div>
            </div>
        @endif
        <div class="text-center my-4 text-muted">OR</div>

        <div class="row gy-3 social-auth">
                                        <a href="#" class="btn btn-google w-100">Continue with Google</a>
                                        <a href="#" class="btn btn-facebook w-100">Continue with Facebook</a>
                                        <a href="#" class="btn btn-apple w-100">Continue with Apple</a>
                                    </div>

        <p class="text-center mt-4 mb-0">Don’t have an account? 
            <a data-bs-toggle="modal" href="#signupModal"
                                            class="link">Signup</a>
        </p>
        <p class="text-center mt-2 mb-0">Already Registered? 
            <a data-bs-toggle="modal" href="#loginModal"
                                            class="link">Login</a>
        </p>
    </div>
</div>