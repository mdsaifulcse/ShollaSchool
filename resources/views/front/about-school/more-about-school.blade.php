@extends('.front.master')

@section('title')
    School history | Sholla School and College
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="overview history">
                    <div class="panel panel-info">
                        <div class="panel panel-heading">
                            <img src="{{asset('/front/')}}/img/logo.jpg" class="img-responsive center-block overview-img" title="SHOLLA HIGHER SECONDARY SCHOOL & College" alt="SHOLLA HIGHER SECONDARY SCHOOL & College">
                            <h4 class="text-center">SHOLLA HIGHER SECONDARY SCHOOL & College</h4>
                        </div>
                        <div class="panel panel-body">
                            <h3 class="text-primary">Details About Sholla School and College</h3><hr>
                            <img src="{{asset($aboutSchoolInfo->school_image)}}" alt="SHOLLA HIGHER SECONDARY SCHOOL & College" title="SHOLLA HIGHER SECONDARY SCHOOL & College images" style="width: 100%;" class="img-responsive img-thumbnail center-block"> <br><br>
                            <p style="width: 80%; margin: 0 auto"><?php echo $aboutSchoolInfo->long_description;?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection