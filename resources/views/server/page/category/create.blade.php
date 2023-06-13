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

                    <form action="{{ route('admin.category.store') }}" method="POST">
                        {{ csrf_field() }}
                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li> {{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="name">Tên danh mục</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name"
                                    onkeyup="changeAlias(this)" onchange="changeAlias(this)"
                                    placeholder="Nhập tên danh mục ">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="Slug">Đường dẫn</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="slug" name="slug"
                                    placeholder="Nhập đường dẫn">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="description">Mô tả danh mục</label>
                            <div class="col-sm-10">
                                <input type="text" id="description" name="alt" class="form-control phone-mask"
                                    placeholder="Nhập mô tả danh mục">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="parent">Vị trí</label>
                            <div class="col-sm-10">
                                <input type="text" id="select" class="form-control" placeholder="Lựa chọn vị trí"
                                    id="parent">
                                <input type="hidden" id="parent-value" name="parent" value="">
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
        let data = @json($result);

        let select = $('#select').comboTree({
            source: data,

        });

        $('#select').change(function() {
            $('#parent-value').val(select.getSelectedIds());
        })


        function removeVietnameseTones(str) {
            str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
            str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
            str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
            str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
            str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
            str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
            str = str.replace(/đ/g, "d");
            str = str.replace(/À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ/g, "A");
            str = str.replace(/È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ/g, "E");
            str = str.replace(/Ì|Í|Ị|Ỉ|Ĩ/g, "I");
            str = str.replace(/Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ/g, "O");
            str = str.replace(/Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ/g, "U");
            str = str.replace(/Ỳ|Ý|Ỵ|Ỷ|Ỹ/g, "Y");
            str = str.replace(/Đ/g, "D");
            // Một vài bộ encode coi các dấu mũ, dấu chữ như một kí tự riêng biệt nên thêm hai dòng này
            str = str.replace(/\u0300|\u0301|\u0303|\u0309|\u0323/g, ""); // ̀ ́ ̃ ̉ ̣  huyền, sắc, ngã, hỏi, nặng
            str = str.replace(/\u02C6|\u0306|\u031B/g, ""); // ˆ ̆ ̛  Â, Ê, Ă, Ơ, Ư
            // Remove extra spaces
            // Bỏ các khoảng trắng liền nhau
            str = str.replace(/ + /g, " ");
            str = str.trim();
            // Remove punctuations
            // Bỏ dấu câu, kí tự đặc biệt
            str = str.replace(
                /!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'|\"|\&|\#|\[|\]|~|\$|_|`|-|{|}|\||\\/g,
                " "
            );
            return str;
        }

        function changeAlias(e) {
            var name = $(e).val();
            var alias = removeVietnameseTones(name.toLowerCase());
            alias = alias.replaceAll(" ", "-");
            $("#slug").val(alias);
        }
    </script>
@endsection
