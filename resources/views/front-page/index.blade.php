@extends('front-common.master')
@section('home-page')
<!-- {{-- owl carousel --}} -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

<div>
    <!-- {{-- banner section --}} -->
    <section class="slider_first_section">
        <div class="sf_slider">
            <div class="owl-carousel owl-theme" id="owl_carousel1">
                <div class=" sf_data">
                    <div class="sf_beckground sf_slider1">
                            <div class="sf_text">
                                <h1 class="sf_head">The Perfect
                                    <span class="sf_head_span">Care On
                                        Your</span>
                                    Budget
                                </h1>
                            <p class="sf_pera sf_sub_pera"> happen, and it’s our job to fix them when it comes to
                                damaging your mobile device. It’s never been easier to render
                                your device useless after dropping it. Our trained technicians
                                will diagnose and repair your device within 24 hours.</p>
                                <div class="btn_align">
                                <button href="#" class=" btn com_btn" type="button">Fix my Device | ></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" sf_data">
                    <div class="sf_beckground sf_slider2">
                        <div class="sf_text">
                            <h1 class="sf_head">We’re
                                <span class="sf_head_span ">Finding Solutions</span> For Your Problems
                            </h1>
                            <p class="sf_pera sf_sub_pera">Our repair technicians have a wealth of experience repairing mobile devices and diagnosing wealth of great thing experience repairing errors.</p>
                            <div class="btn_align">
                                <button href="#" class=" btn com_btn" type="button">Fix my Device | ></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" sf_data">
                    <div class="sf_beckground sf_slider3">
                        <div class="sf_text">
                            <h1 class="sf_head">We’re
                                <span class="sf_head_span ">Experts</span>At Cell Phone Repair!
                            </h1>
                            <p class="sf_pera sf_sub_pera">Did your drop or break your phone? Our highly trained repair technicians are ready to fix cell phones.</p>
                            <div class="btn_align">
                                <button href="#" class=" btn com_btn" type="button">Fix my Device | ></button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- {{-- who we are --}} -->
    <section class="we_are">
        <div class="cantent_center">
            <div class="we_head_text out_text">
                <h6 class="small_head head_font_s">About Us</h6>
                <h1 class="big_head head_font_b">Who we are</h1>
            </div>
            <div class="wa_flex_data row">

                <div class="wa_text col-xl-6 col-lg-6 col-sm-12">
                    <div class="wa_text_data">
                        <div class="we_head_text in_text">
                            <h6 class="small_head head_font_s">About Us</h6>
                            <h1 class="big_head head_font_b">Who we are</h1>
                        </div>
                        <p class="pera">We’re your 24/7 tech support team, ready to set up and fix your mobile, tablet
                            or computer, and help you master it. We can help you in selected stores and over the phone.
                        </p>

                        <p class="pera pera_two"> At Care2x we are obsessed with gadgets and gizmos. We’re the folks
                            standing in line on launch day waiting for the latest smartphone or gaming console.We love
                            all things tech, but don’t confuse our passion for snobbery. We’re not self-described
                            geniuses, but we are experts at what we do.</p>
                    </div>
                    <div class="btn_align">
                        <button href="#" class=" btn com_btn" type="button">Read More | ></button>
                    </div>
                </div>
                <div class="wa_img col-xl-6 col-lg-6 col-sm-12">
                    <div class="wa_img_set">
                        <img src="{{ asset('assets/front/images/who_we_are.png') }}" alt="Snow" class="wa_img_size">
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- {{-- We Can Fix It! --}} -->
    <section class="can_fix">
        <div class="fix_it_can">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-sm-12">
                    <div>
                        <img src="{{ asset('assets/front/images/can_fix.png') }}" width="100%" alt="Snow">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-sm-12 fix_text ">
                    <div class="fi_tex_data">
                        <h6 class="small_head head_font_s">Repair</h6>
                        <h1 class="big_head head_font_b">We Can Fix It!</h1>
                        <p class="pera ">Our prices for iPhone repairs are
                            competitive with
                            anyone in the city. We repair
                            cracked screens for all models of iPhones and repair broken buttons, speakers and cameras as
                            well. Cracked screen on your new iPhone? We fix that.</p>
                    </div>
                    <div class="slider_fi">
                        <div id="carousel2" class="owl-carousel">
                            <div class="item">
                                <img src="{{ asset('assets/front/images/Rectangle_9.png') }}" alt="200X200">
                                <p class="phone">Android Phones</p>
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/front/images/Rectangle_10.png') }}" alt="200X200">
                                <p class="phone">IPhones</p>
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/front/images/Rectangle_11.png') }}" alt="200X200">
                                <p class="phone">Tablets</p>
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/front/images/Rectangle_12.png') }}" alt="1000X1000">
                                <p class="phone">Ipads</p>
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/front/images/Rectangle_13.png') }}" alt="2000X2000">
                                <p class="phone">Apple Watches</p>
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/front/images/Rectangle_14.png') }}" alt="2000X2000">
                                <p class="phone">Airpods</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- {{-- Repair Services --}} -->

    <section class="service">
        <div class="service_data text-center se_content">
            <p class="small_head head_font_s">Services</p>
            <h1 class="big_head head_font_b">Repair Services</h1>
        </div>
        <div class="sr_all_data">
            <div class="service_repair_one sr_data sr_bg_color">
                <div class="service_box">
                    <div class="service_image">
                        <img class="service_img" src="{{ asset('assets/front/images/charging-icon.png') }}" alt="">
                    </div>
                    <div class="service_label">
                        <h6 class="font_small">Battery Replacement</h6>
                    </div>
                </div>
            </div>
            <div class="service_repair sr_data2 sr_bg_color">
                <div class="service_box">
                    <img class="service_img" src="{{ asset('assets/front/images/auxiliary-cable.png') }}" alt="">
                    <h6 class="font_small">AUX Jack</h6>
                </div>
                <div class="service_box">
                    <img class="service_img" src="{{ asset('assets/front/images/sensor.png') }}" alt="">
                    <h6 class="font_small">Proximity Sensor</h6>
                </div>
            </div>
            <div class="service_repair sr_data3 sr_bg_color">
                <div class="service_box">
                    <img class="service_img" src="{{ asset('assets/front/images/call.png') }}" alt="">
                    <h6 class="font_small">Call Receiving</h6>
                </div>
                <div class="service_box">
                    <img class="service_img" src="{{ asset('assets/front/images/Charging Jack.png') }}" alt="">
                    <h6 class="font_small">Charging Jack</h6>
                </div>
                <div class="service_box">
                    <img class="service_img" src="{{ asset('assets/front/images/speaker.png') }}" alt="">
                    <h6 class="font_small">Speaker</h6>
                </div>
            </div>
            <div class="service_repair sr_data4 sr_bg_color">
                <div class="service_box">
                    <img class="service_img" src="{{ asset('assets/front/images/Screen_Repair.png') }}" alt="">
                    <h6 class="font_small">Screen Repair</h6>
                </div>
                <div class="service_box">
                    <img class="service_img" src="{{ asset('assets/front/images/water.png') }}" alt="">
                    <h6 class="font_small">Water Damage</h6>
                </div>
            </div>
            <div class="service_repair sr_data5 sr_bg_color">
                <div class="service_box">
                    <img class="service_img" src="{{ asset('assets/front/images/camera.png') }}" alt="">
                    <h6 class="font_small">Front Camera</h6>
                </div>
                <div class="service_box">
                    <img class="service_img" src="{{ asset('assets/front/images/back_camera.png') }}" alt="">
                    <h6 class="font_small">Back Camera</h6>
                </div>
                <div class="service_box">
                    <img class="service_img" src="{{ asset('assets/front/images/mic.png') }}" alt="">
                    <h6 class="font_small">Mic Repair</h6>
                </div>
            </div>
        </div>

        <div class="services_all ser_all">
            <div class="owl-carousel owl-theme" id="services">
                <div class="sr_item">
                    <div class="service_box">
                        <div class="service_image">
                            <img class="service_img" src="{{ asset('assets/front/images/charging-icon.png') }}" alt="">
                        </div>
                        <div class="service_label">
                            <h6 class="font_small">Battery Replacement</h6>
                        </div>
                    </div>
                </div>
                <div class="sr_item">
                    <div class="service_box">
                        <img class="service_img" src="{{ asset('assets/front/images/auxiliary-cable.png') }}" alt="">
                        <h6 class="font_small">AUX Jack</h6>
                    </div>
                </div>
                <div class="sr_item">
                    <div class="service_box">
                        <img class="service_img" src="{{ asset('assets/front/images/sensor.png') }}" alt="">
                        <h6 class="font_small">Proximity Sensor</h6>
                    </div>
                </div>
                <div class="sr_item">
                    <div class="service_box">
                        <img class="service_img" src="{{ asset('assets/front/images/call.png') }}" alt="">
                        <h6 class="font_small">Call Receiving</h6>
                    </div>
                </div>
                <div class="sr_item">
                    <div class="service_box">
                        <img class="service_img" src="{{ asset('assets/front/images/Charging Jack.png') }}" alt="">
                        <h6 class="font_small">Charging Jack</h6>
                    </div>
                </div>
                <div class="sr_item">
                    <div class="service_box">
                        <img class="service_img" src="{{ asset('assets/front/images/speaker.png') }}" alt="">
                        <h6 class="font_small">Speaker</h6>
                    </div>
                </div>
                <div class="sr_item">
                    <div class="service_box">
                        <img class="service_img" src="{{ asset('assets/front/images/Screen_Repair.png') }}" alt="">
                        <h6 class="font_small">Screen Repair</h6>
                    </div>
                </div>
                <div class="sr_item">
                    <div class="service_box">
                        <img class="service_img" src="{{ asset('assets/front/images/water.png') }}" alt="">
                        <h6 class="font_small">Water Damage</h6>
                    </div>
                </div>
                <div class="sr_item">
                    <div class="service_box">
                        <img class="service_img" src="{{ asset('assets/front/images/camera.png') }}" alt="">
                        <h6 class="font_small">Front Camera</h6>
                    </div>
                </div>
                <div class="sr_item">
                    <div class="service_box">
                        <img class="service_img" src="{{ asset('assets/front/images/back_camera.png') }}" alt="">
                        <h6 class="font_small">Back Camera</h6>
                    </div>
                </div>
                <div class="sr_item">
                    <div class="service_box">
                        <img class="service_img" src="{{ asset('assets/front/images/mic.png') }}" alt="">
                        <h6 class="font_small">Mic Repair</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- {{-- Why Choose Us? --}} -->
    <section class="ch_choose">
        <div class="text-center se_content">
            <h6 class="small_head head_font_s">Our Features</h6>
            <h1 class="big_head head_font_b">Why Choose Us?</h1>
        </div>
        <div class="ch_main">
            <div class="owl-carousel owl-theme" id="choose">
                <div class="ch_item">
                    <img class="ch_img" src="{{ asset('assets/front/images/Frame.png') }}" alt="">
                    <p class="ch_pera">Quick Repair Process</p>
                </div>
                <div class="ch_item">
                    <img class="ch_img" src="{{ asset('assets/front/images/Frame2.png') }}" alt="">
                    <p class="ch_pera">Well Reputation</p>
                </div>
                <div class="ch_item">
                    <img class="ch_img" src="{{ asset('assets/front/images/Frame3.png') }}" alt="">
                    <p class="ch_pera">7 Day Warranted</p>
                </div>
                <div class="ch_item">
                    <img class="ch_img" src="{{ asset('assets/front/images/Frame4.png') }}" alt="">
                    <p class="ch_pera">Friendly Service</p>
                </div>
                <div class="ch_item">
                    <img class="ch_img" src="{{ asset('assets/front/images/Frame5.png') }}" alt="">
                    <p class="ch_pera">We’re Professional</p>
                </div>
                <div class="ch_item">
                    <img class="ch_img" src="{{ asset('assets/front/images/Frame6.png') }}" alt="">
                    <p class="ch_pera">24/7 support</p>
                </div>
                <div class="ch_item">
                    <img class="ch_img" src="{{ asset('assets/front/images/Frame7.png') }}" alt="">
                    <p class="ch_pera">Max Covering Areas</p>
                </div>
            </div>
        </div>
        <div>

        </div>
    </section>

    <!-- {{---How It Works? ----}} -->
    <section class="how_it_section">
        <div class="hero-image">
            <div class="hero-text">
                <p class="hero_p_text head_font_s">Step by Step Process</p>
                <h1 class="hero_h_text head_font_b">How It Works?</h1>
            </div>
        </div>
        <div class="how_cave_main">
            <div class="cave">
                <img class="img-fluid cave_bg" src="{{ asset('/assets/front/images/cave.png') }}" alt="img_cave">
            </div>
            <div class="cave_item_section">
                <div class="hw_item hw_step1">
                    <div class=" text_img_div text-center">
                        <img class="broken_device" src="{{ asset('assets/front/images/Group_step1.png') }}" alt="image1">
                        <h4 class="mt-3 cav_head_text">Broken Device</h4>
                        <p class="device cav_p_text">If your device breaks, don't panic. We offer a huge range of mobile phone & tablet repair services.</p>
                    </div>
                </div>
                <div class="hw_item hw_step2">
                    <div class="step1 text_img_div text-center">
                        <img class="broken_device" src="{{ asset('assets/front/images/Group_step2.png') }}" alt="image2">
                        <h4 class="mt-3 cav_head_text">Send It To Us </h4>
                        <p class="device cav_p_text">We offer free postage with all mobile phone & table repairs. Saving you time and money. Just print the label and send.</p>
                    </div>
                </div>
                <div class="hw_item hw_step3">
                    <div class="step1 text_img_div text-center">
                        <img class="broken_device" src="{{ asset('assets/front/images/Group_step3.png') }}" alt="image3">
                        <h4 class="mt-3 cav_head_text">Quick Fix</h4>
                        <p class="device cav_p_text">Our trained technicians will repair your mobile phone or tablet device quickly & efficiently, keeping you informed all the way.</p>
                    </div>
                </div>
                <div class="hw_item hw_step4">
                    <div class="step1 text_img_div text-center">
                        <img class="broken_device" src="{{ asset('assets/front/images/Group_step4.png') }}" alt="image4">
                        <h4 class="mt-3 cav_head_text">Fast Return</h4>
                        <p class="device cav_p_text">Choose the delivery method that matches your requirements. We will make sure you repaired device is returned safely.</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="cave_main_slider">
            <div class="cs_cave">
                <img class="img-fluid cave_bg" src="{{ asset('/assets/front/images/cave.png') }}" alt="img_cave">
            </div>
            <div class="owl-carousel owl-theme" id="how_it">
                <div class="cave_item">
                    <div class="cs_item  cs_step1">
                        <div class=" text_img_div text-center">
                            <img class="broken_device" src="{{ asset('assets/front/images/Group_step1.png') }}" alt="image1">
                            <h4 class="mt-3 cav_head_text">Broken Device</h4>
                            <p class="device cav_p_text">If your device breaks, don't panic. We offer a huge range of mobile phone & tablet repair services.</p>
                        </div>
                    </div>
                </div>
                <div class="cave_item">
                    <div class="cs_item cs_step2">
                        <div class="step1 text_img_div text-center">
                            <img class="broken_device" src="{{ asset('assets/front/images/Group_step2.png') }}" alt="image2">
                            <h4 class="mt-3 cav_head_text">Send It To Us </h4>
                            <p class="device cav_p_text">We offer free postage with all mobile phone & table repairs. Saving you time and money. Just print the label and send.</p>
                        </div>
                    </div>
                </div>
                <div class="cave_item">
                    <div class="cs_item cs_step3">
                        <div class="step1 text_img_div text-center">
                            <img class="broken_device" src="{{ asset('assets/front/images/Group_step3.png') }}" alt="image3">
                            <h4 class="mt-3 cav_head_text">Quick Fix</h4>
                            <p class="device cav_p_text">Our trained technicians will repair your mobile phone or tablet device quickly & efficiently, keeping you informed all the way.</p>
                        </div>
                    </div>
                </div>
                <div class="cave_item">
                    <div class="cs_item cs_step4">
                        <div class="step1 text_img_div text-center">
                            <img class="broken_device" src="{{ asset('assets/front/images/Group_step4.png') }}" alt="image4">
                            <h4 class="mt-3 cav_head_text">Fast Return</h4>
                            <p class="device cav_p_text">Choose the delivery method that matches your requirements. We will make sure you repaired device is returned safely.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </section>
    <!-- -----{{--What our client say about us--}}-------- -->
    <section class="What_client">
        <div class="text-center se_content">
            <h6 class="small_head head_font_s">Testimonial</h6>
            <h1 class="big_head head_font_b">What our client say about us</h1>
        </div>
        <div class="sc_client_slider">
            <div class="sc_myslider" id="sc_vertical">
                <div class="item a">
                    <div class="scv_main">

                        <div class="scv_main_all">
                            <div class="scv_img">
                                <img class="scv_image_w" src="{{ asset('assets/front/images/client_pic.png') }}" alt="ddd">
                            </div>
                            <div class="scv_text_name">
                                <h4 class="scv_name">Byron Rolfson</h4>
                                <h6 class="scv_regional">Regional Solutions Architect</h6>
                            </div>
                            <div>
                                <div class="scv_imag_v1">
                                    <img class="scv_imag_vector" src="{{ asset('assets/front/images/vector1.png') }}" alt="ddd">
                                </div>

                                <h6 class="scv_text_h">Quisquam similique molestiae quia quod dolorum et. Aliquid blanditiis voluptatem maxime qui et voluptas minus. Non provident pariatur nisi. Repellat voluptas culpa eius.</h6>

                                <div class="scv_imag_v2">
                                    <img class="scv_imag_vector2" src="{{ asset('assets/front/images/vector2.png') }}" alt="ddd">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="item b">
                    <div class="scv_main">
                        <div class="scv_main_all">
                            <div class="scv_img">
                                <img class="scv_image_w" src="{{ asset('assets/front/images/client_pic.png') }}" alt="ddd">
                            </div>
                            <div class="scv_text_name">
                                <h4 class="scv_name">Byron Rolfson</h4>
                                <h6 class="scv_regional">Regional Solutions Architect</h6>
                            </div>
                            <div>
                                <div class="scv_imag_v1">
                                    <img class="scv_imag_vector" src="{{ asset('assets/front/images/vector1.png') }}" alt="ddd">
                                </div>
                                <h4 class="scv_text_h">Asperiores voluptatum explicabo vel maxime et consequuntur eveniet nobis. Tempore aperiam dolor aut molestiae soluta modi ut. Hic aspernatur ea uam...</h4>

                                <div class="scv_imag_v2">
                                    <img class="scv_imag_vector2" src="{{ asset('assets/front/images/vector2.png') }}" alt="ddd">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="item c">
                    <div class="scv_main">
                        <div class="scv_main_all">
                            <div class="scv_img">
                                <img class="scv_image_w" src="{{ asset('assets/front/images/client_pic.png') }}" alt="ddd">
                            </div>
                            <div class="scv_text_name">
                                <h4 class="scv_name">Byron Rolfson</h4>
                                <h6 class="scv_regional">Regional Solutions Architect</h6>
                            </div>
                            <div>
                                <div class="scv_imag_v1">
                                    <img class="scv_imag_vector" src="{{ asset('assets/front/images/vector1.png') }}" alt="ddd">
                                </div>
                                <h4 class="scv_text_h">Omnis velit quia. Perspiciatis et cupiditate. Voluptatum beatae asperiores dolor magnam fuga. Sed fuga est harum quo nesciunt sint. Optio veniam...</h4>

                                <div class="scv_imag_v2">
                                    <img class="scv_imag_vector2" src="{{ asset('assets/front/images/vector2.png') }}" alt="ddd">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- {{-- blog --}} -->
    <section class="blog">
        <div class="blog_blog_data  bg_cantent_center">
            <p class="small_head m-0 head_font_s">Latest News</p>
            <h1 class="big_head bg_head head_font_b">Blog</h1>
            <div>
                <div class="owl-carousel owl-theme" id="blog">
                    <div class="blog_bg_item">
                        <div class=" d-flex bg_item_all">
                            <p class="date m-0">AUG 02, 22</p>
                            <div class="bg_image">
                            </div>
                        </div>
                        <div class="d-flex justify-content-end bg_demo bg_card">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Disable Keep Normal Photo Option to Save Storage Space</h6>
                                    <p class="card-text">Running out of storage space? One of the ways to free up
                                        storage space is not to keep the normal photos with the HDR function on your
                                        iPhone.</p>
                                    <div class="btn_align">
                                        <button href="#" class=" btn com_btn" type="button">Read More |
                                            &gt;</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog_bg_item">
                        <div class=" d-flex">
                            <p class="date m-0">AUG 02, 22</p>
                            <div class="bg_image">
                            </div>
                        </div>
                        <div class="d-flex justify-content-end  bg_demo">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Disable Keep Normal Photo Option to Save Storage Space</h6>
                                    <p class="card-text">Running out of storage space? One of the ways to free up
                                        storage space is not to keep the normal photos with the HDR function on your
                                        iPhone.</p>
                                    <div class="btn_align">
                                        <button href="#" class=" btn com_btn" type="button">Read More |
                                            &gt;</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- {{-- map --}} -->
    <section class="map">
        <div>
            <div class="responsive-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2822.7806761080233!2d-93.29138368446431!3d44.96844997909819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52b32b6ee2c87c91%3A0xc20dff2748d2bd92!2sWalker+Art+Center!5e0!3m2!1sen!2sus!4v1514524647889" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="d-flex justify-content-center map_box">
                <div class="box_background ">
                    <h6>Grandville, Rivertown Crossings</h6>
                    <p>4693 Wilson Ave SW, Ste J <br>
                        (820) 123 4567</p>
                    <div class="btn_align">
                        <button href="#" class=" btn com_btn" type="button">Read More |
                            &gt;</button>
                    </div>
                </div>
                <div class="box_background">
                    <h6>Grandville, Rivertown Crossings</h6>
                    <p>4693 Wilson Ave SW, Ste J <br>
                        (820) 123 4567</p>
                    <div class="btn_align">
                        <button href="#" class=" btn com_btn" type="button">Read More |
                            &gt;</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- {{-- sell device--}} -->
    <section class="se_device">
        <div class="broken_device_bg">
            <div class="broken_device2">
                <h3 class="se_text head_font_s">Sell Your Broken Device</h3>
                <p class="se_pera m-0">If you’ve decided not to get your device
                    fixed, we’d love to buy it for you.</p>
            </div>
        </div>
    </section>
</div>

<!-- {{-- owl carousel --}} -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"> </script>


<script>
    $('#owl_carousel1').owlCarousel({
        loop: true,
        autoplay: false,
        dots: true,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
</script>

<script>
    jQuery("#carousel2").owlCarousel({
        autoplay: false,
        rewind: false,
        dots: false,
        loop: true,
        /* use rewind if you don't want loop */
        margin: 20,
        responsiveClass: true,
        smartSpeed: 800,
        nav: false,
        responsive: {
            0: {
                items: 2.2,
            },

            600: {
                items: 3.5,

            },
            990: {
                items: 4.5,
            },

            1292: {
                items: 4.5,
            },
            1600: {
                items: 5.5
            },

            2560: {
                items: 5.5
            }
        }
    });
</script>

<script>
    $('#services').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1.5,
            },
            350: {
                items: 2.5
            },
            600: {
                items: 3.5
            },
            990: {
                items: 5.5
            },
            1000: {
                items: 5.5
            }
        }
    })
</script>

<script>
    $('#choose').owlCarousel({
        stagePadding: 50,
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            400: {
                items: 1.5
            },
            600: {
                items: 2
            },
            700: {
                items: 3
            },
            1024: {
                items: 5
            },

            1440: {
                items: 6
            }
        }
    })
</script>



<script>
    $('#blog').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            650: {
                items: 2
            },
            1000: {
                items: 3
            },
            1292: {
                items: 3,
            },
            1900: {
                items: 4
            },

            2560: {
                items: 5
            }
        }
    })
</script>

<script>
    $('#how_it').owlCarousel({
        margin: 10,
        loop: true,
        dots: false,
        nav: false,
        responsive: {
            0: {
                items: 1.5,
                loop: false,
            },
            450: {
                items: 2,
                loop: false,
            },
            800: {
                items: 3,
                autoplay: false,
            },
            990: {
                items: 4,
                autoplay: false,
            }
        }
    })
</script>
<script>
    $('#sc_vertical').slick({

        slidesToScroll: 1,
        arrows: true,
        dots: false,
        vertical: true,
        verticalSwiping: true

    });
</script>
@endsection
