@extends('front.master')
@section('title')
    Alumni Students | sholla School & College
@endsection

@section('content')
    <div class="container">
        <div class="well overview history">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel panel-heading">
                            <img src="{{asset('/front/')}}/img/logo.jpg" class="img-responsive center-block img-circle overview-img" title="SHOLLA HIGHER SECONDARY SCHOOL & College" alt="SHOLLA HIGHER SECONDARY SCHOOL & College">

                            <h3 class="text-center text-success">Sholla School & College  <br/><em class="badge">Alumni students List </em></h3>
                        </div>
                        <div class="panel panel-body">
                            <div class="table-responsive">
                                <table id="table" width="100%" class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr class="bg-success">
                                        <th>Sl No</th>
                                        <th>Name</th>
                                        <th>University</th>
                                        <th>Profession</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Blood_group</th>
                                        <th>Education</th>
                                        <th>Image</th>
                                        <th>Present Address</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=1;?>
                                    @foreach($publishedalumniStudents as $publishedalumniStudent)

                                        <tr class="odd gradeX">
                                            <td>{{$i++}}</td>
                                            <td>{{$publishedalumniStudent->name}}</td>
                                            <td>{{$publishedalumniStudent->university}}</td>
                                            <td>{{$publishedalumniStudent->profession}}</td>
                                            <td>{{$publishedalumniStudent->mobile}}</td>
                                            <td>{{$publishedalumniStudent->email}}</td>
                                            <td>{{$publishedalumniStudent->blood_group}}</td>
                                            <td>{{$publishedalumniStudent->education}}</td>
                                            <td><img src="{{asset($publishedalumniStudent->image)}}" width="50" height="50"> </td>
                                            <td>{{$publishedalumniStudent->present_address}}</td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection