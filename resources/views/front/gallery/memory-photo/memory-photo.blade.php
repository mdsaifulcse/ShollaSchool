@extends('front.master')

@section('title')
    Momory Photo | Sholla School adn College
@endsection

@section('content')
    <div class="container">
        <div class="all-teacher">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center text-warning">SHOLLA HIGHER SECONDARY SCHOOL & College Share The <br/> <em class="text-success">Momory Photo</em> </h2>
                    <br/>
                </div>
            </div>

            <div class="row">
                @foreach($memoryPhotos as $memoryPhoto)
                    <div class="col-md-3">
                        <div class="single-teacher">
                            <p class="text-center">
                                <a class="fancybox-button" rel="fancybox-button" href="{{asset($memoryPhoto->gallery_photo)}}" class="img-responsive center-block" alt="{{$memoryPhoto->caption}}">
                                    <img src="{{asset($memoryPhoto->gallery_photo)}}" class="img-responsive center-block" alt="{{$memoryPhoto->caption}}">
                                </a>
                                <span><a href="{{asset($memoryPhoto->gallery_photo)}}" download="do">Download <i class="fa fa-download" aria-hidden="true"></i></a></span>
                                <strong>{{$memoryPhoto->caption}}</strong><br/>

                            </p>
                        </div>
                    </div>
                @endforeach
            </div><!--end row================-->
        </div><!--all-teacher-->
    </div> <!--end container-->
@endsection