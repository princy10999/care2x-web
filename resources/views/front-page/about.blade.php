@extends('front-common.master')
@section('about-page')
@include('front-common.head_title', ['name' => 'About Us'])
<div class="about_us_page">
    <!-- {{-- who we are --}} -->
    <section class="we_are">
        <div class="cantent_center">
            <div class="wa_flex_data row">
                <div class="wa_text col-xl-6 col-lg-6 col-sm-12">
                    <div class="wa_text_data">
                        <h6 class="small_head">About Us</h6>
                        <h1 class="big_head">Who we are</h1>
                        <p class="pera">We’re your 24/7 tech support team, ready to set up and fix your mobile, tablet
                            or computer, and help you master it. We can help you in selected stores and over the phone.
                        </p>

                        <p class="pera pera_two"> At Care2x we are obsessed with gadgets and gizmos. We’re the folks
                            standing in line on launch day waiting for the latest smartphone or gaming console.We love
                            all things tech, but don’t confuse our passion for snobbery. We’re not self-described
                            geniuses, but we are experts at what we do.</p>
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

    <!-- ------------Most Repairs Returned Within 24 Hours---------------- -->

    <section class="repairs_returned">
        <div class="rr_hero_image">
            <div class="row rr_fll_section">
                <div class="col-xl-6 col-lg-6 col-sm-12 rr_image ">
                    <div class="rr_img_absolute">
                        <img src="{{ asset('assets/front/images/Repairer_front_img.png') }}" width="100%" alt="Snow">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-sm-12 rr_tex_data">
                    <p class="hero_p_text">Quick & Easy Repairs</p>
                    <h1 class="rr_h_text">Most Repairs Returned Within 24 Hours</h1>
                    <p class="rr_p_text">We know your device is important to you, so for this reason we aim to get your device back to you within 24 hours of us receiving your device.</p>


                    <p class="rr_p_text">When you return your device to us, a trained technician will diagnose the issue(s) it has and will immediately begin repairing/replacing what needs to be. Once it has been repaired we will return the device back to you in a fully insured package.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- --------------------   ------------------------------ -->
    <section class="Our_technicians">
        <div class="service_data text-center se_content">
            <p class="small_head">Our Amazing Team</p>
            <h1 class="big_head">Our Professional Technicians</h1>
        </div>
        <div class="ot_img_service ot_big_scrin ">
            <div class="ot_text_main ot_img1">
                <div class="ot_img_box ">
                    <img src="{{ asset('assets/front/images/Technicians_img1.png') }}" alt="Snow" class="ot_image">
                </div>
                <h4 class="ot_text_h">Lorem Ipsum</h4>
                <p class="ot_text_p">Repair Technician</p>
            </div>
            <div class="ot_text_main ot_img2 ot_img_space">
                <div class="ot_img_box ">
                    <img src="{{ asset('assets/front/images/Technicians_img2.png') }}" alt="Snow" class="ot_image">
                </div>
                <h4 class="ot_text_h">Lorem Ipsum</h4>
                <p class="ot_text_p">Repair Technician</p>
            </div>
            <div class="ot_text_main ot_img2 ">
                <div class="ot_img_box ">
                    <img src="{{ asset('assets/front/images/Technicians_img3.png') }}" alt="Snow" class="ot_image">
                </div>
                <h4 class="ot_text_h">Lorem Ipsum</h4>
                <p class="ot_text_p">Repair Technician</p>
            </div>
            <div class="ot_text_main ot_img1">
                <div class="ot_img_box">
                    <img src="{{ asset('assets/front/images/Technicians_img4.png') }}" alt="Snow" class="ot_image">
                </div>
                <h4 class="ot_text_h">Lorem Ipsum</h4>
                <p class="ot_text_p">Repair Technician</p>
            </div>
        </div>
        <div class="ot_img_service  ot_display ">
            <div>
                <div class="ot_text_main">
                    <div class="ot_img_box ">
                        <img src="{{ asset('assets/front/images/Technicians_img1.png') }}" alt="Snow" class="ot_image">

                    </div>
                    <h4 class="ot_text_h">Lorem Ipsum</h4>
                    <p class="ot_text_p">Repair Technician</p>
                </div>
                <div class="ot_text_main">
                    <div class="ot_img_box ot_img2">
                        <img src="{{ asset('assets/front/images/Technicians_img2.png') }}" alt="Snow" class="ot_image">

                    </div>
                    <h4 class="ot_text_h">Lorem Ipsum</h4>
                    <p class="ot_text_p">Repair Technician</p>
                </div>
            </div>
            <div>
                <div class="ot_text_main">
                    <div class="ot_img_box ot_img3">
                        <img src="{{ asset('assets/front/images/Technicians_img3.png') }}" alt="Snow" class="ot_image">

                    </div>
                    <h4 class="ot_text_h">Lorem Ipsum</h4>
                    <p class="ot_text_p">Repair Technician</p>
                </div>
                <div class="ot_text_main">
                    <div class="ot_img_box ">
                        <img src="{{ asset('assets/front/images/Technicians_img4.png') }}" alt="Snow" class="ot_image">
                    </div>
                    <h4 class="ot_text_h">Lorem Ipsum</h4>
                    <p class="ot_text_p">Repair Technician</p>
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
                    <h6 class="mp_head">Grandville, Rivertown Crossings</h6>
                    <p class="mp_pera">4693 Wilson Ave SW, Ste J <br>
                        (820) 123 4567</p>
                    <div class="btn_align mp_btn">
                        <button href="#" class=" btn com_btn" type="button">More info </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- {{-- sell device--}} -->
    <section class="se_device">
        <div class="broken_device_bg">
            <div class="broken_device2">
                <h3 class="se_text">Sell Your Broken Device</h3>
                <p class="se_pera m-0">If you’ve decided not to get your device
                    fixed, we’d love to buy it for you.</p>
            </div>
        </div>
    </section>

</div>
@endsection
