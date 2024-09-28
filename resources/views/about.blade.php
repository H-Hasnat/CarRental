@extends('layout1.layout')

@section('content')

    <!-- about section start -->
    <div class="about_section layout_padding">
        <div class="container">
            <div class="about_section_2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="image_iman"><img src="images/about-img.png" class="about_img"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="about_taital_box">
                            <div class="mb-4">
                            <a href="{{url()->previous()}}" class="btn btn-success mt-4">Back</a>

                            </div>
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
                        <div class="location_text"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span
                                    class="padding_left_15">demo@gmail.com</span></a></div>
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
@endsection
