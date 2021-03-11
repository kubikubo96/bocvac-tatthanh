@extends('admin.master')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="row">
            <div class="col-md-12">
                <h2 style="color: #2e2f37; font-weight: 900;">Sửa bài</h2>
                @if(session('message'))
                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                @endif
            </div>
            <div class="col-md-12 admin-content">
                <form id="update-post" name="update-post" method="post" action="{{route('posts.update', $post->id)}}" enctype="multipart/form-data">
                @csrf <!-- {{ csrf_field() }} -->
                    <div class="form-group">
                        <label for="title">Tiêu đề</label>
                        <input class="form-control" id="title" name="title" rows="3" value="{{@$post->title}}"/>
                    </div>
                    <div class="form-group">
                        <label for="short_content">Nội dung ngắn</label>
                        <input class="form-control" id="short_content" name="short_content" rows="3" value="{{@$post->short_content}}"/>
                    </div>
                    <div class="form-group">
                        <label for="content-post">Nội dung</label>
                        <textarea class="form-control" id="content-post" name="content" rows="3">{{@$post->content}}</textarea>
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <label for="position">Vị trí</label>--}}
{{--                        <input class="form-control" id="position" name="position" rows="3" value="{{@$post->position}}">--}}
{{--                    </div>--}}
                    <div class="form-group">
                        <label for="image">Ảnh</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>
                    <div style="width: 100px; height: 100px">
                        <img width="100%" height="100%"
                             src="images/{{@$post->image}}">
                    </div>
                    <button style="margin-top: 20px;margin-bottom: 20px;" type="submit" class="btn btn-primary">Sửa</button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

@endsection
@section('script')
    <script>
        ClassicEditor
            .create(document.querySelector('#content-post'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
