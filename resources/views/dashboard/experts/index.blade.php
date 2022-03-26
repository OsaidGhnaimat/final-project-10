@extends('dashboard/layout/master')
@section('content')
	

<div class="main-panel">
	<div class="content-wrapper">
	  <div class="row">
		
		
		<div class="col-lg-12 grid-margin stretch-card">
		  <div class="card">
			<div class="card-body">
			  <h4 class="card-title">Manage Expert</h4>
				<a href="{{route('expertd.create')}}"> 
				<button class="btn btn-outline-success btn-fw">
					Add User
			  </button>
			</a>
			  <div class="table-responsive">
				<table class="table table-striped">
				  <thead>
					<tr>
					  <th>
						#
					  </th>
					  <th>
						 name
					  </th>
					  <th>
						email
					  </th>
					  <th>
						bio
					  </th>
					  <th>
						certifications
					  </th>
					  <th>
						experience
					  </th>
					  {{-- <th>
						price_per_hours
					  </th> --}}
					  <th>
						SignUp Date
					  </th>
					  <th>
						Setting
					  </th>
					</tr>
				  </thead>
				  <tbody>
					  @foreach ($experts as $expert)
						  
					<tr>
					  <td class="py-1">
						<img src="{{asset($expert->expert_img)}}" alt="image"/>
					  </td>
					  <td>
						{{$expert->expert_name}}
					  </td>
					  <td>
						{{$expert->email}}
					  </td>
					  <td>
						{{$expert->bio}}
					  </td>
					  <td>
						{{$expert->certifications}}
					  </td>
					  <td>
						{{$expert->experience}}
					  </td>
					  {{-- <td>
						{{$expert->price_per_hours}}
					  </td> --}}
					  <td>
						{{$expert->created_at}}
					  </td>
					  <td>
						{{-- <div class="cont-icon">
							<a href="{{route('user.edit', $user->id)}}"><i class="mdi mdi-lead-pencil iconStyle iconE"></i></a>
						</div> --}}

						<form action="{{route('expertd.destroy',$expert->id)}}" method="post">
							<a href="{{route('expertd.edit',$expert->id)}}" data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="mdi mdi-lead-pencil iconStyle iconE"></i></a>

								@csrf
								@method('Delete')
							<button data-toggle="tooltip" title="Trash" class="trashIcon"><i class="mdi mdi-delete-forever iconStyle iconeD"></i></button>
							</form>


						{{-- <a href="{{route('user.destroy', $user->id)}}"><i class="mdi mdi-delete-forever iconStyle iconeD"></i></a> --}}

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
