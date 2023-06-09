@extends('server.layout.master')
@section('title', 'Tạo danh mục')
@section('page-css')
    <link rel="stylesheet" href="{{ asset('server/libs/select-tree/style.css') }}">
@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Người dùng / </span>Sửa</h4>
    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">
                    <form id="form" action="{{ route('admin.user.update', [$user->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        <input type="hidden" name="id" value="{{ $user->id }}">
                        @method('PUT')
                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li> {{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="name">Tên người dùng</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Nhập tên người dùng " value="{{ $user->name }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="formFile" class="col-sm-2 col-form-label">Ảnh đại diện</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" accept="image/*"
                                    onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])"
                                    id="avatar" name="avatar" value="{{ $user->avatar }}">

                                <img id="output" src="{{ $user->avatar }}" style="margin-top: 20px" width="100px"
                                    height="100px" />
                            </div>

                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="name">Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Nhập địa chỉ email " value="{{ $user->email }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="password">Mật khẩu</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Nhập địa chỉ email " value="{{ $user->password }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="password_cf">Xác nhận mật khẩu</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password_cf" name="password_cf"
                                    placeholder="Nhập địa chỉ email " value="{{ $user->password }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="parent">Quyền</label>
                            <div class="col-sm-10">
                                <input type="text" id="role" name="role" class="form-control"
                                    placeholder="Lựa chọn vị trí">
                            </div>
                        </div>
                        <div class="row justify-content-end">

                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Gửi</button>
                            </div>
                        </div>
                </div>

                </form>
            </div>
        </div>

    </div>
@endsection

@section('page-js')
    <script src="{{ asset('server/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('server/libs/select-tree/comboTreePlugin.js') }}"></script>
    <script>
        let roles = @json($roles);

        let select = $('#role').comboTree({
            source: roles,
            isMultiple: true,
            selected: {{ $role }}
        });
    
    </script>
@endsection
