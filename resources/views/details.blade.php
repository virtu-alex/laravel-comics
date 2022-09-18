@extends('layouts.page')


@section('body')
    <div class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col detail-col">
                    <a href=""><img class="detail-image" src="{{ $product['thumb'] }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row w-50">
            <div class="col">
                <p class="title">{{ $product['title'] }}</p>
            </div>
        </div>
        <div class="row">
            <div class="bg-white text-dark col-8">
                <div class="row bg-success mx-1 price align-items-center">
                    <div class="col-8 py-2 text-white border-right h-100">
                        <span>U.S. Price: {{ $product['price'] }}</span>
                    </div>
                    <div class="col-4">
                        <span class="text-white">Check Availability</span>
                    </div>
                </div>
                <p>{{ $product['description'] }}</p>
            </div>
            <div class="col-4 text-right">
                <h4 class="text-secondary adv">ADVERTISEMENT</h4>
                <img src="{{ asset('../images/madv.jpg') }}" alt="">
            </div>

        </div>
    </div>
    <section class="talent-specs py-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h4 class="border-bottom pb-4">Talent</h4>
                    <div class="row m-0 border-bottom py-2">

                        <div class="col-3">
                            <span>
                                Art by:
                            </span>
                        </div>
                        <div class="col-9">
                            @foreach ($product['artists'] as $artist)
                                <span class="text-primary">{{ $artist }},</span>
                            @endforeach
                        </div>
                    </div>
                    <div class="row m-0 border-bottom py-2">
                        <div class="col-3">
                            <span>
                                Written by:
                            </span>
                        </div>
                        <div class="col-9">
                            @foreach ($product['writers'] as $writer)
                                <span class="text-primary">{{ $writer }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-6 pl-5">
                    <h4 class="border-bottom pb-4">Specs</h4>
                    <div class="row m-0 py-2 border-bottom">
                        <div class="col-3">
                            <span>Series:</span>
                        </div>
                        <div class="col-9">
                            <span class="fw-bold text-primary">{{ $product['series'] }}</span>

                        </div>
                    </div>
                    <div class="row m-0 py-2 border-bottom">
                        <div class="col-3">
                            <span>U.S. Price:</span>
                        </div>
                        <div class="col-9">
                            <span class="fw-bold">{{ $product['price'] }}</span>

                        </div>
                    </div>
                    <div class="row m-0 py-2 border-bottom">
                        <div class="col-3">
                            <span>On Sale Date:</span>
                        </div>
                        <div class="col-9">
                            <span class="fw-bold">{{ $product['sale_date'] }}</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <div class="container">
        <div class="row text-secondary fw-bold">
            <div class="col-3 p-4 d-flex justify-content-between border">
                <span>DIGITAL COMICS</span>
                <div class="icon">
                    <img class="first" src="{{ asset('../images/cta-icons.png') }}" alt="">
                </div>
            </div>
            <div class="col-3 p-4 d-flex justify-content-between border">
                <span>SHOP DC</span>
                <div class="icon">
                    <img class="second" src="{{ asset('../images/cta-icons.png') }}" alt="">
                </div>
            </div>
            <div class="col-3 p-4 d-flex justify-content-between border">
                <span>COMIC SHOP LOCATOR</span>
                <div class="icon">
                    <img class="third" src="{{ asset('../images/cta-icons.png') }}" alt="">
                </div>
            </div>
            <div class="col-3 p-4 d-flex justify-content-between border">
                <span>SUBSCRIPTION</span>
                <div class="icon">
                    <img class="fourth" src="{{ asset('../images/cta-icons.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
