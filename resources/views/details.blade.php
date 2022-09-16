@extends('layouts.page')
@php
$products = config('comics');
@endphp

@section('body')
    @foreach ($products as $product)
        <div class="card col-2 gy-3">
            <a href="{{ route('details', ['id' => $loop->index]) }}"><img src="{{ $product['thumb'] }}" alt=""></a>
            <span class="pt-3">{{ $product['series'] }}</span>
        </div>
    @endforeach
@endsection
