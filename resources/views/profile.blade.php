@extends('layout.app')
@section('content')
    <style>
        .form-control {
            font-size: 1rem;
            line-height: 2.5;
        }
    </style>
    <main>
        <section class="common-sec">
            <div class="container">
                <div class="row text-center">
                    <div class="col-sm-6 mx-auto">
			@if(session('profileupdatedsmessage'))
			<center>
				<div id="profileupdatedsmessage" class="alert alert-success " style="font-size: 15px;">
				    {{ session('profileupdatedsmessage') }}
				</div>
			      </center>
			      
			<script>
			setTimeout(function() {
			$('#profileupdatedsmessage').fadeOut(1000);
			}, 5000); 
			</script>
			@endif
                        <div class="order-summary os-theme my-5">
                            <h2>My Profile</h2>
                            <form action="{{ route('student.update.profile') }}" class="" id="update_profile" method="POST" enctype="multipart/form-data">
			@csrf
                                {{-- <input type="hidden" name="_token" value="" autocomplete="off"> --}}
                                <div class="row gy-3 gx-2">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-lg"
                                            placeholder="Enter your first name" name="first_name" value="{{ $profile->first_name }}">
                                    </div>
			      @error('first_name')
				<div class="text-danger" style="text-align: left; font-size: small;">{{ $message }}</div>
			      @enderror
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-lg"
                                            placeholder="Enter your last name" name="last_name" value="{{ $profile->last_name }}">
                                    </div>
			      @error('last_name')
				<div class="text-danger" style="text-align: left; font-size: small;">{{ $message }}</div>
			      @enderror
                                    <div class="col-md-12">
                                        <input type="email" class="form-control form-control-lg"
                                            placeholder="Enter your email" name="email" value="{{ $profile->email }}">
                                    </div>
			      @error('email')
				<div class="text-danger" style="text-align: left; font-size: small;">{{ $message }}</div>
			      @enderror
                                    <div class="col-md-12">
                                        <input type="tel" class="form-control form-control-lg"
                                            placeholder="Enter your phone number" name="phone_number" value="{{ $profile->phone_number }}">
                                    </div>
			      @error('phone_number')
				<div class="text-danger" style="text-align: left; font-size: small;">{{ $message }}</div>
			      @enderror
                                    <div class="col-md-12">
                                        <input type="file" class="form-control form-control-lg" name="profile_pic" accept="image/png, image/jpeg" value="{{ $profile->profile_pic }}">
                                    </div>
			      @error('profile_pic')
			      <div class="text-danger" style="text-align: left; font-size: small;">{{ $message }}</div>
			     @enderror
                                    {{-- @dd($profile->profile_pic) --}}
			     {{-- <img src="{{ asset($profile->profile_pic) }}" alt="Image"> --}}
			     <img src="{{ asset($profile->profile_pic) }}" alt="Image" style="width: 200px; height: 200px;">

                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary w-100">Update</button>
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
