@extends('layouts.master')

@section('content')
    <!--start: Content-->
    <div class="wapper" style="">
        <div class="content">
            <div class="container" style="">
                <div class="row">
                    <div class="col-md-9 c1" style=" ">
                        <h4 class="c2" style="">
                            <a href="{{route('show.detail', @$post['hot_news']->id)}}"
                               style="text-decoration: none;color: black;"><b>{{@$post['hot_news']->title}}</b>
                            </a>
                        </h4>
                        <div class="row" style="margin: 0">
                            <div class="col-md-5 c3" style="padding: 0px;margin-left: 0;">
                                <p class="c5" style="">
                                    "Tiến Thắng cam kết trách nhiệm với khách hàng khi sử dụng dịch vụ bốc xếp, chuyển
                                    nhà…<br/>
                                    Trong khi bốc xếp, bốc vác vận chuyển nếu xảy ra mất mát, hư hỏng, bể vỡ đồ đạc của
                                    Quý khách sẽ được Uy Tín bồi thường thiệt hại 100% giá trị đồ đạc tính theo
                                    giá thị trường tại thời điểm bàn giao. (ngoại trừ những trường hợp hư hỏng do đồ
                                    dùng quá cũ)."
                                </p>
                            </div>
                            <div class="col-md-7 c4" style="padding: 0px">
                                <img src="images/{{@$post['hot_news']->image}}" width="94.3%"/>
                            </div>
                            @foreach(@$post['three_news'] as $three_news)
                                <div class="col-md-4 c6 c61" style="

                                        ">
                                    <img src="images/{{@$three_news->image}}" width="100%"
                                         title="{{@$three_news->title}}" alt="{{@$three_news->title}}"/>
                                    <h6><a style="text-decoration: none;color: #000000;"
                                           href="{{route('show.detail', @$three_news->id)}}">{{@$three_news->title}}</a>
                                    </h6>
                                </div>
                            @endforeach
                            @foreach(@$postsNormal as $normal_news)
                                <div class="col-5 c7">
                                    <img src="images/{{@$normal_news->image}}" width="100%"
                                         title="{{@$normal_news->title}}" alt="{{@$normal_news->title}}"/>
                                </div>
                                <div class="col-7 c7">
                                    <h4><a style="text-decoration: none;color: #000000;"
                                           href="{{route('show.detail', @$normal_news->id)}}">{{@$normal_news->title}}</a>
                                    </h4>
                                    <p>{{@$normal_news->created_at}}</p>
                                </div>
                        @endforeach
                        <!-- Pagination -->
                            <div class="col-md-12" style="text-align: center; margin-top: 20px;">
                                {{@$postsNormal->links()}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 cc" style="text-align: center;">
                        <img class="c9" src="images/banner_boc_vac.png" width="80%"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end: Content-->
@endsection
