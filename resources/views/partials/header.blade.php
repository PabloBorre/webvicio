<!-- custom-cursor -->
<div class="custom-cursor">
    <img src="{{ asset('assets/imgs/cursor/cursor-2-xs.svg') }}" alt="cursor" id="cursorImg">
</div>

<!-- Loader -->
<div class="loader-wrap">
    <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
        <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
    </svg>
    <div class="loader-wrap-heading">
        <div class="load-text">
            <span>V</span>
            <span>I</span>
            <span>C</span>
            <span>I</span>
            <span>O</span>
        </div>
    </div>
</div>

<!-- Scroll to top -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
</div>

<!-- Side toggle start -->
<aside class="fix">
    <div class="side-info">
        <div class="side-info-content">
            <div class="offset-widget offset-header">
                <div class="offset-logo">
                    <a href=">
                        <img class="show-light" src="{{ asset('assets/imgs/logo/dark-logo.png') }}" alt="{{ config('app.name') }}">
                        <img class="show-dark" src="{{ asset('assets/imgs/logo/light-logo.png') }}" alt="{{ config('app.name') }}">
                    </a>
                </div>
                <button id="side-info-close" class="side-info-close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="mobile-menu d-xl-none fix"></div>
            <div class="offset-button">
                <a href="" class="rr-btn">
                    <span class="btn-wrap">
                        <span class="text-one">Let's Talk</span>
                        <span class="text-two">Let's Talk</span>
                    </span>
                </a>
            </div>
            <div class="offset-widget-box">
                <h2 class="title">Contact Us</h2>
                <div class="contact-meta">
                    <div class="contact-item">
                        <span class="icon"><i class="fa-solid fa-location-dot"></i></span>
                        <span class="text">3891 Ranchview Dr. Richardson</span>
                    </div>
                    <div class="contact-item">
                        <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                        <span class="text"><a href="mailto:{{ config('mail.from.address', 'hello@example.com') }}">{{ config('mail.from.address', 'hello@example.com') }}</a></span>
                    </div>
                    <div class="contact-item">
                        <span class="icon"><i class="fa-solid fa-phone"></i></span>
                        <span class="text"><a href="tel:+15055550125">(505) 555-0125</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
<div class="offcanvas-overlay"></div>
<!-- Side toggle end -->

<!-- Header area start -->
<header class="header-area">
    <div class="header-main">
        <div class="container rr-container-1650">
            <div class="header-area__inner">
                <div class="header__logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/imgs/LOGO_VICIO.webp') }}" class="normal-logo" alt="{{ config('app.name') }}">
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header area end -->