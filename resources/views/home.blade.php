@extends('layout1.layout')
@section('content')
    <div class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">

                <a class="navbar-brand"href="{{ route('home') }}"><img id="img" src="images/logo.png"></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>

                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('rentalhistroy') }}">Rental Histroy</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                        </li>

                    </ul>

                    <li class="nav-item mx-auto">
                        <a class="nav-link" href="{{ route('login') }}"><button class="btn btn-success ">LogIn</button></a>
                    </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                    </form>
                </div>
            </nav>
        </div>
    </div>













    <!-- banner section start -->
    <div class="banner_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="banner_slider" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="banner_taital_main">
                                    <h1 class="banner_taital">Car Rent <br><span style="color: #fe5b29;">For You</span></h1>
                                    <p class="banner_text">There are many variations of passages of Lorem Ipsum available,
                                        but the majority</p>
                                    <div class="btn_main">
                                        <div class="contact_bt"><a href="#">Read More</a></div>
                                        <div class="contact_bt active"><a href="#">Contact Us</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="banner_taital_main">
                                    <h1 class="banner_taital">Car Rent <br><span style="color: #fe5b29;">For You</span></h1>
                                    <p class="banner_text">There are many variations of passages of Lorem Ipsum available,
                                        but the majority</p>
                                    <div class="btn_main">
                                        <div class="contact_bt"><a href="#">Read More</a></div>
                                        <div class="contact_bt active"><a href="#">Contact Us</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="banner_taital_main">
                                    <h1 class="banner_taital">Car Rent <br><span style="color: #fe5b29;">For You</span></h1>
                                    <p class="banner_text">There are many variations of passages of Lorem Ipsum available,
                                        but the majority</p>
                                    <div class="btn_main">
                                        <div class="contact_bt"><a href="#">Read More</a></div>
                                        <div class="contact_bt active"><a href="#">Contact Us</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#banner_slider" role="button" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="carousel-control-next" href="#banner_slider" role="button" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner_img"><img src="images/banner-img.png"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner section end -->


    <div class="text-center bg-secondary">
        <h1 class="text-light"><b>Car Section</b></h1>
        <div id="rentalCarouselsSlider" class="container">
            <!-- The dynamic carousel will be appended here -->


        </div>
        <script src="jscode/car-slider.js"></script>
    </div>


    <!-- about section start -->
    <div class="about_section layout_padding">
        <div class="container">
            <div class="about_section_2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="image_iman"><img src="" class="about_img"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="about_taital_box">
                            <h1 class="about_taital">About <span style="color: #fe5b29;">Us</span></h1>
                            <p class="about_text">going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the
                                Internet tend to repeat predefined going to use a passage of Lorem Ipsum, you need to be
                                sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum
                                generators on the Internet tend to repeat predefined </p>
                            <div class="readmore_btn"><a href="#">Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section end -->
    <!-- choose section start -->

    <div class="choose_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="choose_taital">WHY CHOOSE US</h1>
                </div>
            </div>
            <div class="choose_section_2">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="icon_1"><img src="images/icon-1.png"></div>
                        <h4 class="safety_text">SAFETY & SECURITY</h4>
                        <p class="ipsum_text">variations of passages of Lorem Ipsum available, but the majority have </p>
                    </div>
                    <div class="col-sm-4">
                        <div class="icon_1"><img src="images/icon-2.png"></div>
                        <h4 class="safety_text">Online Booking</h4>
                        <p class="ipsum_text">variations of passages of Lorem Ipsum available, but the majority have </p>
                    </div>
                    <div class="col-sm-4">
                        <div class="icon_1"><img src="images/icon-3.png"></div>
                        <h4 class="safety_text">Best Drivers</h4>
                        <p class="ipsum_text">variations of passages of Lorem Ipsum available, but the majority have </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- choose section end -->






    <!-- contact section start -->
    <div class="contact_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="contact_taital">Get In Touch</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="contact_section_2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mail_section_1">
                            <input type="text" class="mail_text" placeholder="Name" name="Name">
                            <input type="text" class="mail_text" placeholder="Email" name="Email">
                            <input type="text" class="mail_text" placeholder="Phone Number" name="Phone Number">
                            <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                            <div class="send_bt"><a href="#">Send</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact section end -->
    <!-- footer section start -->
    <div class="footer_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footeer_logo"><img src="images/logo.png"></div>
                </div>
            </div>
            <div class="footer_section_2">
                <div class="row">
                    <div class="col">
                        <h4 class="footer_taital">Subscribe Now</h4>
                        <p class="footer_text">There are many variations of passages of Lorem Ipsum available,</p>
                        <div class="form-group">
                            <textarea class="update_mail" placeholder="Enter Your Email" rows="5" id="comment" name="Enter Your Email"></textarea>
                            <div class="subscribe_bt"><a href="#">Subscribe</a></div>
                        </div>
                    </div>
                    <div class="col">
                        <h4 class="footer_taital">Information</h4>
                        <p class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the
                            majority </p>
                    </div>
                    <div class="col">
                        <h4 class="footer_taital">Helpful Links</h4>
                        <p class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the
                            majority </p>
                    </div>
                    <div class="col">
                        <h4 class="footer_taital">Invesments</h4>
                        <p class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the
                            majority </p>
                    </div>
                    <div class="col">
                        <h4 class="footer_taital">Contact Us</h4>
                        <div class="location_text"><a href="#"><i class="fa fa-map-marker"
                                    aria-hidden="true"></i><span class="padding_left_15">Location</span></a></div>
                        <div class="location_text"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span
                                    class="padding_left_15">(+71) 8522369417</span></a></div>
                        <div class="location_text"><a href="#"><i class="fa fa-envelope"
                                    aria-hidden="true"></i><span class="padding_left_15">demo@gmail.com</span></a></div>
                        <div class="social_icon">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p class="copyright_text">2023 All Rights Reserved. Design by <a href="https://html.design">Free Html
                            Templates</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a></p>
                </div>
            </div>
        </div>
    </div>





    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Ensure rentalCarousels script is loaded and initiated only after DOM is fully loaded
            const script = document.createElement('script');
            script.src = 'jscode/car-slider.js'; // The file that contains carousel logic
            document.body.appendChild(script);
        });
    </script>
@endsection
