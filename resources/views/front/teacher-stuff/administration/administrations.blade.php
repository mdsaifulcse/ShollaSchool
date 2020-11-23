@extends('front.master')
@section('title')
    Administrator list | sholla School & College
@endsection

@section('content')
    <div class="container">
        <div class="all-teacher">
            <div class="row">
                <div class="col-md-12">
                    <div class="mixitup-nav">
                        <h2 class="text-center">Sholla School & College Aministration</h2>
                        <ul class="list-inline text-center teacher-nav">
                            <li type="button" data-filter="all" class="active-teacher">All</li>
                            <li type="button" data-filter=".Teacher">Teacher </li>
                            <li type="button" data-filter=".Managing-Committee" >Managing Committee</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row teacher-list">
                @foreach($activeAdministrators as $activeAdministrator)
                <div class="col-md-3 mix {{$activeAdministrator->administrator_type}}">
                    <div class="single-teacher">
                        <p class="text-center">
                            <img src="{{asset($activeAdministrator->image)}}" class="img-responsive center-block" alt="Sholla School College Teacher">
                            <span>{{$activeAdministrator->name}}</span>
                            <strong>{{$activeAdministrator->administratorDesignation->designation_name}} </strong>

                        </p>
                        <div class="content">
                            <a href="{{url('/administration-info/'.$activeAdministrator->id)}}">Details
                                <i class="fa fa-search-plus fa-lg" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </div> <!--end container-->
    @endsection