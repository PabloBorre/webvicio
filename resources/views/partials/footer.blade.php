<!-- footer area start -->
<footer class="footer-area">
    <div class="container rr-container-1650">
        <div class="footer-widget-wrapper-box">
            <div class="footer-widget-wrapper">
                <div class="footer-widget-box content">
                    <div class="title-wrapper">
                        <h2 class="title rr_title_anim">La fiesta más <br><span style="color:#BF9BC8;">atrevida y divertida</span><br> de la ciudad</h2>
                    </div>
                    <h3 style="color:white;">vicio the room</h3>
                </div>
                <div class="footer-widget-box">
                    <h2 class="title"><a href="https://">Aviso Legal</a></h2>
                </div>
                <div class="footer-widget-box">
                    <h2 class="title"><a href="https://">Cookies</a></h2>
                </div>
                <div class="footer-widget-box">
                    <h2 class="title"><a href="https://">Privacidad</a></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="copyright-area-inner">
            <div class="copyright-text">
                <p class="text" style="color:white;">© {{ date('Y') }} {{ config('app.name') }}. All rights reserved <a href="https://capazero.es/" style="color: white">Capazero</a> </p>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->

<!-- Dependencies JS -->
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/odometer.min.js') }}"></script>
<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/progressbar.js') }}"></script>
<script src="{{ asset('assets/js/gsap.min.js') }}"></script>
<script src="{{ asset('assets/js/ScrollSmoother.min.js') }}"></script>
<script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
<script src="{{ asset('assets/js/SplitText.min.js') }}"></script>
<script src="{{ asset('assets/js/TextPlugin.js') }}"></script>
<script src="{{ asset('assets/js/customEase.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/image-reveal-hover.js') }}"></script>
<script src="{{ asset('assets/js/tween-max.min.js') }}"></script>
<script src="{{ asset('assets/js/magiccursor.js') }}"></script>
<script src="{{ asset('assets/js/backToTop.js') }}"></script>
<script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
<script src="{{ asset('assets/js/Three.js') }}"></script>
<script src="{{ asset('assets/js/rr-devs-webgl.js') }}"></script>
<script src="{{ asset('assets/js/clam-slider.js') }}"></script>

<script>
  // Sobreescribir animaciones de hero-area-7 para soportar múltiples instancias
  document.addEventListener("DOMContentLoaded", function () {

    // Matar los ScrollTriggers que main.js creó para hero-area-7
    ScrollTrigger.getAll().forEach(function (trigger) {
      const t = trigger.vars && trigger.vars.scrollTrigger;
      const triggerEl = trigger.trigger;
      if (
        triggerEl && (
          triggerEl.classList.contains("hero-area-7") ||
          triggerEl.classList.contains("label-left") ||
          triggerEl.classList.contains("label-right")
        )
      ) {
        trigger.kill();
      }
    });

    // Re-aplicar las animaciones para cada instancia individualmente
    if (window.innerWidth > 1200) {
      gsap.utils.toArray(".hero-area-7").forEach(function (section) {
        const imageWrapper = section.querySelector(".image-wrapper");
        const labelLeft    = section.querySelector(".label-left");
        const labelRight   = section.querySelector(".label-right");

        // Expansión de imagen a pantalla completa
        gsap.to(imageWrapper, {
          scrollTrigger: {
            trigger: section,
            start: "top top",
            end: "bottom -=100%",
            scrub: 1,
            pin: true,
          },
          width: "100vw",
          height: "100vh",
          ease: "power4.inOut"
        });

        // Label izquierda
        gsap.to(labelLeft, {
          scrollTrigger: {
            trigger: section,
            start: "top 30%",
            end: "top 10%",
            scrub: true
          },
          opacity: 1,
          x: -10
        });

        // Label derecha
        gsap.to(labelRight, {
          scrollTrigger: {
            trigger: section,
            start: "top 30%",
            end: "top 10%",
            scrub: true
          },
          opacity: 1,
          x: 10
        });
      });

      ScrollTrigger.refresh();
    }
  });
</script>

<style>

/* clam slider embebido en homepage */
    .clam-slider #canvas-slider {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .clam-slider {
        position: relative;
        height: 100vh;
        overflow: hidden;
    }

    .clam-play-btn {
        position: absolute;
        left: 50%;
        bottom: 290px;
        transform: translateX(-50%);
        width: 72px;
        height: 72px;
        background: #270233;
        border: 1px solid #BF9BC8;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #EECBE2;
        font-size: 20px;
        transition: all 0.3s ease;
        z-index: 10;
    }
    .clam-play-btn:hover {
        background: #BF9BC8;
        color: #270233;
        transform: translateX(-50%) scale(1.1);
    }

    .flip-word {
    display: inline-block;
    overflow: hidden;
    vertical-align: bottom;
    perspective: 400px;
}
.flip-word span.word-inner {
    display: inline-block;
    transform-origin: top center;
}
.flip-word.flip-out span.word-inner {
    animation: flipOut 0.2s ease-in forwards;
}
.flip-word.flip-in span.word-inner {
    animation: flipIn 0.2s ease-out forwards;
}
@keyframes flipOut {
    0%   { transform: rotateX(0deg);   opacity: 1; }
    100% { transform: rotateX(-90deg); opacity: 0; }
}
@keyframes flipIn {
    0%   { transform: rotateX(90deg);  opacity: 0; }
    100% { transform: rotateX(0deg);   opacity: 1; }
}


.work-area-2 .section-header .section-title {
    white-space: nowrap;
}

.work-area-2 .section-header {
    overflow: visible;
}

#work-flip-word {
    overflow: visible;
    max-width: 100vw;
}

.work-area-2 .section-header .section-title {
    font-size: clamp(40px, 12vw, 250px);
}
</style>



<script>
gsap.utils.toArray('.fun-fact-area-inner').forEach((section, index) => {
    const w = section.querySelector('.fun-fact-wrapper');
    const [x, xEnd] = (index % 2) ? [(section.offsetWidth - w.scrollWidth), 0] : [0, section.offsetWidth - w.scrollWidth];
    gsap.fromTo(w, { x }, {
        x: xEnd,
        scrollTrigger: {
            trigger: ".fun-fact-area",
            scrub: 1,
            start: "bottom bottom",
            pin: true,
        }
    });
});
ScrollTrigger.refresh();

// clam slider video popup
$('.clam-play-btn').magnificPopup({
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: true,
});

setTimeout(function () {
    if (!document.querySelector('.works-wrapper-box-2') || window.innerWidth <= 768) return;

    const workSection   = document.querySelector('.work-area-2');
    const sectionHeader = workSection.querySelector('.section-header');
    const flipEl        = document.getElementById('work-flip-word');
    const boxes         = workSection.querySelectorAll('.work-box[data-word]');
    let   currentWord   = boxes[0] ? boxes[0].dataset.word : '';

    function flipTo(newWord) {
        if (newWord === currentWord || !flipEl) return;
        currentWord = newWord;

        flipEl.classList.remove('flip-in');
        flipEl.classList.add('flip-out');

        setTimeout(function () {
            flipEl.querySelector('.word-inner').textContent = newWord;
            flipEl.classList.remove('flip-out');
            flipEl.classList.add('flip-in');
        }, 200);
    }

    // Matar el trigger global de .section-header que pueda haber creado main.js
    ScrollTrigger.getAll().forEach(function (t) {
        if (t.vars && t.vars.pin === '.section-header') t.kill();
    });

    // Pin del header mientras scrollea el wrapper
    gsap.timeline({
        scrollTrigger: {
            trigger: sectionHeader,
            start: "top top",
            end: () => "+=" + workSection.querySelector('.works-wrapper-box-2').offsetHeight,
            pin: sectionHeader,
            pinSpacing: false,
            scrub: 3,
        }
    });

    // Un ScrollTrigger por cada work-box para detectar cuál está en pantalla
    boxes.forEach(function (box) {
        ScrollTrigger.create({
            trigger: box,
            start: "top 60%",
            end: "bottom 40%",
            onEnter:      () => flipTo(box.dataset.word),
            onEnterBack:  () => flipTo(box.dataset.word),
        });
    });

    ScrollTrigger.refresh();
}, 00);
</script>