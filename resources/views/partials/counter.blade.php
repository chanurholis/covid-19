<div id="colorlib-counter" class="colorlib-counters">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-md-push-2 counter-wrap">
                <div class="row">
                    {{-- <div class="col-md-3 col-sm-6 animate-box">
                        <div class="desc">
                            <p class="wrap">
                                <span class="icon"><img width="45px" height="45px" src="{{ asset('assets/icons/add.png') }}" alt=""></span>
                                <span class="colorlib-counter js-counter" data-from="0" data-to="{{ $positif }}" data-speed="5000" data-refresh-interval="50"></span>
                            </p>
                            <span class="colorlib-counter-label">Positif</span>
                        </div>
                    </div> --}}
                    <div class="col-md-3 col-sm-6 animate-box">
                        <div class="desc">
                            <p class="wrap">
                                <span class="icon"><img width="45px" height="45px" src="{{ asset('assets/icons/leader.png') }}" alt=""></span>
                                <span class="colorlib-counter js-counter" data-from="0" data-to="{{ $sembuh }}" data-speed="5000" data-refresh-interval="50"></span>
                            </p>
                            <span class="colorlib-counter-label">Sembuh</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 animate-box">
                        <div class="desc">
                            <p class="wrap">
                                <span class="icon"><img width="45px" height="45px" src="{{ asset('assets/icons/funeral.png') }}" alt=""></span>
                                <span class="colorlib-counter js-counter" data-from="0" data-to="{{ $meninggal }}" data-speed="5000" data-refresh-interval="50"></span>
                            </p>
                            <span class="colorlib-counter-label">Meninggal</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>