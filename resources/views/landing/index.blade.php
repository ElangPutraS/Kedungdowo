@extends('ui::layouts.landing')

@push('style')
<style>
*, *:after, *:before {
  margin: 0;
  padding: 0;
}

.ml10 {
    position: relative;
    font-weight: 900;
    font-size: 4em;
}

.ml10 .text-wrapper {
    color: white;
    position: relative;
    display: inline-block;
    padding-top: 0.2em;
    padding-right: 0.05em;
    padding-bottom: 0.1em;
    overflow: hidden;
}

.ml10 .letter {
    display: inline-block;
    line-height: 1em;
    transform-origin: 0 0;
}

.svg-container {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  z-index: -1;
}

svg {
  path {
    transition: .1s;
  }

  &:hover path {
    d: path("M 800 300 Q 400 250 0 300 L 0 0 L 800 0 L 800 300 Z");
  }
}

h3 {
  font-weight: 400;
}

header {
  color: #000;
  padding-top: 10vw;
  padding-bottom: 30vw;
  text-align: center;
}

main{
  border-bottom: 1px solid rgba(0, 0, 0, .2);
  padding: 10vh 0 30vh;
  position: relative;
  text-align: center;
  overflow: hidden;

  &::after {
    border-right: 2px dashed #eee;
    content: '';
    position: absolute;
    top: calc(10vh + 1.618em);
    bottom: 0;
    left: 50%;
    width: 2px;
    height: 100%;
  }
}

footer {
  background: #dddee1;
  padding: 5vh 0;
  text-align: center;
  position: relative;
}

small {
  opacity: .5;
  font-weight: 300;

  a {
    color: inherit;
  }
}

.container{
    height: 60vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    position: relative;
}

.slider-wrapper {
    width: 2000px;
    height: 2000px;
    background: #000;
    overflow: hidden;
}

.inner-wrapper {
    width: 500%;
    height: 100%;
    position: relative;
    left: -100%;
}


.slide {
    width: calc(100%/5);
    height: 100%;
    background: lightblue;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 100px;
    font-weight: 700;
    float: left;
}

.button {
    width: 30px;
    height: 30px;
    border-top: 2px solid black;
    position: absolute;
    cursor: pointer;

}

.prev {
    border-left: 2px solid black;
    left: 10px;
    transform: rotate(-45deg);
}
.desc{
    font-size: 20px;
}

.next {
    border-right: 2px solid black;
    right: 10px;
    transform: rotate(45deg);
}

@import url(https://fonts.googleapis.com/css?family=Lora|Roboto:400,500);

body {
    margin: 0;
    padding: 0;
    font-size: 16px;
    line-height: 1.5;
    text-rendering: optimizeLegibility;
    font-variant-ligatures: none;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
    background-color: #fafafa;
}
body::before,
body::after {
    content: "";
    display: table;
    clear: both;
}
body * {
    box-sizing: inherit;
}
p, h1 {
    margin: 0; padding: 0;
}

body, .text-light-black {
    color: rgba(0,0,0,0.6);
}

@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,500,300,700);

* {
    font-family: Open Sans;
}

section {
    width: 100%;
    display: inline-block;
    background: #333;
    height: 50vh;
    text-align: center;
    font-size: 22px;
    font-weight: 700;
    text-decoration: underline;
}

.footer-distributed{
    background: #000;
    box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
    box-sizing: border-box;
    width: 100%;
    text-align: left;
    font: bold 16px sans-serif;
    padding: 55px 50px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
    display: inline-block;
    vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
    width: 40%;
}

/* The company logo */

.footer-distributed h3{
    color:  #ffffff;
    font: normal 36px 'Open Sans', cursive;
    margin: 0;
}

.footer-distributed h3 span{
    color:  lightseagreen;
}

/* Footer links */

.footer-distributed .footer-links{
    color:  #ffffff;
    margin: 20px 0 12px;
    padding: 0;
}

.footer-distributed .footer-links a{
    display:inline-block;
    line-height: 1.8;
    font-weight:400;
    text-decoration: none;
    color:  inherit;
}

.footer-distributed .footer-company-name{
    color:  #222;
    font-size: 14px;
    font-weight: normal;
    margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
    width: 35%;
}

.footer-distributed .footer-center i{
    background-color:  #33383b;
    color: #ffffff;
    font-size: 25px;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    text-align: center;
    line-height: 42px;
    margin: 10px 15px;
    vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
    font-size: 17px;
    line-height: 38px;
}

.footer-distributed .footer-center p{
    display: inline-block;
    color: #ffffff;
    font-weight:400;
    vertical-align: middle;
    margin:0;
}

.footer-distributed .footer-center p span{
    display:block;
    font-weight: normal;
    font-size:14px;
    line-height:2;
}

.footer-distributed .footer-center p a{
    color:  lightseagreen;
    text-decoration: none;;
}

.footer-distributed .footer-links a:before {
    content: "|";
    font-weight:300;
    font-size: 20px;
    left: 0;
    color: #fff;
    display: inline-block;
    padding-right: 5px;
}

.footer-distributed .footer-links .link-1:before {
    content: none;
}

/* Footer Right */

.footer-distributed .footer-right{
    width: 20%;
}

.footer-distributed .footer-company-about{
    line-height: 20px;
    color:  #92999f;
    font-size: 13px;
    font-weight: normal;
    margin: 0;
}

.footer-distributed .footer-company-about span{
    display: block;
    color:  #ffffff;
    font-size: 14px;
    font-weight: bold;
    margin-bottom: 20px;
}

.footer-distributed .footer-icons{
    margin-top: 25px;
}

.footer-distributed .footer-icons a{
    display: inline-block;
    width: 35px;
    height: 35px;
    cursor: pointer;
    background-color:  #33383b;
    border-radius: 2px;

    font-size: 20px;
    color: #ffffff;
    text-align: center;
    line-height: 35px;

    margin-right: 3px;
    margin-bottom: 5px;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

    .footer-distributed{
        font: bold 14px sans-serif;
    }

    .footer-distributed .footer-left,
    .footer-distributed .footer-center,
    .footer-distributed .footer-right{
        display: block;
        width: 100%;
        margin-bottom: 40px;
        text-align: center;
    }

    .footer-distributed .footer-center i{
        margin-left: 0;
    }

}

.back-ground{
    position: relative;
    height: 500px;
    background-image: url("{{asset('img/kdap1.jpg')}}");
    background-repeat: round;
    border-bottom-left-radius: 50% 20%;
    border-bottom-right-radius: 50% 20%;
    margin-top: 0;
    margin-bottom: 30px;
}

.embed-container {
    position: relative;
    padding-bottom: 56.25%;
    height: 0;
    overflow: hidden;
    max-width: 100%; }

.embed-container iframe, .embed-container object, .embed-container embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%; }

.btn {
    color: #ffffff;
    padding: 0.8rem;
    font-size: 14px;
    text-transform: uppercase;
    border-radius: 4px;
    font-weight: 400;
    display: block;
    width: 100%;
    cursor: pointer;
    border: 1px solid rgba(255, 255, 255, 0.2);
    background: transparent;
}

.btn:hover {
    background-color: rgba(255, 255, 255, 0.12);
}

.cards {
    display: flex;
    flex-wrap: wrap;
    list-style: none;
    margin: 0;
    padding: 0;
}

.cards_item {
    display: flex;
    padding: 1rem;
}

@media (min-width: 40rem) {
    .cards_item {
        width: 50%;
    }
}

@media (min-width: 56rem) {
    .cards_item {
        width: 33.3333%;
    }
}

.card {
    background-color: white;
    border-radius: 0.25rem;
    box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
    display: flex;
    flex-direction: column;
    overflow: hidden;
}

.card_content {
    padding: 1rem;
    background: linear-gradient(to bottom left, #EF8D9C 40%, #FFC39E 100%);
}

.card_title {
    color: #ffffff;
    font-size: 1.1rem;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: capitalize;
    margin: 0px;
}

.card_text {
    color: #ffffff;
    font-size: 0.875rem;
    line-height: 1.5;
    margin-bottom: 1.25rem;
    font-weight: 400;
}

img {
    height: auto;
    max-width: 100%;
    vertical-align: middle;
}

#slidy-container {
    width: 70%; overflow: hidden; margin: 0 auto; height: 50%;
}

.img-circle {
    border-radius: 50%;
}
.img-circle {
    border-radius: 0;
}

.ratio {
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;

    height: 0;
    padding-bottom: 100%;
    position: relative;
    width: 100%;
}
.img-circle {
    border-radius: 50%;
}
.img-responsive {
    display: block;
    height: auto;
    max-width: 100%;
}


</style>
@endpush


@section('content')

    <div class="bg">
        <!------ Include the above in your HEAD tag ---------->


        <div class="ui segment">
            <h2>Teaser Tentang Kedungdowo</h2>
            <div class="ui stackable two column very relaxed grid">
                <div class="column center aligned">
                    <div class='embed-container'>
                        <iframe src='https://www.youtube.com/embed/Dh6wEm5pygA' frameborder='0' allowfullscreen></iframe>
                    </div>
                </div>
                <div class="column">
                    <p class="desc">Berdasarkan video yang berada di Classroom, information extraction dapat memudahkan mahasiswa dalam </p>
                    <p class="desc">membuat pengingat/alarm ataupun memasukkan to-do list masing-masing terkait deadline tugas ataupun </p>
                    <p class="desc">task lainnya yang berkaitan dengan kegiatan di kampus. Dan juga dapat membantu ketika sedang melakukan </p>
                    <p class="desc">penelitian untuk mendapatkan beberapa artikel ilmiah yang sesuai dengan topik atau judul yang diambil </p>
                    <p class="desc">oleh mahasiswa.</p>
                </div>
                <div class="ui hidden divider"></div>
            </div>
        </div>

        <div class="ui segment center aligned">
            <h2>Daya Tarik Utama Kami</h2>
            <div class="ui stackable three column grid">
                <div class="column">
                    <a href="https://kedungdowopark.wordpress.com">
                        <div class="ui fluid card">
                            <div class=" card image">
                                <img src="{{asset('img/kdap.jpg')}}">
                            </div>
                            <div class="content">
                                <div class="header"> Kedungdowo Adventure Park </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="column">
                    <a href="https://kedungdowopark.wordpress.com">
                        <div class="ui fluid card">
                            <div class=" card image">
                                <img src="{{asset('img/kdap.jpg')}}">
                            </div>
                            <div class="content">
                                <div class="header">
                                    Kedungdowo Adventure Park
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="column">
                    <a href="https://kedungdowopark.wordpress.com">
                        <div class="ui fluid card">
                            <div class=" card image">
                                <img src="{{asset('img/kdap.jpg')}}">
                            </div>
                            <div class="content">
                                <div class="header">
                                    Kedungdowo Adventure Park
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <h2>Galeri Desa Kedungdowo</h2>

        <div id="slidy-container" style="width: 100%">
            <figure id="slidy">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/eyes.jpg" alt="eyes" >
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/lou.jpg" alt="lou" >
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/lucie-2.jpg" alt="lucie-2" >
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/lucie.jpg" alt="lucie" >
            </figure>
        </div>

        <div class="ui hidden divider"></div>
        <div class="ui hidden divider"></div>

        <div class="ui segment center aligned">
            <h2>Berita Terbaru</h2>
            <ul class="cards">
                <li class="cards_item">
                    <div class="card">
                        <div class="card_image"><img src="{{ asset('img/kdap1.jpg') }}"></div>
                        <div class="card_content">
                            <h2 class="card_title">Card Grid Layout</h2>
                            <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                            <button class="btn card_btn">Read More</button>
                        </div>
                    </div>
                </li>
                <li class="cards_item">
                    <div class="card">
                        <div class="card_image"><img src="{{ asset('img/kdap1.jpg') }}"></div>
                        <div class="card_content">
                            <h2 class="card_title">Card Grid Layout</h2>
                            <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                            <button class="btn card_btn">Read More</button>
                        </div>
                    </div>
                </li>
                <li class="cards_item">
                    <div class="card">
                        <div class="card_image"><img src="{{ asset('img/kdap1.jpg') }}"></div>
                        <div class="card_content">
                            <h2 class="card_title">Card Grid Layout</h2>
                            <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                            <button class="btn card_btn">Read More</button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="ui segment center aligned">
            <h2>Produk Kami</h2>
            <ul class="cards">
                <li class="cards_item">
                    <div class="card full-width">
                        <div class="card_image"><a href="http://trovacamporall.com" class="ratio img-responsive img-circle"
                                                                  style="background-image: url({{asset('img/kdap1.jpg')}});"></a></div>
                        <div style="margin-bottom: 0" class="card_content">
                            <h2 class="card_title">Card Grid Layout</h2>
                            <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                            <button class="btn card_btn">Read More</button>
                        </div>
                    </div>
                </li>
                <li class="cards_item">
                    <div class="card full-width">
                        <div class="card_image"><a href="http://trovacamporall.com" class="ratio img-responsive img-circle"
                                                   style="background-image: url({{asset('img/kdap1.jpg')}});"></a></div>
                        <div class="card_content">
                            <h2 class="card_title">Card Grid Layout</h2>
                            <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                            <button class="btn card_btn">Read More</button>
                        </div>
                    </div>
                </li>
                <li class="cards_item">
                    <div class="card full-width">
                        <div class="card_image"><a href="http://trovacamporall.com" class="ratio img-responsive img-circle"
                                                   style="background-image: url({{asset('img/kdap1.jpg')}});"></a></div>
                        <div class="card_content">
                            <h2 class="card_title">Card Grid Layout</h2>
                            <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                            <button class="btn card_btn">Read More</button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <h2 style="align-items: center ">Feedback</h2>

        <div class="ui two column stackable grid container">
            <div class="column">

                    <img class="ui tiny left floated image" src="{{asset('img/kdap.jpg')}}" style="border-radius: 50%">
                    <div class="header">Elliot Fu</div>
                    <div class="meta">Pengunjung</div>
                    <div class="description">
                        Elliot Fu is a film-maker from New York. Kayanya sih seperti itu ya
                    </div>
            </div>
            <div class="column">
                    <img class="ui tiny floated left image" src="{{asset('img/kdap.jpg')}}" style="border-radius: 50%">
                    <div class="header">Veronika Ossi</div>
                    <div class="meta">Pengunjung</div>
                    <div class="description">
                        Veronika Ossi is a set designer living in New York who enjoys kittens, music, and partying.
                    </div>
            </div>
            <div class="column">
                <img class="ui tiny left floated image" src="{{asset('img/kdap.jpg')}}" style="border-radius: 50%">
                <div class="header">Jenny Hess</div>
                <div class="meta">Perangkat Desa</div>
                <div class="description">
                    Jenny is a student studying Media Management at the New School
                </div>
            </div>
            <div class="column">
                <img class="ui tiny left floated image" src="{{asset('img/kdap.jpg')}}" style="border-radius: 50%">
                <div class="header">Anton Semedi</div>
                <div class="meta">Pengunjung</div>
                <div class="description">
                    Jenny is a student studying Media Management at the New School
                </div>
            </div>
        </div>
    </div>

@endsection

@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script>
        $('.special.cards .image').dimmer({
            on: 'hover'
        });
        $(document).ready(function() {
            // Variables
            var $curve = document.getElementById("curve");
            var last_known_scroll_position = 0;
            var defaultCurveValue = 350;
            var curveRate = 3;
            var ticking = false;
            var curveValue;

            // Handle the functionality
            function scrollEvent(scrollPos) {
                if (scrollPos >= 0 && scrollPos < defaultCurveValue) {
                    curveValue = defaultCurveValue - parseFloat(scrollPos / curveRate);
                    $curve.setAttribute(
                        "d",
                        "M 800 300 Q 400 " + curveValue + " 0 300 L 0 0 L 800 0 L 800 300 Z"
                    );
                }
            }

            // Scroll Listener
            // https://developer.mozilla.org/en-US/docs/Web/Events/scroll
            window.addEventListener("scroll", function(e) {
                last_known_scroll_position = window.scrollY;

                if (!ticking) {
                    window.requestAnimationFrame(function() {
                        scrollEvent(last_known_scroll_position);
                        ticking = false;
                    });
                }

                ticking = true;
            });
        });

        var textWrapper = document.querySelector('.ml10 .letters');
        textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>");

        anime.timeline({loop: true})
            .add({
                targets: '.ml10 .letter',
                rotateY: [-90, 0],
                duration: 1300,
                delay: function(el, i) {
                    return 45 * i;
                }
            }).add({
            targets: '.ml10',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
        });



        $(function() {

            var inWrap = $('.inner-wrapper'),
                $slide = $('.slide');


            function slideNext() {

                inWrap.animate({left: '-200%'}, 200, function() {

                    inWrap.css('left', '-100%');

                    $('.slide').last().after($('.slide').first());

                });

            }


            //Enabling auto scroll
            sliderInterval = setInterval(slideNext, 5000);



            $('.prev').on('click', function() {

                inWrap.animate({left: '0%'}, 200, function() {

                    inWrap.css('left', '-100%');

                    $('.slide').first().before($('.slide').last());

                });
            });


            $('.next').on('click', function() {

                clearInterval(sliderInterval);

                slideNext();

            });


        });

        /* user defined variables */
        var timeOnSlide = 3,
            // the time each image will remain static on the screen, measured in seconds
            timeBetweenSlides = 1,
            // the time taken to transition between images, measured in seconds

// test if the browser supports animation, and if it needs a vendor prefix to do so
            animationstring = 'animation',
            animation = false,
            keyframeprefix = '',
            domPrefixes = 'Webkit Moz O Khtml'.split(' '),
            // array of possible vendor prefixes
            pfx  = '',
            slidy = document.getElementById("slidy");
        if (slidy.style.animationName !== undefined) { animation = true; }
        // browser supports keyframe animation w/o prefixes

        if( animation === false ) {
            for( var i = 0; i < domPrefixes.length; i++ ) {
                if( slidy.style[ domPrefixes[i] + 'AnimationName' ] !== undefined ) {
                    pfx = domPrefixes[ i ];
                    animationstring = pfx + 'Animation';
                    keyframeprefix = '-' + pfx.toLowerCase() + '-';
                    animation = true;
                    break;
                }
            }
        }

        if( animation === false ) {
            // animate in JavaScript fallback
        } else {
            var images = slidy.getElementsByTagName("img"),
                firstImg = images[0],
                // get the first image inside the "slidy" element.
                imgWrap = firstImg.cloneNode(false);  // copy it.
            slidy.appendChild(imgWrap); // add the clone to the end of the images
            var imgCount = images.length, // count the number of images in the slide, including the new cloned element
                totalTime = (timeOnSlide + timeBetweenSlides) * (imgCount - 1), // calculate the total length of the animation by multiplying the number of _actual_ images by the amount of time for both static display of each image and motion between them
                slideRatio = (timeOnSlide / totalTime)*100, // determine the percentage of time an induvidual image is held static during the animation
                moveRatio = (timeBetweenSlides / totalTime)*100, // determine the percentage of time for an individual movement
                basePercentage = 100/imgCount, // work out how wide each image should be in the slidy, as a percentage.
                position = 0, // set the initial position of the slidy element
                css = document.createElement("style"); // start marking a new style sheet
            css.type = "text/css";
            css.innerHTML += "#slidy { text-align: left; margin: 0; font-size: 0; position: relative; width: " + (imgCount * 100) + "%;  }\n"; // set the width for the slidy container
            css.innerHTML += "#slidy img { float: left; width: " + basePercentage + "%; }\n";
            css.innerHTML += "@"+keyframeprefix+"keyframes slidy {\n";
            for (i=0;i<(imgCount-1); i++) { //
                position+= slideRatio; // make the keyframe the position of the image
                css.innerHTML += position+"% { left: -"+(i * 100)+"%; }\n";
                position += moveRatio; // make the postion for the _next_ slide
                css.innerHTML += position+"% { left: -"+((i+1) * 100)+"%; }\n";
            }
            css.innerHTML += "}\n";
            css.innerHTML += "#slidy { left: 0%; "+keyframeprefix+"transform: translate3d(0,0,0); "+keyframeprefix+"animation: "+totalTime+"s slidy infinite; }\n"; // call on the completed keyframe animation sequence
            document.body.appendChild(css); // add the new stylesheet to the end of the document
        }
    </script>


@endpush
