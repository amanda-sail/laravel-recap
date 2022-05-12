<div id="clients" class="the-clients">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading">
                    <h4>Check What <em>The Clients Say</em> About Our App Dev</h4>
                    <img src="assets/images/heading-line-dec.png" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eismod tempor incididunt ut
                        labore et dolore magna.</p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="naccs">
                    <div class="grid">
                        <div class="row">
                            <div class="col-lg-7 align-self-center">
                                <div class="menu">
                                    @foreach ($clients as $client)
                                        <div class="{{ $client->class }}">
                                            <div class="thumb">
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-4 col-12">
                                                        <h4>{{ $client->name }}</h4>
                                                        <span class="date">{{ $client->date }}</span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                        <span
                                                            class="category">{{ $client->category }}</span>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-4 col-12">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <span class="rating">{{ $client->rating }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <ul class="nacc">
                                    @foreach ($clients as $client)
                                        <li class="{{ $client->class }}">
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="client-content">
                                                                <img src={{ asset('images/quote.png') }} alt="">
                                                                <p>{{ $client->comment }}</p>
                                                            </div>
                                                            <div class="down-content">
                                                                <img src={{ asset($client->profile_pic ) }}
                                                                    alt="">
                                                                <div class="right-content">
                                                                    <h4>{{ $client->name }}</h4>
                                                                    <span>{{ $client->position }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
