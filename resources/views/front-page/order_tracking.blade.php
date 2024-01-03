@extends('front-common.master')
@section('about-page')
@include('front-common.head_title', ['name' => 'Order Tracking'])

<div class="container-fluid grad1_style" id="grad1">

    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-10 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform">
                            <fieldset>
                                <div class="form-card">
                                    <div class="input-group mb-3">
                                        <button class="input-group-text ot_icon ot_search"><i class="fa fa-search" aria-hidden="true"></i></button>
                                        <input type="text" class="form-control border-start-0" aria-label="Amount (to the nearest dollar)" placeholder="Search">

                                        <button class="input-group-text ot_icon ot_search"><i class="fa fa-filter" aria-hidden="true"></i></button>
                                    </div>

                                    <!-- {{-- box 1 --}} -->
                                    <a href="{{ url('order-track') }}">
                                        <div class="ot_main_div">
                                            <div class="ot_border">
                                                <div class="row ot_center">
                                                    <div class="col-2 ot_padding ot_col_width">
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
                                                            <input type="button" name="next" class="btn  next ot_received_btn" value="Order Confirmed">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="ot_border ott_border">
                                                <div class="row ot_sm_center">
                                                    <div class="col-2 ot_date_width">
                                                        <div>
                                                            <p class="ot_pera m-0">07-11-2022</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-2 ot_padding ot_col_width">
                                                        <p class="ot_pera m-0">06:10</p>

                                                    </div>
                                                    <div class="col-5 ot_padding ot_margin">
                                                        <div class="d-flex">
                                                            <div class="ot_cirlce_main">
                                                                <div class="ot_circle  "></div>
                                                            </div>
                                                            <div>
                                                                <p class="ot_head m-0">
                                                                    Query Received</p>
                                                                <p class="ot_pera m-0">Your query is received we are
                                                                    preparing for it.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3 ot_d_none"></div>
                                                </div>
                                            </div>

                                            <div class="ot_border">
                                                <div class="row ot_data">
                                                    <div class="col-4 ot_granded">
                                                        <div class="d-flex align-items-center">
                                                            <div class="">
                                                                <div class="ot_image1"></div>
                                                            </div>
                                                            <div>
                                                                <div class="ot_width">
                                                                    <p class="ot_head m-0">Vincent Grand</p>
                                                                    <p class="ot_pera m-0">Technician</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-5 ot_d_none"></div>

                                                    <div class="col-3 ot_icon_syle">
                                                        <div class="ot_query">
                                                            <div class="ot_call">
                                                                <i class="fa fa-phone"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>


                                    <!-- {{-- box 2 --}} -->
                                    <a href="{{ url('order-track') }}">
                                        <div class="ot_main_div mt-3">
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
                                                            <input type="button" name="next" class="btn  next ot_confirmed_btn" value="Order Confirmed">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="ot_border ott_border">
                                                <div class="row ot_sm_center">
                                                    <div class="col-2">
                                                        <div>
                                                            <p class="ot_pera m-0">07-11-2022</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-2 ot_padding ot_col_width">
                                                        <p class="ot_pera m-0">06:10</p>

                                                    </div>
                                                    <div class="col-5 ot_padding">
                                                        <div class="d-flex">
                                                            <div class="ot_cirlce_main">
                                                                <div class="ot_circle  "></div>
                                                            </div>
                                                            <div>
                                                                <p class="ot_head m-0">
                                                                    Query Received</p>
                                                                <p class="ot_pera m-0">Your query is received we are
                                                                    preparing for it.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3 ot_d_none"></div>
                                                </div>
                                            </div>

                                            <div class="ot_border">
                                                <div class="row ot_data">
                                                    <div class="col-4 ot_granded">
                                                        <div class="d-flex align-items-center">
                                                            <div class="">
                                                                <div class="ot_image1"></div>
                                                            </div>
                                                            <div>
                                                                <div class="ot_width">
                                                                    <p class="ot_head m-0">Vincent Grand</p>
                                                                    <p class="ot_pera m-0">Technician</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-5 ot_d_none"></div>

                                                    <div class="col-3 ot_icon_syle">
                                                        <div class="ot_query">
                                                            <div class="ot_call">
                                                                <i class="fa fa-phone"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>



                                    <!-- {{-- box 3--}} -->
                                    <a href="{{ url('order-track') }}">
                                        <div class="ot_main_div mt-3">
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
                                                            <input type="button" name="next" class="btn  next ot_delivery_btn" value="Order Confirmed">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="ot_border ott_border">
                                                <div class="row ot_sm_center">
                                                    <div class="col-2">
                                                        <div>
                                                            <p class="ot_pera m-0">07-11-2022</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-2 ot_padding ot_col_width">
                                                        <p class="ot_pera m-0">06:10</p>
                                                        </td>
                                                        <td>
                                                    </div>
                                                    <div class="col-5 ot_padding">
                                                        <div class="d-flex">
                                                            <div class="ot_cirlce_main">
                                                                <div class="ot_circle  "></div>
                                                            </div>
                                                            <div>
                                                                <p class="ot_head m-0">
                                                                    Query Received</p>
                                                                <p class="ot_pera m-0">Your query is received we are
                                                                    preparing for it.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-3 ot_d_none"></div>
                                                </div>
                                            </div>

                                            <div class="ot_border">
                                                <div class="row ot_data">
                                                    <div class="col-4 ot_granded">
                                                        <div class="d-flex align-items-center">
                                                            <div class="">
                                                                <div class="ot_image1"></div>
                                                            </div>
                                                            <div>
                                                                <div class="ot_width">
                                                                    <p class="ot_head m-0">Vincent Grand</p>
                                                                    <p class="ot_pera m-0">Technician</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-5 ot_d_none"></div>

                                                    <div class="col-3 ot_icon_syle">
                                                        <div class="ot_query">
                                                            <div class="ot_call">
                                                                <i class="fa fa-phone"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>



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
