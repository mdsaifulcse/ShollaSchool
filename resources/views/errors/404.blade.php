@extends('front.master')

@section('title')
    Page not found
@endsection

@section('content')
    <div class="container">
        <div class="well">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('default/404-error.jpg')}}" class="img-thumbnail img-responsive  center-block" align="Page Not Found" title="Page Not Found">
                </div><!-- end col-md-6-->
                <div class="col-md-6">
                    <p style="line-height: 28px">
                        <strong style="font-size: 18px">পাওয়া যায়নি</strong>
                        <br>
                        আপনি যে বিষয়টি অনুসন্ধান করছেন তা খুজে পাওয়া যায়নি। বিষয়টি সম্ভবত  সংশ্লিষ্ট নয় অথবা আপনি ভুলভাবে অনুসন্ধান করছেন। অনুগ্রহ করে আপনার অনুসন্ধান বিষয়টি সম্বন্ধে নিশ্চিত হোন।
                        <br>
                        ধন্যবাদ।
                    </p>
                </div>
            </div><!-- end row -->

        </div>
    </div>

@endsection