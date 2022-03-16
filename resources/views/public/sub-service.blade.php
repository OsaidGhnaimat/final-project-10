
        @extends('public/layout/master')
        @section('content')
        


		<div class="col-12 m-auto">
			<div class="service mt-125 ">
			<div class="container-service">
				<div class="row">
			  <div class="col-12 container-sub">
						@foreach ($subServiceConsultation as $item)
							<div class="sub-card">
								<img src="{{asset($item->consultation_img)}}" class="card-img-top sub-img" alt="...">
								<div class="card-body">
									<div class="expert-sub">
										<img src="{{asset($item->expert->expert_img)}}" alt="img">
										<h3 >{{$item->expert->expert_name}}</h3>
									</div>
								
								<h5 class="card-title">{{$item->consultation_name}}</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="{{ route('public.single-consultation', $item->id) }}" class="btn btn-sub">show more</a>
								</div>
							</div>
			  			@endforeach
			  </div>

			  </div>
			</div>
		</div>
	</div>



        <!-- Service Start -->
        {{-- <div class="col-12 m-auto">
			<div class="service mt-125 ">
			<div class="container-service">
				<div class="row">
					<div class="col-10 d-flex flex-wrap">
						@foreach ($subServiceConsultation as $item)

						<div class="col-lg-3 col-md-6 px-6 ">
							<a href="{{asset('public/sub-service')}}">
							<div class="team-item ">
							
									<div class="product-card">
										<div class="product-tumb">
											<img src="{{asset($item->consultation_img)}}" alt="image">
										</div>
										<div class="product-details">
											<h4><a href="">{{$item->consultation_name}}</a></h4>
											
											
									</div>
								</div>
							</div>
							</a>
						</div>
						@endforeach
				</div>
					</div>
				</div>
			</div>
			</div> --}}


        @endsection
        