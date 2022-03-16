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
							
							<form action="" class="form-booking">
								@csrf
								<h1 class="header-booking">To Subscribe</h1>

									<div class="container-input">
										<label class="container-radio">For Once
											<input type="radio"  name="radio" checked="checked">
											<span class="checkmark"></span>
										</label>
										
										<label class="container-radio">For A Month
											<input type="radio" name="radio">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="container-btn-booking text-center">
										<button type="submit" class="btn btn-booking "> Booking Now </button>
									</div>
							</form>

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

		{{-- <div class="hero-wrap" style="background-image: url('images/maldives-hotel-room-hd-wallpaper.jpg');">
      <div class="overlay">

      <div class="container">

	</div>
        <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">

          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index-2.html">Home</a></span> <span class="mr-2"><a href="rooms.html">Rooms</a></span> <span>Rooms Single</span></p>

            </div>
          </div>
        </div>

	</div>
    </div>


    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
          	<div class="row">
          		<div class="col-md-12 ftco-animate">
                <h1 class="mb-4 bread">Rooms Details</h1>
          			<div class="single-slider owl-carousel">

          				<div class="item">
          					<div class="room-img" style="background-image: url({{asset($consultation->consultation_img)}});"></div>
          				</div>
          			</div>
          		</div>
          		<div class="col-md-12 room-single mt-4 mb-5 ftco-animate">
          			<h2 class="mb-4">{{$consultation->consultation_name}}</h2>
    						<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
    						<div class="d-md-flex mt-5 mb-5">

    						</div>


    	     		</div>


                <div class="col-lg-8 bg-white">
                    <form action="" method="post"  class="booking-form" >
                        <div class="row">
                            @csrf

                            <input name="room_id" type="hidden" value="" class="form-control">
                            <input name="total_price" type="hidden" value="" class="form-control">


                            <div class="col-md d-flex py-md-4">
                                <div class="form-group align-self-stretch d-flex align-items-end">
                                    <div class="wrap align-self-stretch py-3 px-4">
                                        <label for="#">Check-in Date</label>


                                        <input type="date" name="checkin_date" class="form-control checkin_date_input " placeholder="Check-in date">

                                    </div>
                                </div>
                            </div>
                            <div class="col-md d-flex py-md-4">
                                <div class="form-group align-self-stretch d-flex align-items-end">
                                    <div class="wrap align-self-stretch py-3 px-4">
                                        <label for="#">Check-out Date</label>
                                        <input type="date" name="checkout_date" class="form-control checkout_date_input " placeholder="Check-out date">

                                    </div>
                                </div>
                            </div>

                            <div class="col-md d-flex">
                                <div class="form-group d-flex align-self-stretch">
                                    <button  type="submit" class="btn btn-primary py-5 py-md-3 px-4 align-self-stretch d-block check_room_btn"><span>book now </span></button>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>



          	</div>
          </div> <!-- .col-md-8 -->


          <div class="col-lg-4 sidebar ftco-animate pl-md-5">
            <div class="sidebar-box ftco-animate">
              <div class="categories">

                <h1 class="mb-4 bread">&nbsp;</h1>
                <h3>Categories</h3>
                <li><a href="http://127.0.0.1:8000/categories?public=1&category_id=1">King Room</a></li>
                <li><a href="http://127.0.0.1:8000/categories?public=1&category_id=2">Suite Room</a></li>
                <li><a href="http://127.0.0.1:8000/categories?public=1&category_id=3">Family Room</a></li>
                <li><a href="http://127.0.0.1:8000/categories?public=1&category_id=4">Deluxe Room</a></li>
                <li><a href="http://127.0.0.1:8000/categories?public=1&category_id=5">Luxury Room</a></li>
                <li><a href="http://127.0.0.1:8000/categories?public=1&category_id=6">Superior Room</a></li>
              </div>


            </div>



        </div>

        </div>
      </div> 

    </section>
	
	--}}

    @endsection
