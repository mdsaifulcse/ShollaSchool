@extends('admin.master')

@section('title')
    Add New Teacher | sholla School & College
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3 class="page-header">Sholl School & College Management</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row bg">
        <div class="col-md-12">
            <div class="panel">
                @if($message=Session::get('message'))
                    <h3 class="text-success text-center"> {{$message}} </h3>
                @endif
                <div class="panel-heading">
                    <h3><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New Teacher</h3>
                </div>
                <div class="panel-body">
                    <form class="" action="{{url('/new-teacher-education')}}" method="POST">
                        {{csrf_field()}}
                        <div class="educational-info">
                            <h3 class="text-success">Educational Information</h3><hr/>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label text-danger">Select Teacher Name <sup>*</sup></label>
                                        <select name="teacher_id" class="form-control select" required>
                                            <option></option>
                                            @foreach($teachersPersonalInfos as $teachersPersonalInfo)
                                            <option value="{{$teachersPersonalInfo->id}}">{{$teachersPersonalInfo->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <table class="table table-bordered  ">
                                    <tr class="bg-warning">
                                        <td>
                                            <div class="col-md-2">
                                                <label>Education Type </label>
                                                <input type="text" name="b_ed" value="B.ED" readonly class="form-control"/>
                                            </div>
                                            <div class="col-md-3">
                                                <label>Group/Mejor Subject</label>
                                                <input type="text" name="bed_subject" class="form-control"/>
                                            </div>
                                            <div class="col-md-3">
                                                <label>Boart / Institute</label>
                                                <input type="text" name="bed_board" class="form-control"/>
                                            </div>
                                            <div class="col-md-2">
                                                <label>GPA/Division</label>
                                                <input type="text" name="bed_result" class="form-control" placeholder="(5.00) / 1st Class" />
                                            </div>
                                            <div class="col-md-2">
                                                <label>Passing Year</label>
                                                <input type="text" name="bed_passing_year" autocomplete="off"  class="form-control datepicker"/>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div> <!--end row==================-->
                            <div class="row">
                                <table class="table table-bordered  ">
                                    <tr class="bg-info">
                                        <td>
                                            <div class="col-md-2">
                                                <label>Education Type </label>
                                                <input type="text" name="masters" value="Masters" readonly class="form-control"/>
                                            </div>
                                            <div class="col-md-3">
                                                <label>Group/Mejor Subject</label>
                                                <input type="text" name="masters_subject" class="form-control"/>
                                            </div>
                                            <div class="col-md-3">
                                                <label>Board / Institute</label>
                                                <input type="text" name="masters_board" class="form-control"/>
                                            </div>
                                            <div class="col-md-2">
                                                <label>GPA/Division</label>
                                                <input type="text" name="masters_result" class="form-control" placeholder="(5.00) / 1st Class" />
                                            </div>
                                            <div class="col-md-2">
                                                <label>Passing Year</label>
                                                <input type="text" name="masters_passing_year" autocomplete="off" class="form-control datepicker"/>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div> <!--end row==================-->
                            <div class="row">
                                <table class="table table-bordered  ">
                                    <tr class="bg-warning">
                                        <td>
                                            <div class="col-md-2">
                                                <label>Education Type </label>
                                                <input type="text" name="graduation" value="Graduation" readonly class="form-control"/>
                                            </div>
                                            <div class="col-md-3">
                                                <label>Group/Mejor Subject</label>
                                                <input type="text" name="graduation_subject"   class="form-control"/>
                                            </div>
                                            <div class="col-md-3">
                                                <label>Board / Institute</label>
                                                <input type="text" name="graduation_board"   class="form-control"/>
                                            </div>
                                            <div class="col-md-2">
                                                <label>GPA/Division</label>
                                                <input type="text" name="graduation_result"   class="form-control" placeholder="(5.00) / 1st Class"  />
                                            </div>
                                            <div class="col-md-2">
                                                <label>Passing Year</label>
                                                <input type="text" name="graduation_passing_year" autocomplete="off"  class="form-control datepicker"/>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div> <!--end row==================-->
                            <div class="row">
                                <table class="table table-bordered  ">
                                    <tr class="bg-info">
                                        <td>
                                            <div class="col-md-2">
                                                <label>Education Type </label>
                                                <input type="text" name="hsc" value="HSC" readonly class="form-control"/>
                                            </div>
                                            <div class="col-md-3">
                                                <label>Group/Mejor Subject <sup>*</sup></label>
                                                <input type="text" name="hsc_group" required  class="form-control"/>
                                            </div>
                                            <div class="col-md-3">
                                                <label>Board <sup>*</sup></label>
                                                <input type="text" name="hsc_board" required  class="form-control"/>
                                            </div>
                                            <div class="col-md-2">
                                                <label>GPA/Division <sup>*</sup></label>
                                                <input type="text" name="hsc_result"   class="form-control" placeholder="(5.00) / 1st Class" required />
                                            </div>
                                            <div class="col-md-2">
                                                <label>Passing Year <sup>*</sup></label>
                                                <input type="text" name="hsc_passing_year" autocomplete="off" required class="form-control datepicker"/>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div> <!--end row==================-->
                            <div class="row">
                                <table class="table table-bordered  ">
                                    <tr class="bg-warning">
                                        <td>
                                            <div class="col-md-2">
                                                <label>Education Type </label>
                                                <input type="text" name="ssc" value="SSC" readonly class="form-control"/>
                                            </div>
                                            <div class="col-md-3">
                                                <label>Group/Mejor Subject <sup>*</sup></label>
                                                <input type="text" name="ssc_group" required  class="form-control"/>
                                            </div>
                                            <div class="col-md-3">
                                                <label>Board <sup>*</sup></label>
                                                <input type="text" name="ssc_board" required  class="form-control"/>
                                            </div>
                                            <div class="col-md-2">
                                                <label>GPA/Division <sup>*</sup></label>
                                                <input type="text" name="ssc_result"   class="form-control" placeholder="(5.00) / 1st Class" required />
                                            </div>
                                            <div class="col-md-2">
                                                <label>Passing Year <sup>*</sup></label>
                                                <input type="text" name="ssc_passing_year" autocomplete="off" required class="form-control datepicker"/>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div> <!--end row==================-->
                        </div> <!--educational-info=========================================-->
                        <div class="teachint-info">
                            <h3 class="text-success">Teaching Information</h3><hr/>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label"> Designation <sup>*</sup></label>
                                        <select name="designation" class="form-control" required>
                                            <option></option>
                                            <option value="Principal">Principal</option>
                                            <option value="Assistant-professor">Assistant-professor</option>
                                            <option value="Lecturer">Lecturer</option>
                                            <option value="Headmaster">Headmaster</option>
                                            <option value="Assistant-Headmaster">Assistant-Headmaster</option>
                                            <option value="Assistant-Teacher">Assistant-Teacher</option>
                                            <option value="Assistant-laibrarian">Assistant-laibrarian</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label"> Special in</label>
                                        <input type="text" name="special_in" class="form-control" placeholder="can be math, english,accounting"/>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label"> Teacher Type <sup>*</sup></label>
                                        <input type="text" name="teacher_type" class="form-control" placeholder="parmanent / internship / Other" required />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label"> Joining Date </label>
                                        <input type="text" name="join_date" class="form-control datepicker" autocomplete="off"/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label></label>
                                    <input type="submit" name="teacher_education"  value="Save Educational Information" class="btn btn-warning btn-lg btn-block" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection