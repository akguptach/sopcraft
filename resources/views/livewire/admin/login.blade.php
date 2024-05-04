<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="{{ route('admin') }}" class="h1">
                <img src="{{ asset('images/sop-craft-logo.webp') }}" alt="{{ env('APP_NAME') }} Logo">
            </a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form wire:submit="auth">
                <div class="input-group mt-3">
                    <input type="text" wire:model="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                @error('email')
                    <small class="text-danger">
                        <em>{{ $message }}</em>
                    </small>
                @enderror
                <div class="input-group mt-3">
                    <input type="password" wire:model="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                @error('password')
                    <small class="text-danger">
                        <em>{{ $message }}</em>
                    </small>
                @enderror
                @if (session()->has('incorrect_sop_admin_password'))
                    <small class="text-danger">
                        <em>{{ session('incorrect_sop_admin_password') }}</em>
                    </small>
                @endif
                <div class="row mt-3">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-block my-4">Sign In</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
