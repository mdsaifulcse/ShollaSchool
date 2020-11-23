@extends('front.master')

@section('title')
    HSC Result| Sholla School and College
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="well">
                    <h3 class="text-center"><strong class="text-primary">Higher School Certificate (HSC) </strong> Result - {{date('Y')}} </h3> <br/>
                    @foreach($hscResults as $hscResult)
                        <div class="result">
                        <span>
                        <h4>{{$hscResult->title}}</h4>
                        <a href="{{asset($hscResult->result_file)}}" download title="{{$hscResult->title}}">Download <i class="fa fa-download" aria-hidden="true"></i></a>
                    </span>
                            <?php
                            $resultName=$hscResult->result_file;
                            $resultFileExtention=explode('.', $resultName);
                            ?>

                            @if($resultFileExtention[1]=='pdf')
                                <iframe src="http://docs.google.com/gview?url={{asset($hscResult->result_file)}}&embedded=true" style="width:100%; height:350px;" frameborder="0"></iframe>
                            @else
                                <img src="{{asset($hscResult->result_file)}}" class="img-responsive center-block" alt="{{$hscResult->title}}">
                            @endif

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection