<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700" rel="stylesheet">
    <script type="text/javascript" src="js/less.js" async="async"></script>

</head>
<style>
   html,
body {
  background-color: #f6f6f6;
  width: 100%;
  height: 100%;
  padding: 0;
  margin: 0;
  font-family: 'Raleway', sans-serif;
}
html *,
body * {
  box-sizing: border-box;
}
html h1,
body h1,
html h2,
body h2,
html h3,
body h3,
html h4,
body h4,
html h5,
body h5,
html h6,
body h6 {
  margin: 0;
  padding: 0;
}
html h2,
body h2 {
  font-size: 2.5em;
  font-weight: 700;
  color: #353436;
  margin-bottom: 0.8em;
}
html p,
body p {
  font-size: 14px;
  letter-spacing: 0.8px;
  line-height: 1.5;
  color: #353436;
}
html a,
body a {
  text-decoration: none;
  color: inherit;
  letter-spacing: 0.8px;
  line-height: 1.5;
}
html .container,
body .container {
  background-color: #fff;
  height: 30em;
  width: 65%;
  margin: auto;
  display: block;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: 0;
  right: 0;
  -moz-box-shadow: 5px 5px 35px 0px #cbcbcb;
  -webkit-box-shadow: 5px 5px 35px 0px #cbcbcb;
  -o-box-shadow: 5px 5px 35px 0px #cbcbcb;
  box-shadow: 5px 5px 35px 0px #cbcbcb;
  overflow: hidden;
}
html .container .wrapper,
body .container .wrapper {
  height: 100%;
  width: 100%;
  position: relative;
}
html .container .wrapper .slide,
body .container .wrapper .slide {
  height: 100%;
  width: 100%;
  background-color: #fff;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}
html .container .wrapper .slide .slide-img,
body .container .wrapper .slide .slide-img {
  width: 40%;
  float: left;
  position: relative;
  height: 100%;
}
html .container .wrapper .slide .slide-img:before,
body .container .wrapper .slide .slide-img:before {
  content: "";
  height: 0%;
  background-color: #fff;
  width: 100%;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  z-index: 5;
  transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -webkit-transition: all 0.5s ease-in-out;
}
html .container .wrapper .slide .slide-img.active:before,
body .container .wrapper .slide .slide-img.active:before {
  content: "";
  height: 100%;
  background-color: #fff;
  width: 100%;
  position: absolute;
  top: 0;
  bottom: 0;
  z-index: 5;
}
html .container .wrapper .slide .slide-img img,
body .container .wrapper .slide .slide-img img {
  height: 100%;
  width: 100%;
  object-fit: cover;
  position: absolute;
  right: 0;
  left: 0;
  margin: auto;
  top: 0;
  bottom: 0;
}
html .container .wrapper .slide .slide-content,
body .container .wrapper .slide .slide-content {
  width: 60%;
  float: left;
  padding: 10% 8% 0em 8%;
  position: relative;
}
html .container .wrapper .slide .slide-content h2,
body .container .wrapper .slide .slide-content h2 {
  position: relative;
}
html .container .wrapper .slide .slide-content h2:before,
body .container .wrapper .slide .slide-content h2:before {
  content: "";
  height: 0%;
  background-color: #fff;
  width: 100%;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  z-index: 5;
  transition: all 0.3s linear;
  -ms-transition: all 0.3s linear;
  -moz-transition: all 0.3s linear;
  -webkit-transition: all 0.3s linear;
}
html .container .wrapper .slide .slide-content h2.active:before,
body .container .wrapper .slide .slide-content h2.active:before {
  content: "";
  height: 100%;
}
html .container .wrapper .slide .slide-content p,
body .container .wrapper .slide .slide-content p {
  position: relative;
}
html .container .wrapper .slide .slide-content p:before,
body .container .wrapper .slide .slide-content p:before {
  content: "";
  height: 0%;
  background-color: #fff;
  width: 100%;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  z-index: 5;
  transition: all 0.3s linear;
  -ms-transition: all 0.3s linear;
  -moz-transition: all 0.3s linear;
  -webkit-transition: all 0.3s linear;
  transition-delay: 0.3s;
}
html .container .wrapper .slide .slide-content p.active:before,
body .container .wrapper .slide .slide-content p.active:before {
  content: "";
  height: 100%;
}
html .container .wrapper .slide .slide-content a,
body .container .wrapper .slide .slide-content a {
  color: #da566f;
  font-size: 13px;
  text-decoration: underline;
  font-weight: 600;
  display: inline-block;
  margin-top: 1em;
  position: relative;
}
html .container .wrapper .slide .slide-content a:before,
body .container .wrapper .slide .slide-content a:before {
  content: "";
  height: 0%;
  background-color: #fff;
  width: 100%;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  z-index: 5;
  transition: all 0.2s ease-in-out;
  -ms-transition: all 0.2s ease-in-out;
  -moz-transition: all 0.2s ease-in-out;
  -webkit-transition: all 0.2s ease-in-out;
  transition-delay: 0.5s;
}
html .container .wrapper .slide .slide-content a.active:before,
body .container .wrapper .slide .slide-content a.active:before {
  content: "";
  height: 100%;
}
html .container .wrapper .slide .slide-content .button,
body .container .wrapper .slide .slide-content .button {
  display: block;
  overflow: hidden;
  width: 100%;
  margin-top: 4em;
  transition: all 0.4s;
  -ms-transition: all 0.4s;
  -moz-transition: all 0.4s;
  -webkit-transition: all 0.4s;
}
html .container .wrapper .slide .slide-content .button .inactive i,
body .container .wrapper .slide .slide-content .button .inactive i {
  color: #ccc;
}
html .container .wrapper .slide .slide-content .button .inactive i:hover,
body .container .wrapper .slide .slide-content .button .inactive i:hover {
  color: #ccc;
}
html .container .wrapper .slide .slide-content .button .button-left,
body .container .wrapper .slide .slide-content .button .button-left {
  float: left;
  width: 50%;
}
html .container .wrapper .slide .slide-content .button .button-right,
body .container .wrapper .slide .slide-content .button .button-right {
  float: right;
  width: 50%;
  text-align: right;
}
html .container .wrapper .slide .slide-content .button i,
body .container .wrapper .slide .slide-content .button i {
  font-size: 1.3em;
  cursor: pointer;
  color: #555;
  transition: all 0.3s;
  -ms-transition: all 0.3s;
  -moz-transition: all 0.3s;
  -webkit-transition: all 0.3s;
}
html .container .wrapper .slide .slide-content .button i:hover,
body .container .wrapper .slide .slide-content .button i:hover {
  color: #000;
}
@media only screen and (max-width: 1024px) {
  html .container,
  body .container {
    width: 90%;
  }
}
@media only screen and (max-width: 767px) {
  html h2,
  body h2 {
    font-size: 1.5em;
  }
  html .container,
  body .container {
    width: 93%;
    margin: 3% auto;
    height: 100%;
    position: relative;
    top: 0;
    transform: inherit;
    overflow: inherit;
  }
  html .container .wrapper .slide .slide-img,
  body .container .wrapper .slide .slide-img {
    width: 100%;
    height: 45%;
  }
  html .container .wrapper .slide .slide-content,
  body .container .wrapper .slide .slide-content {
    width: 100%;
    padding: 2em 2em;
    background-color: #fff;
  }
  html .container .wrapper .slide .slide-content .button,
  body .container .wrapper .slide .slide-content .button {
    margin-top: 2em;
  }
}

</style>

<body>

    <div class="container">
        <div class="wrapper">

            <div class="slide">
                <div class="slide-img">
                    <img src="https://mariongrandvincent.github.io/HTML-Personal-website/img-codePen/letter-a.jpg"
                        alt="">
                </div>

                <div class="slide-content">
                    <h2>Daily Design Inspiration</h2>
                    <p>Part of the Daily Design Inspiration series that started it all on Abduzeedo. This is where
                        you'll find the most interesting things/finds/work curated by one of us to simply inspire your
                        day.</p>
                    <a href="#">Read More</a>

                    <div class="button">
                        <div class="btn button-left">
                            <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                        </div>
                        <div class="btn button-right">
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>


            <div class="slide">
                <div class="slide-img">
                    <img src="https://mariongrandvincent.github.io/HTML-Personal-website/img-codePen/action.jpg"
                        alt="">
                </div>

                <div class="slide-content">
                    <h2>Wallpaper of the week</h2>
                    <p>It's been a little while since our last WPW; following up our comeback with the Wallpaper of the
                        Week series, it's crazy to imagine there's more than 350+ wallpapers available to download for
                        your different...</p>
                    <a href="#">Read More</a>

                    <div class="button">
                        <div class="btn button-left">
                            <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                        </div>
                        <div class="btn button-right 2">
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>


            <div class="slide">
                <div class="slide-img">
                    <img src="https://mariongrandvincent.github.io/HTML-Personal-website/img-codePen/letter-e.jpg"
                        alt="">
                </div>

                <div class="slide-content">
                    <h2>Stunning 3D Work</h2>
                    <p>I love everything 3D, Back in the early 2000s I spent a fair amount of time trying to learn 3ds
                        Max, then Cinema 4d. It was a good time but I couldn't stand the rendering times, especially to
                        find out that my composition was bad in all senses, modeling, lighting, texture.</p>
                    <a href="#">Read More</a>

                    <div class="button">
                        <div class="btn button-left">
                            <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                        </div>
                        <div class="btn button-right">
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="js/script.js"></script>
    <script>
        var slide = document.querySelectorAll('.slide'),
            button = document.querySelectorAll('.btn'),
            current = 0;

        slide[current].style.zIndex = 2;
        button[0].classList.add('inactive');
        button[button.length - 1].classList.add('inactive');

        button = document.querySelectorAll('.btn:not(.inactive');

        for (element = 0; element < button.length; element++) {
            button[element].addEventListener('click', function() {

                for (i = 0; i < slide.length; i++) {
                    document.querySelectorAll('.slide-img')[i].classList.add('active');
                    document.querySelectorAll('.button')[i].style.opacity = "0";
                    document.querySelectorAll('.slide-content h2')[i].classList.add("active");
                    document.querySelectorAll('.slide-content p')[i].classList.add("active");
                    document.querySelectorAll('.slide-content a')[i].classList.add("active");
                }

                if (this.classList.contains('button-right')) {
                    current++;
                    if (current > slide.length - 1) {
                        current = slide.length - 1
                    }
                }
                if (this.classList.contains('button-left')) {
                    current--;
                    if (current < 0) {
                        current = 0
                    }
                }

                setTimeout(function() {
                    for (e = 0; e < slide.length; e++) {
                        slide[e].style.zIndex = "0";
                    }
                    slide[current].style.zIndex = "2";

                    for (i = 0; i < slide.length; i++) {
                        document.querySelectorAll('.slide-img')[i].classList.remove('active');
                        document.querySelectorAll('.button')[i].style.opacity = "1";
                        document.querySelectorAll('.slide-content h2')[i].classList.remove("active");
                        document.querySelectorAll('.slide-content p')[i].classList.remove("active");
                        document.querySelectorAll('.slide-content a')[i].classList.remove("active");
                    }
                }, 1000);
            });
        }
    </script>
</body>

</html>
