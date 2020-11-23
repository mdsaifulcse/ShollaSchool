@extends('front.master')

@section('title')
    Other Photo | Sholla School adn College
@endsection

@section('content')
    <div class="container">
        <div class="all-teacher">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center text-warning">SHOLLA HIGHER SECONDARY SCHOOL & College Share The <br/> <em class="text-success">Other Related Photo</em> </h2>
                    <br/>
                </div>
            </div>

            <div class="row">
                @foreach($otherPhotos as $otherPhoto)
                    <div class="col-md-3">
                        <div class="single-teacher">
                            <p class="text-center">
                                <a class="fancybox-button" rel="fancybox-button" href="{{asset($otherPhoto->gallery_photo)}}" class="img-responsive center-block" alt="{{$otherPhoto->caption}}">
                                    <img src="{{asset($otherPhoto->gallery_photo)}}" class="img-responsive center-block" alt="{{$otherPhoto->caption}}">
                                </a>
                                <span><a href="{{asset($otherPhoto->gallery_photo)}}" download="do">Download <i class="fa fa-download" aria-hidden="true"></i></a></span>
                                <strong>{{$otherPhoto->caption}}</strong><br/>

                            </p>
                        </div>
                    </div>
                @endforeach
            </div><!--end row================-->
        </div><!--all-teacher-->
    </div> <!--end container-->
@endsection