@extends('admin.master')

@section('title')
    Class & Section | sholla School & College
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
        <div class="col-md-12">
            <br/>
            <div class="panel">
                @if($message=Session::get('message'))
                    <h3 class="text-success text-center">{{$message}} </h3>
                @endif
                <div class="panel-heading">
                    <a  href="#modal-dialog" class="btn btn-primary btn-sm pull-right" title="Create New Section Of Class {{$classOfSchool->class_name}}" data-toggle="modal" > <i class="fa fa-plus"></i> Add New</a>
                    <h4 class="card-title">All Section Of Class- {{$classOfSchool->class_name}} </h4>
                </div>


            </div>
            <div class="panel-body">

                <!-- #modal-dialog -->
                <div class="modal fade" id="modal-dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            {!! Form::open(array('route' => 'class-section.store','class'=>'form-horizontal','method'=>'POST')) !!}
                            <div class="modal-header">
                                <h4 class="modal-title">Add New Section Of {{$classOfSchool->class_name}}</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label class="control-label col-md-3 col-sm-3"> Section Name <sup>*</sup> :</label>
                                    <div class="col-md-8 col-sm-8">
                                        {{Form::text('section_name',$value=old('section_name'),['class'=>'form-control','placeholder'=>'Class Name','required'=>true])}}
                                        {{Form::hidden('class_of_school_id',$classOfSchool->id,['class'=>'form-control','placeholder'=>'Class Name','required'=>true])}}
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <a href="javascript:;" class="btn btn-sm btn-danger" data-dismiss="modal">Close</a>
                                <button type="submit" class="btn btn-sm btn-success">Confirm</button>
                            </div>
                            {!! Form::close(); !!}
                        </div>
                    </div>
                </div> <!--  =================== End modal ===================  -->

                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Class Name</th>
                        <th>Section</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=1;?>
                    @foreach($sections as $section)

                        <tr class="odd gradeX">
                            <td>{{$i++}}</td>
                            <td>{{$section->classOfSection->class_name}}</td>
                            <td>{{$section->section_name}}</td>
                            <td>
                                @if($section->status == 1)
                                    <span><i class="fa fa-check-circle fa-2x text-success"></i></span>
                                @else
                                    <span><i class="fa fa-times fa-2x text-danger"></i></span>
                                @endif
                            </td>
                            <td>

                                {{Form::open(array('route'=>['class-section.destroy',$section->id],'method'=>'DELETE','class'=>'deleteForm','id'=>"deleteForm$section->id"))}}
                                <a  href="#modal-dialog{{$section->id}}" class="btn btn-warning btn-xs" title="Edit Class Section" data-toggle="modal" > <i class="fa fa-edit"></i></a>
                                <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Are You Sure To Delete This ?')"><i class="fa fa-trash"></i></button>
                                {!! Form::close() !!}
                            </td>


                            <!-- #modal-dialog -->
                            <div class="modal fade" id="modal-dialog{{$section->id}}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        {!! Form::open(array('route' => ['class-section.update',$section->id],'class'=>'form-horizontal','method'=>'PUT')) !!}
                                        <div class="modal-header">
                                            <h4 class="modal-title">Edit Old Session Info</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group row">
                                                <label class="control-label col-md-3 col-sm-3"> Section Name <sup>*</sup> :</label>
                                                <div class="col-md-8 col-sm-8">
                                                    {{Form::text('section_name',$value=$section->section_name,['class'=>'form-control','placeholder'=>'Class Name','required'=>true])}}
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3 col-sm-3"> Status <sup>*</sup> :</label>
                                                <div class="col-md-8 col-sm-8">
                                                    {{Form::select('status',['1'=>'Active','0'=>'Inactive'],$section->status,['class'=>'form-control','required'=>true])}}
                                                </div>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <a href="javascript:;" class="btn btn-sm btn-danger" data-dismiss="modal">Close</a>
                                            <button type="submit" class="btn btn-sm btn-success">Confirm</button>
                                        </div>
                                        {!! Form::close(); !!}
                                    </div>
                                </div>
                            </div> <!--  =================== End modal ===================  -->

                        </tr>
                    @endforeach

                    </tbody>
                </table>
                <!-- /.table-responsive -->
            </div>
        </div>
    </div>
    </div>
@endsection