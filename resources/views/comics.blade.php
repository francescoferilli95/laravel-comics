@extends('layouts.main')

@section('head-title', 'Comics | DC Comics')

@section('content')
<main class="content">
    <section class="container">
        <div class="cards">
            @foreach ($cards as $card)
                <div class="card">
                    <img src="{{ $card['image'] }}" alt="">
                    <h3>{{ $card['title'] }}</h3>
                    <p class="text-center">Price: {{ $card['price'] }}€</p>
                </div>
            @endforeach
        </div>
    </section>
    <div class="blue"></div>
</main>

@endsection
