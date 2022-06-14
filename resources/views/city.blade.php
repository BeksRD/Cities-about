@extends('assets.layout')

@section('content')
    @include('assets.header')
    <div class="container single-city">

        <h3 class="font-weight-bold">City name</h3>
        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                @if($city->gallery->isEmpty())
                    <div class="swiper-slide">
                        <img src="{{asset('images/img3.jpg')}}" alt="image">
                    </div>
                @else
                    @foreach($city->gallery as $gallery)
                        <div class="swiper-slide">
                            <img src="{{asset($gallery->photo)}}" alt="image">
                        </div>
                    @endforeach
                @endif
                <!-- Slides -->
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
        <div class="description">
            <p>{{$city->describe}}</p>
        </div>
        <br>
{{--        Comments/Reviews--}}
        <div class="container bootstrap snippets bootdey">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-comment">
                        <h3 class="text-success">Reviews</h3>
                        <hr/>
                        <ul class="comments">
                            @foreach($city->reviews as $review)
                            <li class="clearfix">
                                <img src="{{asset($review->user->avatar)}}" class="avatar" alt="">
                                <div class="post-comments">
                                    <p class="meta">{{date('d M Y', $review->created_at->timestamp)}} <br> <a href="#">{{$review->user->username}}</a> says : <i class="pull-right"></i></p>
                                    <p>
                                        {{$review->content}}
                                    </p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel col-md-10">
            <div class="panel-body d-flex">
                <form method="POST" action="/city/{{$city->id}}/reviews" class="login-form col-md-6" id="form1" >
                    @csrf
                <textarea class="form-control" name="review" rows="2" placeholder="What are you thinking?"></textarea>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </form>
                <div class="mar-top clearfix">
                    <button class="btn btn-sm btn-primary pull-right" type="submit" form="form1" value="Submit"><i class="fa fa-pencil fa-fw"></i> Share</button>
                </div>

            </div>
        </div>
    </div>
    @include('assets.footer')
    <script src="{{asset('js/script.js')}}"></script>
@endsection
