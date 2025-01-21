<!-- SEO Meta Content -->
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
                <ul itemscope="" itemtype="http://schema.org/BreadcrumbList" class="Breadcrumbs-List">
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"
                        class="Breadcrumb"><a tabindex="0" class=" Breadcrumb-Link" href="/da-dk">
                            <meta itemprop="item" content="https://sofacompany.com/"><span itemprop="name">Hjem</span>
                            <meta itemprop="position" content="1">
                        </a></li>
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"
                        class="Breadcrumb">
                        <div tabindex="-1">
                            <meta itemprop="item" content="https://sofacompany.com/da-dk/laenestole"><span
                                itemprop="name">Lænestole</span>
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
                            <h1 class="CategoryDetails-Heading CategoryDetails-Heading_big">Lænestole</h1>
                            <div class="CategoryDetails-CountSort"><span>Produkter: 38</span></div>
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
                                        <button class="ExpandableContent-Button ExpandableContent-Button_sort">Sorter
                                            efter
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
                                                            <circle cx="12" cy="12" r="12" stroke="none">
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
                                            <div class="ProductCard-Box"><a class=" ProductCard-Link"
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
                                                        <div
                                                            class="ProductCard-ConfigurableOptions ProductCard-ConfigurableOptions_hasRest">
                                                            <div
                                                                class="ProductCard-ColorDiv ProductCard-ColorDiv_active">
                                                                <img loading="lazy" alt="Fabric color" width="18"
                                                                    height="18"
                                                                    src="https://cdn.sofacompany.com/media/imagemapperUploader/images/240_Maya-Cream.jpg?width=18&amp;height=18"
                                                                    class="ProductCard-Color">
                                                            </div>
                                                            <div class="ProductCard-ColorDiv"><img loading="lazy"
                                                                    alt="Fabric color" width="18" height="18"
                                                                    src="https://cdn.sofacompany.com/media/imagemapperUploader/images/250_Moss-Rust.jpg?width=18&amp;height=18"
                                                                    class="ProductCard-Color"></div>
                                                            <div class="ProductCard-ColorDiv"><img loading="lazy"
                                                                    alt="Fabric color" width="18" height="18"
                                                                    src="https://cdn.sofacompany.com/media/imagemapperUploader/images/261_Danny-Cream.jpg?width=18&amp;height=18"
                                                                    class="ProductCard-Color"></div>
                                                            <div
                                                                class="ProductCard-ColorDiv ProductCard-ColorDiv_rest">
                                                                +
                                                            </div>
                                                        </div>
                                                    </figure>
                                                    <div class="ProductCard-ContentWrapper">
                                                        <div class="ProductCard-Content">
                                                            <div class="ProductCard-MainDetails">
                                                                <div class="ProductCard-NameWrapper">
                                                                    <p class="ProductCard-Name">Babette</p>
                                                                    <p class="ProductCard-Name2">Lænestol</p>
                                                                    <p class="ProductCard-Name3">Maya Cream</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ProductCard-PriceWrapper">
                                                            <p aria-label="Product price: 4.999&nbsp;DKK"
                                                                class="ProductPrice ProductCard-Price">
                                                            <div class="ProductPrice-OuterWrapper">
                                                                <div class="ProductPrice-InnerWrapper"><del
                                                                        aria-label="Gammel pris"
                                                                        class="ProductPrice-HighPrice">DKK 4.999</del>
                                                                </div><span
                                                                    class="ProductPrice-InnerWrapper ProductPrice-InnerWrapper_isVisible"><span>DKK
                                                                        4.999</span></span>
                                                            </div>
                                                            </p>
                                                            <div class="ProductCard-DeliveryPrice"><a class=" "
                                                                    href="/da-dk/levering-og-afhentning">+
                                                                    fragtpris</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a><button
                                                    class="AddToCart AddToCart_white ProductCard-AddToCart Button Button_white"><span>Læg
                                                        i kurv</span><span>Tilføjer ...</span></button></div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                            <p class="CategoryPage-ItemsCount">Viser 38 af 38 produkter</p>
                            <nav class="ProductList-PageNavList">
                                <ul class="PaginationLinks PaginationLinks-Hidden">
                                    <li class="focus-visible"><a href="?page=1" target="_self"
                                            class="focus-visible">1</a></li>
                                </ul>
                            </nav>
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
