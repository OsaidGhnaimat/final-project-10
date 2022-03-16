@extends('public/layout/master')
@section('content')

        <!-- Service Start -->
        <div class="col-11 m-auto">
        <div class="service mt-125 ">
        <div class="container-service">
            <div class="row">
                <div class="col-2 d-flex flex-column p-5 category-list">
                    <ul>
                                                
                        @foreach ($categories as $category)
                            <li class="category-name"><a href="">{{ $category->category_name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-10 d-flex flex-wrap">
                    @foreach ($categories as $category)

                    <div class="col-lg-4 col-md-6 px-6 ">
                        <a href="{{route('public.sub-service',$category->id)}}">
                        <div class="team-item ">
                        
                                <div class="product-card">
                                    <div class="product-tumb">
                                        <img src="{{asset($category->category_img)}}" alt="image">
                                    </div>
                                    <div class="product-details">
                                        <h4>{{ $category->category_name }}</h4>
                                        
                                        
                                </div>
                               
                                 


                            </div>
                        </div>
                    </a>
                    </div>

                    @endforeach

            </div>
                </div>
            </div>
        </div>
        </div>


    </div>

@endsection