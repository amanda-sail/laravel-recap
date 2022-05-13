<div id="services" class="services section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h4>Amazing <em>Services & Features</em> for you</h4>
                    <img src="assets/images/heading-line-dec.png" alt="">
                    <p>If you need the greatest collection of HTML templates for your business, please visit <a
                            rel="nofollow" href="https://www.toocss.com/" target="_blank">TooCSS</a> Blog. If you need to have a contact form PHP script, go to <a href="https://templatemo.com/contact"
                            target="_parent">our contact page</a> for more information.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($services as $service)
                <div class="col-lg-3">
                    <div class="service-item {{ $service->class }}">
                        <div class="icon" 
                        {{-- HTML with Imane --}}
                        {{-- style="background-image: url({{ asset($service->icon) }})" --}}
                        ></div>
                        <h4>{{ $service->title }}</h4>
                        <p>{!! str_replace(
                            ['(', ')'],
                            [
                                '<a rel="nofollow"
                                                href="https://paypal.me/templatemo" target="_blank">',
                                '</a>',
                            ],
                            $service->description,
                            ) !!}
                        </p>
                        <div class="text-button">
                            <a href="#">{{ $service->btn_text }} <i class="{{ $service->btn_icon }}"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
