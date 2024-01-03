@extends('front-common.master')
@section('about-page')
@include('front-common.head_title', ['name' => 'Order Tracking'])

<a href="{{ url('order-track') }}"></a>


<div class="container-fluid grad1_style" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-10 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform">
                            <fieldset style="display: block; opacity: 1;">

                                <div class="form-card">
                                    <div class="ot_border">
                                        <div class="row ot_center">
                                            <div class="col-2 ot_padding">
                                                <div class="ot_sm_space">
                                                    <p class="ot_head m-0">Order Id</p>
                                                    <p class="ot_pera m-0">#9956654</p>
                                                </div>
                                            </div>
                                            <div class="col-2 ot_d_none"></div>
                                            <div class="col-4 ot_padding">
                                                <div>
                                                    <p class="ot_head m-0">Device Name</p>
                                                    <p class="ot_pera m-0">Apple Iphone 13</p>
                                                </div>
                                            </div>
                                            <div class="col-4 ot_btn_padding">
                                                <div class="ot_btn_style">
                                                    <input type="button" name="next" class="btn  next ot_delivered_btn" value="Delivered">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- {{--  --}} -->

                                    <div class="hight_set">
                                        <div class="timeline">
                                            <div class="d-flex entry">
                                                <div class="ott_text ott_date">
                                                    <p class="tl_pera ot_pera">07-11-2022</p>
                                                </div>
                                                <div class="title circle1">
                                                    <p class="tl_pera ot_pera">06:10</p>
                                                </div>
                                                <div class="tl_body">
                                                    <p class="ot_head tl_pera">Query Received</p>
                                                    <p class="ot_pera tl_pera">We have received your query.</p>
                                                </div>
                                            </div>
                                            <div class="d-flex entry">
                                                <div class="ott_text">
                                                    <p class="tl_pera ot_pera">07-11-2022</p>
                                                </div>
                                                <div class="title circle2">
                                                    <p class="tl_pera ot_pera">11:30</p>
                                                </div>
                                                <div class="tl_body">
                                                    <p class="ot_head tl_pera">Order Received</p>
                                                    <p class="ot_pera tl_pera">We have received your order.</p>
                                                </div>
                                            </div>
                                            <div class="d-flex entry">
                                                <div class="ott_text">
                                                    <p class="tl_pera ot_pera">07-11-2022</p>
                                                </div>
                                                <div class="title circle3">
                                                    <p class="tl_pera ot_pera">11:30</p>
                                                </div>
                                                <div class="tl_body">
                                                    <p class="ot_head tl_pera">Order Confirmed</p>
                                                    <p class="ot_pera tl_pera">Your order has been confirmed, and it will be fulfilled shortly.</p>
                                                </div>
                                            </div>
                                            <div class="d-flex entry">
                                                <div class="ott_text">
                                                    <p class="tl_pera ot_pera">07-11-2022</p>
                                                </div>
                                                <div class="title circle4">
                                                    <p class="tl_pera ot_pera">11:30</p>
                                                </div>
                                                <div class="tl_body">
                                                    <p class="ot_head tl_pera">Ready for Pickup</p>
                                                    <p class="ot_pera tl_pera">Your device will soon be picked up by our man from your door step.</p>
                                                </div>
                                            </div>
                                            <div class="d-flex entry">
                                                <div class="ott_text">
                                                    <p class="tl_pera ot_pera">07-11-2022</p>
                                                </div>
                                                <div class="title circle5">
                                                    <p class="tl_pera ot_pera">11:30</p>
                                                </div>
                                                <div class="tl_body">
                                                    <p class="ot_head tl_pera">Order Completed</p>
                                                    <p class="ot_pera tl_pera">Your order has been finished and is prepared for delivery.</p>
                                                </div>
                                            </div>
                                            <div class="d-flex entry">
                                                <div class="ott_text">
                                                    <p class="tl_pera ot_pera">07-11-2022</p>
                                                </div>
                                                <div class="title circle6">
                                                    <p class="tl_pera ot_pera">11:30</p>
                                                </div>
                                                <div class="tl_body">
                                                    <p class="ot_head tl_pera">Ready for delivery</p>
                                                    <p class="ot_pera tl_pera">Your device will soon be delivered at your door.</p>
                                                </div>
                                            </div>
                                            <div class="d-flex entry">
                                                <div class="ott_text">
                                                    <p class="tl_pera ot_pera">07-11-2022</p>
                                                </div>
                                                <div class="title circle7">
                                                    <p class="tl_pera ot_pera">11:30</p>
                                                </div>
                                                <div class="tl_body">
                                                    <p class="ot_head tl_pera">Delivered</p>
                                                    <p class="ot_pera tl_pera">Your order is delivered</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- {{--  --}} -->

                                    <div class="ot_border">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="d-flex">
                                                    <div class="">
                                                        <div class="ot_image1"></div>
                                                    </div>
                                                    <div>
                                                        <div>
                                                            <p class="ot_head m-0">Vincent Grand</p>
                                                            <p class="ot_pera m-0">Technician</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-5"></div>
                                            <div class="col-3 ot_icon_syle">
                                                <div class="ot_query">
                                                    <div href="#" class="ot_call">
                                                        <i class="fa fa-phone"></i>
                                                    </div>
                                                </div>
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
@endsection
