@extends('front-common.master')
@section('about-page')
@include('front-common.head_title', ['name' => 'Contact Us'])

<div class="contact_page">
    <section id="contact" class="con_bg">
        <div>
            <div class="row" class="con_main">
                <div class="col-xl-5 col-md-12">
                    <form>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" class="form-control contact_style" name="" value="" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <input type="email" class="form-control contact_style" name="" value="" placeholder="Your Mail">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <input type="tel" class="form-control contact_style" name="" value="" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" class="form-control contact_style" name="" value="" placeholder="Subject">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control subject_style" name="" rows="3" placeholder="Message"></textarea>
                        </div><br>

                        <div class="contact_btn">
                            <button class=" btn com_btn" type="submit" name="button">
                                Contact Us | >
                            </button>
                        </div>

                    </form>
                </div>
                <div class="col-xl-7 col-md-12 position-relative">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3736489.7218514383!2d90.21589792292741!3d23.857125486636733!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1506502314230" width="100%" height="315" frameborder="0" style="border:0" allowfullscreen></iframe>

                    <div class="d-flex justify-content-center ct_map_box">
                        <div class="ct_box_background">
                            <h6 class="ct_pera">Grandville, Rivertown Crossings</h6>
                            <p>4693 Wilson Ave SW, Ste J <br>
                                (820) 123 4567</p>
                            <div class="btn_align">
                                <button href="#" class=" btn com_btn" type="button">Read More |
                                    &gt;</button>
                            </div>
                        </div>
                        <div class="ct_box_background">
                            <h6 class="ct_pera">Grandville, Rivertown Crossings</h6>
                            <p>4693 Wilson Ave SW, Ste J <br>
                                (820) 123 4567</p>
                            <div class="btn_align">
                                <button href="#" class=" btn com_btn" type="button">Read More |
                                    &gt;</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
@endsection
