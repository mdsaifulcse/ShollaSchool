@extends('front.master')

@section('title')
    Course Of Studies | Sholla School & College
    @endsection

@section('content')
<div class="container">
    <br/>
    <div class="well">
        <div class="row">
            <div class="col-md-3">
                <img src="{{asset($coursesStudies->image)}}" class="img-responsive img-thumbnail">
            </div>
            <div class="col-md-6">
                <div class="course-content">
                    <h2>{{$coursesStudies->title}}</h2><hr>
                    <p>
                        <?php echo $coursesStudies->contents;?>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                @include('front.includes.related')
            </div>
        </div>
    </div>
</div>
    @endsection