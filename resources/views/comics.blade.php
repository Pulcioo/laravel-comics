@extends('base-layout')

@section('content')
    <section class="card-container">
        <div class="cards">
            @foreach($cards as $card)
                <div class="card">
                    <img src="{{ $card['thumb'] }}" alt="">
                    <h2>{{ $card['title'] }}</h2>
                </div> 
            @endforeach
        </div>
    </section>
@endsection