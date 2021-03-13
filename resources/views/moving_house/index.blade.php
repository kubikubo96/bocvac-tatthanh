@extends('layouts.master')

@section('content')
    <!--start: Content-->
    <div class="wapper" style="">
        <div class="content">
            <div class="container" style="">
                <div class="row">
                    <div class="col-md-9 c1" style=" ">
                        <h4 style="margin:30px 15px 15px 15px;"><b>{{@$post->title}}</b></h4>
                        <p style="margin: 0 15px 15px 15px;">{{@$post->created_at}}</p>
                        <div style="border-bottom: 1px dotted #b4b4b4; margin: 15px;"></div>
                        <div class="c11" style="width: 100%;">
                            <article>{!! @$post->content !!}</article>
                        </div>
                    </div>
                    <div class="col-md-3 cc" style="text-align: center;">
                        <!-- <img class="c9" src="images/banner_boc_vac.png" width="80%" title="bốc xếp hà nội" alt="bốc xếp hà nội"/> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end: Content-->
@endsection
