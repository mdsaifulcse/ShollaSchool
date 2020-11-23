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
                    <a  href="#modal-dialog" class="btn btn-primary btn-sm pull-right" title="Create New Class" data-toggle="modal" > <i class="fa fa-plus"></i> Add New</a>
                    <h4 class="card-title">All Class </h4>
                </div>


                </div>
                <div class="panel-body">

                    <!-- #modal-dialog -->
                    <div class="modal fade" id="modal-dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                {!! Form::open(array('route' => 'class-of-school.store','class'=>'form-horizontal','method'=>'POST')) !!}
                                <div class="modal-header">
                                    <h4 class="modal-title">Add New Class</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group row">
                                        <label class="control-label col-md-3 col-sm-3"> Class Of <sup>*</sup> :</label>
                                        <div class="col-md-8 col-sm-8">
                                            {{Form::select('class_of',['1'=>'School','2'=>'College'],[],['class'=>'form-control','placeholder'=>'Select One','required'=>true])}}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3 col-sm-3"> Class Name <sup>*</sup> :</label>
                                        <div class="col-md-8 col-sm-8">
                                            {{Form::text('class_name',$value=old('class_name'),['class'=>'form-control','placeholder'=>'Class Name','required'=>true])}}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-md-3 col-sm-3">  Details</label>
                                        <div class="col-md-8 col-sm-8">
                                            {{Form::textarea('details',$value=old('details'),['class'=>'form-control','rows'=>3,'placeholder'=>'Something about class'])}}
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
                            <th>Details</th>
                            <th>Class Of</th>
                            <th>Status</th>
                            <th>Create Section</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1;?>
                        @foreach($classes as $class)

                            <tr class="odd gradeX">
                                <td>{{$i++}}</td>
                                <td>{{$class->class_name}}</td>
                                <td>{{$class->details}}</td>
                                <td>
                                    @if($class->class_of == 1)
                                        <span><i class="fa fa-graduation-cap fa-2x text-primary"></i> School</span>
                                    @else
                                        <span><i class="fa fa-university fa-2x text-warning"> College</i></span>
                                    @endif
                                </td>
                                <td>
                                    @if($class->status == 1)
                                        <span><i class="fa fa-check-circle fa-2x text-success"></i></span>
                                    @else
                                        <span><i class="fa fa-times fa-2x text-danger"></i></span>
                                    @endif
                                </td>
                                <td><a href="{{URL::to('class-section/'.$class->id)}}" title="Create new section of class {{$class->class_name}}" class="btn btn-success">Section</a></td>
                                <td>

                                    {{Form::open(array('route'=>['class-of-school.destroy',$class->id],'method'=>'DELETE','class'=>'deleteForm','id'=>"deleteForm$class->id"))}}
                                    <a  href="#modal-dialog{{$class->id}}" class="btn btn-warning btn-xs" title="Edit Class Info" data-toggle="modal" > <i class="fa fa-edit"></i></a>
                                    <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Are You Sure To Delete This ?')"><i class="fa fa-trash"></i></button>
                                    {!! Form::close() !!}
                                </td>


                                <!-- #modal-dialog -->
                                <div class="modal fade" id="modal-dialog{{$class->id}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            {!! Form::open(array('route' => ['class-of-school.update',$class->id],'class'=>'form-horizontal','method'=>'PUT')) !!}
                                            <div class="modal-header">
                                                <h4 class="modal-title">Edit Old Class Info</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group row">
                                                    <label class="control-label col-md-3 col-sm-3"> Class Of <sup>*</sup> :</label>
                                                    <div class="col-md-8 col-sm-8">
                                                        {{Form::select('class_of',['1'=>'School','2'=>'College'],$class->class_of,['class'=>'form-control','placeholder'=>'Select One','required'=>true])}}
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label col-md-3 col-sm-3"> Class Name <sup>*</sup> :</label>
                                                    <div class="col-md-8 col-sm-8">
                                                        {{Form::text('class_name',$value=$class->class_name,['class'=>'form-control','placeholder'=>'Class Name','required'=>true])}}
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="control-label col-md-3 col-sm-3">  Details</label>
                                                    <div class="col-md-8 col-sm-8">
                                                        {{Form::textarea('details',$value=$class->details,['class'=>'form-control','rows'=>3,'placeholder'=>'Something about class'])}}
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="control-label col-md-3 col-sm-3"> Status <sup>*</sup> :</label>
                                                    <div class="col-md-8 col-sm-8">
                                                        {{Form::select('status',['1'=>'Active','0'=>'Inactive'],$class->status,['class'=>'form-control','required'=>true])}}
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
@endsection