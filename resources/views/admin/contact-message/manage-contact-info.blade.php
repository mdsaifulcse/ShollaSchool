@extends('admin.master')

@section('title')
    Manage Contact Info | sholla School & College
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
                    <h3><i class="fa fa-list-ol" aria-hidden="true"></i> Contact Information</h3>
                </div>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Address</th>
                            <th>First mobile</th>
                            <th>Second Mobile</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr class="odd gradeX">
                            <td><?php echo $contactInfo->content_address;?></td>
                            <td>{{$contactInfo->first_mobile}}</td>
                            <td>{{$contactInfo->second_mobile}}</td>
                            <td>{{$contactInfo->contact_email}}</td>
                            <td>

                                <a href="{{ url('/edit-contact-info/'.$contactInfo->id) }}" class="btn btn-warning btn-xs" title="Edit Contact Info">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                    <!-- /.table-responsive -->
                </div>
            </div>
        </div>
    </div>
@endsection