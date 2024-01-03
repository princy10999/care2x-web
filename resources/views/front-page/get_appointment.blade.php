@extends('front-common.master')
@section('home-page')
<!-- {{-- owl carousel --}} -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<div>
    <!-- MultiStep Form -->
    <div class="container-fluid grad1_style" id="grad1">
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-10 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="msform">
                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active" id="account">
                                        <h5 class="fw_head d_none">Choose Your City</h5>
                                        <p class="fw_pera d_none">Tell us in which area you
                                            belongs to.</p>
                                    </li>
                                    <li id="personal">
                                        <h5 class="fw_head d_none">Device Information</h5>
                                        <p class="fw_pera d_none">Provide your device
                                            information in detail.</p>
                                    </li>
                                    <li id="payment">
                                        <h5 class="fw_head d_none">Personal Information</h5>
                                        <p class="fw_pera d_none">Provide your personal
                                            information.</p>
                                    </li>
                                    <li id="confirm">
                                        <h5 class="fw_head d_none">Payment Details</h5>
                                        <p class="fw_pera d_none">Provide your payment details.</p>
                                    </li>
                                </ul>
                                <!-- {{-- step1 --}} -->
                                <fieldset>
                                    <div class="form-card">
                                        <div class="fw_get">
                                            <h3>Get Your Product Fixed</h3>
                                        </div>
                                        <div class="g-3">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="fw_city m-0">
                                                        <label for="inputState" class="form-label">Select Your City</label>
                                                    </p>
                                                    <select class="form-select form-control form-select-lg mb-3" id="selector" onchange="yesnoCheck(this);">
                                                        <option selected>Select City</option>
                                                        <option value="surat">Surat</option>
                                                        <option value="ahmadabad">Ahmadabad</option>
                                                        <option value="vadodara">Vadodara</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div id="abc" style="display: none;">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <input type="text" class="form-control form-select-lg mb-3" id="inputAddress" placeholder="Address">
                                                    </div>


                                                    <div class="col-lg-4">
                                                        <input type="text" placeholder="Enter State" class="form-control form-select-lg mb-3" id="inputCity">

                                                    </div>
                                                    <div class="col-lg-4">
                                                        <input type="text" placeholder="Enter City" class="form-control form-select-lg mb-3" id="inputCity">
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <input type="text" placeholder="Enter Pincode" class="form-control form-select-lg mb-3" id="inputZip">
                                                    </div>
                                                    <div class="col-12">

                                                        <div class="note">
                                                            <span class="me-2">NOTES: </span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur
                                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                                dolore magna aliqua.</p>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-check form_check_box">
                                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                                            <label class="form-check-label md_label" for="gridCheck">
                                                                I Agree to the <a class="sc_span"> Terms & Conditions</a>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <input type="button" name="next" class="btn btn_align next com_btn next_btn_1 next_btn" value="Next | >" />
                                </fieldset>

                                <!-- {{-- step2 --}} -->
                                <fieldset>
                                    <div class="form-card">
                                        <div class="fw_get">
                                            <h3>Device Information</h3>
                                        </div>

                                        <h5>Choose Device Brand</h5>
                                        <div class="flex fw_device_brand">
                                            <div class="content fw_com_margin">
                                                <img src="{{ asset('assets/front/images/brand.png') }}" alt="">
                                            </div>
                                            <div class="content fw_com_margin">
                                                <img class="" src="{{ asset('assets/front/images/brand2.png') }}" alt="">
                                            </div>
                                            <div class="content fw_com_margin">
                                                <img src="{{ asset('assets/front/images/brand3.png') }}" alt="">
                                            </div>
                                            <div class="content fw_com_margin">
                                                <img src="{{ asset('assets/front/images/brand4.png') }}" alt="">
                                            </div>
                                            <div class="content fw_com_margin">
                                                <img src="{{ asset('assets/front/images/brand5.png') }}" alt="">
                                            </div>
                                            <div class="content fw_com_margin">
                                                <img src="{{ asset('assets/front/images/brand6.png') }}" alt="">
                                            </div>
                                            <div class="content fw_com_margin">
                                                <img src="{{ asset('assets/front/images/brand7.png') }}" alt="">
                                            </div>
                                            <div class="content fw_com_margin">
                                                <a class="fw_load" href="#" id="loadMore">See more
                                                    Brands <i class="fa fa-angle-right"></i></a>
                                            </div>
                                            <div class="content fw_com_margin">
                                                <img src="{{ asset('assets/front/images/brand.png') }}" alt="">
                                            </div>
                                            <div class="content fw_com_margin">
                                                <img class="" src="{{ asset('assets/front/images/brand2.png') }}" alt="">
                                            </div>
                                            <div class="content fw_com_margin">
                                                <img src="{{ asset('assets/front/images/brand3.png') }}" alt="">
                                            </div>
                                            <div class="content fw_com_margin">
                                                <img src="{{ asset('assets/front/images/brand4.png') }}" alt="">
                                            </div>
                                            <div class="content fw_com_margin">
                                                <img src="{{ asset('assets/front/images/brand5.png') }}" alt="">
                                            </div>
                                            <div class="content fw_com_margin">
                                                <img src="{{ asset('assets/front/images/brand6.png') }}" alt="">
                                            </div>
                                            <div class="content fw_com_margin">
                                                <img src="{{ asset('assets/front/images/brand7.png') }}" alt="">
                                            </div>
                                            <div class="content fw_com_margin">
                                                <img src="{{ asset('assets/front/images/brand5.png') }}" alt="">
                                            </div>
                                        </div>

                                        <!-- {{-- small screen --}} -->
                                        <div class="owl-product">
                                            <div class="owl-carousel owl-theme" id="product">
                                                <div class="pd_item">
                                                    <div class="pd_content">
                                                        <img src="{{ asset('assets/front/images/brand.png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="pd_item">
                                                    <div class="pd_content">
                                                        <img class="" src="{{ asset('assets/front/images/brand2.png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="pd_item">
                                                    <div class="pd_content">
                                                        <img class="" src="{{ asset('assets/front/images/brand3.png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="pd_item">
                                                    <div class="pd_content">
                                                        <img class="" src="{{ asset('assets/front/images/brand4.png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="pd_item">
                                                    <div class="pd_content">
                                                        <img class="" src="{{ asset('assets/front/images/brand5.png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="pd_item">
                                                    <div class="pd_content">
                                                        <img class="" src="{{ asset('assets/front/images/brand6.png') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="pd_item">
                                                    <div class="pd_content">
                                                        <img class="" src="{{ asset('assets/front/images/brand7.png') }}" alt="">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <h5 class="fw_dev_head">Device Model</h5>
                                        <div class="d-flex main_device fw_model_big">
                                            <div class="device_content">
                                                <img src="{{ asset('assets/front/images/device.png') }}" alt="">
                                                <p class="fw_device_pera">Apple iPhone SE 2020</p>
                                            </div>
                                            <div class="device_content">
                                                <img src="{{ asset('assets/front/images/device2.png') }}" alt="">
                                                <p class="fw_device_pera">Apple iPhone 12</p>
                                            </div>
                                            <div class="device_content">
                                                <img src="{{ asset('assets/front/images/device3.png') }}" alt="">
                                                <p class="fw_device_pera">Apple iPhone 11 Pro Max</p>
                                            </div>
                                            <div class="device_content">
                                                <img src="{{ asset('assets/front/images/device4.png') }}" alt="">
                                                <p class="fw_device_pera">Apple iPhone 13 Pro</p>
                                            </div>
                                            <div class="device_content">
                                                <img src="{{ asset('assets/front/images/device5.png') }}" alt="">
                                                <p class="fw_device_pera">Apple iPhone 13 Pro Max</p>
                                            </div>
                                            <div class="device_content">
                                                <img src="{{ asset('assets/front/images/device6.png') }}" alt="">
                                                <p class="fw_device_pera">Apple iPhone 8</p>
                                            </div>
                                            <div class="device_content">
                                                <img src="{{ asset('assets/front/images/device7.png') }}" alt="">
                                                <p class="fw_device_pera">Apple iPhone 8 Plus</p>
                                            </div>
                                            <div class="device_content">
                                                <img src="{{ asset('assets/front/images/device8.png') }}" alt="">
                                                <p class="fw_device_pera">Apple iPhone 5</p>
                                            </div>
                                            <div class="device_content">
                                                <img src="{{ asset('assets/front/images/device9.png') }}" alt="">
                                                <p class="fw_device_pera">Apple iPhone 6</p>
                                            </div>
                                            <div class="device_content">
                                                <img src="{{ asset('assets/front/images/device10.png') }}" alt="">
                                                <p class="fw_device_pera">Apple iPhone 12 Pro</p>
                                            </div>
                                            <div class="device_content">
                                                <img src="{{ asset('assets/front/images/device11.png') }}" alt="">
                                                <p class="fw_device_pera">Apple iPhone 12 Mini</p>
                                            </div>
                                            <div class="device_content">
                                                <img src="{{ asset('assets/front/images/device12.png') }}" alt="">
                                                <p class="fw_device_pera">Apple iPhone 5c</p>
                                            </div>
                                            <div class="device_content">
                                                <img src="{{ asset('assets/front/images/device13.png') }}" alt="">
                                                <p class="fw_device_pera">Apple iPhone 6 Plus</p>
                                            </div>
                                            <div class="device_content">
                                                <img src="{{ asset('assets/front/images/device14.png') }}" alt="">
                                                <p class="fw_device_pera">Apple iPhone 11 Pro</p>
                                            </div>
                                            <div class="device_content">
                                                <img src="{{ asset('assets/front/images/device15.png') }}" alt="">
                                                <p class="fw_device_pera">Apple iPhone 13 Mini</p>
                                            </div>
                                            <div class="device_content">
                                                <img src="{{ asset('assets/front/images/device16.png') }}" alt="">
                                                <p class="fw_device_pera">Apple iPhone XS</p>
                                            </div>
                                            <div class="device_content">
                                                <img src="{{ asset('assets/front/images/device17.png') }}" alt="">
                                                <p class="fw_device_pera">Apple iPhone 5s</p>
                                            </div>
                                            <div class="device_content">
                                                <img src="{{ asset('assets/front/images/device18.png') }}" alt="">
                                                <p class="fw_device_pera">Apple iPhone 11</p>
                                            </div>
                                            <div class="device_content">
                                                <img src="{{ asset('assets/front/images/device19.png') }}" alt="">
                                                <p class="fw_device_pera">Apple iPhone 12 Pro Max </p>
                                            </div>
                                            <div class="device_content">
                                                <img src="{{ asset('assets/front/images/device20.png') }}" alt="">
                                                <p class="fw_device_pera">Apple iPhone 13</p>
                                            </div>
                                            <div class="device_content">
                                                <img src="{{ asset('assets/front/images/device21.png') }}" alt="">
                                                <p class="fw_device_pera">Apple iPhone XS Max</p>
                                            </div>
                                            <div class="device_content">
                                                <img src="{{ asset('assets/front/images/device22.png') }}" alt="">
                                                <p class="fw_device_pera">Apple iPhone XR</p>
                                            </div>
                                            <div class="device_content">
                                                <img src="{{ asset('assets/front/images/device23.png') }}" alt="">
                                                <p class="fw_device_pera">Apple iPhone 7</p>
                                            </div>
                                            <div class="device_content">
                                                <img src="{{ asset('assets/front/images/device24.png') }}" alt="">
                                                <p class="fw_device_pera">Apple iPhone 7 Plus</p>
                                            </div>
                                            <div class="device_content">
                                                <img src="{{ asset('assets/front/images/device25.png') }}" alt="">
                                                <p class="fw_device_pera">Apple iPhone 6S</p>
                                            </div>
                                            <div class="device_content">
                                                <img src="{{ asset('assets/front/images/device26.png') }}" alt="">
                                                <p class="fw_device_pera">Apple iPhone 6S Plus</p>
                                            </div>
                                            <div class="device_content">
                                                <img src="{{ asset('assets/front/images/device27.png') }}" alt="">
                                                <p class="fw_device_pera">Apple iPhone X</p>
                                            </div>
                                        </div>

                                        <!-- {{-- small screen --}} -->

                                        <div class="fw_model_small">
                                            <div class="owl-carousel owl-theme" id="fw_model">
                                                <div class="md_item">
                                                    <div class="md_device_content">
                                                        <img src="{{ asset('assets/front/images/device.png') }}" alt="">
                                                        <p class="fw_device_pera">Apple iPhone SE 2020</p>
                                                    </div>
                                                </div>
                                                <div class="md_item">
                                                    <div class="md_device_content">
                                                        <img src="{{ asset('assets/front/images/device2.png') }}" alt="">
                                                        <p class="fw_device_pera">Apple iPhone 12</p>
                                                    </div>
                                                </div>
                                                <div class="md_item">
                                                    <div class="md_device_content">
                                                        <img src="{{ asset('assets/front/images/device3.png') }}" alt="">
                                                        <p class="fw_device_pera">Apple iPhone 11 Pro Max</p>
                                                    </div>
                                                </div>
                                                <div class="md_item">
                                                    <div class="md_device_content">
                                                        <img src="{{ asset('assets/front/images/device4.png') }}" alt="">
                                                        <p class="fw_device_pera">Apple iPhone 13 Pro</p>
                                                    </div>
                                                </div>
                                                <div class="md_item">
                                                    <div class="md_device_content">
                                                        <img src="{{ asset('assets/front/images/device5.png') }}" alt="">
                                                        <p class="fw_device_pera">Apple iPhone 13 Pro Max</p>
                                                    </div>
                                                </div>
                                                <div class="md_item">
                                                    <div class="md_device_content">
                                                        <img src="{{ asset('assets/front/images/device6.png') }}" alt="">
                                                        <p class="fw_device_pera">Apple iPhone 8</p>
                                                    </div>
                                                </div>
                                                <div class="md_item">
                                                    <div class="md_device_content">
                                                        <img src="{{ asset('assets/front/images/device7.png') }}" alt="">
                                                        <p class="fw_device_pera">Apple iPhone 8 Plus</p>
                                                    </div>
                                                </div>
                                                <div class="md_item">
                                                    <div class="md_device_content">
                                                        <img src="{{ asset('assets/front/images/device8.png') }}" alt="">
                                                        <p class="fw_device_pera">Apple iPhone 5</p>
                                                    </div>
                                                </div>
                                                <div class="md_item">
                                                    <div class="md_device_content">
                                                        <img src="{{ asset('assets/front/images/device9.png') }}" alt="">
                                                        <p class="fw_device_pera">Apple iPhone 6</p>
                                                    </div>
                                                </div>
                                                <div class="md_item">
                                                    <div class="md_device_content">
                                                        <img src="{{ asset('assets/front/images/device10.png') }}" alt="">
                                                        <p class="fw_device_pera">Apple iPhone 12 Pro</p>
                                                    </div>
                                                </div>
                                                <div class="md_item">
                                                    <div class="md_device_content">
                                                        <img src="{{ asset('assets/front/images/device11.png') }}" alt="">
                                                        <p class="fw_device_pera">Apple iPhone 12 Mini</p>
                                                    </div>
                                                </div>
                                                <div class="md_item">
                                                    <div class="md_device_content">
                                                        <img src="{{ asset('assets/front/images/device12.png') }}" alt="">
                                                        <p class="fw_device_pera">Apple iPhone 5c</p>
                                                    </div>
                                                </div>
                                                <div class="md_item">
                                                    <div class="md_device_content">
                                                        <img src="{{ asset('assets/front/images/device13.png') }}" alt="">
                                                        <p class="fw_device_pera">Apple iPhone 6 Plus</p>
                                                    </div>
                                                </div>
                                                <div class="md_item">
                                                    <div class="md_device_content">
                                                        <img src="{{ asset('assets/front/images/device14.png') }}" alt="">
                                                        <p class="fw_device_pera">Apple iPhone 11 Pro</p>
                                                    </div>
                                                </div>
                                                <div class="md_item">
                                                    <div class="md_device_content">
                                                        <img src="{{ asset('assets/front/images/device15.png') }}" alt="">
                                                        <p class="fw_device_pera">Apple iPhone 13 Mini</p>
                                                    </div>
                                                </div>
                                                <div class="md_item">
                                                    <div class="md_device_content">
                                                        <img src="{{ asset('assets/front/images/device16.png') }}" alt="">
                                                        <p class="fw_device_pera">Apple iPhone XS</p>
                                                    </div>
                                                </div>
                                                <div class="md_item">
                                                    <div class="md_device_content">
                                                        <img src="{{ asset('assets/front/images/device17.png') }}" alt="">
                                                        <p class="fw_device_pera">Apple iPhone 5s</p>
                                                    </div>
                                                </div>
                                                <div class="md_item">
                                                    <div class="md_device_content">
                                                        <img src="{{ asset('assets/front/images/device18.png') }}" alt="">
                                                        <p class="fw_device_pera">Apple iPhone 11</p>
                                                    </div>
                                                </div>
                                                <div class="md_item">
                                                    <div class="md_device_content">
                                                        <img src="{{ asset('assets/front/images/device19.png') }}" alt="">
                                                        <p class="fw_device_pera">Apple iPhone 12 Pro Max </p>
                                                    </div>
                                                </div>
                                                <div class="md_item">
                                                    <div class="md_device_content">
                                                        <img src="{{ asset('assets/front/images/device20.png') }}" alt="">
                                                        <p class="fw_device_pera">Apple iPhone 13</p>
                                                    </div>
                                                </div>
                                                <div class="md_item">
                                                    <div class="md_device_content">
                                                        <img src="{{ asset('assets/front/images/device21.png') }}" alt="">
                                                        <p class="fw_device_pera">Apple iPhone XS Max</p>
                                                    </div>
                                                </div>
                                                <div class="md_item">
                                                    <div class="md_device_content">
                                                        <img src="{{ asset('assets/front/images/device22.png') }}" alt="">
                                                        <p class="fw_device_pera">Apple iPhone XR</p>
                                                    </div>
                                                </div>
                                                <div class="md_item">
                                                    <div class="md_device_content">
                                                        <img src="{{ asset('assets/front/images/device23.png') }}" alt="">
                                                        <p class="fw_device_pera">Apple iPhone 7</p>
                                                    </div>
                                                </div>
                                                <div class="md_item">
                                                    <div class="md_device_content">
                                                        <img src="{{ asset('assets/front/images/device24.png') }}" alt="">
                                                        <p class="fw_device_pera">Apple iPhone 7 Plus</p>
                                                    </div>
                                                </div>
                                                <div class="md_item">
                                                    <div class="md_device_content">
                                                        <img src="{{ asset('assets/front/images/device25.png') }}" alt="">
                                                        <p class="fw_device_pera">Apple iPhone 6S</p>
                                                    </div>
                                                </div>
                                                <div class="md_item">
                                                    <div class="md_device_content">
                                                        <img src="{{ asset('assets/front/images/device26.png') }}" alt="">
                                                        <p class="fw_device_pera">Apple iPhone 6S Plus</p>
                                                    </div>
                                                </div>
                                                <div class="md_item">
                                                    <div class="md_device_content">
                                                        <img src="{{ asset('assets/front/images/device27.png') }}" alt="">
                                                        <p class="fw_device_pera">Apple iPhone X</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <h5 class="fw_dev_head">Device Issue</h5>
                                        <div class="d-flex main_device dv_big">
                                            <div class="device_issues sc_device_issues">
                                                <img class="device_battery" src="{{ asset('assets/front/images/charging-icon.png') }}" alt="">
                                                <p class="bg_pera_issue sc_pera_issue">Battery</p>
                                                <h5 class="sc_span">₹ 1,999</h5>
                                                <div class="btn_align">
                                                    <button href="#" class=" btn com_btn" onclick="">Add</button>
                                                </div>
                                            </div>
                                            <div class="device_issues sc_device_issues">
                                                <img class="device_battery" src="{{ asset('assets/front/images/auxiliary-cable.png') }}" alt="">
                                                <p class="sc_pera_issue">AUX Jack</p>
                                                <h5 class="sc_span">₹ 1,349</h5>
                                                <div class="btn_align">
                                                    <button href="#" class=" btn com_btn">Add</button>
                                                </div>
                                            </div>
                                            <div class="device_issues sc_device_issues">
                                                <img class="device_battery" src="{{ asset('assets/front/images/sensor.png') }}" alt="">
                                                <p class="sc_pera_issue">Proximity sensor</p>
                                                <h5 class="sc_span">₹ 1,349</h5>
                                                <div class="btn_align">
                                                    <button href="#" class=" btn com_btn" type="button">Add</button>
                                                </div>
                                            </div>
                                            <div class="device_issues sc_device_issues">
                                                <img class="device_battery" src="{{ asset('assets/front/images/Charging Jack.png') }}" alt="">
                                                <p class="sc_pera_issue">Charging Jack</p>
                                                <h5 class="sc_span">₹1,349</h5>
                                                <div class="btn_align">
                                                    <button href="#" class=" btn com_btn" type="button">Add</button>
                                                </div>
                                            </div>
                                            <div class="device_issues sc_device_issues">
                                                <img class="device_battery" src="{{ asset('assets/front/images/call.png') }}" alt="">
                                                <p class="sc_pera_issue">Receiver</p>
                                                <h5 class="sc_span">₹ 1,349</h5>
                                                <div class="btn_align">
                                                    <button href="#" class=" btn com_btn" type="button">Add</button>
                                                </div>
                                            </div>
                                            <div class="device_issues sc_device_issues">
                                                <img class="device_battery" src="{{ asset('assets/front/images/speaker.png') }}" alt="">
                                                <p class="sc_pera_issue">Speaker</p>
                                                <h5 class="sc_span">₹ 1,349</h5>
                                                <div class="btn_align">
                                                    <button href="#" class=" btn com_btn" type="button">Add</button>
                                                </div>
                                            </div>
                                            <div class="device_issues sc_device_issues">
                                                <img class="device_battery" src="{{ asset('assets/front/images/mic.png') }}" alt="">
                                                <p class="sc_pera_issue">MIC</p>
                                                <h5 class="sc_span">₹ 1,349</h5>
                                                <div class="btn_align">
                                                    <button href="#" class=" btn com_btn" type="button">Add</button>
                                                </div>
                                            </div>
                                            <div class="device_issues sc_device_issues">
                                                <img class="device_battery" src="{{ asset('assets/front/images/Screen_Repair.png') }}" alt="">
                                                <p class="sc_pera_issue">Broken Screen</p>
                                                <h5 class="sc_span">₹ 1,349</h5>
                                                <div class="btn_align">
                                                    <button href="#" class=" btn com_btn" type="button">Add</button>
                                                </div>
                                            </div>
                                            <div class="device_issues sc_device_issues">
                                                <img class="device_battery" src="{{ asset('assets/front/images/camera.png') }}" alt="">
                                                <p class="sc_pera_issue">Front Camera</p>
                                                <h5 class="sc_span">₹ 1,349</h5>
                                                <div class="btn_align">
                                                    <button href="#" class=" btn com_btn" type="button">Add</button>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="fw_floating">
                                            <input type="text" class="form_control" placeholder="Device issue information..." aria-label="First name">
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class=" previous btn pre_btn_with btn_align com_btn next_btn" value="< | Previous" />
                                    <input type="button" name="next" class="btn btn_align next next_btn_with com_btn next_btn" value="Next | >" />


                                      {{-- model start --}}

                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            Launch demo modal
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content md_content">
                                                    <div class="modal-header p-0">
                                                        <h6 class="modal-title md_head" id="exampleModalLabel">Login/ Signup</h6>
                                                        {{-- <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button> --}}
                                                    </div>
                                                    <div class="d-flex md_main_small">
                                                        <div class="modal-body md_small_body">
                                                            <div>
                                                                <p class="sf_pera text_start mb-3">Provide your details to take care of your device by our services.</p>
                                                                <p class="text_left md_text_head">Enter your phone number</p>
                                                            </div>

                                                            <div class="form-group mt-3 md_data">
                                                                <span class="country-code px-2 align-items-center d-flex">+91</span>
                                                                <input type="text" class="form-control md_input" id="ec-mobile-number" aria-describedby="emailHelp" placeholder="Enter mobile number" />
                                                            </div>

                                                            <div class="d-flex md_width">
                                                                <div class="form-check form_check_box md_terms text_left">
                                                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                                                    <label class="form-check-label md_label" for="gridCheck">
                                                                        I Agree to the <a class="sc_span"> Terms &amp; Conditions</a>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <input type="button" name="next" class="btn btn_align next com_btn md_login_btn" value="Login | >">

                                                            <div class="modal-buttons">
                                                                <p class="md_pera text_start">or login via</p>

                                                                <div class="d-flex">
                                                                    <a href="https://www.facebook.com" class="md_fb btn me-3">
                                                                        <i class="fa fa-facebook-f"></i>
                                                                    </a>

                                                                    <a href="https://www.google.com" class="md_g btn">
                                                                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                                                                    </a>
                                                                </div>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <div class="login_bg"></div>
                                                    </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        {{-- model end --}}


                                </fieldset>

                                <!-- {{-- step3 --}} -->
                                <fieldset>
                                    <div class="form-card">
                                        <div class="fw_get">
                                            <h3>Personal Information</h3>
                                        </div>

                                        <div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Name</label>
                                                <input type="text" class="form-control" placeholder="Enter Name" aria-label="First name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Mobile
                                                    Number</label>
                                                <input type="number" class="form-control" placeholder="First name" aria-label="Enter Mobile number">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Email">
                                            </div>
                                        </div>


                                    </div>
                                    <input type="button" name="previous" class=" previous btn pre_btn_with btn_align com_btn next_btn" value="< | Previous" />
                                    <input type="button" name="next" class="btn btn_align next next_btn_with com_btn next_btn" value="Next | >" />
                                </fieldset>

                                <!-- {{-- step4 --}} -->
                                <fieldset>
                                    <div class="form-card">
                                        <div class="fw_get fw_personal">
                                            <h4>Payment Details</h4>
                                            <h4 class="total_title">Total Payment: <span class="fw_data"> ₹4,697</span></h4>
                                        </div>

                                        <div class="row pay_section_main">
                                            <div class="col-lg-6 col-12 ">
                                                <div class=" mb-3">
                                                    <label for="inputEmail4" class="form-label">Cardholder Name</label>
                                                    <input type="text" class="form-control" placeholder="First name" aria-label="Enter Name">
                                                </div>
                                                <div class=" mb-3">
                                                    <label for="inputState" class="form-label">Card Number</label>
                                                    <div class=" d-flex">
                                                        <div class="dropdown me-3">
                                                            <button class="btn dropdown-toggle visa_btn" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <img src="{{ asset('assets/front/images/card.png') }}" alt="">
                                                            </button>
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                                <li><button class="dropdown-item" type="button">
                                                                        <img src="{{ asset('assets/front/images/card2.png') }}" alt=""></button></li>
                                                                <li><button class="dropdown-item" type="button"><img src="{{ asset('assets/front/images/card3.png') }}" alt=""></button></li>
                                                                <li><button class="dropdown-item" type="button"><img src="{{ asset('assets/front/images/card.png') }}" alt=""></button></li>
                                                            </ul>
                                                        </div>
                                                        <div class="fw_field">
                                                            <input type="text" class="form-control" id="inputZip" placeholder="Enter Card number">
                                                        </div>
                                                    </div>


                                                </div>

                                                <div class=" mb-3">
                                                    <label for="inputEmail4" class="form-label">Expiry Date</label>
                                                    <input type="date" class="form-control" name="begin" placeholder="dd:mm:yyyy" value="" min="01-01-1997" max="12-31-2030">
                                                </div>

                                                <div class=" mb-3">
                                                    <label for="inputEmail4" class="form-label">CVV</label>
                                                    <input type="number" max="3" class="form-control" placeholder="Enter CVV code">
                                                </div>
                                                <div class="pay_section_m">
                                                    <p class="margin_pay_title">Or Pay Via</p>
                                                    <div class="d-flex fw_phone">
                                                        <div class="fw_gpay">
                                                            <img src="{{ asset('assets/front/images/gpay.png') }}" alt="">
                                                        </div>
                                                        <div class="fw_gpay">
                                                            <img src="{{ asset('assets/front/images/phone.png') }}" alt="">
                                                        </div>
                                                        <div class="fw_gpay">
                                                            <img src="{{ asset('assets/front/images/pay.png') }}" alt="">
                                                        </div>
                                                        <div class="fw_gpay">
                                                            <img src="{{ asset('assets/front/images/paytm.png') }}" alt="">
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="btn_align fw_make">
                                                    <button href="#" class=" btn com_btn" type="button">Make Payment | &gt;</button>
                                                </div>
                                            </div>


                                            <div class="col-lg-6 col-12 pay_section_margin ">
                                                <h5 class="title_add_service">Added services</h5>

                                                <div class=" fw_service">
                                                    <div class="fw_remove_btn">
                                                        <button class="remove_btn">
                                                            <img class="" src="{{ asset('assets/front/images/close-icon.png') }}" alt="">
                                                        </button>
                                                        <div class=" fw_icon_section">
                                                            <img class="fw_img" src="{{ asset('assets/front/images/charging-icon.png') }}" alt="">
                                                        </div>
                                                    </div>

                                                    <div class="fw_name_section">
                                                        <span>Battery</span>
                                                    </div>
                                                    <div class="fw_price_section">
                                                        <div class="text-end">
                                                            <span class="sc_span">₹1,999</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class=" fw_service">
                                                    <div class="fw_remove_btn ">
                                                        <button class="remove_btn">
                                                            <img class="" src="{{ asset('assets/front/images/close-icon.png') }}" alt="">
                                                        </button>

                                                        <div class=" fw_icon_section">
                                                            <img class="fw_img" src="{{ asset('assets/front/images/auxiliary-cable.png') }}" alt="">
                                                        </div>
                                                    </div>

                                                    <div class="fw_name_section">
                                                        <span>AUX Jack</span>
                                                    </div>
                                                    <div class="fw_price_section">
                                                        <div class="text-end">
                                                            <span class="sc_span">₹1,999</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="fw_service">
                                                    <div class="fw_remove_btn">
                                                        <button class="remove_btn">
                                                            <img class="" src="{{ asset('assets/front/images/close-icon.png') }}" alt="">
                                                        </button>
                                                        <div class=" fw_icon_section">
                                                            <img class="fw_img" src="{{ asset('assets/front/images/sensor.png') }}" alt="">
                                                        </div>
                                                    </div>

                                                    <div class="fw_name_section">
                                                        <span>Proximity sensor</span>
                                                    </div>
                                                    <div class="fw_price_section">
                                                        <div class="text-end">
                                                            <span class="sc_span">₹1,999</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="btn_align fw_space">
                                                    <button href="#" class=" btn com_btn" type="button">Add more | &gt;</button>
                                                </div>

                                            </div>
                                        </div>



                                    </div>
                                </fieldset>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- {{-- owl carousel --}} -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- {{-- form wizard --}} -->
<script>
    $(document).ready(function() {

        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;

        $(".next").click(function() {

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //Add Class Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 600
            });
        });

        $(".previous").click(function() {

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //Remove class active
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();

            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    previous_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 600
            });
        });

        $('.radio-group .radio').click(function() {
            $(this).parent().find('.radio').removeClass('selected');
            $(this).addClass('selected');
        });

        $(".submit").click(function() {
            return false;
        })

    });
</script>

<!-- {{-- load more --}} -->
<script>
    $(document).ready(function() {
        $(".content").slice(0, 8).show();
        $("#loadMore").on("click", function(e) {
            e.preventDefault();
            $(".content:hidden").slice(0, 8).slideDown();
            if ($(".content:hidden").length == 0) {
                $("#loadMore").text("No Content").addClass("noContent");
            }
        });

    })
</script>

<script>
    $('#product').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 2.5
            },
            600: {
                items: 4.5
            },
            1000: {
                items: 5
            }
        }
    })
</script>

<script>
    $('#fw_model').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 2.5
            },
            600: {
                items: 3.5
            },
            1000: {
                items: 5
            }
        }
    })
</script>

<script>
    $('#dv-issue').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 2.5
            },
            600: {
                items: 3.5
            },
            1000: {
                items: 5
            }
        }
    })
</script>
<script>
    var iconSelect;

    window.onload = function() {

        iconSelect = new IconSelect("my-icon-select");

        var icons = [];
        icons.push({
            'iconFilePath': 'images/icons/1.png',
            'iconValue': '1'
        });
        icons.push({
            'iconFilePath': 'images/icons/2.png',
            'iconValue': '2'
        });
        icons.push({
            'iconFilePath': 'images/icons/3.png',
            'iconValue': '3'
        });

        iconSelect.refresh(icons);

    };
</script>

<script>
    function yesnoCheck(that) {
        if (that.value == "surat") {
            document.getElementById("abc").style.display = "block";
        } else {
            document.getElementById("abc").style.display = "none";
        }

    }
</script>


@endsection
