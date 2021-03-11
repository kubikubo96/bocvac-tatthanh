@extends('layouts.master')

@section('content')
    <!--start: Content-->
    <div class="content">
        <div class="container">
            <div class="row title-top">
                <div class="col-12 text-dark">
                    <h3>{{@$post['title_page']->title}}</h3>
                </div>
            </div>

            <div class="content-1">
                <div class="row">
                    <div class="col-12">
                        <article>
                            {!! @$post['content_one']->content !!}
                        </article>
                    </div>
                </div>
            </div>

            <div class="content-2">
                <div class="row">
                    <div class="col-12">
                        <article>
                            {!! @$post['content_two']->content !!}
                        </article>
                    </div>
                </div>
            </div>

            <div class="content-3">
                <div class="row">
                    <div class="col-md-4" style="padding: 10px">
                        <img src="images/{{@$post['post_left']->image}}" title="{{@$post['post_center']->title}}"
                             alt="{{@$post['post_center']->title}}">
                        <h5 style="margin-top: 10px; font-weight: bold; color: black;"><a
                                style="text-decoration: none;color: #000000;"
                                href="{{route('show.detail', @$post['post_left']->id)}}">{{@$post['post_left']->title}}</a>
                        </h5>
                        <article>{{@$post['post_left']->short_content}}</article>
                    </div>
                    <div class="col-md-4" style="padding: 10px">
                        <img src="images/{{@$post['post_center']->image}}" title="{{@$post['post_center']->title}}"
                             alt="{{@$post['post_center']->title}}">
                        <h5 style="margin-top: 10px; font-weight: bold; color: black;"><a
                                style="text-decoration: none;color: #000000;"
                                href="{{route('show.detail', @$post['post_center']->id)}}">{{@$post['post_center']->title}}</a>
                        </h5>
                        <article>{{@$post['post_center']->short_content}}</article>
                    </div>
                    <div class="col-md-4" style="padding: 10px">
                        <img src="images/{{@$post['post_right']->image}}" title="{{@$post['post_center']->title}}"
                             alt="{{@$post['post_center']->title}}">
                        <h5 style="margin-top: 10px; font-weight: bold; color: black;"><a
                                style="text-decoration: none;color: #000000;"
                                href="{{route('show.detail', @$post['post_right']->id)}}">{{@$post['post_right']->title}}</a>
                        </h5>
                        <article>{{@$post['post_right']->short_content}}</article>
                    </div>
                </div>
            </div>

            <div class="content-4">
                <div class="row">
                    <div class="col-md-6">
                        <article>{!! @$post['content_three']->content!!}</article>
                    </div>
                    <div class="col-md-6">
                        <img src="images/{{@$post['content_three']->image}}" title="{{@$post['content_three']->title}}"
                             alt="{{@$post['content_three']->image}}"/>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--end: Content-->
@endsection
