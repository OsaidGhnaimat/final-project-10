@extends('dashboard/layout/master')

@section('content')
	
<div class="main-panel">        
	<div class="content-wrapper">
	  <div class="row">
		
		
		<div class="col-12 grid-margin stretch-card">
		  <div class="card">
			<div class="card-body">
			  <h4 class="card-title">Manage Expert</h4>
			  <form class="forms-sample" action="{{ route('expert.update', $editExpert->id) }}" method="POST" enctype="multipart/form-data" >
				@csrf
				<div class="form-group">
				  <label for="expert_name">Name</label>
				  <input type="text" class="form-control" id="expert_name" name="expert_name" placeholder="expert_name"
				  value="{{$editExpert->expert_name}}">
				</div>
				<div class="form-group">
				  <label for="email">Email address</label>
				  <input type="email" class="form-control" id="email" name="email" placeholder="email" required
				  value="{{$editExpert->email}}">
				</div>
				<div class="form-group">
				  <label for="password">Password</label>
				  <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
				</div>
				  <div class="form-group">
					<label for="bio">Bio</label>
					<textarea class="form-control" id="bio" name="bio" rows="4" maxlength="250">{{$editExpert->bio}}</textarea>
				  </div>
				  <div class="form-group">
					<label for="certifications">Certifications</label>
					<textarea class="form-control" id="certifications" name="certifications" rows="4" maxlength="250">{{$editExpert->certifications}}</textarea>
				  </div>
				  <div class="form-group">
					<label for="experience">Experience</label>
					<textarea class="form-control" id="experience" name="experience" rows="4" maxlength="250">{{$editExpert->experience}}</textarea>
				  </div>
				  <div class="form-group">
					<label for="price_per_hours">Price Per Hours</label>
					<input type="number" class="form-control" id="price_per_hours" name="price_per_hours" rows="4" required
					value="{{$editExpert->price_per_hours}}"> 
				  </div>
				  <div class="form-group">
					<label>Expert image</label>
					<input type="file" name="expert_img" class="file-upload-default">
					<div class="input-group col-xs-12">
						<input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
						<span class="input-group-append">
						<button class="file-upload-browse btn btn-primary" type="button">Upload</button>
						</span>
				  	</div>
				</div>
				<input type="hidden" name="_method" value="PUT">
				<button type="submit" name="submit" class="btn btn-primary mr-2">Update</button>
			  </form>
			</div>
		  </div>
		</div>

	  </div>
	</div>


@endsection