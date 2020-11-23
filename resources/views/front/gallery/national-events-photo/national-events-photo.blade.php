@extends('front.master')

@section('title')
    National Events Photo | Sholla School adn College
@endsection

@section('content')
    <div class="container">
        <div class="all-teacher">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center text-warning">SHOLLA HIGHER SECONDARY SCHOOL & College Celebrate <br/> <em class="text-success">National Event</em> </h2>
                    <br/>
                </div>
            </div>

            <div class="row">
                @foreach($nationalEventPhotos as $nationalEventPhoto)
                <div class="col-md-3">
                    <div class="single-teacher">
                        <p class="text-center">
                            <a class="fancybox-button" rel="fancybox-button" href="{{asset($nationalEventPhoto->gallery_photo)}}" class="img-responsive center-block" alt="{{$nationalEventPhoto->caption}}">
                                <img src="{{asset($nationalEventPhoto->gallery_photo)}}" class="img-responsive center-block" alt="{{$nationalEventPhoto->caption}}">
                            </a>
                            <span><a href="{{asset($nationalEventPhoto->gallery_photo)}}" download="do">Download <i class="fa fa-download" aria-hidden="true"></i></a></span>
                            <strong>{{$nationalEventPhoto->caption}}</strong><br/>

                        </p>
                    </div>
                </div>
                    @endforeach
            </div><!--end row================-->
        </div><!--all-teacher-->
    </div> <!--end container-->
@endsection