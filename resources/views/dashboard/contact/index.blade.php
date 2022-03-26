@extends('dashboard/layout/master')
@section('content')
	

<div class="main-panel">
	<div class="content-wrapper">
	  <div class="row">
		
		
		<div class="col-lg-12 grid-margin stretch-card">
		  <div class="card">
			<div class="card-body">
			  <h4 class="card-title">Manage Contact</h4>
				{{-- <a href="{{route('comment.create')}}"> 
				<button class="btn btn-outline-success btn-fw">
					Add Comment
			  </button>
			</a> --}}
			  <div class="table-responsive">
				<table class="table table-striped">
				  <thead>
					<tr>
					  <th>
						Name
					  </th>
					  <th>
						Message
					  </th>
					  <th>
					  	Email
					  </th>
					  <th>
						Message Date
					  </th>
					  <th>
						Setting
					  </th>
					</tr>
				  </thead>
				  <tbody>
					  @foreach ($messages as $message)
						  
					<tr>
					  <td >
						{{$message->name}}
					  </td>
					  <td>
						{{$message->message}}
					  </td>
					  <th>
						{{$message->email}}
					  </th>
					  <th>
						{{$message->created_at}}
					  </th>
					  <td>
						<form action="{{route('contact.destroy', $message->id)}}" method="post">
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
