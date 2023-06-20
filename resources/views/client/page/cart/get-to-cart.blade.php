@extends('client.layout.master')
@section('title', 'Giỏ hàng')
@section('css')
@section('header')
@include('client.partial.header')
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Shopping Cart</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shopping Cart</p>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Tổng tiền</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        @foreach ($cart as $item)
                            <tr>
                                <td class="align-middle"><img src="img/product-1.jpg" alt="" style="width: 50px;">
                                    {{ $item['product']['name'] }}
                                    <br><span>{{ $item['size']['name'] }} / {{ $item['color']['name'] }}</span>
                                </td>
                                <td class="align-middle">@convert($item['price']) VND</td>
                                <td class="align-middle">
                                    <div class="input-group quantity mx-auto" style="width: 100px;">
                                        <div class="input-group-btn">
                                            <button onclick=" minus_cart(this)"
                                                data-product="{{ $item['product']['id'] }}"
                                                data-color="{{ $item['color']['id'] }}"
                                                data-size="{{ $item['size']['id'] }}"
                                               
                                                class="btn btn-sm btn-primary btn-minus">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control form-control-sm bg-secondary text-center"
                                            id="{{ $item['product']['id'] }}-{{ $item['color']['id'] }}-{{ $item['size']['id'] }}-qlt"
                                            value="{{ $item['quantity'] }}">
                                        <div class="input-group-btn">
                                            <button onclick="return plus_cart(this)"
                                                data-product="{{ $item['product']['id'] }}"
                                                data-color="{{ $item['color']['id'] }}"
                                                data-size="{{ $item['size']['id'] }}"
                                                class="btn btn-sm btn-primary btn-plus">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <span
                                        id='{{ $item['product']['id'] }}-{{ $item['color']['id'] }}-{{ $item['size']['id'] }}-total'>
                                        @convert($item['price'] * $item['quantity']) VND</span>
                                </td>
                                <td class="align-middle"><button class="btn btn-sm btn-primary"><i
                                            class="fa fa-times"></i></button></td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <form class="mb-5" action="">
                    <div class="input-group">
                        <input type="text" class="form-control p-4" placeholder="Mã giảm giá">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Nhập mã giảm giá</button>
                        </div>
                    </div>
                </form>
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Tóm tắt giỏ hàng</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Tông tiền</h6>
                            <h6 class="font-weight-medium" id="cast_total">@convert($cast_total) VND</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Giảm giá</h6>
                            <h6 class="font-weight-medium">0</h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Thanh toán</h5>
                            <h5 class="font-weight-bold" id="payment">@convert($cast_total) VND</h5>
                        </div>
                        <a class="btn btn-block btn-primary my-3 py-3" href="{{ route('cart.checkout') }}">Tiếp tục thanh
                            toán</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        let minus_cart = function(e) {
            let url = '{{ route('cart.change.quantity') }}'
            let product = $(e).data('product');
            let size = $(e).data('size');
            let color = $(e).data('color');

            let quantity = $('#' + product + '-' + color + '-' + size + '-qlt').val();

            let token = $('meta[name=token]').attr('content');
            $.ajax({
                type: "post",
                url: url,
                data: {
                    quantity: quantity,
                    product: product,
                    color: color,
                    size: size,
                    type: 2,
                    _token: token
                },
                success: function(response) {
                    let html = '<td class="align-middle">' + response['total'] + '</td>'
                    let total = response['total'].toLocaleString('it-IT', {
                        style: 'currency',
                        currency: 'VND'
                    });
                    $('#' + product + '-' + color + '-' + size + '-total').text(total);
                    let cast_total = response['cast_total'].toLocaleString('it-IT', {
                        style: 'currency',
                        currency: 'VND'
                    });
                    $('#cast_total').text(cast_total)
                    $('#payment').text(cast_total)
                }
            });

        }

        let plus_cart = function(e) {
            let url = '{{ route('cart.change.quantity') }}'
            let product = $(e).data('product');
            let size = $(e).data('size');
            let color = $(e).data('color');

            let quantity = $('#' + product + '-' + color + '-' + size + '-qlt').val();

            let token = $('meta[name=token]').attr('content');
            $.ajax({
                type: "post",
                url: url,
                data: {
                    quantity: quantity,
                    product: product,
                    color: color,
                    size: size,
                    type: 1,
                    _token: token
                },
                success: function(response) {
                    let html = '<td class="align-middle">' + response['total'] + '</td>'
                    let total = response['total'].toLocaleString('it-IT', {
                        style: 'currency',
                        currency: 'VND'
                    });
                    $('#' + product + '-' + color + '-' + size + '-total').text(total);
                    let cast_total = response['cast_total'].toLocaleString('it-IT', {
                        style: 'currency',
                        currency: 'VND'
                    });
                    $('#cast_total').text(cast_total)
                    $('#payment').text(cast_total)
                }
            });

        }

        let remove_item_cart = function(e) {

        }
    </script>
@endsection
