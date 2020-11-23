@extends('admin.master')

@section('title')
    Edit Speech of Presiden and Priciple | sholla School & College
@endsection


@section('content')
    <div class="row">
        <div class="col-lg-12">
            @if($message=Session::get('message'))
                <h3 class="text-success text-center"> {{$message}} </h3>
            @endif
            <h3 class="page-header">Sholl School & College Management</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="row bg">
        <div class="col-md-12 well">
            <div class="panel">
                <div class="panel-heading">
                    <h3><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Contact Information</h3>
                </div>
                <div class="panel-body">
                    <form id="editspeechForm" class="form-horizontal" action="{{url('/update-contact-info')}}" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="control-label col-md-2">Update Contact info <sup>*</sup></label>
                            <div class="col-md-10">
                                <textarea name="content_address" id="short-content"  required id="long-content"   class="form-control"  rows="8">{{$contactInfo->content_address}}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">First Mobile <sup>*</sup></label>
                            <div class=" col-md-10">
                                <input type="number" min="0" value="{{$contactInfo->first_mobile}}" name="first_mobile" required class="form-control"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">Second Mobile </label>
                            <div class=" col-md-10">
                                <input type="number" min="0" value="{{$contactInfo->second_mobile}}" name="second_mobile" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2">Email </label>
                            <div class=" col-md-10">
                                <input type="email" name="contact_email" value="{{$contactInfo->contact_email}}" required class="form-control"/>
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="control-label col-md-10 col-md-offset-2">
                               <input type="hidden" name="contact_id" value="{{$contactInfo->id}}" />
                                <input type="submit" name="add-slider" class="btn btn-warning btn-block" value="Update School Info"/>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        {{--document.forms['editspeechForm'].elements['speech_person'].value = '{{$speechById->speech_person}}';--}}
        {{--document.forms['editspeechForm'].elements['published_status'].value = '{{$speechById->published_status}}';--}}

    </script>
@endsection