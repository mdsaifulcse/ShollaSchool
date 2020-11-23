@extends('front.master')
@section('title')
    Teachers list |sholla School & College
    @endsection

@section('content')
    <div class="container">
        <div class="all-teacher">
            <div class="row">
                <div class="col-md-12">
                    <div class="mixitup-nav">
                        <h2 class="text-center">Sholla School & College All Teacher List</h2>
                        <ul class="list-inline text-center teacher-nav">
                            <li type="button" data-filter="all" class="active-teacher">All</li>
                            <li type="button" data-filter=".Principal">Principal </li>
                            <li type="button" data-filter=".Assistant-professor">Assistant-professor </li>
                            <li type="button" data-filter=".Lecturer">Lecturer </li>
                            <li type="button" data-filter=".Headmaster">Headmaster </li>
                            <li type="button" data-filter=".Assistant-Headmaster" >Assistant Headmaster </li>
                            <li type="button" data-filter=".Assistant-Teacher">Assistant Teacher </li>
                            <li type="button" data-filter=".Assistant-laibrarian">LAB REPRESENTATIVE </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row teacher-list">
            @foreach($teachers as $teacher)
                <div class="col-md-3 mix {{$teacher->designation}}">
                    <div class="single-teacher">
                        <p class="text-center">
                            <img src="{{asset($teacher->image)}}" class="img-responsive center-block" alt="Sholla School College Teacher">
                            <span>{{$teacher->name}}</span>
                            <strong>{{$teacher->designation}} </strong>

                        </p>
                        <div class="content">
                            <a href="{{url('/teacher-info/'.$teacher->id)}}">Details
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