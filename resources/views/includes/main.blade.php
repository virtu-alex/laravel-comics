@php
$series = config('comics');
@endphp
<section id="main">
    <div class="container">
        <div class="row text-center">
            @foreach ($series as $serie)
                <div class="card col-2 gy-3">
                    <img src="{{ $serie['thumb'] }}" alt="">
                    <span class="pt-3">{{ $serie['series'] }}</span>
                </div>
            @endforeach
        </div>
        <div class="row mt-4">
            <div class="col d-flex justify-content-center">
                <button class="btn btn-primary">
                    <a href="#" class="text-white">LOAD MORE</a>
                </button>
            </div>
        </div>
    </div>
</section>
