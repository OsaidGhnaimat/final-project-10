@extends('public/layout/master')
@section('content')
        <!-- Fact Start -->
		<div class="main-panel">        
			<div class="content-wrapper">
			  <div class="row">
				
				
				<div class="col-8 mx-auto my-5  grid-margin stretch-card">
				  <div class="card">
					<div class="card-body">
					  <h4 class="card-title-register-expert">Register Expert</h4>
						@if($errors->any())
							<div class="alert alert-danger text-center" role="alert">
								{{ $errors->first() }}
							</div>
						@endif
					  <form class="forms-sample" action="{{ route('storeRegisterExpert') }}" method="POST" value="{{ old('name') }}" enctype="multipart/form-data" >
						@csrf
						<input type="hidden" name="role_id" value="3">
						<div class="form-group">
						  <label for="expert_name">Name</label>
						  <input type="text" class="form-control" id="expert_name" name="expert_name" placeholder="expert_name" value="{{ old('name') }}">
						  {{-- <span class="text-danger">@error('expert_name'){{$message}}</span> --}}
						</div>
						<div class="form-group">
						  <label for="email">Email address</label>
						  <input type="email" class="form-control" id="email" name="email" placeholder="email" value="{{ old('name') }}">
						  {{-- <span class="text-danger">@error('email'){{$message}}</span> --}}
						</div>
						<div class="form-group">
						  <label for="password">Password</label>
						  <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="{{ old('name') }}">
						  {{-- <span class="text-danger">@error('password'){{$message}}</span> --}}
						</div>
						  <div class="form-group">
							<label for="bio">Bio</label>
							<textarea class="form-control" id="bio" name="bio" rows="4" maxlength="250" value="{{ old('name') }}"></textarea>
							{{-- <span class="text-danger">@error('bio'){{$message}}</span> --}}
						  </div>
						  <div class="form-group">
							<label for="certifications">Certifications</label>
							<textarea class="form-control" id="certifications" name="certifications" rows="4" maxlength="250" value="{{ old('name') }}"></textarea>
							{{-- <span class="text-danger">@error('certifications'){{$message}}</span> --}}
						  </div>
						  <div class="form-group">
							<label for="experience">Experience</label>
							<textarea class="form-control" id="experience" name="experience" rows="4" maxlength="250" value="{{ old('name') }}"></textarea>
						  </div>
						 
						  <div class="form-group">
							<label>Expert image</label>
							<input type="file" name="expert_img" class="file-upload-default" value="{{ old('name') }}">
							{{-- <span class="text-danger">@error('expert_img'){{$message}}</span> --}}

						</div>
						
						<button type="submit" name="submit" class="btn register-expert-btn mr-2">Add</button>
						<div class="already-login">I'm already registered as an expert? <a class="ling-register" href="{{ route('login') }}">{{ __('Login') }}</a> </div>
					  </form>
					</div>
				  </div>
				</div>
		
			  </div>
			</div>

@endsection