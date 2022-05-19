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
        </div>
    </div>
    <div class="container-2">
        <div class="detail-container-bottom">
            <div class="detail-bottom">
                <div class="info">
                    <h3>Talent</h3>
                    <hr>
                    <div>
                        <span><b>Art by:</b></span>
                        <p>
                            @foreach ($info["artists"] as $artists)
                                <span>{{ $artists }}</span>
                            @endforeach
                        </p>
                    </div>
                    <hr>
                    <div>
                        <span><b>Written by:</b></span>
                        <p>
                            @foreach ($info["writers"] as $writers)
                                <span>{{ $writers }}</span>
                            @endforeach
                        </p>
                    </div>
                    <hr>
                </div>
                <div class="info">
                    <h3>Specs</h3>
                    <hr>
                    <div>
                        <span><b>Series:</b></span>
                        <p>{{ $info['series'] }}</p>
                    </div>
                    <hr>
                    <div>
                        <span><b>U.S. Price:</b></span>
                        <p class="gray">{{ $info['price'] }}</p>
                    </div>
                    <hr>
                    <div>
                        <span><b>On Sale Date:</b></span>
                        <p class="gray">{{ $info['sale_date'] }}</p>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div class="load-more-button">
            <button type="button">
                <a href="/comics">BACK</a>
            </button>
        </div>
    </div>
@endsection