@extends('server.layout.master')
@section('title', 'Tạo người dùng')
@section('page-css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Người dùng / </span>Tạo mới</h4>
    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">

                    <form id="form" action="{{ route('admin.user.store') }}" method="POST">
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
                                    placeholder="Nhập tên người dùng ">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="email">Nhập địa chỉ email </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Nhập địa chỉ email  ">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="password">Mật khẩu</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Nhập mật khẩu ">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="password_cf">Mật lại khẩu</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password_cf" name="password_cf"
                                    placeholder="Nhập lại mật khẩu ">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="roles">Quyền</label>
                            <div class="col-sm-10">
                                <select class="selectpicker" multiple data-live-search="true" name="roles"
                                    id="">
                                    @foreach ($roles as $item)
                                        <option value="{{ $item->name }}">{{ $item->name }}</option>
                                    @endforeach

                                </select>
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
@endsection
