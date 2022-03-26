@extends('dashboard/layout/master')

@section('content')
	
<div class="main-panel">        
	<div class="content-wrapper">
	  <div class="row">
		
		
		<div class="col-12 grid-margin stretch-card">
		  <div class="card">
			<div class="card-body">
			  <h4 class="card-title">Manage Subscription</h4>
			  <form class="forms-sample" action="{{ route('subscription.store') }}" method="POST" enctype="multipart/form-data" >
				@csrf
				{{-- <div class="form-group" style="width:300px;">
				  <label for="type">Subscription Type</label>
				  <select name="type" id="type" class="custom-select">
					  <option value="monthly">Monthly</option>
					  <option value="once">Once</option>
				  </select>

				</div> --}}
				<div class="form-group" style="width:300px;">
				  <label for="consultation_id">Consultation</label>
				  <select name="consultation_id" id="consultation_id" class="custom-select">
					@foreach ($consultations as $Consultation)
						<option value="{{$Consultation->id}}">{{$Consultation->consultation_name}}</option>
					@endforeach
				</select>				
			  </div>
				{{-- <div class="form-group" style="width:300px;">
				  <label for="total_price">Total Price</label>
				  <input type="number" class="form-control" id="total_price" name="total_price" placeholder="total_price">
				</div> --}}

				  <div class="form-group " style="width:300px;">
					<label for="user_id">User</label>
					<select name="user_id" id="user_id" class="custom-select">
						@foreach ($users as $user)
							<option value="{{$user->id}}">{{$user->user_name}}</option>
						@endforeach
					</select>
				  </div>
				
				<button type="submit" name="submit" class="btn btn-primary mr-2">Add</button>
			  </form>
			</div>
		  </div>
		</div>

	  </div>
	</div>


@endsection