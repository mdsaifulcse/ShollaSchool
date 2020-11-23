@extends('admin.master')

@section('title')
    Update Overview | sholla School & College
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($message=Session::get('message'))
                <h3 class="text-success text-center"> {{$message}} </h3>
            @endif
            <h3 class="page-header">Sholl School & College Management</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="row bg">
        <div class="col-md-8 well">
            <div class="panel">
                <div class="panel-heading">
                    <h3><span class="glyphicon glyphicon-edit"></span> Update School Overview</h3>
                </div>
                <div class="panel-body">
                    <form id="editOverviewForm" class="form-horizontal" action="{{url('/update-Overview')}}" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="control-label col-md-3">President's  <sup>*</sup></label>
                            <div class="col-lg-9">
                                <input type="text" name="president" value="{{$overviewInfoById->president}}" class="form-control" required placeholder="enter President's name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Principal's  <sup>*</sup></label>
                            <div class="col-lg-9">
                                <input type="text" name="principal" value="{{$overviewInfoById->principal}}" class="form-control" required placeholder="enter Principal's name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Total Students  <sup>*</sup></label>
                            <div class="col-lg-9">
                                <input type="text" name="total_student" value="{{$overviewInfoById->total_student}}" class="form-control" required placeholder="enter Total Students's">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Total Teachers  <sup>*</sup></label>
                            <div class="col-lg-9">
                                <input type="text" name="total_teacher" value="{{$overviewInfoById->total_teacher}}" class="form-control" required placeholder="enter Total Teachers's">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Mobile <sup>*</sup></label>
                            <div class="col-lg-9">
                                <input type="text" name="mobile" value="{{$overviewInfoById->mobile}}" class="form-control" required placeholder="enter mobile">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Email  <sup>*</sup></label>
                            <div class="col-lg-9">
                                <input type="email" name="email" value="{{$overviewInfoById->email}}" class="form-control" required placeholder="enter President's name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Address  <sup>*</sup></label>
                            <div class="col-lg-9">
                                <textarea class="form-control" name="address" rows="4">{{$overviewInfoById->address}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="control-label col-sm-9 col-sm-offset-3">
                                <input type="hidden" name="overview_id" value="{{$overviewInfoById->id}}" />
                                <input type="submit" name="add-slider" class="btn btn-warning btn-block" value="Update School Overview Information"/>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
<script>
    document.forms['editOverviewForm'].elements['published_status'].value='{{$overviewInfoById->published_status}}';
</script>

@endsection