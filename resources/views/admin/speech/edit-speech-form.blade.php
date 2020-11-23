@extends('admin.master')

@section('title')
    Edit Speech of Presiden and Priciple | sholla School & College
@endsection


@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Sholla School & Collete Management</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="row bg">
        <div class="col-md-12 well">
            <div class="panel">
                <div class="panel-heading">
                    <h3><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Speech Information</h3>
                </div>
                <div class="panel-body">
                    <form id="editspeechForm" class="form-horizontal" action="{{url('/update-speech')}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="control-label col-md-2">Select Person Image</label>
                            <div class="col-md-10">
                                <input type="file" name="person_image"  class="form-control" accept="image/*">
                                <span class="text-danger">
                                    {{$errors->has('person_image')?$errors->first('person_image'):''}}
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2">Update Speech Content <sup>*</sup></label>
                            <div class="col-md-10">
                                <textarea name="speech_content" id="short-content"  id="long-content"  class="form-control" required rows="8">{{$speechById->speech_content}}</textarea>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-2">Select one <sup>*</sup></label>
                            <div class="col-sm-10">
                                <select name="speech_person" class="form-control" required>
                                    <option></option>
                                    <option value="president-speech">President Speech</option>
                                    <option value="principal-speech">Principal Speech</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="control-label col-md-10 col-md-offset-2">
                                <input type="hidden" name="Speech_id" value="{{$speechById->id}}" />
                                <input type="submit" name="add-slider" class="btn btn-warning btn-block btn-lg" value="Update {{$speechById->speech_person}} Info"/>
                            </div>
                        </div>
                    </form>
                    <a href="{{url('/manage-speech')}}" class="btn btn-success">&laquo; Back</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.forms['editspeechForm'].elements['speech_person'].value = '{{$speechById->speech_person}}';
        document.forms['editspeechForm'].elements['published_status'].value = '{{$speechById->published_status}}';

    </script>
@endsection