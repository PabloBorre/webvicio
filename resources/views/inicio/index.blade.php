<x-layouts::web.app :title="__('Home')">

    {{-- hero area start --}}
    <section class="hero-area">
        <div class="area-bg">
            <video class="hero-video" loop muted autoplay playsinline>
                <source src="{{ asset('assets/video/wavy-layer.mp4') }}" type="video/mp4">
            </video>
        </div>
        <div class="container rr-container-1650">
            <div class="hero-area-inner">
                <div class="section-content">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h1 class="section-title rr_title_anim">We design,
                                develop and
                                build</h1>
                        </div>
                        <div class="text-wrapper">
                            <p class="text">We're a design and development agency since 2017 who craft digital masterpiece
                                products.</p>
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

</x-layouts::web.app>