
        @extends('public/layout/master')
        @section('content')
        
        <!-- Service Start -->
        <div class="service mt-125">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
        
        <!-- About Start -->
        <div class="about mt-125">
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


        @endsection
        