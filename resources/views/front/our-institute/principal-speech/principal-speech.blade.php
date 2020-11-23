@extends('front.master')

@section('title')
    Pricipal speech of Sholla Scholl and College | speech
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="overview history">
                    <div class="panel panel-info">
                        <div class="panel panel-heading">
                            <img src="{{asset('/front/')}}/img/logo.jpg" class="img-responsive center-block overview-img" title="SHOLLA HIGHER SECONDARY SCHOOL & College" alt="SHOLLA HIGHER SECONDARY SCHOOL & College">
                            <h4 class="text-center">SHOLLA HIGHER SECONDARY SCHOOL & College</h4>
                        </div>
                        <div class="panel panel-body">
                            <h3 class="text-primary">Principal Speech</h3><hr>
                            <img src="{{asset($principalSpeech->person_image)}}" title="SHOLLA HIGHER SECONDARY SCHOOL & College Principal's images" class="img-responsive img-thumbnail center-block"> <br><br>
                            <p style="width:80%; margin: 0 auto "><?php echo $principalSpeech->speech_content?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection