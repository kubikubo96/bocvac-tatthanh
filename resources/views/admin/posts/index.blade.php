@extends('admin.master')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="row">
            <div class="col-md-12">
                <a type="button" class="btn btn-primary" href="{{route('posts.create')}}">Thêm mới</a>
                <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
{{--                        <th scope="col">STT</th>--}}
                        <th scope="col">Vị trí</th>
                        <th scope="col">Tiêu đề</th>
                        <th scope="col">Nội dung</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Xử lý</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                    <tr>
{{--                        <th scope="row">{{$post->id}}</th>--}}
                        <th>{{$post->position}}</th>
                        <td>
                            <div style="width: 200px;">
                                {{$post->title}}
                            </div>
                        </td>
                        <td>
                            <div style="width: 500px; height: 100px; overflow-x: scroll">
                                {!! $post->content !!}
                            </div>
                        </td>
                        <td>
                            <div style="width: 100px; height: 100px">
                                <img width="100%" height="100%"
                                     src="images/{{@$post->image}}">
                            </div>
                        </td>
                        <td>
                            <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                                @csrf
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Bạn có muốn xóa không?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Không</button>
                                                <button type="submit" class="btn btn-danger">Có</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                Xóa
                            </button>
                            </form>
                            <a type="button" class="btn btn-warning" href="{{route('posts.edit', $post->id)}}">Sửa</a>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
                <!-- Pagination -->
                <div class="col-md-12" style="text-align: center; margin-top: 20px;">
                    {{@$posts->links()}}
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

@endsection
