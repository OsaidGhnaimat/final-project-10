@extends('dashboard/layout/master')

@section('content')
	
<div class="main-panel">        
	<div class="content-wrapper">
	  <div class="row">
		
		
		<div class="col-12 grid-margin stretch-card">
		  <div class="card">
			<div class="card-body">
			  <h4 class="card-title">Edit Subscription For User Id : {{$editSubscription->user_id}}</h4>
			  <form class="forms-sample" action="{{ route('subscription.update', $editSubscription->id) }}" method="POST" enctype="multipart/form-data" >
				@csrf
				{{-- <div class="form-group" style="width:300px;">
					<label for="type">Subscription Type</label>
					<select name="type" id="type" class="custom-select" value="{{ $editSubscription->type }}">
						<option value="monthly">Monthly</option>
						<option value="once">Once</option>
					</select>
				  </div> --}}
				  {{-- <div class="form-group" style="width:300px;">
					<label for="total_price">Total Price</label>
					<input type="number" class="form-control" id="total_price" name="total_price" placeholder="total_price" value="{{$editSubscription->total_price}}">
				  </div> --}}

				<input type="hidden" name="user_id" value="{{$editSubscription->user_id}}">
				<input type="hidden" name="consultation_id" value="{{$editSubscription->consultation_id}}">

				<input type="hidden" name="_method" value="PUT">
				<button type="submit" name="submit" class="btn btn-primary mr-2">Update</button>
			  </form>
			</div>
		  </div>
		</div>

	  </div>
	</div>


@endsection