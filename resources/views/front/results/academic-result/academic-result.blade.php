@extends('front.master')

@section('title')
    Academic Result | SHOLLA HIGHER SECONDARY SCHOOL & College
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1"><br/>
                <div class="well">
                    <h3 class="text-center"><strong class="text-primary">Academic </strong> Result - {{date('Y')}} </h3> <br/>
                    @foreach($academicResults as $academicResult)
                    <div class="result">
                        <span>
                        <h4>{{$academicResult->title}}</h4>
                        <a href="{{asset($academicResult->result_file)}}" download title="{{$academicResult->title}}">Download <i class="fa fa-download" aria-hidden="true"></i></a>
                    </span>
                        <?php
                            $resultName=$academicResult->result_file;
                            $resultFileExtention=explode('.', $resultName);
                        ?>

                        @if($resultFileExtention[1]=='pdf')
                            <iframe src="http://docs.google.com/gview?url={{asset($academicResult->result_file)}}&embedded=true" style="width:100%; height:350px;" frameborder="0"></iframe>
                            @else
                            <img src="{{asset($academicResult->result_file)}}" class="img-responsive center-block" alt="{{$academicResult->title}}">
                            @endif


                    </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
    @endsection