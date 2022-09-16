@php
$series = config('comics');
@endphp
<section id="main">
    <div class="container">
        <div class="row text-center">
            @foreach ($series as $serie)
                <div class="card col-2 gy-3">
                    <a href="{{ route('details', ['id' => $loop->index]) }}"><img src="{{ $serie['thumb'] }}" alt=""></a>
                    <span class="pt-3">{{ $serie['series'] }}</span>
                </div>
            @endforeach
        </div>
        <div class="row mt-4">
            <div class="col d-flex justify-content-center mb-3">
                <button class="btn btn-primary">
                    <a href="#" class="text-white">LOAD MORE</a>
                </button>
            </div>
        </div>
    </div>
    <section id="digitals" class="bg-primary">
        <div class="container">
            <div class="row py-3 text-white">
                <div class="col">
                    <img src="{{ asset('/images/digitals/buy-comics-digital-comics.png') }}" alt="">
                    <span>DIGITAL COMICS</span>
                </div>
                <div class="col">
                    <img src="{{ asset('/images/digitals/buy-comics-merchandise.png') }}" alt="">
                    <span>DC MERCHANDISE</span>
                </div>
                <div class="col">
                    <img src="{{ asset('/images/digitals/buy-comics-subscriptions.png') }}" alt="">
                    <span>SUBSRIPTION</span>
                </div>
                <div class="col">
                    <img src="{{ asset('/images/digitals/buy-comics-shop-locator.png') }}" alt="">
                    <span>SHOP LOCATOR</span>
                </div>
                <div class="col">
                    <img src="{{ asset('/images/digitals/buy-dc-power-visa.svg') }}" alt="">
                    <span>DC POWER VISA</span>
                </div>
            </div>
        </div>
    </section>
</section>
