
        
@extends('public/layout/master')
@section('content')
        
        
        <!-- Fact Start -->
        <div class="col-12 m-auto">
			<div class="service mt-125 ">
				<div class="container-service">
					<div class="row">
			  			<div class="col-12 container-sub">

							<form action="{{route('public.subscriptionBooking')}}" method="POST" class="form-checkout">
								@csrf
								<div class="row-checkout">
								  <div class="col-50-checkout">
									
									  <div class="checkout-price alert"> Booking price : <span class="price-checkout">{{ $consultation->price }}</span></div>
									<h3>Payment</h3>
									<label for="fname"><i class="fa fa-user"></i> Full Name</label>
									<input type="text" id="fname" name="fname" placeholder="John M. Doe">
									<div class="err-mess-checkout">{{$errors->first('fname');}}</div>

									<label for="cardname">Name on Card</label>
									<input type="text" id="cardname" name="cardname" placeholder="John More Doe">
										<div class="err-mess-checkout">{{$errors->first('cardname');}}</div>
									<label for="cardnumber">Credit card number</label>
									<input type="text" id="cardnumber" name="cardnumber" placeholder="1111-2222-3333-4444">
										<div class="err-mess-checkout">{{$errors->first('cardnumber');}}</div>
									<label for="expmonth">Exp Month</label>
									<input type="text" id="expmonth" name="expmonth" placeholder="September">
										<div class="err-mess-checkout">{{$errors->first('expmonth');}}</div>
									<div class="row">
									  <div class="col-50-checkout">
										<label for="expyear">Exp Year</label>
										<input type="text" id="expyear" name="expyear" placeholder="2018">
										<div class="err-mess-checkout">{{$errors->first('expyear');}}</div>
									  </div>
									  <div class="col-50-checkout">
										<label for="cvv">CVV</label>
										<input type="text" id="cvv" name="cvv" placeholder="352">
										<div class="err-mess-checkout">{{$errors->first('cvv');}}</div>
									  </div>
									</div>
								  </div>
						
								</div>
								<input type="hidden" name="consultation_id" value="{{$consultation->id}}">
								<input type="hidden" name="user_id" value="{{Auth::user()->id}}">

								
								<button type="submit" value="" class="btn-checkout">Continue to checkout</button>
							  </form>
			  			</div>
			  		</div>
				</div>
            </div>
        </div>
		
        <!-- Testimonial End -->

@endsection


