@extends('assets.layout')
@section('content')
    @include('assets.header')
    <section class="wrapper">
        <div class="container-fostrap">
            <a href="/city/create" class="btn btn-link btn-block">
                Add city
            </a>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="cards-list">
                            @foreach($cities as $city)
                            <div class="card">
                                <a class="img-card" href="/city/{{$city->id}}">
                                    @if($city->gallery->isEmpty())
                                        <img src="{{asset('images/img2.jpg')}}" />
                                    @else
                                        <img src="{{asset($city->gallery->random()->photo)}}" />
                                    @endif
                                </a>
                                <div class="card-content">
                                    <h4 class="card-title">
                                        <a href="/city/{{$city->id}}">{{$city->name}}</a>
                                    </h4>
                                    <p class="city_descr">{{$city->describe}}</p>
                                </div>
                                <div class="card-read-more">
                                    <a href="/city/{{$city->id}}" class="btn btn-link btn-block">
                                        Read More
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('assets.footer')
@endsection
