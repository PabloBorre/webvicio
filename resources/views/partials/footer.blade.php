<!-- footer area start -->
<footer class="footer-area">
    <div class="container rr-container-1650">
        <div class="footer-widget-wrapper-box">
            <div class="footer-widget-wrapper">
                <div class="footer-widget-box content">
                    <div class="title-wrapper">
                        <h2 class="title rr_title_anim">Let's start a <br> great work
                            right <br> now
                        </h2>
                    </div>
                    <a href=" " class="rr-btn-underline">Let's get started now</a>
                </div>
                <div class="footer-widget-box">
                    <h2 class="title">Company</h2>
                    <ul class="footer-nav-list">
                        <li><a href="">Agency</a></li>
                        <li><a href="">Solutions</a></li>
                        <li><a href="">Community</a></li>
                        <li><a href="">Work</a></li>
                        <li><a href=" ">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-widget-box">
                    <h2 class="title">Social</h2>
                    <ul class="footer-nav-list">
                        <li><a href="https://www.facebook.com/" target="_blank" rel="noopener">Facebook</a></li>
                        <li><a href="https://x.com/" target="_blank" rel="noopener">Twitter</a></li>
                        <li><a href="https://dribbble.com/" target="_blank" rel="noopener">Dribbble</a></li>
                        <li><a href="https://www.instagram.com/" target="_blank" rel="noopener">Instagram</a></li>
                        <li><a href="https://www.awwwards.com/" target="_blank" rel="noopener">Awwwards</a></li>
                        <li><a href="https://www.youtube.com/" target="_blank" rel="noopener">YouTube</a></li>
                    </ul>
                </div>
                <div class="footer-widget-box">
                    <h2 class="title">Office</h2>
                    <ul class="footer-nav-list">
                        <li><a href=" ">New York</a></li>
                        <li><a href=" ">Toronto</a></li>
                        <li><a href=" ">Berlin</a></li>
                        <li><a href=" ">London</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="copyright-area-inner">
            <div class="copyright-text">
                <p class="text">© {{ date('Y') }} {{ config('app.name') }}. All rights reserved</p>
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
</script>