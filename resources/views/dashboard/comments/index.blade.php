@extends('dashboard/layout/master')
@section('content')
	

<div class="main-panel">
	<div class="content-wrapper">
	  <div class="row">
		
		
		<div class="col-lg-12 grid-margin stretch-card">
		  <div class="card">
			<div class="card-body">
			  <h4 class="card-title">Manage Comment</h4>
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
						Comment
					  </th>
					  <th>
					  	Commenter
					  </th>
					  <th>
						Consultation Name
					  </th>
					  <th>
					  	Consultant owner(Expert)
					  </th>
					  <th>
						Comment Date
					  </th>
					  <th>
						Setting
					  </th>
					</tr>
				  </thead>
				  <tbody>
					  @foreach ($comments as $comment)
						  
					<tr>
					  <td >
						{{$comment->text}}
					  </td>
					  <td>
						{{$comment->user_id == '' ? $comment->expert->expert_name .' (expert)' : $comment->user->user_name }}
					  </td>
					  <th>
						{{$comment->consultation->consultation_name}}
					  </th>
					  <th>
						{{$comment->expert->expert_name}}
					  </th>
					  <th>
						{{$comment->created_at}}
					  </th>
					  <td>
						<form action="{{route('comment.destroy', $comment->id)}}" method="post">
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
