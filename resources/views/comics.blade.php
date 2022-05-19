@extends('base-layout')

@section('content')
    <div class="jumbotron">
      <button type="button"><h3>CURRENT SERIES</h3></button>
    </div>
    <div class="card-container">
        <div class="cards">
            @foreach($cards as $card)
                <div class="card">
                    <a href="/detail">
                        <img src="{{ $card['thumb'] }}" alt="{{ $card['title'] }}">
                        <h2>{{ $card['title'] }}</h2>
                    </a>
                </div> 
            @endforeach
        </div>
        <div class="load-more-button">
            <button type="button">
                <a href="#">LOAD  MORE</a>
            </button>
        </div>
    </div>
@endsection