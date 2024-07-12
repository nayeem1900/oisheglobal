@extends('frontend.layout.master')
@include('frontend.layout.carousel')
<!-- Video Modal End -->
@section('content')

    <!-- Blog Start -->
    <div class="blog">
        <div class="container">
            <div class="section-header">
                <p></p>
                <h2>For Immigration & Visa </h2>
            </div>
            <div class="owl-carousel blog-carousel">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{asset('frontend/components/img/greece.jfif')}}" alt="Blog">
                    </div>

                </div>
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{asset('frontend/components/img/poland.png')}}" alt="Blog">
                    </div>
                    <p> </p>
                </div>
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{asset('frontend/components/img/paragua.jfif')}}" alt="Blog">
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->



    <!-- Fact Start -->
    {{--<div class="fact">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6">
                    <div class="fact-item">
                        <img src="{{asset('public/components/img/montigo.jpeg')}}" alt="Icon">
                        <h2>Qualified Team</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="fact-item">
                        <img src="{{asset('public/components/img/sweden.jpeg')}}" alt="Icon">
                        <h2>Individual Approach</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="fact-item">
                        <img src="{{asset('public/components/img/portugal.jpeg')}}" alt="Icon">
                        <h2>100% Success</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="fact-item">
                        <img src="{{asset('public/components/img/romaina.jpeg')}}" alt="Icon">
                        <h2>100% Satisfaction</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
    <!-- Fact Start -->


    <!-- About Start -->
    <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="about-img">
                        <div class="about-img-1">
                            <img src="{{asset('frontend/components/img/passenger.jpg')}}" alt="Image">
                        </div>
                        <div class="about-img-2">
                            <img src="{{('frontend/components/img/passenger1.jpeg')}}" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-header">
                        <p>Learn About Us</p>
                        <h2>Who We Are</h2>
                    </div>
                    <div class="about-text">
                        <p>
                            At OISHE GROUP, we are dedicated to bridging the gap between skilled workers and international opportunities. As a premier manpower export consulting firm, we specialize in providing comprehensive solutions to meet the labor needs of businesses worldwide.
                        </p>
                        <p>
                            Experience and successful Senior Consultant provide higher education, immigration, medical tourism. Our senior consultants are having 15-20 years experience in this field. Our consultants have travelled your dream destinations and they have visited your dream destination’s countries, school, colleges & universities. They saw all the facilities & the opportunities. Our consultants know how to put you right places. Some of our consultants studied from abroad & trained as certified consultant. We have internationally certified experience lawyer for immigration service. Once you have decided that you are comfortable with our assessment, we will provide you with a complete breakdown of all services from beginning to end.
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

                <h2>Our Best Consulting Services</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <img src="{{asset('frontend/components/img/work_p.png')}}" alt="Icon">
                        <h3>Work Permit</h3>
                        <p>

                        </p>
                        <a href=""></a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <img src="{{asset('frontend/components/img/construction.png')}}" alt="Icon">
                        <h3>Construction</h3>
                        <p>

                        </p>
                        <a href=""></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <img src="{{asset('frontend/components/img/welding.jpeg')}}" alt="Icon">
                        <h3>Welding</h3>
                        <p>

                        </p>
                        <a href=""></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <img src="{{asset('frontend/components/img/germents.jfif')}}" alt="Icon">
                        <h3>Germents</h3>
                        <p>

                        </p>
                        <a href=""></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <img src="{{asset('frontend/components/img/cleaner.jfif')}}" alt="Icon">
                        <h3>Cleaner</h3>
                        <p>

                        </p>
                        <a href=""></a>
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
                        <img src="{{asset('frontend/components/img/immegration.jfif')}}" alt="Image">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-header">

                        <h2>Why Choose Us?</h2>
                    </div>
                    <p>
                        At OISHE GLOBAL, our primary mission is to serve as your beacon during your transformative journey to abroad. With a decade of industry expertise, we simplify intricate immigration procedures. Our diverse team of seasoned lawyers from varied backgrounds is deeply committed to the success of your application. We pledge to deliver timely, clear, and reliable services, uniquely tailored to your needs. With each step, a dedicated expert will provide invaluable guidance. More than just ensuring successful applications, our goal is to nurture enduring bonds. As a testament to this, our connection endures even after your smooth transition to your new residence.
                    </p>
                    <div class="row counters">
                        <div class="col-6">
                            <i class="fa fa-user"></i>
                            <div class="counters-text">
                                <h2 data-toggle="counter-up">100</h2>
                                <p>Foreign passengers</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <i class="fa fa-users"></i>
                            <div class="counters-text">
                                <h2 data-toggle="counter-up">20</h2>
                                <p>Country skilled visa</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <i class="fa fa-check"></i>
                            <div class="counters-text">
                                <h2 data-toggle="counter-up">20</h2>
                                <p>Student Visa</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <i class="fa fa-running"></i>
                            <div class="counters-text">
                                <h2 data-toggle="counter-up">400</h2>
                                <p>Applicant Processing</p>
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

                <h2>Service We Provide</h2>
            </div>
            <div class="owl-carousel testimonials-carousel">
                <div class="testimonial-item">
                    <img src="{{asset('frontend/components/img/schooling_visa.jfif')}}" alt="Image">
                    <p>

                    </p>
                    <h2>Schooling Visa</h2>
                    <h3></h3>
                </div>
                <div class="testimonial-item">
                    <img src="{{asset('frontend/components/img/medical.jfif')}}" alt="Image">
                    <p>

                    </p>
                    <h2>Medical Tourism</h2>
                    <h3></h3>
                </div>
                <div class="testimonial-item">
                    <img src="{{asset('frontend/components/img/tourist.jfif')}}" alt="Image">
                    <p>

                    </p>
                    <h2>Business/Tourist Visa Consultancy</h2>
                    <h3></h3>
                </div>
                <div class="testimonial-item">
                    <img src="{{asset('frontend/components/img/worker.jfif')}}" alt="Image">
                    <p>

                    </p>
                    <h2>Visa Consultancy</h2>
                    <h3></h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Team Start -->
    <div class="team">
        <div class="container">
            <div class="section-header">

                <h2>For Immigration</h2>

            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">

                        <div class="team-text">
                            <h2>Montego</h2>
                            <div class="team-img">
                                <img src="{{asset('frontend/components/img/montigo.jpeg')}}" alt="Team Image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">


                        <div class="team-text">
                            <h2>Swedden</h2>
                            <div class="team-img">
                                <img src=" {{asset('frontend/components/img/sweden.jpeg')}}" alt="Team Image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">

                        <div class="team-text">
                            <h2>Portugal</h2>
                            <div class="team-img">
                                <img src="{{asset('frontend/components/img/portugal.jpeg')}}" alt="Team Image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">

                        <div class="team-text">
                            <h2>Romania</h2>
                            <div class="team-img">
                                <img src="{{asset('frontend/components/img/romaina.jpeg')}}" alt="Team Image">
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
                            <p>Flat NO : 101
                                House NO : 14 (Ground Floor)
                                Road NO : 6
                                Gulshan - 1
                            </p>
                        </div>
                    </div>
                    <div class="contact-info">
                        <div class="contact-icon">
                            <i class="fa fa-phone-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Contact NO</h3>
                            <p>01970574700</p>
                        </div>
                    </div>
                    <div class="contact-info">
                        <div class="contact-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Email for Information</h3>
                            <p>info@oisheglobal.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d29209.28848890149!2d90.3961979197541!3d23.77727833368789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sFlat%20NO%20%3A%20101%20House%20NO%20%3A%2014%20(Ground%20Floor)%20Road%20NO%20%3A%206%20Gulshan%20-%201!5e0!3m2!1sen!2sbd!4v1720208240879!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>


                {{--<div class="col-md-7">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>--}}
            </div>
        </div>
    </div>
    <!-- Contact End -->





    <!-- Footer Start -->
@endsection