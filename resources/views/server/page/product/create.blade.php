@extends('server.layout.master')
@section('title', 'Sản phẩm mới')
@section('page-css')
    <link rel="stylesheet" href="{{ asset('server/libs/select-tree/style.css') }}">
    <style>
        .ck-editor__editable[role="textbox"] {
            /* editing area */
            min-height: 200px;
        }
    </style>
@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Sản phẩm / </span>Tạo mới</h4>
    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">
                    <form id="form" action="{{ route('admin.product.store') }}" method="POST">
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
                            <label class="col-sm-2 col-form-label" for="name">Tên sản phẩm</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name"
                                    onkeydown="changeAlias(this)" onchange="changeAlias(this)"
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

                        <div class="mb-3 row">
                            <label for="stock" class="col-md-2 col-form-label">SỐ lượng kho</label>
                            <div class="col-md-10">
                                <input class="form-control" type="number" id="stock" name="stock"
                                    placeholder="Nhập số lượng kho">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="price">Giá sản phẩm</label>
                            <div class="col-sm-10">
                                <input type="text"
                                    onkeyup=" if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                                    class="form-control" id="price" name="price" placeholder="Nhập giá sản phẩm">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="price_sale">Giá giảm</label>
                            <div class="col-sm-10">
                                <input type="text"
                                    onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                                    class="form-control" id="sprice_salelug" name="price_sale"
                                    placeholder="Nhập giá giảm sản phẩm">
                            </div>
                        </div>                      
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="image">Ảnh sản phẩm</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <input type="button" id="lfm" data-input="thumbnail" data-preview="holder"
                                        value="Chọn ảnh">
                                    <input id="thumbnail" class="form-control" type="text" name="filepath">
                                </div>
                                <img id="holder" style="margin-top:15px;max-height:100px;">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="parent">Vị trí</label>
                            <div class="col-sm-10">
                                <input autocomplete="off" type="text" id="select" name="parent" class="form-control"
                                    placeholder="Chọn danh mục" id="parent">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="detail">Chi tiết sản phẩm</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="detail" name="detail" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="description">Mô tả sản phẩm</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
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
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script src="{{ asset('server/libs/select-tree/comboTreePlugin.js') }}"></script>
    <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
    <script>
        $('#lfm').filemanager('image');
    </script>

    <script>
        let data = @json($result);
        let select = $('#category_id').comboTree({
            source: data,

        });
        $('#form').submit(function() {
            $('#select').val(select.getSelectedIds());
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
    <script>
        var format = function(num) {
            var str = num.toString().replace("$", ""),
                parts = false,
                output = [],
                i = 1,
                formatted = null;
            if (str.indexOf(".") > 0) {
                parts = str.split(".");
                str = parts[0];
            }
            str = str.split("").reverse();
            for (var j = 0, len = str.length; j < len; j++) {
                if (str[j] != ",") {
                    output.push(str[j]);
                    if (i % 3 == 0 && j < (len - 1)) {
                        output.push(",");
                    }
                    i++;
                }
            }
            formatted = output.reverse().join("");
            return ("$" + formatted + ((parts) ? "." + parts[1].substr(0, 2) : ""));
        };
        $(function() {
            $("#price").keyup(function(e) {
                $(this).val(format($(this).val()));
            });
        });

        let options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
        CKEDITOR.replace('detail', options);
        CKEDITOR.replace('description', options);
    </script>
@endsection
