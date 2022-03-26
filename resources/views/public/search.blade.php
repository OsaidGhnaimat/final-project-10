@extends('public/layout/master')
@section('content')
        
        
        <!-- Fact Start -->
        <div class="col-12 m-auto">
			<div class="service mt-125 ">
				<div class="container-service">
					<div class="row">
			  			<div class="col-12 container-sub">

							@if($posts->isNotEmpty())
								@foreach ($posts as $post)
								<div class="sub-card">
									<img src="{{asset($post->consultation_img)}}" class="card-img-top sub-img" alt="...">
									<div class="card-body">
										<div class="expert-sub">
											<img src="{{asset($post->expert->expert_img)}}" alt="img">
											<h3 >{{$post->expert->expert_name}}</h3>
										</div>
									
									<h5 class="card-title">{{$post->consultation_name}}</h5>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<a href="{{ route('public.single-consultation', $post->id) }}" class="btn btn-sub">show more</a>
									</div>
								</div>
								@endforeach
									@else 
										<div>
											<h2>No posts found</h2>
										</div>
							@endif
			  			</div>
			  		</div>
				</div>
            </div>
        </div>
        <!-- Testimonial End -->

@endsection