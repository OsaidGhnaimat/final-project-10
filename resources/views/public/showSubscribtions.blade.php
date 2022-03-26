@extends('public/layout/master')
@section('content')

        <!-- Service Start -->
    <div class="container col-10 m-auto">

		{{-- {{        print_r($ids)		}} --}}
		@foreach ($ids as $sub )
			<h1>{{$sub->consultation->consultation_name}}</h1>
			<h1>{{$sub->consultation->price}}</h1>

		@endforeach


    </div>

@endsection