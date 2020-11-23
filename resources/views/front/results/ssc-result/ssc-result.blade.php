@extends('front.master')

@section('title')
    SSC Result| Sholla School and College
@endsection

@section('content')
    <div class="container">
        <div class="row"><br/>
            <div class="col-md-10 col-md-offset-1">
                <div class="well">
                    <h3 class="text-center"><strong class="text-primary">Secondary School Certificate (SSC) </strong> Result - {{date('Y')}} </h3> <br/>
                    @foreach($sscResults as $sscResult)
                        <div class="result">
                        <span>
                        <h4>{{$sscResult->title}}</h4>
                        <a href="{{asset($sscResult->result_file)}}" download title="{{$sscResult->title}}">Download <i class="fa fa-download" aria-hidden="true"></i></a>
                    </span>
                            <?php
                            $resultName=$sscResult->result_file;
                            $resultFileExtention=explode('.', $resultName);
                            ?>

                            @if($resultFileExtention[1]=='pdf')
                                <iframe src="http://docs.google.com/gview?url={{asset($sscResult->result_file)}}&embedded=true" style="width:100%; height:350px;" frameborder="0"></iframe>
                            @else
                                <img src="{{asset($sscResult->result_file)}}" class="img-responsive center-block" alt="{{$sscResult->title}}">
                            @endif

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection