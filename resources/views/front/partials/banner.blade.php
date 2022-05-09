<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s"
                            data-wow-delay="1s">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2>{{ $banner->header }}</h2>
                                    <p>{{ $banner->description }}</p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="white-button first-button scroll-to-section">
                                        <a href="#contact">{{ $banner->apple_btn }} 
                                            <i class="{{ $banner->apple_icon }}"></i>
                                        </a>
                                    </div>
                                    <div class="white-button scroll-to-section">
                                        <a href="#contact">{{ $banner->playstore_btn }} 
                                            <i class="{{ $banner->playstore_icon }}"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src={{ asset($banner->img) }} alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
