@extends('front-common.master')
@section('home-page')
@include('front-common.head_title', ['name' => 'Services'])
<div class="serive-page">
    <section>
        <div class="sv_cantent_center">
            <div class="services">
                <div class="row">
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <div class="sv_main">
                            <div class="sv_style sv_img_com"></div>
                            <p class="sv_img">Front Camera <span class="sv_span ms-1"> Repair</span></p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <div class="sv_main">
                            <div class="sv_style2 sv_img_com"></div>
                            <p class="sv_img">Battery<span class="sv_span ms-1"> Repair</span></p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <div class="sv_main ">
                            <div class="sv_style3 sv_img_com"></div>
                            <p class="sv_img">Screen<span class="sv_span ms-1"> Repair</span></p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <div class="sv_main">
                            <div class="sv_style4 sv_img_com"></div>
                            <p class="sv_img">Water Damage<span class="sv_span ms-1"> Repair</span></p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <div class="sv_main">
                            <div class="sv_style5 sv_img_com" ></div>
                            <p class="sv_img">AUX <span class="sv_span ms-1"> Jack</span></p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <div class="sv_main">
                            <div class="sv_style6 sv_img_com"></div>
                            <p class="sv_img">Proximity<span class="sv_span ms-1"> Sensor</span></p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <div class="sv_main">
                            <div class="sv_style7 sv_img_com"></div>
                            <p class="sv_img">Call<span class="sv_span ms-1"> Receiving</span></p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <div class="sv_main">
                            <div class="sv_style8 sv_img_com"></div>
                            <p class="sv_img">Charging <span class="sv_span ms-1"> Jack</span></p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <div class="sv_main">
                            <div class="sv_style9 sv_img_com"></div>
                            <p class="sv_img">Speaker <span class="sv_span ms-1"> Repair</span></p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <div class="sv_main">
                            <div class="sv_style10 sv_img_com"></div>
                            <p class="sv_img">Back Camera <span class="sv_span ms-1"> Replace</span></p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <div class="sv_main">
                            <div class="sv_style11 sv_img_com"></div>
                            <p class="sv_img">Mic <span class="sv_span ms-1"> Repair</span></p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                        <div class="sv_main">
                            <div class="sv_style12 sv_img_com"></div>
                            <p class="sv_img">Power Button<span class="sv_span ms-1"> Repair</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service_small">
                <div class="row">
                    <div class="col-6 sv_col">
                        <div class="d-flex border1 sv_small mb-3">
                            <div class="sv_img_div">
                                <img class="sv_img me-3" src="{{ asset('assets/front/images/camera.png') }}" alt="">
                            </div>
                            <div class="sv_text_div">
                                <p class="sv_text m-0">Front Camera</p>
                            </div>
                        </div>
                        <div class="d-flex border1 sv_small mb-3">
                            <div class="sv_img_div">
                                <img class="sv_img me-3" src="{{ asset('assets/front/images/Screen_Repair.png') }}" alt="">
                            </div>
                            <div class="sv_text_div">
                                <p class="sv_text m-0">Screen Repair</p>
                            </div>
                        </div>
                        <div class="d-flex border1 sv_small mb-3">
                            <div class="sv_img_div">
                                <img class="sv_img me-3" src="{{ asset('assets/front/images/auxiliary-cable.png') }}" alt="">
                            </div>
                            <div class="sv_text_div">
                                <p class="sv_text m-0">AUX Jack</p>
                            </div>
                        </div>
                        <div class="d-flex border1 sv_small mb-3">
                            <div class="sv_img_div">
                                <img class="sv_img me-3" src="{{ asset('assets/front/images/call.png') }}" alt="">
                            </div>
                            <div class="sv_text_div">
                                <p class="sv_text m-0">Call Receiving</p>
                            </div>
                        </div>
                        <div class="d-flex border1 sv_small mb-3">
                            <div class="sv_img_div">
                                <img class="sv_img me-3" src="{{ asset('assets/front/images/speaker.png') }}" alt="">
                            </div>
                            <div class="sv_text_div">
                                <p class="sv_text m-0">Speaker</p>
                            </div>
                        </div>
                        <div class="d-flex border1 sv_small mb-3">
                            <div class="sv_img_div">
                                <img class="sv_img me-3" src="{{ asset('assets/front/images/mic.png') }}" alt="">
                            </div>
                            <div class="sv_text_div">
                                <p class="sv_text m-0">Mic Repair</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-6 sv_col">
                        <div class="d-flex border1 sv_small mb-3">
                            <div class="sv_img_div">
                                <img class="sv_img me-3" src="{{ asset('assets/front/images/charging-icon.png') }}" width="30" alt="">
                            </div>
                            <div class="sv_text_div">
                                <p class="sv_text m-0">Battery Replace</p>
                            </div>
                        </div>
                        <div class="d-flex border1 sv_small mb-3">
                            <div class="sv_img_div">
                                <img class="sv_img me-3" src="{{ asset('assets/front/images/water.png') }}" width="30" alt="">
                            </div>
                            <div class="sv_text_div">
                                <p class="sv_text m-0">Water Damage</p>
                            </div>
                        </div>
                        <div class="d-flex border1 sv_small mb-3">
                            <div class="sv_img_div">
                                <img class="sv_img me-3" src="{{ asset('assets/front/images/sensor.png') }}" width="30" alt="">
                            </div>
                            <div class="sv_text_div">
                                <p class="sv_text m-0">Proximity Sensor</p>
                            </div>
                        </div>
                        <div class="d-flex border1 sv_small mb-3">
                            <div class="sv_img_div">
                                <img class="sv_img me-3" src="{{ asset('assets/front/images/Charging Jack.png') }}" width="30" alt="">
                            </div>
                            <div class="sv_text_div">
                                <p class="sv_text m-0">Charging Jack</p>
                            </div>
                        </div>
                        <div class="d-flex border1 sv_small mb-3">
                            <div class="sv_img_div">
                                <img class="sv_img me-3" src="{{ asset('assets/front/images/camera.png') }}" width="30" alt="">
                            </div>
                            <div class="sv_text_div">
                                <p class="sv_text m-0">Back Camera</p>
                            </div>
                        </div>
                        <div class="d-flex border1 sv_small mb-3">
                            <div class="sv_img_div">
                                <img class="sv_img me-3" src="{{ asset('assets/front/images/mic.png') }}" width="30" alt="">
                            </div>
                            <div class="sv_text_div">
                                <p class="sv_text m-0">Power Button</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
