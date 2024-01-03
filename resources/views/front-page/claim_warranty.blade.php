@extends('front-common.master')
@section('about-page')
    {{-- owl carousel --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<div>
    <div class="container-fluid grad1_style" id="grad1">
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-10 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="msform">
                                <div class="fw_get">
                                    <h1>Warranty Claim Form</h1>
                                </div>
                                <fieldset style="display: block; opacity: 1;">
                                    <div class="form-card">
                                        <div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Mobile Number</label>
                                                <input type="text" class="form-control" placeholder="Enter mobile number" aria-label="First name">
                                            </div>
                                        </div>
                                        <h5>Choose Device Brand</h5>
                                        <div class="flex fw_device_brand claim">
                                            <div class="content fw_com_margin" style="display: block;">
                                                <img src="http://127.0.0.1:8000/assets/front/images/brand.png" alt="">
                                            </div>
                                            <div class="content fw_com_margin" style="display: block;">
                                                <img class="" src="http://127.0.0.1:8000/assets/front/images/brand2.png" alt="">
                                            </div>
                                            <div class="content fw_com_margin" style="display: block;">
                                                <img src="http://127.0.0.1:8000/assets/front/images/brand3.png" alt="">
                                            </div>
                                            <div class="content fw_com_margin" style="display: block;">
                                                <img src="http://127.0.0.1:8000/assets/front/images/brand4.png" alt="">
                                            </div>
                                            <div class="content fw_com_margin" style="display: block;">
                                                <img src="http://127.0.0.1:8000/assets/front/images/brand5.png" alt="">
                                            </div>
                                            <div class="content fw_com_margin" style="display: block;">
                                                <img src="http://127.0.0.1:8000/assets/front/images/brand6.png" alt="">
                                            </div>
                                            <div class="content fw_com_margin" style="display: block;">
                                                <img src="http://127.0.0.1:8000/assets/front/images/brand7.png" alt="">
                                            </div>
                                            <div class="content fw_com_margin" style="display: block;">
                                                <a class="fw_load" href="#" id="loadMore">See more
                                                    Brands <i class="fa fa-angle-right"></i></a>
                                            </div>
                                            <div class="content fw_com_margin">
                                                <img src="http://127.0.0.1:8000/assets/front/images/brand.png" alt="">
                                            </div>
                                            <div class="content fw_com_margin">
                                                <img class="" src="http://127.0.0.1:8000/assets/front/images/brand2.png" alt="">
                                            </div>
                                            <div class="content fw_com_margin">
                                                <img src="http://127.0.0.1:8000/assets/front/images/brand3.png" alt="">
                                            </div>
                                            <div class="content fw_com_margin">
                                                <img src="http://127.0.0.1:8000/assets/front/images/brand4.png" alt="">
                                            </div>
                                            <div class="content fw_com_margin">
                                                <img src="http://127.0.0.1:8000/assets/front/images/brand5.png" alt="">
                                            </div>
                                            <div class="content fw_com_margin">
                                                <img src="http://127.0.0.1:8000/assets/front/images/brand6.png" alt="">
                                            </div>
                                            <div class="content fw_com_margin">
                                                <img src="http://127.0.0.1:8000/assets/front/images/brand7.png" alt="">
                                            </div>
                                            <div class="content fw_com_margin">
                                                <img src="http://127.0.0.1:8000/assets/front/images/brand5.png" alt="">
                                            </div>
                                        </div>

                                        <div class="owl-product">
                                            <div class="owl-carousel owl-theme owl-loaded owl-drag" id="product">
                                            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;"><div class="owl-item"><div class="pd_item">
                                                    <div class="pd_content">
                                                        <img src="http://127.0.0.1:8000/assets/front/images/brand.png" alt="">
                                                    </div>
                                                </div></div><div class="owl-item"><div class="pd_item">
                                                    <div class="pd_content">
                                                        <img class="" src="http://127.0.0.1:8000/assets/front/images/brand2.png" alt="">
                                                    </div>
                                                </div></div><div class="owl-item"><div class="pd_item">
                                                    <div class="pd_content">
                                                        <img class="" src="http://127.0.0.1:8000/assets/front/images/brand3.png" alt="">
                                                    </div>
                                                </div></div><div class="owl-item"><div class="pd_item">
                                                    <div class="pd_content">
                                                        <img class="" src="http://127.0.0.1:8000/assets/front/images/brand4.png" alt="">
                                                    </div>
                                                </div></div><div class="owl-item"><div class="pd_item">
                                                    <div class="pd_content">
                                                        <img class="" src="http://127.0.0.1:8000/assets/front/images/brand5.png" alt="">
                                                    </div>
                                                </div></div><div class="owl-item"><div class="pd_item">
                                                    <div class="pd_content">
                                                        <img class="" src="http://127.0.0.1:8000/assets/front/images/brand6.png" alt="">
                                                    </div>
                                                </div></div><div class="owl-item"><div class="pd_item">
                                                    <div class="pd_content">
                                                        <img class="" src="http://127.0.0.1:8000/assets/front/images/brand7.png" alt="">
                                                    </div>
                                                </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
                                        </div>

                                        <p class="mt-2">Tell us issue you are facing</p>
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Write here..." id="floatingTextarea2" style="height: 100px"></textarea>
                                          </div>

                                    </div>
                                    <input type="button" name="next" class="btn btn_align next com_btn next_btn" value="Claim | >">
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

{{-- owl carousel --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    {{-- load more --}}
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
@endsection
