@php
$series = config('comics');
@endphp
<section id="main">
    <div class="container row">
        <div class="card">
            @foreach ($series as $serie)
                <img src="{{ $serie['thumb'] }}" alt="">
                <span>{{ $serie['series'] }}</span>
            @endforeach
        </div>
    </div>
</section>
