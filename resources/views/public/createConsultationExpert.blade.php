
			@extends('public/layout/master')
			@section('content')
					<!-- Fact Start -->
					
						  <div class="">
							
							
							<div class="  col-10 m-auto">
							  <div class="card container-expert-edit-cons">
								<div class="card-body ">
								  <h4 class="card-title head-expert-edit-cons">Edit consultation</h4>
								  <form class="forms-sample" action="{{ route('consultation.store') }}" method="POST" enctype="multipart/form-data" >
									@csrf
									<div class="form-group">
									  <label for="consultation_name">Consutation Name</label>
									  <input type="text" class="form-control" id="consultation_name" name="consultation_name" placeholder="consutation_name">
									</div>
									<div class="form-group">
									  <label for="title">Title</label>
									  <input type="text" class="form-control" id="title" name="title" placeholder="Title">
									</div>
									<div class="form-group">
									  <label for="password">Description</label>
									  <textarea type="text" class="form-control" id="description" name="description" placeholder="description"> </textarea>
									</div>
					
										<div class="form-group" style="width:200px;" >
										<label for="category_id">Category</label>
										<select name="category_id" id="category_id" class="custom-select">
											@foreach ($categories as $category)
												<option value="{{$category->id}}">{{$category->category_name}}</option>
											@endforeach
										</select>
									  </div>
									  <div class="form-group">
										<label for="price">Price per hour</label>
										<input type="text" class="form-control" id="price" name="price" placeholder="price">
									  </div>
									  <input type="hidden" name="expert_id" value="{{$expert->id}}">
					
									  <div class="form-group">
										<label>Consultation Image</label>
										<input type="file" name="consultation_img" class="file-upload-default">
										
									</div>
									
									<button type="submit" name="submit" class="btn btn-primary mr-2">Add</button>
								  </form>
								</div>
							  </div>
							</div>
					
			
			
			@endsection
		