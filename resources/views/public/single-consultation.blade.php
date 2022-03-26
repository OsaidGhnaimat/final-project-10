@extends('public/layout/master')

@section('content')


	<div class="col-10 m-auto">
		<div class=" mt-125 ">
			<div class="container-single">
				<div class="row">
					<div class="col-8 container-single">
						<div class="single-title">{{$consultation->title}}</div>
						<div><img src="{{asset($consultation->consultation_img)}}" class="single-img" alt=""></div>
						<div class="text-single-bold">About This Service</div>
						<div class="single-description ">{{$consultation->description}}</div>
						<div class="container-comment-single">
							<form action="{{route('public.storeComment')}}" method="POST" class="form-comment-single">
									@csrf
									<div class="row">
										{{-- <div class="col-sm-6">
											<div class="form-group">
												<input class="form-control" name="review_title" id="name" type="text"  placeholder="Enter Title">
											</div>
										</div> --}}
										<div class="col-10">
											<div class="form-group">
												<textarea class="form-control w-100" name="text" id="message" cols="20" rows="4"  placeholder="Enter your comment "></textarea>
											</div>
										</div>
									</div>
									<div class="form-group mt-3">
										<button type="submit" name="submit" class="btn-rest mb-5">Add comment</button>
									</div>

									<input type="hidden" name="consultation_id" value="{{$consultation->id}}">
									<input type="hidden" name="expert_id" value="{{$consultation->expert_id}}">
							</form>

				@if(!($comments->isEmpty()))
				<h3 class="my-5">Comments</h3>
					@foreach ($comments as $comment)
						<div class="body-comments col-10 d-flex p-3 mb-2">
							<div class="user-comment">
								@if ($comment->user->user_img == null)
								<img src="{{asset('./uploads/user2.png')}}" alt="No image"/>
								@else
								<img src="{{asset($comment->user->user_img)}}" alt="image"/>
								@endif
							</div>
							<div class="text-comment col-9 p-2">
								<p class="username-comment">{{$comment->user->user_name}}</p>
								<p class=" cl6 ">
									{{$comment->text}}
								</p>
								<p class="time-comment">{{$comment->created_at->format('d/m/Y H:i:s A')}}</p>
							</div>

							
						</div>
					@endforeach
                @endif

						</div>
					</div>

					<div class="col-4 expert-section">
						<div class="subscribers">
							<div class="info-booking text-center">
								<span class="buyers">Subscribers</span><span class=" num-buyers">25</span>
							</div>
						</div>
						<div class="container-form-booking">
							<h1 class="header-booking" id="head-book" >To Book Appointment</h1>
							<div class="container-btn-booking text-center">
								@if (Auth::check())
								<a href="{{route("public.toCheckOut", $consultation->id)}}" class="btn btn-booking "> Booking Now </a>
								@else
								<a href="{{route("login")}}" class="btn btn-booking "> Booking Now </a>

								@endif

							</div>
							{{-- <form action="" class="form-booking">
								@csrf
									{{-- <div class="container-input">
										<label class="container-radio">For Once
											<input type="radio"  name="radio" checked="checked">
											<span class="checkmark"></span>
										</label>
										
										<label class="container-radio">For A Month
											<input type="radio" name="radio">
											<span class="checkmark"></span>
										</label>
									</div>
									<p ></p> --}}
									
{{-- 
							</form> --}} 

						</div>
						<div class="expert-info-container">
							<h3>Service Owner</h3>
							<div class="expert-info">
								<div>
									<img src="{{asset($consultation->expert->expert_img)}}" alt="expert img">
								</div>
								<div>
									<h1 class="expert-name">{{$consultation->expert->expert_name}}</h1>
									<p>Joined Since {{$consultation->expert->created_at->format('d M y')}}</p>
								</div>
							</div>
							<p class="bio-expert">
								@if ($consultation->expert->bio !== null)
								<h3>About Expert</h3>
									<p class="bio-expert">{{$consultation->expert->bio}}</p>
								@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	{{-- <script>
		function mybook() {
			head = document.getElementById("head-book");
			form = document.getElementById("demo");
			if(form.style.display == "none"){
				form.style.display = "";
				head.innerHTML = "Enter your Number";
			}else {
				form.style.display = "none";
				head.innerHTML = "To Book Appointment";
			}
		}
		</script> --}}

    @endsection
