@extends('public/layout/master')
@section('content')


        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="{{asset('public/img/carousel-1.jpg')}}" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Fastest Way to Achieve Success</h1>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus ut mollis mauris. Vivamus egestas eleifend dui ac consequat at lectus in malesuada
                            </p>
                            <div class="carousel-btn">
                                <a href="{{route('service')}}"><button class="home-btn">Our Services</button></a>
                                {{-- <a class="btn" href=""><i class="fa fa-link"></i>Get Started</a>
                                <a class="btn btn-play" data-toggle="modal" data-src="https://www.youtube.com/watch?v=dySCHZuTzqU" data-target="#videoModal"><i class="fa fa-play"></i>Watch Video</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="{{asset('public/img/carousel-2.jpg')}}" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Your Success Our Achievement</h1>
                            <p>
                                Morbi sagittis turpis id suscipit feugiat. Suspendisse eu augue urna. Morbi sagittis, orci sodales varius fermentum, tortor
                            </p>
                            <div class="carousel-btn">
                                <a href="{{route('service')}}"><button class="home-btn">Our Services</button></a>
                                {{-- <a class="btn" href=""><i class="fa fa-link"></i>Get Started</a>
                                <a class="btn btn-play" data-toggle="modal" data-src="https://www.youtube.com/watch?v=dySCHZuTzqU" data-target="#videoModal"><i class="fa fa-play"></i>Watch Video</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="{{asset('public/img/carousel-3.jpg')}}" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Your Business Our Effort</h1>
                            <p>
                                Sed ultrices, est eget feugiat accumsan, dui nibh egestas tortor, ut rhoncus nibh ligula euismod quam. Proin pellentesque odio
                            </p>
                            <div class="carousel-btn">
                                <a href="{{route('service')}}"><button class="home-btn">Our Services</button></a>
                                {{-- <a class="btn" href=""><i class="fa fa-link"></i>Get Started</a>
                                <a class="btn btn-play" data-toggle="modal" data-src="https://www.youtube.com/watch?v=dySCHZuTzqU" data-target="#videoModal"><i class="fa fa-play"></i>Watch Video</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Video Modal Start-->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Video Modal End -->
        
        
        <!-- Fact Start -->
        <div class="fact">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="fact-item">
                            <img src="img/icon-4.png" alt="Icon">
                            <h2>Qualified Team</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="fact-item">
                            <img src="img/icon-1.png" alt="Icon">
                            <h2>Individual Approach</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="fact-item">
                            <img src="img/icon-8.png" alt="Icon">
                            <h2>100% Success</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="fact-item">
                            <img src="img/icon-6.png" alt="Icon">
                            <h2>100% Satisfaction</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact Start -->
        

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="about-img">
                            <div class="about-img-1">
                                <img src="img/about-2.jpg" alt="Image">
                            </div>
                            <div class="about-img-2">
                                <img src="img/about-1.jpg" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="section-header">
                            <p>Learn About Us</p>
                            <h2>25 Years Experience</h2>
                        </div>
                        <div class="about-text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                            </p>
                            <a class="btn" href="">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header">
                    <p>Consulting Services</p>
                    <h2>Our Best Consulting Services</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="img/icon-1.png" alt="Icon">
                            <h3>Business Strategy</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium ornare velit non
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="img/icon-2.png" alt="Icon">
                            <h3>Project Management</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium ornare velit non
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="img/icon-3.png" alt="Icon">
                            <h3>Market Research</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium ornare velit non
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="img/icon-4.png" alt="Icon">
                            <h3>Human Resource</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium ornare velit non
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="img/icon-5.png" alt="Icon">
                            <h3>Online Business</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium ornare velit non
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="img/icon-6.png" alt="Icon">
                            <h3>Capital Management</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium ornare velit non
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="img/icon-7.png" alt="Icon">
                            <h3>Business Insurance</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium ornare velit non
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="img/icon-8.png" alt="Icon">
                            <h3>Online Marketing</h3>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium ornare velit non
                            </p>
                            {{-- <a href="">Read More</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Feature Start -->
        <div class="feature">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-md-6">
                        <div class="feature-img">
                            <img src="img/mypic.png" alt="Image">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="section-header">
                            <p>Our Feature</p>
                            <h2>Why Choose Us?</h2>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus 
                        </p>
                        <div class="row counters">
                            <div class="col-6">
                                <i class="fa fa-user"></i>
                                <div class="counters-text">
                                    <h2 data-toggle="counter-up">{{$countExpert}}</h2>
                                    <p>Our Staffs</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <i class="fa fa-users"></i>
                                <div class="counters-text">
                                    <h2 data-toggle="counter-up">{{$countUser}}</h2>
                                    <p>Our Clients</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <i class="fa fa-check"></i>
                                <div class="counters-text">
                                    <h2 data-toggle="counter-up">{{$countSubscription}}</h2>
                                    <p>Subscriptions</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <i class="fa fa-running"></i>
                                <div class="counters-text">
                                    <h2 data-toggle="counter-up">{{$countConsultation}}</h2>
                                    <p>Consultations available</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->
        
        
        <!-- Testimonial Start -->
        <div class="testimonial">
            <div class="container">
                <div class="section-header">
                    <p>Testimonial Carousel</p>
                    <h2>100% Positive Customer Reviews</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <img src="img/testimonial-1.jpg" alt="Image">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut mollis mauris. Vivamus egestas eleifend dui ac consequat
                        </p>
                        <h2>Client Name</h2>
                        <h3>Profession</h3>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/testimonial-2.jpg" alt="Image">
                        <p>
                            Phasellus pellentesque tempus pretium. Quisque in enim sit amet purus venenatis porttitor sed non velit. Vivamus vehicula finibus
                        </p>
                        <h2>Client Name</h2>
                        <h3>Profession</h3>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/testimonial-3.jpg" alt="Image">
                        <p>
                            Sed in lectus eu eros tincidunt cursus. Aliquam eleifend velit nisl. Sed et posuere urna, ut vestibulum massa. Integer quis magna
                        </p>
                        <h2>Client Name</h2>
                        <h3>Profession</h3>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/testimonial-4.jpg" alt="Image">
                        <p>
                            Sed in lectus eu eros tincidunt cursus. Aliquam eleifend velit nisl. Sed et posuere urna, ut vestibulum massa. Integer quis magna
                        </p>
                        <h2>Client Name</h2>
                        <h3>Profession</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header">
                    <p>Meet Our Advisors</p>
                    <h2>Our Professional Consulting Team</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-1.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Donald John</h2>
                                <p>Founder & CEO</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-2.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Adam Phillips</h2>
                                <p>Chef Executive</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-3.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Thomas Olsen</h2>
                                <p>Chef Advisor</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-4.jpg" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>James Alien</h2>
                                <p>Advisor</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
        
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header">
                    <p>Get In Touch</p>
                    <h2>Get In Touch For Any Query</h2>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Our Head Office</h3>
                                <p>123 Street, Al-Salt, Jordan</p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Call for Help</h3>
                                <p>0777748150</p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Email for Information</h3>
                                <p>osaid.ghnaimat@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="contact-form">
                            <div id="success"></div>
                            <form action="{{route('contact.store')}}" method="POST"  >
                                @csrf
                                <div class="control-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required="required"/>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="required"  />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="required" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" id="message" name="message" placeholder="Message" required="required" ></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <button class="btn" type="submit" >Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header">
                    <p>Consulting </p>
                    <h2>Latest Feedback From Our Consulting </h2>
                </div>
                <div class="owl-carousel blog-carousel">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-1.jpg" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <h2 class="blog-title">Lorem ipsum dolor sit amet</h2>
                            <div class="blog-meta">
                                <i class="fa fa-list-alt"></i>
                                <i class="text-secondary">Marketing</i>
                                <i class="fa fa-calendar-alt"></i>
                                <p>01-Jan-2022</p>
                            </div>
                            <div class="blog-text">
                                <p>
                                    Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor. Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-2.jpg" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <h2 class="blog-title">Lorem ipsum dolor sit amet</h2>
                            <div class="blog-meta">
                                <i class="fa fa-list-alt"></i>
                                <i class="text-secondary">Human Resource</i>
                                <i class="fa fa-calendar-alt"></i>
                                <p>01-Jan-2020</p>
                            </div>
                            <div class="blog-text">
                                <p>
                                    Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor. Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="img/blog-3.jpg" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <h2 class="blog-title">Lorem ipsum dolor sit amet</h2>
                            <div class="blog-meta">
                                <i class="fa fa-list-alt"></i>
                                <i class="text-secondary">Business Strategy</i>
                                <i class="fa fa-calendar-alt"></i>
                                <p>01-Jan-2018</p>
                            </div>
                            <div class="blog-text">
                                <p>
                                    Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor. Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->


      


@endsection
