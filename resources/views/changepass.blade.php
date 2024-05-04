@extends('layout.app')
@section('content')
    <main>
        <section class="common-sec">
            <div class="container">
                <div class="row text-center">
                    <div class="col-sm-6 mx-auto">

			@if(session('changepassmessage'))
			<center>
			    <div id="changepassmessage" class="alert alert-success" style="font-size: 15px;">
			        {{ session('changepassmessage') }}
			    </div>
			</center>
			<script>
			setTimeout(function() {
				window.location.href = "{{ route('logout') }}";
			}, 3000); // 10 seconds
			</script>
			@endif

                        <div class="order-summary os-theme my-5">
                            <h2>Change Password</h2>
                            <form action="{{ route('student.update.password') }}" class="form-common"  method="POST" id="signup_formwmm">
			@csrf
                                {{-- <input type="hidden" name="_token" value="" autocomplete="off"> --}}
                                <div class="row gy-3 gx-2">
                                    <div class="col-md-12">
                                        <input type="password" class="form-control" placeholder="Old Password"
                                            name="old_password" id="old_password">
                                    </div>
			      @error('old_password')
				<div class="text-danger" style="text-align: left; font-size: small;">{{ $message }}</div>
			      @enderror
                                    <div class="col-md-12">
                                        <input type="password" class="form-control" placeholder="New Password"
                                            name="password" id="password">
                                    </div>
			      @error('password')
				<div class="text-danger" style="text-align: left; font-size: small;">{{ $message }}</div>
			      @enderror
                                    <div class="col-md-12">
                                        <input type="password" class="form-control" placeholder="Confirm Password"
                                            name="password_confirmation" id="confirm_password">
				    <div id='message' style="text-align: left; font-size: small;"></div>
                                    </div>
			      @error('password_confirmation')
				<div class="text-danger" style="text-align: left; font-size: small;">{{ $message }}</div>
			       @enderror
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary w-100" id="submit_btnn">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
