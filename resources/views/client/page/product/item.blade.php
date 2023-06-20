@foreach ($product as $item)
    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
        <a href="{{ route('prodcuct.detail', $item->slug) }}">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="{{ asset('filemanager/uploads/' . $item->image) }}" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">{{ $item['name'] }}</h6>
                    <div class="d-flex justify-content-center">
                        <h6>@convert($item->price) VND</h6>
                        <h6 class="text-muted ml-2">
                            @if ($item['price_sale'] > 0)
                                <del>$123.00</del>
                            @endif
                        </h6>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="{{ route('prodcuct.detail', $item['slug']) }}" class="btn btn-sm text-dark p-0"><i
                            class="fas fa-eye text-primary mr-1"></i>Chi
                        tiết</a>
                    <a href="{{ route('cart.add') }}" class="btn btn-sm text-dark p-0"><i
                            class="fas fa-shopping-cart text-primary mr-1"></i>Thêm giỏ hàng </a>
                </div>
            </div>
        </a>
    </div>
@endforeach
