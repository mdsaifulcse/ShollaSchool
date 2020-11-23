@extends('front.master')

@section('title')
    Notices download | Sholla School and College
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="overview">
                    <div class="panel panel-info">
                        <div class="panel panel-heading">
                            <img src="{{asset('/front/')}}/img/logo.jpg" class="img-responsive center-block overview-img" title="SHOLLA HIGHER SECONDARY SCHOOL & College" alt="SHOLLA HIGHER SECONDARY SCHOOL & College">
                            <br/>
                            <h3 class="text-center text-success">Sholla School & College  <br/><em class="badge">Notice List </em></h3>
                        </div>

                        <div class="panel panel-body table-responsive">
                            <table id="table" class="notice-table table  table-striped table-hover">
                                <thead>
                                <tr class="bg-warning">
                                    <th>Sl No</th>
                                    <th>Subject</th>
                                    <th>Published Date</th>
                                    <th>View</th>
                                    <th>Download</th>
                                </tr>
                                </thead>

                                <tbody>
                                    @php($i=1)
                                    @foreach($publishedNotices as $publishedNotice)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$publishedNotice->subject}} </td>
                                        <td>{{date('d-m-Y',strtotime($publishedNotice->created_at))}}</td>
                                        <td>
                                            <a href="http://docs.google.com/gview?url={{asset($publishedNotice->notice_file)}}&embedded=true" target="blank"><i class="fa fa-eye" aria-hidden="true"></i> view</a>
                                        </td>
                                        <td>
                                            <a href="{{asset($publishedNotice->notice_file)}}" download=""><i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i> download</a>
                                        </td>
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
    @endsection