@extends('public/layout/master')
@section('content')
        <!-- Fact Start -->
		<div class="main-panel">        
			<div class="content-wrapper">
			  <div class="row">
				
				
				<div class="col-6 mx-auto my-5">
				  <div class="card">
					<div class="card-body">
					  <h4 class="card-title">Login Expert</h4>
					  <form class="forms-sample" action="{{ route('expert.login') }}" method="POST" >
						@csrf
						<input type="hidden" name="role_id" value="3">
						
						<div class="form-group">
						  <label for="email">Email address</label>
						  <input type="email" class="form-control" id="email" name="email" placeholder="email">
						</div>
						<div class="form-group">
						  <label for="password">Password</label>
						  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
						</div>
						
						
						<button type="submit" name="submit" class="btn register-expert-btn mr-3">Login </button>
					  </form>
					</div>
				  </div>
				</div>
		
			  </div>
			</div>

@endsection