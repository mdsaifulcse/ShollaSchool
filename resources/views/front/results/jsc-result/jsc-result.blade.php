@extends('front.master')

@section('title')
    JSC Result | Sholla School and College
@endsection

@section('content')
    <div class="container">
        <div class="row"><br/>
            <div class="col-md-10 col-md-offset-1">
                <div class="well">
                    <h3 class="text-center"><strong class="text-primary">Junior School Certificate (JSC) </strong> Result - {{date('Y')}} </h3> <br/>
                    @foreach($jscResults as $jscResult)
                        <div class="result">
                        <span>
                        <h4>{{$jscResult->title}}</h4>
                        <a href="{{asset($jscResult->result_file)}}" download title="{{$jscResult->title}}">Download <i class="fa fa-download" aria-hidden="true"></i></a>
                    </span>
                            <?php
                            $resultName=$jscResult->result_file;
                            $resultFileExtention=explode('.', $resultName);
                            ?>

                            @if($resultFileExtention[1]=='pdf')
                                <iframe src="http://docs.google.com/gview?url={{asset($jscResult->result_file)}}&embedded=true" style="width:100%; height:350px;" frameborder="0"></iframe>
                            @else
                                <img src="{{asset($jscResult->result_file)}}" class="img-responsive center-block" alt="{{$jscResult->title}}">
                            @endif

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection