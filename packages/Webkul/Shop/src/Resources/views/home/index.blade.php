@php
    $channel = core()->getCurrentChannel();
@endphp

<!-- SEO Meta Content -->
@push('meta')
    <meta name="title" content="{{ $channel->home_seo['meta_title'] ?? '' }}" />

    <meta name="description" content="{{ $channel->home_seo['meta_description'] ?? '' }}" />

    <meta name="keywords" content="{{ $channel->home_seo['meta_keywords'] ?? '' }}" />
@endPush

<x-shop::layouts>
    <!-- Page Title -->
    <x-slot:title>
        {{ $channel->home_seo['meta_title'] ?? '' }}
    </x-slot>

    <!-- Loop over the theme customization -->

    <div class="section-attribute-size">
        <div class="container-fluid">
            <div class="attribute-size_title">
                <h2>Udforsk sofaer efter størrelse
                </h2>
            </div>
            <div class="attribute-size_content">
                <div class="item">
                    <div class="item_image">
                        <img src="https://cdn.sofacompany.com/media/contentmanager/content/246604_v2.png?width=450&height=450"
                            alt="Sofa Small">
                    </div>
                    <div class="item_title">
                        <span>4-personers sofaer <i class="fa-solid fa-arrow-right-long"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach ($customizations as $customization)
        @php $data = $customization->options @endphp

        <!-- Static content -->
        @switch ($customization->type)
            @case ($customization::IMAGE_CAROUSEL)
                @php $class = 'container-fluid banner-carousel' @endphp
                <!-- Image Carousel -->
                <x-shop::carousel :class="$class" :options="$data" aria-label="Image Carousel" />
            @break

            @case ($customization::STATIC_CONTENT)
                <!-- push style -->
                @if (!empty($data['css']))
                    @push('styles')
                        <style>
                            {{ $data['css'] }}
                        </style>
                    @endpush
                @endif

                <!-- render html -->
                @if (!empty($data['html']))
                    {!! $data['html'] !!}
                @endif
            @break

            @case ($customization::CATEGORY_CAROUSEL)
                <!-- Categories carousel -->
                <x-shop::categories.carousel :title="$data['title'] ?? ''" :src="route('shop.api.categories.index', $data['filters'] ?? [])" :navigation-link="route('shop.home.index')"
                    aria-label="Categories Carousel" />
            @break

            @case ($customization::PRODUCT_CAROUSEL)
                <!-- Product Carousel -->
                <x-shop::products.carousel :title="$data['title'] ?? ''" :src="route('shop.api.products.index', $data['filters'] ?? [])" :navigation-link="route('shop.search.index', $data['filters'] ?? [])"
                    aria-label="Product Carousel" />
            @break
        @endswitch
    @endforeach
</x-shop::layouts>
