@extends('ui::layouts.landing')

@push('style')
<style>
@import 'https://fonts.googleapis.com/css?family=Ubuntu:300, 400, 500, 700';

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

bg {
    background-image: url("img/pantai.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
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
  color: #fff;
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
</style>
@endpush

@push('script')
    <script>
        (function() {
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
        })();

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
    </script>


@endpush
@section('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <div class="bg">
        <div class="svg-container">
            <!-- I crated SVG with: https://codepen.io/anthonydugois/pen/mewdyZ -->
            <svg viewbox="0 0 800 400" class="svg">
              <path id="curve" fill="#50c6d8" d="M 800 300 Q 400 350 0 300 L 0 0 L 800 0 L 800 300 Z">
              </path>
            </svg>
          </div>

         <header>
            <h1 class="ml10">
                <span class="text-wrapper">
                    <span class="letters">Selamat Datang di Desa Kedungdowo</span>
                </span>
            </h1>
         </header>

          <div class="ui segment">
              <main>
                <h2>Seputar Sejarah Kedungdowo.</h2>
                <img src="img/kedung.jpg">
                <h4 style="align-items:center">Tes dulu boy</h4>
              </main>
          </div>

          <div class="ui hidden divider"> </div>

          <div class="ui segment">
            <div class="ui two column very relaxed grid">
                <div class="column">
                  <main>
                    <iframe width="420" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                    </iframe>
                  </main>
                </div>
                <div class="column">
                    <main>
                        <p>Berdasarkan video yang berada di Classroom, information extraction dapat memudahkan mahasiswa dalam </p>
                        <p>membuat pengingat/alarm ataupun memasukkan to-do list masing-masing terkait deadline tugas ataupun </p>
                        <p>task lainnya yang berkaitan dengan kegiatan di kampus. Dan juga dapat membantu ketika sedang melakukan </p>
                        <p>penelitian untuk mendapatkan beberapa artikel ilmiah yang sesuai dengan topik atau judul yang diambil </p>
                        <p>oleh mahasiswa.</p>
                    </main>
                </div>
                <div class="ui hidden divider"></div>
            </div>
          </div>

          <div class="ui segment">

            <h2 style="position: relative; text-align: center"> Perangkat Desa </h2>
            <div class="ui hidden divider"></div>

            <div class="ui link cards">
                <div class="card">
                    <div class="image">
                        <img src="">
                    </div>
                    <div class="content" >
                        <div class="header"> Tumbar Sudarso </div>
                        <div class="meta">
                            <a>Kepala Desa Kedungdowo</a>
                        </div>
                        <div class="description">
                            "Saya merasa bangga menjadi kepala desa dari Desa Kedungdowo ini"
                        </div>
                    </div>
                    <div class="extra content">
                        <span class="right floated">
                         Menjabat Sejak 2019
                        </span>
                    </div>
                </div>
            </div>
          </div>
    </div>
@endsection
