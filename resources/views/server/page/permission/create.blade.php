@extends('server.layout.master')
@section('title', 'Tạo danh mục')
@section('page-css')
    <link rel="stylesheet" href="{{ asset('server/libs/select-tree/style.css') }}">
@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Danh mục / </span>Tạo mới</h4>
    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">

                    <form id="form" action="{{ route('admin.permission.store') }}" method="POST">
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
                            <label class="col-sm-2 col-form-label" for="name">Cho phép</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name"  placeholder="Nhập tên quyền ">
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
 
   
  
@endsection
