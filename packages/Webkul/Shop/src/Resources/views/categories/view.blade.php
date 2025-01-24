<!-- SEO Meta Content -->
@inject ('productViewHelper', 'Webkul\Product\Helpers\View')
@push('meta')
    <meta name="description"
        content="{{ trim($category->meta_description) != '' ? $category->meta_description : \Illuminate\Support\Str::limit(strip_tags($category->description), 120, '') }}" />

    <meta name="keywords" content="{{ $category->meta_keywords }}" />

    @if (core()->getConfigData('catalog.rich_snippets.categories.enable'))
        <script type="application/ld+json">
            {!! app('Webkul\Product\Helpers\SEO')->getCategoryJsonLd($category) !!}
        </script>
    @endif
@endPush
@push('styles')
    <link rel="stylesheet" href="{{ asset('themes/shop/default/css/category.css?time=' . time()) }}">
@endpush
<x-shop::layouts>
    <section aria-label="(Nuværende placering)" class="Breadcrumbs">
        <div class="ContentWrapper ">
            <nav aria-label="Breadcrumbs navigation">
                <ul class="Breadcrumbs-List">
                    <li itemprop="itemListElement" class="Breadcrumb"><a tabindex="0" class=" Breadcrumb-Link"
                            href="{{ route('shop.home.index') }}">
                            <meta itemprop="item" content="{{ route('shop.home.index') }}"><span itemprop="name">Trang
                                chủ</span>
                            <meta itemprop="position" content="1">
                        </a></li>
                    <li itemprop="itemListElement" class="Breadcrumb">
                        <div tabindex="-1">
                            <meta itemprop="item">
                            <span itemprop="name">{{ $category->name }}</span>
                            <meta itemprop="position" content="2">
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
    <main class="CategoryPage">
        <section aria-label="Category page">
            <div class="ContentWrapper CategoryPage-Wrapper">
                <div class="CategoryPage-Product-Wrapper">
                    <article class="CategoryDetails">
                        <div class="CategoryDetails-Description CategoryDetails-Description_big">
                            <h1 class="CategoryDetails-Heading CategoryDetails-Heading_big">{{ $category->name }}</h1>
                            <div class="CategoryDetails-CountSort"><span>Sô lượng: {{ $products->count() }}</span>
                            </div>
                        </div>
                    </article>
                    <div class="CategoryFilterOverlay-FilterBar CategoryFilterOverlay-FilterBar_isPromotion">
                        <div class="ProductConfigurableAttributes CategoryFilterOverlay-Attributes">
                            <div class="ProductConfigurableAttributes-Filters">
                                <div class="ProductConfigurableAttributes-Buttons">
                                    <div
                                        class="ProductConfigurableAttributes-Buttons-Scroll indiana-scroll-container indiana-scroll-container--hide-scrollbars">
                                        <button class="ExpandableContent-Button">Kích thước</button>
                                        <button class="ExpandableContent-Button">Giá</button>
                                        <button class="ExpandableContent-Button">Màu sắc</button>
                                        <button class="ExpandableContent-Button">Chỗ ngồi</button>
                                        <button class="ExpandableContent-Button ExpandableContent-Button_sort">Lọc theo
                                            <svg width="9px" height="12px" viewBox="0 0 9 12"
                                                style="transform: rotate(90deg);">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-345.000000, -442.000000)">
                                                        <g fill="#000"
                                                            transform="translate(349.000000, 448.000000) rotate(-90.000000) translate(-349.000000, -448.000000) translate(343.000000, 443.000000)"
                                                            stroke="#000" stroke-width="1.6" class="svg-color">
                                                            <polyline fill="none" points="1 2 6 8 11 2"></polyline>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="ProductConfigurableAttributes-DropDownList" style="display: none;">
                                    <div class="ProductConfigurableAttributes-Option">
                                        <div class="ProductConfigurableAttributes-Header">
                                            <p>Giá</p><button aria-label="Close Filter"
                                                class="ProductConfigurableAttributes-Option-Close"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24">
                                                    <g id="Group_416" data-name="Group 416"
                                                        transform="translate(-325 -718)">
                                                        <g id="Ellipse_366" data-name="Ellipse 366"
                                                            transform="translate(325 718)" fill="#fff" stroke="#000"
                                                            stroke-width="1">
                                                            <circle cx="12" cy="12" r=" 12"
                                                                stroke="none">
                                                            </circle>
                                                            <circle cx="12" cy="12" r="11.5"
                                                                fill="none"></circle>
                                                        </g>
                                                        <line id="Line_35" data-name="Line 35" x1="10"
                                                            y2="10" transform="translate(332 725)" fill="none"
                                                            stroke="#000" stroke-width="1"></line>
                                                        <line id="Line_375" data-name="Line 375" x2="10"
                                                            y2="10" transform="translate(332 725)"
                                                            fill="none" stroke="#000" stroke-width="1"></line>
                                                    </g>
                                                </svg></button>
                                        </div>
                                        <x-shop::range-slider ::key="refreshKey" default-type="price" ::default-allowed-max-range="allowedMaxPrice"
                                            ::default-min-range="minRange" ::default-max-range="maxRange"
                                            @change-range="setPriceRange($event)" />
                                        <div class="ProductConfigurableAttributes-Actions"><button
                                                class="ProductConfigurableAttributes-Results Button">
                                                <div>Có 38 sản phẩm</div>
                                            </button>
                                            <div
                                                class="ProductConfigurableAttributes-Reset ProductConfigurableAttributes-Reset">
                                                Làm mới</div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="ProductConfigurableAttributes-DropDownList ProductConfigurableAttributes-DropDownList_sort">
                                    <div class="ProductConfigurableAttributes-Option">
                                        <div class="ProductConfigurableAttributes-Header">
                                            <p>Sorter efter</p>
                                        </div>
                                        <div class="CategorySort-Simple">
                                            <div>
                                                <div
                                                    class="Field Field_type_radio Field_hasValue Field_isValid CategorySort-Radio CategorySort-Radio_simple">
                                                    <label for="DESC bestsellers"><input id="DESC bestsellers"
                                                            name="categorysort-radio" label="Bestsellers"
                                                            type="radio" min="1" max="99"
                                                            validation="" message="" filename=""
                                                            data-skip-value="false" autocomplete="off"
                                                            class="CategorySort-Radio CategorySort-Radio_simple"
                                                            value="ASC position">
                                                        <div class="input-control"></div>Bestsellers
                                                    </label>
                                                </div>
                                            </div>
                                            <div>
                                                <div
                                                    class="Field Field_type_radio Field_hasValue Field_isValid CategorySort-Radio CategorySort-Radio_simple">
                                                    <label for="ASC position"><input id="ASC position"
                                                            name="categorysort-radio" label="Bedste match"
                                                            type="radio" min="1" max="99"
                                                            validation="" message="" filename=""
                                                            data-skip-value="false" autocomplete="off"
                                                            class="CategorySort-Radio CategorySort-Radio_simple"
                                                            value="ASC position" checked="">
                                                        <div class="input-control"></div>Bedste match
                                                    </label>
                                                </div>
                                            </div>
                                            <div>
                                                <div
                                                    class="Field Field_type_radio Field_hasValue Field_isValid CategorySort-Radio CategorySort-Radio_simple">
                                                    <label for="ASC price"><input id="ASC price"
                                                            name="categorysort-radio" label="Pris: Lav til Høj"
                                                            type="radio" min="1" max="99"
                                                            validation="" message="" filename=""
                                                            data-skip-value="false" autocomplete="off"
                                                            class="CategorySort-Radio CategorySort-Radio_simple"
                                                            value="ASC position">
                                                        <div class="input-control"></div>Pris: Lav til Høj
                                                    </label>
                                                </div>
                                            </div>
                                            <div>
                                                <div
                                                    class="Field Field_type_radio Field_hasValue Field_isValid CategorySort-Radio CategorySort-Radio_simple">
                                                    <label for="DESC price"><input id="DESC price"
                                                            name="categorysort-radio" label="Pris: Høj til Lav"
                                                            type="radio" min="1" max="99"
                                                            validation="" message="" filename=""
                                                            data-skip-value="false" autocomplete="off"
                                                            class="CategorySort-Radio CategorySort-Radio_simple"
                                                            value="ASC position">
                                                        <div class="input-control"></div>Pris: Høj til Lav
                                                    </label>
                                                </div>
                                            </div>
                                            <div>
                                                <div
                                                    class="Field Field_type_radio Field_hasValue Field_isValid CategorySort-Radio CategorySort-Radio_simple">
                                                    <label for="DESC new"><input id="DESC new"
                                                            name="categorysort-radio" label="Nyeste" type="radio"
                                                            min="1" max="99" validation=""
                                                            message="" filename="" data-skip-value="false"
                                                            autocomplete="off"
                                                            class="CategorySort-Radio CategorySort-Radio_simple"
                                                            value="ASC position">
                                                        <div class="input-control"></div>Nyeste
                                                    </label>
                                                </div>
                                            </div>
                                            <div>
                                                <div
                                                    class="Field Field_type_radio Field_hasValue Field_isValid CategorySort-Radio CategorySort-Radio_simple">
                                                    <label for="ASC name"><input id="ASC name"
                                                            name="categorysort-radio" label="Navn: A til Å"
                                                            type="radio" min="1" max="99"
                                                            validation="" message="" filename=""
                                                            data-skip-value="false" autocomplete="off"
                                                            class="CategorySort-Radio CategorySort-Radio_simple"
                                                            value="ASC position">
                                                        <div class="input-control"></div>Navn: A til Å
                                                    </label>
                                                </div>
                                            </div>
                                            <div>
                                                <div
                                                    class="Field Field_type_radio Field_hasValue Field_isValid CategorySort-Radio CategorySort-Radio_simple">
                                                    <label for="DESC name"><input id="DESC name"
                                                            name="categorysort-radio" label="Navn: Å til A"
                                                            type="radio" min="1" max="99"
                                                            validation="" message="" filename=""
                                                            data-skip-value="false" autocomplete="off"
                                                            class="CategorySort-Radio CategorySort-Radio_simple"
                                                            value="ASC position">
                                                        <div class="input-control"></div>Navn: Å til A
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="CategoryPage-ProductListWrapper">
                        <div
                            class="ProductList CategoryProductList CategoryProductList_layout_grid CategoryProductList_smallGrid">
                            <div class="ProductListPage-Page-Wrapper">
                                <ul
                                    class="ProductListPage CategoryProductList-Page CategoryProductList-Page_layout_grid CategoryProductList-Page_smallGrid">
                                    @foreach ($products as $product)
                                        <li class="ProductCard ">
                                            <div class="ProductCard-Box">
                                                <a class=" ProductCard-Link"
                                                    href="{{ route('shop.product_or_category.index', $product->url_key) }}">
                                                    <figure class="ProductCard-Figure">
                                                        <div class="ProductCard-PictureHoverWrapper">
                                                            <div class="ProductCard-PictureHover">
                                                                <div
                                                                    class="Image Image_ratio_custom Image_imageStatus_1 Image_hasSrc ProductCard-Picture">
                                                                    <img src="{{ $product->base_image_url ?? bagisto_asset('images/small-product-placeholder.webp') }}"
                                                                        alt="Babette" loading="lazy"
                                                                        decoding="async" class="Image-Image"
                                                                        style="width: 100%; height: 100%;">
                                                                </div>
                                                            </div>
                                                            <div class="ProductCard-PictureHover">
                                                                <div
                                                                    class="Image Image_ratio_custom Image_imageStatus_1 Image_hasSrc ProductCard-Picture">
                                                                    <img src="{{ $product->base_image_url ?? bagisto_asset('images/small-product-placeholder.webp') }}"
                                                                        alt="Babette" loading="lazy"
                                                                        decoding="async" class="Image-Image"
                                                                        style="width: 100%; height: 100%;">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="ProductCard-ConfigurableOptions">

                                                            @foreach ($product->getColorProductParent() as $color)
                                                                <div
                                                                    class="ProductCard-ColorDiv {{ $color['swatch_value'] == $product->getColor() ? 'ProductCard-ColorDiv_active' : '' }}">
                                                                    <span class="ProductCard-Color"
                                                                        style="display: inline-block; width: 24px; height: 24px; background-color: {{ $color['swatch_value'] }};"></span>
                                                                </div>
                                                            @endforeach

                                                        </div>
                                                    </figure>
                                                    <div class="ProductCard-ContentWrapper">
                                                        <div class="ProductCard-Content">
                                                            <div class="ProductCard-MainDetails">
                                                                <div class="ProductCard-NameWrapper">
                                                                    <p class="ProductCard-Name">{{ $product->name }}
                                                                    </p>
                                                                    <p class="ProductCard-Name2">{{ $category->name }}
                                                                    </p>
                                                                    <p class="ProductCard-Name3">
                                                                        {{ $product->getColor(true) }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ProductCard-PriceWrapper">
                                                            <div class="ProductPrice-OuterWrapper">
                                                                <div class="ProductPrice-InnerWrapper">
                                                                    <del
                                                                        class="ProductPrice-HighPrice">{!! $product->getTypeInstance()->getPriceHtml() !!}</del>
                                                                </div>
                                                                <span
                                                                    class="ProductPrice-InnerWrapper ProductPrice-InnerWrapper_isVisible">
                                                                    <span>{!! $product->getTypeInstance()->getPriceHtml() !!}</span>
                                                                </span>
                                                            </div>
                                                            <div class="ProductCard-DeliveryPrice">
                                                                <a
                                                                    href="{{ route('shop.product_or_category.index', ['fallbackPlaceholder' => $product->url_key]) }}">
                                                                    Giao hàng
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <button
                                                    class="AddToCart AddToCart_white ProductCard-AddToCart Button Button_white">
                                                    <span>Xem chi tiết</span><span>Xem chi tiết</span>
                                                </button>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                            {{-- <p class="CategoryPage-ItemsCount">Viser 38 af 38 produkter</p>
                            <nav class="ProductList-PageNavList">
                                <ul class="PaginationLinks PaginationLinks-Hidden">
                                    <li class="focus-visible"><a href="?page=1" target="_self"
                                            class="focus-visible">1</a></li>
                                </ul>
                            </nav> --}}
                        </div>
                    </div>
                </div>
                <div class="CategoryPage-CMS CAT - Armchair - Bottom content">
                    <div class="RenderWhenVisible">
                        <div>
                            <div class="RenderWhenVisible-Detector"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-shop::layouts>
