@extends('.front.master')

@section('title')
    Land information of Sholla School and College
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="overview history">
                    <div class="panel panel-info">
                        <div class="panel panel-heading">
                            <img src="{{asset('/front/')}}/img/logo.jpg" class="img-responsive center-block overview-img" title="SHOLLA HIGHER SECONDARY SCHOOL & College" alt="SHOLLA HIGHER SECONDARY SCHOOL & College">
                            <h4 class="text-center">SHOLLA HIGHER SECONDARY SCHOOL & College</h4>
                        </div>
                        <div class="panel panel-body">
                            <h3 class="text-primary">{{$landInfo->title}}</h3><hr>
                            <img src="{{asset($landInfo->image)}}" title="SHOLLA HIGHER SECONDARY SCHOOL & College history images" class="img-responsive img-thumbnail center-block">

                            <?php echo $landInfo->contents;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection