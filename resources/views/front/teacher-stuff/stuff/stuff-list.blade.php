@extends('front.master')
@section('title')
    Third Grade Employee list | sholla School & College
@endsection

@section('content')
    <div class="container">
        <div class="all-teacher">
            <div class="row">
                <div class="col-md-12">
                    <div class="mixitup-nav">
                        <h2 class="text-center">Sholla School & College Third Grade Employee</h2>
                        <ul class="list-inline text-center teacher-nav">
                            <li type="button" data-filter="all" class="active-teacher">All</li>
                            <li type="button" data-filter=".Office-assistanta">OFFICE ASSISTANT  </li>
                            <li type="button" data-filter=".Assistant-librarian" >ASSISTANT LIBRARIAN</li>
                            <li type="button" data-filter=".Computer-operator" >COMPUTER OPERATOR</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row teacher-list">
                @foreach($activeStuffs as $activeStuff)
                <div class="col-md-3 mix {{$activeStuff->stuff_type}}">
                    <div class="single-teacher">
                        <p class="text-center">
                            <img src="{{asset($activeStuff->image)}}" class="img-responsive center-block" alt="Sholla School College Teacher">
                            <span>{{$activeStuff->name}}</span>
                            <strong>{{$activeStuff->stuff_type}} </strong>

                        </p>
                        <div class="content">
                            <a href="{{url('/stuff-info/'.$activeStuff->id)}}">Details
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