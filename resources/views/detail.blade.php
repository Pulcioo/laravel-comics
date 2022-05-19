@extends('base-layout')

@section('content')
    <!-- @dump($info) -->
    <div class="jumbotron">
        <img src="{{ $info['thumb'] }}" alt="{{ $info['title'] }}">
    </div>
    <div class="container">
        <div class="detail-container-top">
            <div class="detail-top">
                <div>
                    <h2>{{ $info['title'] }}</h2>
                    <div class="price">
                        <p>U.S. Price: <span>{{ $info['price'] }}</span></p>
                        <p>AVAILABLE</p>
                    </div>
                    <p class="description">{{ $info['description'] }}</p>
                </div>
                <div>
                    <img src="images/adv.jpg" alt="adv">
                </div>
            </div>
            <div class="load-more-button">
                <button type="button">
                    <a href="/comics">BACK</a>
                </button>
            </div>
        </div>
    </div>
@endsection