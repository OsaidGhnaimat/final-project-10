@extends('public/layout/master')
@section('content')
        <!-- Fact Start -->
		<div class=" col-6 sec-banner bg0 p-t-150 p-b-50">
			<div class="container m-auto justify-content-center ">
				<div class="row  m-auto justify-content-center ">
					
					@if ($user->user_img == null)
					<img src="{{asset('./uploads/user2.png')}}" class="userProfile-img" alt="No image"/>
					@else
					<img src="{{asset($user->user_img)}}" class="userProfile-img" alt="image"/>
					@endif
					
				</div>
				<div class="card mt-3 p-3 d-flex flex-column justify-content-center w-75 m-auto ">
					<h4 class=" mb-5">User Info</h4>
					@if($errors->any())
				<div class="alert alert-danger text-center" role="alert">
					{{ $errors->first() }}
				</div>
			  @endif
					<form action="{{route('userProfileUpdate',["id" => $user->id])}}" method="post" enctype="multipart/form-data">
						{{ csrf_field() }}
						{{ method_field('put') }}
						<div class=" mb-3  ">
							<div class="input-group-text " id="inputGroup-sizing-default ">Username</div>
							<input type="text" value="{{$user->user_name}}" name="user_name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
						</div>
						<div class=" mb-3  ">
							<span class="input-group-text" id="inputGroup-sizing-default">User Email</span>
							<input type="text" value="{{$user->email}}" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
						</div>
						<div class=" mb-3">
							<span class="input-group-text" id="password">New Password </span>
							<input type="password" value="" name="password" class="form-control" >
						</div>
						<!-- <div>
							<input type="file" id="myFile" name="filename">
						</div> -->
						<div class="mb-3">
								<label for="myFile" class="form-label head-photo">select photo</label>
								<input class="form-control inp-file inp-marg" type="file" id="myFile" name="user_img">
								
							</div> 
						<div class="form-actions form-group float-right w-25 ">
							<button type="submit" id="update_profile" class="btn btn-primary btn-sm w-100 p-2" name="update"> update</button>
						</div>
						<input type="hidden" name="role_id" value="1">
						{{-- <input type="hidden" name="_method" value="PUT"> --}}
					</form>
				</div>
			</div>
		</div>

		<div class="userProfile-subscriptions col-6">
			<div class="row  m-auto justify-content-center ">
				
			</div>

		</div>
		

@endsection