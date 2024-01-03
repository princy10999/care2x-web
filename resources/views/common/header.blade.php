<section class="head_line">
    <div class="container">
        <div class="row" style="padding-top: 10px;">
            <div class="col-sm-6 col-lg-4 col-xl-4">
                <p class="text"><i class="fa fa-map-marker pe-1" aria-hidden="true"></i>123 Lorem, Lorem ipsum, Surat.
                </p>
            </div>
            <div class="col-sm-2 col-lg-4 col-xl-4"> </div>
            <div class="col-sm-4 col-lg-4 col-xl-4 icon" style="text-align: end;">
                <div class="text">
                    <i class="fa fa-facebook-f px-3"></i>
                    <i class="fa fa-instagram px-3" aria-hidden="true"></i>
                    <i class="fa fa-twitter px-3"></i>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div>
        <!-- Please change the pen width to see the sidebar -->
        <header>
            <div class="header">
                <button class="menu-btn" aria-label="Open Menu">
                    <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"
                        aria-label="Open Menu" role="img">
                        <path d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                    </svg>
                </button>
                <div class="logo">
                    <img src="{{ asset('assets/img/header_logo.png') }}" alt="120x120">
                </div>
                <nav class="menu">
                    <div class="drawer">
                        <button class="close-btn" aria-label="Close Menu">
                            <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"
                                aria-label="Close Menu" role="img">
                                <path d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
                                </path>
                            </svg>
                        </button>
                        <p class="sub_head"><a class="active" href="{{ url('/') }}">Home</a></p>
                        <p class="sub_head"><a class="" href="{{ url('about') }}">about us</a></p>
                        <p class="sub_head"><a href="{{ url('service') }}">services</a></p>
                        <p class="sub_head"><a href="#order">Order tracking</a></p>
                        <p class="sub_head"><a href="{{ url('blog') }}">blog</a></p>
                        <p class="sub_head"><a href="{{ url('contact') }}">Contact us</a></p>
                    </div>
                    <div class="blank"></div>
                    {{-- <button class="btn main_button me-2" type="button">Get Appointment</button> --}}

                </nav>
                <div>
                    <button class="btn main_button me-2" type="button">Get Appointment</button>
                </div>
            </div>
        </header>

    </div>
</section>
