@extends('front.master')

@section('title')
    Sports Events Photo | Sholla School adn College
@endsection

@section('content')
    <div class="container">
        <div class="all-teacher">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center text-warning">SHOLLA HIGHER SECONDARY SCHOOL & College Celebrate <br/> <em class="text-success">Sports</em> </h2>
                    <br/>
                </div>
            </div>

            <div class="row">
                @foreach($sportsPhotos as $sportsPhoto)
                    <div class="col-md-3">
                        <div class="single-teacher">
                            <p class="text-center">
                                <a class="fancybox-button" rel="fancybox-button" href="{{asset($sportsPhoto->gallery_photo)}}" class="img-responsive center-block" alt="{{$sportsPhoto->caption}}">
                                    <img src="{{asset($sportsPhoto->gallery_photo)}}" class="img-responsive center-block" alt="{{$sportsPhoto->caption}}">
                                </a>
                                <span><a href="{{asset($sportsPhoto->gallery_photo)}}" download="do">Download <i class="fa fa-download" aria-hidden="true"></i></a></span>
                                <strong>{{$sportsPhoto->caption}}</strong><br/>

                            </p>
                        </div>
                    </div>
                @endforeach
            </div><!--end row================-->
        </div><!--all-teacher-->
    </div> <!--end container-->
@endsection