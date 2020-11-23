@extends('front.master')
@section('title')
    Third Grade Employee list | sholla School & College
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <div class="well">
                    <h2 class="teacher-info-title">Information About <br/>  <span class="text-warning">{{$stuffById->name}}</span></h2>
                    <ul class="teacher-info-nav clearfix">
                        <li>
                            <a href="#personal-info" class="tablink active-info-nav" onclick="openTab(event, 'personal-info')">Parsonal Information</a>
                        </li>
                    </ul>

                    <div class="row teacher" id="personal-info">

                        <div class="col-md-3 col-md-offset-1">
                            <img src="{{asset($stuffById->image)}}" class="img-responsive" alt="Sholla School & College">
                        </div>

                        <div class="col-md-6  table-responsive">
                            <table class="table  table-striped  table-hover ">
                                <tr>
                                    <td><strong><i class="fa fa-address-book" aria-hidden="true"></i> Name </strong></td>
                                    <td> : {{$stuffById->name}} </td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-user-circle" aria-hidden="true"></i> Gender </strong></td>
                                    <td> : {{$stuffById->gender}}</td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-user-md" aria-hidden="true"></i> Blood Group </strong></td>
                                    <td> : {{$stuffById->blood_group}}</td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-book" aria-hidden="true"></i> Religion </strong></td>
                                    <td> : {{$stuffById->religion}}</td>
                                </tr>

                                <tr>
                                    <td><strong><i class="fa fa-mobile" aria-hidden="true"></i> Mobile </strong></td>
                                    <td> : {{$stuffById->mobile}}</td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-envelope-o" aria-hidden="true"></i> eMail </strong></td>
                                    <td> : {{$stuffById->email}}</td>
                                </tr>


                                <tr>
                                    <td><strong><i class="fa fa-map-marker" aria-hidden="true"></i> Present Address </strong></td>
                                    <td> : {{$stuffById->present_address}}</td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-map-marker" aria-hidden="true"></i> Permanent Address </strong></td>
                                    <td> : {{$stuffById->parmanent_address}}</td>
                                </tr>
                            </table>
                            <a href="{{url('/stuff-list')}}" class="btn btn-success">&laquo; Back </a>
                        </div>

                    </div><!-- end  personal info-->
                </div> <!-- end well -->

            </div><!-- end col-md-12-->
        </div><!-- end first row -->
    </div><!-- end container -->
    @endsection