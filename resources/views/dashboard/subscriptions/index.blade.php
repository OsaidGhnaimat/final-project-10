@extends('dashboard/layout/master')
@section('content')
	

<div class="main-panel">
	<div class="content-wrapper">
	  <div class="row">
		
		
		<div class="col-lg-12 grid-margin stretch-card">
		  <div class="card">
			<div class="card-body">
			  <h4 class="card-title">Manage Subscription</h4>
				<a href="{{route('subscription.create')}}"> 
				<button class="btn btn-outline-success btn-fw">
					Add Subscription
			  </button>
			</a>
			  <div class="table-responsive">
				<table class="table table-striped">
				  <thead>
					<tr>
					  <th>#</th>
					  <th>Subscription Type</th>
					  <th>User Id</th>
					  <th>Consultation Id</th>
					  <th>Total Price</th>
					  <th>Date</th>
					  <th>Setting</th>
					</tr>
				  </thead>
				  <tbody>
					  @foreach ($subscriptions as $subscription)
						  
					<tr>
					  <td>
							{{$subscription->id}}
					  </td>
					  
					  <td>
						{{$subscription->type}}
					  </td>
					  <td>
						{{$subscription->user_id}}
					  </td>
					  <td>
						{{$subscription->consultation_id}}
					  </td>
					  <td>
						{{$subscription->total_price}}
					  </td>
					  <td>
						{{$subscription->created_at}}
					  </td>
					  <td>
					

						<form action="{{route('subscription.destroy',$subscription->id)}}" method="post">
							<a href="{{route('subscription.edit',$subscription->id)}}" data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="mdi mdi-lead-pencil iconStyle iconE"></i></a>
								@csrf
								@method('Delete')
							<button data-toggle="tooltip" title="Trash" class="trashIcon"><i class="mdi mdi-delete-forever iconStyle iconeD"></i></button>
							</form>
					  </td>
					</tr>

					@endforeach

				  </tbody>
				</table>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>



@endsection
