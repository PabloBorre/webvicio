<x-layouts::web.app :title="__('Home')">

    {{-- hero area start --}}
    <section class="hero-area">
        <div class="area-bg">
            <video class="hero-video" loop muted autoplay playsinline>
                <source src="{{ asset('assets/video/videopantallaprincipal.webm') }}" type="video/webm">
            </video>
        </div>
        <div class="container rr-container-1650">
            <div class="hero-area-inner">
                <div class="section-content">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h1 class="section-title rr_title_anim">La fiesta mas atrevida de la ciudad</h1>
                        </div>
                        
                    </div>
                    <div class="meta-list">
                        <ul>
                            <li>An award <br>
                                winning digital agency <br>
                                since - 2017</li>
                            <li>Adon <br>
                                1772 Street Charleston, <br>
                                New York</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- hero area end --}}

     {{-- work area start --}}
    <section class="work-area-2" style="background-color: #270233;">
        <div class="container rr-container-1750">
            <div class="work-area-2-inner">
                <div class="section-header">
                    <h2 class="section-title" style="color: #EECBE2;">W <span class="remove-text" style="color: #BF9BC8;">ork <span class="number">(22)</span></span></h2>
                </div>
                <div class="works-wrapper-box-2">
                    <div class="works-wrapper">
                        <div class="work-box">
                            <div class="thumb parallax-view">
                                <div class="image" data-speed="0.8" data-cursor-text="View Details" data-cursor-class="-small">
                                    <a href="#"><img src="{{ asset('assets/imgs/decoracion.webp') }}" alt="image"></a>
                                </div>
                            </div>
                        </div>
                        <div class="work-box fade-anim">
                            <div class="thumb parallax-view">
                                <div class="image" data-speed="0.8" data-cursor-text="View Details" data-cursor-class="-small">
                                    <a href="#"><img src="{{ asset('assets/imgs/leds.webp') }}" alt="image"></a>
                                </div>
                            </div>
                        </div>
                        <div class="work-box fade-anim">
                            <div class="thumb parallax-view">
                                <div class="image" data-speed="0.8" data-cursor-text="View Details" data-cursor-class="-small">
                                    <a href="#"><img src="{{ asset('assets/imgs/detalle_vicioso.webp') }}" alt="image"></a>
                                </div>
                            </div>
                        </div>
                        <div class="work-box fade-anim">
                            <div class="thumb parallax-view">
                                <div class="image" data-speed="0.8" data-cursor-text="View Details" data-cursor-class="-small">
                                    <a href="#"><img src="{{ asset('assets/imgs/detalle_vicioso2.webp') }}" alt="image"></a>
                                </div>
                            </div>
                        </div>
                        <div class="work-box fade-anim">
                            <div class="thumb parallax-view">
                                <div class="image" data-speed="0.8" data-cursor-text="View Details" data-cursor-class="-small">
                                    <a href="#"><img src="{{ asset('assets/imgs/equipo_vicio.webp') }}" alt="image"></a>
                                </div>
                            </div>
                        </div>
                        <div class="work-box fade-anim">
                            <div class="thumb parallax-view">
                                <div class="image" data-speed="0.8" data-cursor-text="View Details" data-cursor-class="-small">
                                    <a href="#"><img src="{{ asset('assets/imgs/equipo_vicio2.webp') }}" alt="image"></a>
                                </div>
                            </div>
                        </div>
                        <div class="work-box fade-anim">
                            <div class="thumb parallax-view">
                                <div class="image" data-speed="0.8" data-cursor-text="View Details" data-cursor-class="-small">
                                    <a href="#"><img src="{{ asset('assets/imgs/merchandaising.webp') }}" alt="image"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- work area end --}}

    {{-- marquee text area start --}}
    <section class="marquee-text-area section-spacing-bottom marquee-text-area--padding">
        <div class="moving-text section">
            <div class="wrapper-text">
                <h2 class="section-title rr-text-primary">Los números de la fiesta</h2>
            </div>
        </div>
    </section>
    {{-- marquee text area end --}}

    {{-- choose-us area start --}}
    <section class="choose-us section-spacing-top-130">
        <div class="choose-us__inner">
            <div class="container">
                <div class="choose-us__warpper choose-us--about fade-anim">
                    <div class="choose-us__item item-1">
                        <p>Número de fiestas</p>
                        <h2>
                            <span class="odometer" data-count="50">0</span>
                            <span class="suffix"> +</span>
                        </h2>
                    </div>
                    <div class="choose-us__item item-2">
                        <p>Visualizaciones</p>
                        <h2>
                            <span class="odometer" data-count="1">0</span>
                            <span class="suffix"> M+</span>
                        </h2>
                    </div>
                    <div class="choose-us__item item-3">
                        <p>Dj invitados</p>
                        <h2>
                            <span class="odometer" data-count="60">0</span>
                            <span class="suffix"> +</span></h2>

                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- choose-us area end --}}
 
    {{-- about-us area start --}}
    <section class="about-us">
        <div class="about-us-inner">
            <div class="container large">
                <div class="section-header fade-anim">
                    <div class="section-title-2-wrapper">
                        <div class="info">
                            <div class="text-wrapper">
                                <p class="text">La mejor <br>
                                    discoteca de <br>
                                    andalucía</p>
                                <span>(2025 - actualidad)</span>
                            </div>
                        </div>
                        <div class="title-wrapper">
                            <h2 class="section-title-2 rr_title_anim">Residencia Brø Málaga</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- about-us area end --}}


    {{-- hero image area start --}}
    <div class="hero-area-7 rr-bg-light">
        <div class="image-wrapper">
            <span class="label-left">(BRO)</span>
            <span class="label-right">(MÁLAGA)</span>
            <img src="{{ asset('assets/imgs/discotecabro.webp') }}" alt="image">
        </div>
    </div>
    {{-- hero image area end --}}


    {{-- about-us area start --}}
    <section class="about-us">
        <div class="about-us-inner">
            <div class="container large">
                <div class="section-header fade-anim">
                    <div class="section-title-2-wrapper">
                        <div class="info">
                            <div class="text-wrapper">
                                <p class="text">El beach club<br>
                                    de referencia<br>
                                    en andalucía</p>
                                <span>(2024 - actualidad)</span>
                            </div>
                        </div>
                        <div class="title-wrapper">
                            <h2 class="section-title-2 rr_title_anim">Residencia en Playa Aruba</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- about-us area end --}}


    {{-- hero image area start --}}
    <div class="hero-area-7 rr-bg-light">
        <div class="image-wrapper">
            <span class="label-left">(PLAYA)</span>
            <span class="label-right">(ARUBA)</span>
            <img src="{{ asset('assets/imgs/aruba.webp') }}" alt="image">
        </div>
    </div>
    {{-- hero image area end --}}

    {{-- marquee text area start --}}
    <section class="marquee-text-area section-spacing-bottom marquee-text-area--padding">
        <div class="moving-text section">
            <div class="wrapper-text">
                <h2 class="section-title rr-text-primary">Sesiones Dj boiler room</h2>
            </div>
        </div>
    </section>
    {{-- marquee text area end --}}

    {{-- clam slider start --}}
    <div class="clam-slider">
        <div class="horizontal-line">
            <span class="line-1"></span>
            <span class="line-2"></span>
            <span class="line-3"></span>
        </div>
        <div class="vertical-line">
            <span class="line-1"></span>
            <span class="line-2"></span>
        </div>

        {{-- Showcase Slider Holder --}}
        <div id="clam-slider-holder" data-pattern-img="{{ asset('assets/imgs/displacement/1.webp') }}">
            <div id="clam-slider-main" class="swiper-container">
                <div id="trigger-slides" class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="slide-wrap active" data-slide="0"></div>
                        <div class="clam-slider__content">
                            <div class="clam-slider__content-title">
                                <a href="#">
                                    <div class="overflow-hidden"><span>La</span></div>
                                    <div class="overflow-hidden"><span>Caminera</span></div>
                                </a>
                            </div>
                        </div>
                        <div class="clam-slider__content-wrapper">
                            <ul class="clam-slider__meta-list">
                                <li>001</li>
                                <li>Design</li>
                                <li class="year">2025</li>
                            </ul>
                        </div>
                        <a class="clam-play-btn popup-video" href="https://www.youtube.com/watch?v=UGRe8-l5eE4">
                            <i class="fa-solid fa-play"></i>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <div class="slide-wrap" data-slide="1"></div>
                        <div class="clam-slider__content">
                            <div class="clam-slider__content-title">
                                <a href="#">
                                    <div class="overflow-hidden"><span>Ansorena</span></div>
                                </a>
                            </div>
                        </div>
                        <div class="clam-slider__content-wrapper">
                            <ul class="clam-slider__meta-list">
                                <li>002</li>
                                <li>Branding</li>
                                <li class="year">2024</li>
                            </ul>
                        </div>
                        <a class="clam-play-btn popup-video" href="https://www.youtube.com/watch?v=YOUTUBE_ID_2">
                            <i class="fa-solid fa-play"></i>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <div class="slide-wrap" data-slide="2"></div>
                        <div class="clam-slider__content">
                            <div class="clam-slider__content-title">
                                <a href="#">
                                    <div class="overflow-hidden"><span>Miramono</span></div>
                                </a>
                            </div>
                        </div>
                        <div class="clam-slider__content-wrapper">
                            <ul class="clam-slider__meta-list">
                                <li>003</li>
                                <li>Development</li>
                                <li class="year">2024</li>
                            </ul>
                        </div>
                        <a class="clam-play-btn popup-video" href="https://www.youtube.com/watch?v=YOUTUBE_ID_3">
                            <i class="fa-solid fa-play"></i>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <div class="slide-wrap" data-slide="3"></div>
                        <div class="clam-slider__content">
                            <div class="clam-slider__content-title">
                                <a href="#">
                                    <div class="overflow-hidden"><span>Heaven</span></div>
                                    <div class="overflow-hidden"><span>Wood</span></div>
                                </a>
                            </div>
                        </div>
                        <div class="clam-slider__content-wrapper">
                            <ul class="clam-slider__meta-list">
                                <li>004</li>
                                <li>Design</li>
                                <li class="year">2023</li>
                            </ul>
                        </div>
                        <a class="clam-play-btn popup-video" href="https://www.youtube.com/watch?v=YOUTUBE_ID_4">
                            <i class="fa-solid fa-play"></i>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <div class="slide-wrap" data-slide="4"></div>
                        <div class="clam-slider__content">
                            <div class="clam-slider__content-title">
                                <a href="#">
                                    <div class="overflow-hidden"><span>Maserati</span></div>
                                </a>
                            </div>
                        </div>
                        <div class="clam-slider__content-wrapper">
                            <ul class="clam-slider__meta-list">
                                <li>005</li>
                                <li>Marketing</li>
                                <li class="year">2023</li>
                            </ul>
                        </div>
                        <a class="clam-play-btn popup-video" href="https://www.youtube.com/watch?v=YOUTUBE_ID_5">
                            <i class="fa-solid fa-play"></i>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <div class="slide-wrap" data-slide="5"></div>
                        <div class="clam-slider__content">
                            <div class="clam-slider__content-title">
                                <a href="#">
                                    <div class="overflow-hidden"><span>The</span></div>
                                    <div class="overflow-hidden"><span>Prado Museum</span></div>
                                </a>
                            </div>
                        </div>
                        <div class="clam-slider__content-wrapper">
                            <ul class="clam-slider__meta-list">
                                <li>006</li>
                                <li>Strategy</li>
                                <li class="year">2022</li>
                            </ul>
                        </div>
                        <a class="clam-play-btn popup-video" href="https://www.youtube.com/watch?v=YOUTUBE_ID_6">
                            <i class="fa-solid fa-play"></i>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <div class="slide-wrap" data-slide="6"></div>
                        <div class="clam-slider__content">
                            <div class="clam-slider__content-title">
                                <a href="#">
                                    <div class="overflow-hidden"><span>Cupra</span></div>
                                </a>
                            </div>
                        </div>
                        <div class="clam-slider__content-wrapper">
                            <ul class="clam-slider__meta-list">
                                <li>007</li>
                                <li>Brand Guideline</li>
                                <li class="year">2019</li>
                            </ul>
                        </div>
                        <a class="clam-play-btn popup-video" href="https://www.youtube.com/watch?v=YOUTUBE_ID_7">
                            <i class="fa-solid fa-play"></i>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <div class="slide-wrap" data-slide="7"></div>
                        <div class="clam-slider__content">
                            <div class="clam-slider__content-title">
                                <a href="#">
                                    <div class="overflow-hidden"><span>Alicia</span></div>
                                    <div class="overflow-hidden"><span>Moore</span></div>
                                </a>
                            </div>
                        </div>
                        <div class="clam-slider__content-wrapper">
                            <ul class="clam-slider__meta-list">
                                <li>008</li>
                                <li>Marketing</li>
                                <li class="year">2017</li>
                            </ul>
                        </div>
                        <a class="clam-play-btn popup-video" href="https://www.youtube.com/watch?v=YOUTUBE_ID_8">
                            <i class="fa-solid fa-play"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        {{-- Showcase Slider Holder end --}}

        {{-- canvas slider --}}
        <div id="canvas-slider" class="canvas-slider">
            <div class="slider-img" data-slide="0">
                <img class="slide-img" src="{{ asset('assets/imgs/aruba.webp') }}" alt="image">
            </div>
            <div class="slider-img" data-slide="1">
                <img class="slide-img" src="{{ asset('assets/imgs/aruba.webp') }}" alt="image">
            </div>
            <div class="slider-img" data-slide="2">
                <img class="slide-img" src="{{ asset('assets/imgs/aruba.webp') }}" alt="image">
            </div>
            <div class="slider-img" data-slide="3">
                <img class="slide-img" src="{{ asset('assets/imgs/aruba.webp') }}" alt="image">
            </div>
            <div class="slider-img" data-slide="4">
                <img class="slide-img" src="{{ asset('assets/imgs/aruba.webp') }}" alt="image">
            </div>
            <div class="slider-img" data-slide="5">
                <img class="slide-img" src="{{ asset('assets/imgs/aruba.webp') }}" alt="image">
            </div>
            <div class="slider-img" data-slide="6">
                <img class="slide-img" src="{{ asset('assets/imgs/aruba.webp') }}" alt="image">
            </div>
            <div class="slider-img" data-slide="7">
                <img class="slide-img" src="{{ asset('assets/imgs/aruba.webp') }}" alt="image">
            </div>
        </div>
        {{-- canvas slider end --}}

        {{-- arrow --}}
        <div class="clam-slider__arrow">
            <button class="clam-slider__arrow-prev">
                <i class="fa-solid fa-angle-left"></i>
            </button>
            <button class="clam-slider__arrow-next">
                <i class="fa-solid fa-angle-right"></i>
            </button>
        </div>
        {{-- arrow end --}}

        {{-- pagination --}}
        <div class="clam-slider-pagination-wrapper">
            <div class="clam-slider-pagination"></div>
        </div>
        {{-- pagination end --}}

    </div>
    {{-- clam slider end --}}



    {{-- fun fact area start --}}
    <section class="fun-fact-area section-spacing">
        
            <div class="service-6-section-header">
                <div class="section-title-wrapper fade-anim">
                    <div class="title-wrapper">
                        <h2 class="section-title-6">La fiesta</h2>
                    </div>
                </div>
            </div>
            <div class="fun-fact-area-inner fade-anim">
                <div class="fun-fact-wrapper">
                    <div class="fun-fact__item">
                        <div class="media">
                            <img src="{{ asset('assets/imgs/decoracion.webp') }}" alt="image">
    
                        </div>
                    </div>
                    
                    <div class="fun-fact__item">
                        <div class="media">
                            <img src="{{ asset('assets/imgs/decoracion.webp') }}" alt="image">
                        </div>
                    </div>

                    <div class="fun-fact__item">
                        <div class="media">
                            <img src="{{ asset('assets/imgs/decoracion.webp') }}" alt="image">
                        </div>
                    </div>

                    <div class="fun-fact__item">
                        <div class="media">
                            <img src="{{ asset('assets/imgs/decoracion.webp') }}" alt="image">
                        </div>
                    </div>

                    <div class="fun-fact__item">
                        <div class="media">
                            <img src="{{ asset('assets/imgs/decoracion.webp') }}" alt="image">
                        </div>
                    </div>

                    <div class="fun-fact__item">
                        <div class="media">
                            <img src="{{ asset('assets/imgs/decoracion.webp') }}" alt="image">
                        </div>
                    </div>

                    <div class="fun-fact__item">
                        <div class="media">
                            <img src="{{ asset('assets/imgs/decoracion.webp') }}" alt="image">
                        </div>
                    </div>

                    <div class="fun-fact__item">
                        <div class="media">
                            <img src="{{ asset('assets/imgs/decoracion.webp') }}" alt="image">
                        </div>
                    </div>

                    <div class="fun-fact__item">
                        <div class="media">
                            <img src="{{ asset('assets/imgs/decoracion.webp') }}" alt="image">
                        </div>
                    </div>

                    <div class="fun-fact__item">
                        <div class="media">
                            <img src="{{ asset('assets/imgs/decoracion.webp') }}" alt="image">
                        </div>
                    </div>
                </div>
            </div>
    </section>
    {{-- fun fact area end --}}


    


    
</x-layouts::web.app>