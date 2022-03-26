
			@extends('public/layout/master')
			@section('content')
					<!-- Fact Start -->
					<div class="container-profil d-flex ">
			
					<div class=" col-6 sec-banner bg0 p-t-150 p-b-50">
						<div class="container m-auto justify-content-center ">
							<div class="row  m-auto justify-content-center ">
								@if ($expert->expert_img == null)
								<img src="{{asset('./uploads/user2.png')}}" class="userProfile-img" alt="No image"/>
								@else
								<img src="{{asset($expert->expert_img)}}" class="userProfile-img" alt="image"/>
								@endif
								
							</div>
							<div class="card mt-3 p-3 d-flex flex-column justify-content-center w-75 m-auto ">
								<h4 class=" mb-5">Expert Info</h4>
								@if($errors->any())
							<div class="alert alert-danger text-center" role="alert">
								{{ $errors->first() }}
							</div>
						  @endif
								<form class="form-profil-user" action="{{route('expertProfileUpdate',["id" => $expert->id])}}" method="post" enctype="multipart/form-data">
									{{ csrf_field() }}
									{{ method_field('put') }}
									<div class=" mb-3  ">
										<div class="input-group-text " id="inputGroup-sizing-default ">Expert Name</div>
										<input type="text" value="{{$expert->expert_name}}" name="expert_name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
									</div>
									<div class="form-group">
										<label class="input-group-text" for="bio">Bio</label>
										<textarea class="form-control"  id="bio" name="bio" rows="4" maxlength="250">{{$expert->bio}}</textarea>
									  </div>
									  <div class="form-group">
										<label class="input-group-text" for="certifications">Certifications</label>
										<textarea class="form-control" id="certifications" name="certifications" rows="4" maxlength="250">{{$expert->certifications}}</textarea>
									  </div>
									  <div class="form-group">
										<label class="input-group-text" for="experience">Experience</label>
										<textarea class="form-control" id="experience" name="experience" rows="4" maxlength="250">{{$expert->experience}}</textarea>
									  </div>
									<div class=" mb-3  ">
										<span class="input-group-text" id="inputGroup-sizing-default">Email Address</span>
										<input type="text" value="{{$expert->email}}" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
									</div>
									<div class=" mb-3">
										<span class="input-group-text" id="password">New Password </span>
										<input type="password" value="" name="password" class="form-control" >
									</div>
									<!-- <div>
										<input type="file" id="myFile" name="filename">
									</div> -->
									<div class="mb-3">
											<label for="myFile" class="form-label head-photo input-group-text">select photo</label>
											<input class="form-control inp-file inp-marg" type="file" id="myFile" name="user_img">
											
										</div> 
									<div class="form-actions form-group float-right w-25 ">
										<button type="submit" id="update_profile" class="btn btn-primary btn-sm w-100 p-2" name="update"> update</button>
									</div>

									{{-- <input type="hidden" name="_method" value="PUT"> --}}
								</form>
							</div>
						</div>
					</div>
					<div class="col-5 userProfile-subscriptions ">
						<div class="row">
							<div class=" div-btn-add d-flex  "><a href="{{route('expertCreateConsultation',$expert->id)}}"><button class="btn btn-success">Add New Consultation +</button></a><a href="{{route('specificConsultation',$expert->id)}}"><button class="btn btn-subscribtions">subscribtions</button></a></div>
							<h1 class="head-profil">My Consultations : </h1>
							@foreach ($consultations as $consultation)
								<div class="subscribtions-card d-flex">
									<img src="{{ asset($consultation->consultation_img) }}" alt="image">
									
									<div class="div-info-consult d-flex flex-column justify-content-center">
										<div><h3>{{ $consultation->consultation_name }}</h3></div>
										<div><p>Category : {{$consultation->category->category_name}}</p></div>
										<div><p> Date : {{ $consultation->created_at->format('d:m:y h:m') }}</p></div>
										<div class="d-flex justify-content-center "><a href="{{route('expertEditConsultation', $consultation->id)}}"><button class="btn btn-danger m-auto "> Edit</button></a></div>
										
									</div>
								</div>
							@endforeach
			
						</div>
			
					</div>
				</div>
			
			
			@endsection
		