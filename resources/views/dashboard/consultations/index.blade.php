@extends('dashboard/layout/master')
@section('content')
	

<div class="main-panel">
	<div class="content-wrapper">
	  <div class="row">
		
		
		<div class="col-lg-12 grid-margin stretch-card">
		  <div class="card">
			<div class="card-body">
			  <h4 class="card-title">Manage Consultations</h4>
				<a href="{{route('consultation.create')}}"> 
				<button class="btn btn-outline-success btn-fw">
					Add consultation
			  </button>
			</a>
			  <div class="table-responsive">
				<table class="table table-striped">
				  <thead>
					<tr>
					  <th>#</th>
					  <th>image</th>
					  <th>Name</th>
					  <th>Title</th>
					  <th>Description</th>
					  <th>Expert Name</th>
					  <th>Price per hour</th>
					  <th>Category Name</th>
					  <th>Date</th>
					  <th>Setting</th>
					</tr>
				  </thead>
				  <tbody>
					  @foreach ($consultations as $consultation)
						  
					<tr>
					  <td>
							{{$consultation->id}}
					  </td>
					  <td class="py-1">
						<img src="{{asset($consultation->consultation_img)}}" alt="image"/>
					  </td>
					  
					  <td>
						{{$consultation->consultation_name}}
					  </td>
					  <td>
						{{$consultation->title}}
					  </td>
					  <td>
						{{$consultation->description}}
					  </td>
					  <td>
						{{$consultation->expert->expert_name}}
					  </td>
					  <td>
						{{$consultation->price}}
					  </td>
					  <td>
						{{$consultation->category->category_name}}
					  </td>
					  <td>
						{{$consultation->created_at}}
					  </td>
					  <td>
					

						<form action="{{route('consultation.destroy',$consultation->id)}}" method="post">
							<a href="{{route('consultation.edit',$consultation->id)}}" data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="mdi mdi-lead-pencil iconStyle iconE"></i></a>

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
