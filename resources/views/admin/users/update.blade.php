@extends('admin.master')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="row">
            <div class="col-md-12">
                <h2 style="color: #2e2f37; font-weight: 900;">Sửa</h2>
                @if(session('message'))
                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                @endif
            </div>
            <div class="col-md-12 admin-content">
                <form id="update-post" name="update-post" method="post" action="{{route('users.update', $user->id)}}" enctype="multipart/form-data">
                @csrf <!-- {{ csrf_field() }} -->
                    <div class="form-group">
                        <label for="phone_number">Số điện thoại</label>
                        <input class="form-control" id="phone_number" name="phone_number" rows="3" value="{{@$user->phone_number}}"/>
                    </div>
                    <div class="form-group">
                        <label for="other_phone_number">Số điện thoại khác</label>
                        <input class="form-control" id="other_phone_number" name="other_phone_number" rows="3" value="{{@$user->other_phone_number}}"/>
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
