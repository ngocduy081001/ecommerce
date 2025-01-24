@php
    $channel = core()->getCurrentChannel();
@endphp

<!-- SEO Meta Content -->
@push('meta')
    <meta name="title" content="{{ $channel->home_seo['meta_title'] ?? '' }}" />

    <meta name="description" content="{{ $channel->home_seo['meta_description'] ?? '' }}" />

    <meta name="keywords" content="{{ $channel->home_seo['meta_keywords'] ?? '' }}" />
@endPush
@push('styles')
@endpush
<x-shop::layouts>
    {{-- <!-- Page Title -->
    <x-slot:title>
        {{ $channel->home_seo['meta_title'] ?? '' }}
    </x-slot>



    <!-- Loop over the theme customization -->
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
                <x-shop::categories.carousel :title="$data['title'] ?? ''" :subtitle="$data['subtitle'] ?? ''" :src="route('shop.api.categories.index', $data['filters'] ?? [])" :navigation-link="route('shop.home.index')"
                    aria-label="Categories Carousel" />
            @break

            @case ($customization::PRODUCT_CAROUSEL)
                <!-- Product Carousel -->
                <x-shop::products.carousel :title="$data['title'] ?? ''" :src="route('shop.api.products.index', $data['filters'] ?? [])" :navigation-link="route('shop.search.index', $data['filters'] ?? [])"
                    aria-label="Product Carousel" />
            @break

            @case ($customization::CATEGORY_GRID)
                <!-- Category Grid -->

                <x-shop::categories.grid :title="$data['title'] ?? ''" :src="route('shop.api.categories.grid', $data['filters'] ?? [])" :style="$data['style']" aria-label="Category Grid" />
            @break
        @endswitch
    @endforeach --}}
    <main class="HomePage">
        <main class="CmsPage">
            <div class="CmsPage-Wrapper CmsPage-Wrapper_page_width_full">
                <div class="CmsPage-Content">
                    <div class="RenderWhenVisible" style="">
                        <div class="SliderWidget-Wrapper">
                            <div class="Slider SliderWidget DK - Homepage" style="height: 575px;">
                                <div tabindex="0" role="button" aria-label="Draggable area"
                                    class="Draggable Slider-Wrapper"
                                    style="--translateX: 0px; --animation-speed: 300ms;">
                                    <figure
                                        class="SliderWidget-Figure SliderWidget-Figure_Position_0 SliderWidget-Figure_fullWidth">
                                        <div
                                            class="Image Image_ratio_custom Image_imageStatus_1 Image_hasSrc SliderWidget-FigureImage">
                                            <img class="desktop"
                                                src="https://cdn.sofacompany.com/media/scandiweb/slider/s/c/sc_slider_image_desktop_top_3_lounge_sofas_2800x1150px_dk.gif"
                                                alt="" loading="eager" decoding="async" class="Image-Image"
                                                style="width: 100%; height: 100%;">
                                            <img class="mobile"
                                                src="https://cdn.sofacompany.com/media/scandiweb/slider/s/c/sc_slider_image_mobile_top_3_lounge_sofas_780x470px_dk.gif"
                                                alt="" loading="eager" decoding="async" class="Image-Image"
                                                style="width: 100%; height: 100%;">
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="RenderWhenVisible" style="">
                        <div class="USPBlock-Container">
                            <div class="USPBlock USPdesktop">
                                <div class="popover-container"><button class="popover-button false"
                                        id="headlessui-popover-button-1" type="button" aria-expanded="false"
                                        aria-controls="headlessui-popover-panel-2">
                                        <div class="USPBlock-Picture">
                                            <div class="Image Image_ratio_square Image_imageStatus_1 Image_hasSrc "><img
                                                    src="https://cdn.sofacompany.com/media/contentmanager/content/SOFACOMPANY-USP-GUARANTEE_21.svg?width=40&amp;height=40"
                                                    alt="USP Grid Block" loading="lazy" decoding="async"
                                                    class="Image-Image" style="width: 100%; height: 100%;"></div>
                                            <p>10 ÅRS GARANTI</p>
                                        </div>
                                    </button>
                                    <div class="popover-panel closed" id="headlessui-popover-panel-2">Alle vores designs
                                        er håndbyggede, og vi gør en dyd ud af altid at bruge materialer af en høj
                                        kvalitet. På den måde kan vi give dig 10 års garanti på alle møbler.</div>
                                </div>
                                <div class="popover-container"><button class="popover-button false"
                                        id="headlessui-popover-button-3" type="button" aria-expanded="false"
                                        aria-controls="headlessui-popover-panel-4">
                                        <div class="USPBlock-Picture">
                                            <div class="Image Image_ratio_square Image_imageStatus_1 Image_hasSrc "><img
                                                    src="https://cdn.sofacompany.com/media/contentmanager/content/Website_icons_35x35px_garanti_1_6.svg?width=40&amp;height=40"
                                                    alt="USP Grid Block" loading="lazy" decoding="async"
                                                    class="Image-Image" style="width: 100%; height: 100%;"></div>
                                            <p>FASTE LAVE PRISER</p>
                                        </div>
                                    </button>
                                    <div class="popover-panel closed" id="headlessui-popover-panel-4">Vi har fjernet
                                        alle fordyrende mellemled, så du kan få design til faste lave priser. Vi holder
                                        heller aldrig udsalg, og derfor behøver du ikke vente med at købe dit
                                        drømmemøbel.</div>
                                </div>
                                <div class="popover-container"><button class="popover-button false"
                                        id="headlessui-popover-button-5" type="button" aria-expanded="false"
                                        aria-controls="headlessui-popover-panel-6">
                                        <div class="USPBlock-Picture">
                                            <div class="Image Image_ratio_square Image_imageStatus_1 Image_hasSrc ">
                                                <img src="https://cdn.sofacompany.com/media/contentmanager/content/Brand_illus_icon_black_delivery_3_1__4_9.svg?width=40&amp;height=40"
                                                    alt="USP Grid Block" loading="lazy" decoding="async"
                                                    class="Image-Image" style="width: 100%; height: 100%;">
                                            </div>
                                            <p>HURTIG LEVERING</p>
                                        </div>
                                    </button>
                                    <div class="popover-panel closed" id="headlessui-popover-panel-6">Hos os behøver
                                        du
                                        ikke vente en evighed på at få din drømmesofa. Er varen på lager, leverer vi
                                        nemlig inden for 3-5 hverdage.</div>
                                </div>
                                <div class="popover-container"><button class="popover-button cursor-default"
                                        id="headlessui-popover-button-7" type="button" aria-expanded="false"
                                        aria-controls="headlessui-popover-panel-8">
                                        <div class="USPBlock-Picture USPBlock-Picture_isTrustpilot">
                                            <div class="Image Image_ratio_square Image_imageStatus_1 Image_hasSrc ">
                                                <img src="https://cdn.sofacompany.com/media/contentmanager/content/trustpilot_stjerne_6-14_8.svg?width=40&amp;height=40"
                                                    alt="USP Grid Block" loading="lazy" decoding="async"
                                                    class="Image-Image" style="width: 100%; height: 100%;">
                                            </div>
                                            <div data-locale="da-DK" data-template-id="5419b637fa0340045cd0c936"
                                                data-businessunit-id="4ec816de00006400051195cd"
                                                data-style-height="20px" data-style-width="100%" data-theme="light"
                                                class="trustpilot-widget" style="position: relative;"><iframe
                                                    title="Kundeanmeldelser fra Trustpilot" loading="auto"
                                                    src="https://widget.trustpilot.com/trustboxes/5419b637fa0340045cd0c936/index.html?templateId=5419b637fa0340045cd0c936&amp;businessunitId=4ec816de00006400051195cd#locale=da-DK&amp;styleHeight=20px&amp;styleWidth=100%25&amp;theme=light"
                                                    style="position: relative; height: 20px; width: 100%; border-style: none; display: block; overflow: hidden;"></iframe>
                                            </div>
                                        </div>
                                    </button>
                                    <div class="popover-panel closed" id="headlessui-popover-panel-8"></div>
                                </div>
                            </div>
                            <div class="USPBlock USPmobile">
                                <div class="USPBlock-Loop">
                                    <div class="USPBlock-Loop-Track">
                                        <div class="USPBlock-Loop-Block">
                                            <div class="USPBlock-Picture">
                                                <div
                                                    class="Image Image_ratio_square Image_imageStatus_1 Image_hasSrc ">
                                                    <img src="https://cdn.sofacompany.com/media/contentmanager/content/SOFACOMPANY-USP-GUARANTEE_21.svg?width=40&amp;height=40"
                                                        alt="USP Grid Block" loading="lazy" decoding="async"
                                                        class="Image-Image" style="width: 100%; height: 100%;">
                                                </div>
                                                <p>10 ÅRS GARANTI</p>
                                            </div>
                                            <div class="USPBlock-Picture">
                                                <div
                                                    class="Image Image_ratio_square Image_imageStatus_1 Image_hasSrc ">
                                                    <img src="https://cdn.sofacompany.com/media/contentmanager/content/Website_icons_35x35px_garanti_1_6.svg?width=40&amp;height=40"
                                                        alt="USP Grid Block" loading="lazy" decoding="async"
                                                        class="Image-Image" style="width: 100%; height: 100%;">
                                                </div>
                                                <p>FASTE LAVE PRISER</p>
                                            </div>
                                            <div class="USPBlock-Picture">
                                                <div
                                                    class="Image Image_ratio_square Image_imageStatus_1 Image_hasSrc ">
                                                    <img src="https://cdn.sofacompany.com/media/contentmanager/content/Brand_illus_icon_black_delivery_3_1__4_9.svg?width=40&amp;height=40"
                                                        alt="USP Grid Block" loading="lazy" decoding="async"
                                                        class="Image-Image" style="width: 100%; height: 100%;">
                                                </div>
                                                <p>HURTIG LEVERING</p>
                                            </div>
                                            <div class="USPBlock-Picture USPBlock-Picture_isTrustpilot">
                                                <div
                                                    class="Image Image_ratio_square Image_imageStatus_1 Image_hasSrc ">
                                                    <img src="https://cdn.sofacompany.com/media/contentmanager/content/trustpilot_stjerne_6-14_8.svg?width=40&amp;height=40"
                                                        alt="USP Grid Block" loading="lazy" decoding="async"
                                                        class="Image-Image" style="width: 100%; height: 100%;">
                                                </div>
                                                <div data-locale="da-DK" data-template-id="5419b637fa0340045cd0c936"
                                                    data-businessunit-id="4ec816de00006400051195cd"
                                                    data-style-height="20px" data-style-width="100%"
                                                    data-theme="light" class="trustpilot-widget"
                                                    style="position: relative;"><iframe
                                                        title="Kundeanmeldelser fra Trustpilot" loading="auto"
                                                        src="https://widget.trustpilot.com/trustboxes/5419b637fa0340045cd0c936/index.html?templateId=5419b637fa0340045cd0c936&amp;businessunitId=4ec816de00006400051195cd#locale=da-DK&amp;styleHeight=20px&amp;styleWidth=100%25&amp;theme=light"
                                                        style="position: relative; height: 20px; width: 100%; border-style: none; display: block; overflow: hidden;"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="USPBlock-Loop-Block">
                                            <div class="USPBlock-Picture">
                                                <div
                                                    class="Image Image_ratio_square Image_imageStatus_1 Image_hasSrc ">
                                                    <img src="https://cdn.sofacompany.com/media/contentmanager/content/SOFACOMPANY-USP-GUARANTEE_21.svg?width=40&amp;height=40"
                                                        alt="USP Grid Block" loading="lazy" decoding="async"
                                                        class="Image-Image" style="width: 100%; height: 100%;">
                                                </div>
                                                <p>10 ÅRS GARANTI</p>
                                            </div>
                                            <div class="USPBlock-Picture">
                                                <div
                                                    class="Image Image_ratio_square Image_imageStatus_1 Image_hasSrc ">
                                                    <img src="https://cdn.sofacompany.com/media/contentmanager/content/Website_icons_35x35px_garanti_1_6.svg?width=40&amp;height=40"
                                                        alt="USP Grid Block" loading="lazy" decoding="async"
                                                        class="Image-Image" style="width: 100%; height: 100%;">
                                                </div>
                                                <p>FASTE LAVE PRISER</p>
                                            </div>
                                            <div class="USPBlock-Picture">
                                                <div
                                                    class="Image Image_ratio_square Image_imageStatus_1 Image_hasSrc ">
                                                    <img src="https://cdn.sofacompany.com/media/contentmanager/content/Brand_illus_icon_black_delivery_3_1__4_9.svg?width=40&amp;height=40"
                                                        alt="USP Grid Block" loading="lazy" decoding="async"
                                                        class="Image-Image" style="width: 100%; height: 100%;">
                                                </div>
                                                <p>HURTIG LEVERING</p>
                                            </div>
                                            <div class="USPBlock-Picture USPBlock-Picture_isTrustpilot">
                                                <div
                                                    class="Image Image_ratio_square Image_imageStatus_1 Image_hasSrc ">
                                                    <img src="https://cdn.sofacompany.com/media/contentmanager/content/trustpilot_stjerne_6-14_8.svg?width=40&amp;height=40"
                                                        alt="USP Grid Block" loading="lazy" decoding="async"
                                                        class="Image-Image" style="width: 100%; height: 100%;">
                                                </div>
                                                <div data-locale="da-DK" data-template-id="5419b637fa0340045cd0c936"
                                                    data-businessunit-id="4ec816de00006400051195cd"
                                                    data-style-height="20px" data-style-width="100%"
                                                    data-theme="light" class="trustpilot-widget"
                                                    style="position: relative;"><iframe
                                                        title="Kundeanmeldelser fra Trustpilot" loading="auto"
                                                        src="https://widget.trustpilot.com/trustboxes/5419b637fa0340045cd0c936/index.html?templateId=5419b637fa0340045cd0c936&amp;businessunitId=4ec816de00006400051195cd#locale=da-DK&amp;styleHeight=20px&amp;styleWidth=100%25&amp;theme=light"
                                                        style="position: relative; height: 20px; width: 100%; border-style: none; display: block; overflow: hidden;"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="USPBlock-Background"></div>
                        </div>
                    </div>
                    <div class="RenderWhenVisible" style="">
                        <div class="FeaturedCategories">
                            <div class="FeaturedCategories-Heading">Udforsk sofaer efter størrelse</div>
                            <div class="FeaturedCategories-ScrollBox">
                                <div
                                    class="FeaturedCategories-Scroll indiana-scroll-container indiana-scroll-container--hide-scrollbars">
                                    <a class=" FeaturedCategories-Category" href="/da-dk/sofaer/4-personers-sofa">
                                        <div
                                            class="Image Image_ratio_custom Image_imageStatus_1 Image_hasSrc FeaturedCategories-Picture FeaturedCategories-Picture_contain FeaturedCategories-Picture_type_Small height">
                                            <img src="https://cdn.sofacompany.com/media/contentmanager/content/246604_v2.png?width=450&amp;height=450"
                                                alt="4-personers sofaer" loading="lazy" decoding="async"
                                                class="Image-Image" style="width: 100%; height: 100%;">
                                        </div>
                                        <div class="FeaturedCategories-Title"><span
                                                class="FeaturedCategories-Text">4-personers sofaer</span><span
                                                class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="35.205"
                                                    height="15.41" viewBox="0 0 35.205 15.41">
                                                    <g transform="translate(-332.293 0.705)">
                                                        <line x2="34" transform="translate(332.793 7)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1" class="a"></line>
                                                        <line x2="6" y2="7"
                                                            transform="translate(360.793)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1"
                                                            class="a"></line>
                                                        <line y1="7" x2="6"
                                                            transform="translate(360.793 7)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1"
                                                            class="a"></line>
                                                    </g>
                                                </svg></span><span class="icon icon_mobile"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="14.205" height="9.41"
                                                    viewBox="0 0 14.205 9.41">
                                                    <g id="Group_536" data-name="Group 536"
                                                        transform="translate(-355 -2.000)">
                                                        <line id="Line_4" data-name="Line 4" x2="13"
                                                            transform="translate(355.5 7)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1">
                                                        </line>
                                                        <line id="Line_5" data-name="Line 5" x2="3.429"
                                                            y2="4" transform="translate(365.071 3)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                        <line id="Line_6" data-name="Line 6" y1="4"
                                                            x2="3.429" transform="translate(365.071 7)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                    </g>
                                                </svg></span></div>
                                    </a><a class=" FeaturedCategories-Category" href="/da-dk/sofaer/3-personers-sofa">
                                        <div
                                            class="Image Image_ratio_custom Image_imageStatus_1 Image_hasSrc FeaturedCategories-Picture FeaturedCategories-Picture_contain FeaturedCategories-Picture_type_Small height">
                                            <img src="https://cdn.sofacompany.com/media/contentmanager/content/224903_1.png?width=450&amp;height=450"
                                                alt="3-personers sofaer" loading="lazy" decoding="async"
                                                class="Image-Image" style="width: 100%; height: 100%;">
                                        </div>
                                        <div class="FeaturedCategories-Title"><span
                                                class="FeaturedCategories-Text">3-personers sofaer</span><span
                                                class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="35.205"
                                                    height="15.41" viewBox="0 0 35.205 15.41">
                                                    <g transform="translate(-332.293 0.705)">
                                                        <line x2="34" transform="translate(332.793 7)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1" class="a"></line>
                                                        <line x2="6" y2="7"
                                                            transform="translate(360.793)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1"
                                                            class="a"></line>
                                                        <line y1="7" x2="6"
                                                            transform="translate(360.793 7)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1"
                                                            class="a"></line>
                                                    </g>
                                                </svg></span><span class="icon icon_mobile"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="14.205" height="9.41"
                                                    viewBox="0 0 14.205 9.41">
                                                    <g id="Group_536" data-name="Group 536"
                                                        transform="translate(-355 -2.000)">
                                                        <line id="Line_4" data-name="Line 4" x2="13"
                                                            transform="translate(355.5 7)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1">
                                                        </line>
                                                        <line id="Line_5" data-name="Line 5" x2="3.429"
                                                            y2="4" transform="translate(365.071 3)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                        <line id="Line_6" data-name="Line 6" y1="4"
                                                            x2="3.429" transform="translate(365.071 7)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                    </g>
                                                </svg></span></div>
                                    </a><a class=" FeaturedCategories-Category" href="/da-dk/sofaer/2-personers-sofa">
                                        <div
                                            class="Image Image_ratio_custom Image_imageStatus_1 Image_hasSrc FeaturedCategories-Picture FeaturedCategories-Picture_contain FeaturedCategories-Picture_type_Small height">
                                            <img src="https://cdn.sofacompany.com/media/contentmanager/content/240002.png?width=450&amp;height=450"
                                                alt="2-personers sofaer" loading="lazy" decoding="async"
                                                class="Image-Image" style="width: 100%; height: 100%;">
                                        </div>
                                        <div class="FeaturedCategories-Title"><span
                                                class="FeaturedCategories-Text">2-personers sofaer</span><span
                                                class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="35.205"
                                                    height="15.41" viewBox="0 0 35.205 15.41">
                                                    <g transform="translate(-332.293 0.705)">
                                                        <line x2="34" transform="translate(332.793 7)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1" class="a"></line>
                                                        <line x2="6" y2="7"
                                                            transform="translate(360.793)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1"
                                                            class="a"></line>
                                                        <line y1="7" x2="6"
                                                            transform="translate(360.793 7)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1"
                                                            class="a"></line>
                                                    </g>
                                                </svg></span><span class="icon icon_mobile"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="14.205" height="9.41"
                                                    viewBox="0 0 14.205 9.41">
                                                    <g id="Group_536" data-name="Group 536"
                                                        transform="translate(-355 -2.000)">
                                                        <line id="Line_4" data-name="Line 4" x2="13"
                                                            transform="translate(355.5 7)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1">
                                                        </line>
                                                        <line id="Line_5" data-name="Line 5" x2="3.429"
                                                            y2="4" transform="translate(365.071 3)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                        <line id="Line_6" data-name="Line 6" y1="4"
                                                            x2="3.429" transform="translate(365.071 7)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                    </g>
                                                </svg></span></div>
                                    </a>
                                </div>
                                <div class="FeaturedCategories-Icon FeaturedCategories-Icon_left"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                        viewBox="0 0 60 60">
                                        <g transform="translate(-1260 -334)">
                                            <g transform="translate(1260 334)" fill="#f4f0ec" stroke="#000"
                                                stroke-width="1">
                                                <circle cx="30" cy="30" r="30" stroke="none"></circle>
                                                <circle cx="30" cy="30" r="29.5" fill="none">
                                                </circle>
                                            </g>
                                            <g transform="translate(-1)">
                                                <line x2="6" y2="7" transform="translate(1288 357)"
                                                    fill="none" stroke="#000" stroke-linecap="round"
                                                    stroke-width="1"></line>
                                                <line y1="7" x2="6" transform="translate(1288 364)"
                                                    fill="none" stroke="#000" stroke-linecap="round"
                                                    stroke-width="1"></line>
                                            </g>
                                        </g>
                                    </svg></div>
                                <div class="FeaturedCategories-Icon FeaturedCategories-Icon_right"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                        viewBox="0 0 60 60">
                                        <g transform="translate(-1260 -334)">
                                            <g transform="translate(1260 334)" fill="#f4f0ec" stroke="#000"
                                                stroke-width="1">
                                                <circle cx="30" cy="30" r="30" stroke="none"></circle>
                                                <circle cx="30" cy="30" r="29.5" fill="none">
                                                </circle>
                                            </g>
                                            <g transform="translate(-1)">
                                                <line x2="6" y2="7" transform="translate(1288 357)"
                                                    fill="none" stroke="#000" stroke-linecap="round"
                                                    stroke-width="1"></line>
                                                <line y1="7" x2="6" transform="translate(1288 364)"
                                                    fill="none" stroke="#000" stroke-linecap="round"
                                                    stroke-width="1"></line>
                                            </g>
                                        </g>
                                    </svg></div>
                            </div>
                        </div>
                    </div>
                    <div class="RenderWhenVisible" style="">
                        <div class="SplitContent-Container">
                            <div class="SplitContent-SubContainer">
                                <div class="SplitContent-Title SplitContent-Title_top hideDesktop">FÅ 5 GRATIS
                                    STOFPRØVER</div>
                                <div class="SplitContent SplitContent_position_Right">
                                    <div
                                        class="SplitContent-ImageContainer SplitContent-ImageContainer_position_Right">
                                        <div class="Image Image_ratio_custom Image_imageStatus_1 Image_hasSrc "><img
                                                src="https://cdn.sofacompany.com/media/contentmanager/content/Fabric_samples_02.jpg"
                                                alt="" loading="lazy" decoding="async" class="Image-Image"
                                                style="width: 100%; height: 100%;"></div>
                                    </div>
                                    <div class="SplitContent-ContentContainer">
                                        <div class="SplitContent-Content">
                                            <div class="SplitContent-Title hideMobile">FÅ 5 GRATIS STOFPRØVER</div>
                                            <span class="hideMobile">Vælg mellem 50+ tekstiler og farver, og få sendt 5
                                                stofprøver hjem i postkassen helt gratis. Vi leverer inden for få
                                                dage.</span><span class="hideDesktop">Vælg mellem 50+ tekstiler og
                                                farver. Vi leverer inden for få dage.</span><a
                                                class=" SplitContent-CTA Button" href="/da-dk/stofprover"
                                                style="--cta-button-text-color: black; --cta-button-background-color: transparent; --cta-button-border-color: black; --cta-button-hover-color: white; --cta-button-hover-background-color: black; --cta-button-hover-border-color: black;">Bestil
                                                stofprøver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="RenderWhenVisible" style="">
                        <div class="FeaturedCategories">
                            <div class="FeaturedCategories-Heading">UDFORSK SOFAER EFTER TYPE</div>
                            <div class="FeaturedCategories-ScrollBox">
                                <div
                                    class="FeaturedCategories-Scroll indiana-scroll-container indiana-scroll-container--hide-scrollbars">
                                    <a href="https://sofacompany.com/da-dk/sofaer/3-personers-sofa" target=""
                                        class=" FeaturedCategories-Category">
                                        <div
                                            class="Image Image_ratio_custom Image_imageStatus_1 Image_hasSrc FeaturedCategories-Picture FeaturedCategories-Picture_type_">
                                            <img src="https://cdn.sofacompany.com/media/contentmanager/content/Johan_3seater_Leather_Bronze_Oak_Wood_Wood_Vibes.jpg?width=450&amp;height=450"
                                                alt="Klassiske sofaer" loading="lazy" decoding="async"
                                                class="Image-Image" style="width: 100%; height: 100%;">
                                        </div>
                                        <div class="FeaturedCategories-Title"><span
                                                class="FeaturedCategories-Text">Klassiske sofaer</span><span
                                                class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="35.205"
                                                    height="15.41" viewBox="0 0 35.205 15.41">
                                                    <g transform="translate(-332.293 0.705)">
                                                        <line x2="34" transform="translate(332.793 7)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1" class="a"></line>
                                                        <line x2="6" y2="7"
                                                            transform="translate(360.793)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1"
                                                            class="a"></line>
                                                        <line y1="7" x2="6"
                                                            transform="translate(360.793 7)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1"
                                                            class="a"></line>
                                                    </g>
                                                </svg></span><span class="icon icon_mobile"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="14.205" height="9.41"
                                                    viewBox="0 0 14.205 9.41">
                                                    <g id="Group_536" data-name="Group 536"
                                                        transform="translate(-355 -2.000)">
                                                        <line id="Line_4" data-name="Line 4" x2="13"
                                                            transform="translate(355.5 7)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1">
                                                        </line>
                                                        <line id="Line_5" data-name="Line 5" x2="3.429"
                                                            y2="4" transform="translate(365.071 3)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                        <line id="Line_6" data-name="Line 6" y1="4"
                                                            x2="3.429" transform="translate(365.071 7)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                    </g>
                                                </svg></span></div>
                                    </a><a href="https://sofacompany.com/da-dk/sofaer/modulsofa" target=""
                                        class=" FeaturedCategories-Category">
                                        <div
                                            class="Image Image_ratio_custom Image_imageStatus_1 Image_hasSrc FeaturedCategories-Picture FeaturedCategories-Picture_type_">
                                            <img src="https://cdn.sofacompany.com/media/contentmanager/content/daphne_pasha_dune_010922_01_high_4.jpg?width=450&amp;height=450"
                                                alt="Modulsofaer" loading="lazy" decoding="async"
                                                class="Image-Image" style="width: 100%; height: 100%;">
                                        </div>
                                        <div class="FeaturedCategories-Title"><span
                                                class="FeaturedCategories-Text">Modulsofaer</span><span
                                                class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="35.205"
                                                    height="15.41" viewBox="0 0 35.205 15.41">
                                                    <g transform="translate(-332.293 0.705)">
                                                        <line x2="34" transform="translate(332.793 7)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1" class="a"></line>
                                                        <line x2="6" y2="7"
                                                            transform="translate(360.793)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1"
                                                            class="a"></line>
                                                        <line y1="7" x2="6"
                                                            transform="translate(360.793 7)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1"
                                                            class="a"></line>
                                                    </g>
                                                </svg></span><span class="icon icon_mobile"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="14.205" height="9.41"
                                                    viewBox="0 0 14.205 9.41">
                                                    <g id="Group_536" data-name="Group 536"
                                                        transform="translate(-355 -2.000)">
                                                        <line id="Line_4" data-name="Line 4" x2="13"
                                                            transform="translate(355.5 7)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1">
                                                        </line>
                                                        <line id="Line_5" data-name="Line 5" x2="3.429"
                                                            y2="4" transform="translate(365.071 3)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                        <line id="Line_6" data-name="Line 6" y1="4"
                                                            x2="3.429" transform="translate(365.071 7)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                    </g>
                                                </svg></span></div>
                                    </a><a href="https://sofacompany.com/da-dk/sofaer/hjoernesofa" target=""
                                        class=" FeaturedCategories-Category">
                                        <div
                                            class="Image Image_ratio_custom Image_imageStatus_1 Image_hasSrc FeaturedCategories-Picture FeaturedCategories-Picture_type_">
                                            <img src="https://cdn.sofacompany.com/media/contentmanager/content/Nelson_left_coner_Planet_Legion_Blue_Wood_Wood_Vibes.jpg?width=450&amp;height=450"
                                                alt="Hjørnesofaer" loading="lazy" decoding="async"
                                                class="Image-Image" style="width: 100%; height: 100%;">
                                        </div>
                                        <div class="FeaturedCategories-Title"><span
                                                class="FeaturedCategories-Text">Hjørnesofaer</span><span
                                                class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="35.205"
                                                    height="15.41" viewBox="0 0 35.205 15.41">
                                                    <g transform="translate(-332.293 0.705)">
                                                        <line x2="34" transform="translate(332.793 7)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1" class="a"></line>
                                                        <line x2="6" y2="7"
                                                            transform="translate(360.793)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1"
                                                            class="a"></line>
                                                        <line y1="7" x2="6"
                                                            transform="translate(360.793 7)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1"
                                                            class="a"></line>
                                                    </g>
                                                </svg></span><span class="icon icon_mobile"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="14.205" height="9.41"
                                                    viewBox="0 0 14.205 9.41">
                                                    <g id="Group_536" data-name="Group 536"
                                                        transform="translate(-355 -2.000)">
                                                        <line id="Line_4" data-name="Line 4" x2="13"
                                                            transform="translate(355.5 7)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1">
                                                        </line>
                                                        <line id="Line_5" data-name="Line 5" x2="3.429"
                                                            y2="4" transform="translate(365.071 3)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                        <line id="Line_6" data-name="Line 6" y1="4"
                                                            x2="3.429" transform="translate(365.071 7)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                    </g>
                                                </svg></span></div>
                                    </a><a href="https://sofacompany.com/da-dk/havesofa" target=""
                                        class=" FeaturedCategories-Category">
                                        <div
                                            class="Image Image_ratio_custom Image_imageStatus_1 Image_hasSrc FeaturedCategories-Picture FeaturedCategories-Picture_type_">
                                            <img src="https://cdn.sofacompany.com/media/contentmanager/content/Vincent_Outdoor_High_02-_1__1.jpg?width=450&amp;height=450"
                                                alt="Havesofaer" loading="lazy" decoding="async" class="Image-Image"
                                                style="width: 100%; height: 100%;">
                                        </div>
                                        <div class="FeaturedCategories-Title"><span
                                                class="FeaturedCategories-Text">Havesofaer</span><span
                                                class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="35.205"
                                                    height="15.41" viewBox="0 0 35.205 15.41">
                                                    <g transform="translate(-332.293 0.705)">
                                                        <line x2="34" transform="translate(332.793 7)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1" class="a"></line>
                                                        <line x2="6" y2="7"
                                                            transform="translate(360.793)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1"
                                                            class="a"></line>
                                                        <line y1="7" x2="6"
                                                            transform="translate(360.793 7)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1"
                                                            class="a"></line>
                                                    </g>
                                                </svg></span><span class="icon icon_mobile"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="14.205" height="9.41"
                                                    viewBox="0 0 14.205 9.41">
                                                    <g id="Group_536" data-name="Group 536"
                                                        transform="translate(-355 -2.000)">
                                                        <line id="Line_4" data-name="Line 4" x2="13"
                                                            transform="translate(355.5 7)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1">
                                                        </line>
                                                        <line id="Line_5" data-name="Line 5" x2="3.429"
                                                            y2="4" transform="translate(365.071 3)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                        <line id="Line_6" data-name="Line 6" y1="4"
                                                            x2="3.429" transform="translate(365.071 7)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                    </g>
                                                </svg></span></div>
                                    </a><a href="https://sofacompany.com/da-dk/sofaer/chaiselong-sofa" target=""
                                        class=" FeaturedCategories-Category">
                                        <div
                                            class="Image Image_ratio_custom Image_imageStatus_1 Image_hasSrc FeaturedCategories-Picture FeaturedCategories-Picture_type_">
                                            <img src="https://cdn.sofacompany.com/media/contentmanager/content/Conrad_Chaise_left_Fabio_Grey_Green_Oak_Classic_vibes02-_1_.jpg?width=450&amp;height=450"
                                                alt="Chaiselongsofaer" loading="lazy" decoding="async"
                                                class="Image-Image" style="width: 100%; height: 100%;">
                                        </div>
                                        <div class="FeaturedCategories-Title"><span
                                                class="FeaturedCategories-Text">Chaiselongsofaer</span><span
                                                class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="35.205"
                                                    height="15.41" viewBox="0 0 35.205 15.41">
                                                    <g transform="translate(-332.293 0.705)">
                                                        <line x2="34" transform="translate(332.793 7)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1" class="a"></line>
                                                        <line x2="6" y2="7"
                                                            transform="translate(360.793)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1"
                                                            class="a"></line>
                                                        <line y1="7" x2="6"
                                                            transform="translate(360.793 7)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1"
                                                            class="a"></line>
                                                    </g>
                                                </svg></span><span class="icon icon_mobile"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="14.205" height="9.41"
                                                    viewBox="0 0 14.205 9.41">
                                                    <g id="Group_536" data-name="Group 536"
                                                        transform="translate(-355 -2.000)">
                                                        <line id="Line_4" data-name="Line 4" x2="13"
                                                            transform="translate(355.5 7)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1">
                                                        </line>
                                                        <line id="Line_5" data-name="Line 5" x2="3.429"
                                                            y2="4" transform="translate(365.071 3)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                        <line id="Line_6" data-name="Line 6" y1="4"
                                                            x2="3.429" transform="translate(365.071 7)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                    </g>
                                                </svg></span></div>
                                    </a><a href="https://sofacompany.com/da-dk/sofaer/sovesofaer" target=""
                                        class=" FeaturedCategories-Category">
                                        <div
                                            class="Image Image_ratio_custom Image_imageStatus_1 Image_hasSrc FeaturedCategories-Picture FeaturedCategories-Picture_type_">
                                            <img src="https://cdn.sofacompany.com/media/contentmanager/content/clara_pasha_dune_141122_02_high_1.jpg?width=450&amp;height=450"
                                                alt="Sovesofaer" loading="lazy" decoding="async" class="Image-Image"
                                                style="width: 100%; height: 100%;">
                                        </div>
                                        <div class="FeaturedCategories-Title"><span
                                                class="FeaturedCategories-Text">Sovesofaer</span><span
                                                class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="35.205"
                                                    height="15.41" viewBox="0 0 35.205 15.41">
                                                    <g transform="translate(-332.293 0.705)">
                                                        <line x2="34" transform="translate(332.793 7)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1" class="a"></line>
                                                        <line x2="6" y2="7"
                                                            transform="translate(360.793)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1"
                                                            class="a"></line>
                                                        <line y1="7" x2="6"
                                                            transform="translate(360.793 7)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1"
                                                            class="a"></line>
                                                    </g>
                                                </svg></span><span class="icon icon_mobile"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="14.205" height="9.41"
                                                    viewBox="0 0 14.205 9.41">
                                                    <g id="Group_536" data-name="Group 536"
                                                        transform="translate(-355 -2.000)">
                                                        <line id="Line_4" data-name="Line 4" x2="13"
                                                            transform="translate(355.5 7)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1">
                                                        </line>
                                                        <line id="Line_5" data-name="Line 5" x2="3.429"
                                                            y2="4" transform="translate(365.071 3)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                        <line id="Line_6" data-name="Line 6" y1="4"
                                                            x2="3.429" transform="translate(365.071 7)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                    </g>
                                                </svg></span></div>
                                    </a>
                                </div>
                                <div class="FeaturedCategories-Icon FeaturedCategories-Icon_left"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                        viewBox="0 0 60 60">
                                        <g transform="translate(-1260 -334)">
                                            <g transform="translate(1260 334)" fill="#f4f0ec" stroke="#000"
                                                stroke-width="1">
                                                <circle cx="30" cy="30" r="30" stroke="none">
                                                </circle>
                                                <circle cx="30" cy="30" r="29.5" fill="none">
                                                </circle>
                                            </g>
                                            <g transform="translate(-1)">
                                                <line x2="6" y2="7" transform="translate(1288 357)"
                                                    fill="none" stroke="#000" stroke-linecap="round"
                                                    stroke-width="1"></line>
                                                <line y1="7" x2="6"
                                                    transform="translate(1288 364)" fill="none" stroke="#000"
                                                    stroke-linecap="round" stroke-width="1"></line>
                                            </g>
                                        </g>
                                    </svg></div>
                                <div
                                    class="FeaturedCategories-Icon FeaturedCategories-Icon_right FeaturedCategories-Icon_rightArrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                        viewBox="0 0 60 60">
                                        <g transform="translate(-1260 -334)">
                                            <g transform="translate(1260 334)" fill="#f4f0ec" stroke="#000"
                                                stroke-width="1">
                                                <circle cx="30" cy="30" r="30" stroke="none">
                                                </circle>
                                                <circle cx="30" cy="30" r="29.5" fill="none">
                                                </circle>
                                            </g>
                                            <g transform="translate(-1)">
                                                <line x2="6" y2="7"
                                                    transform="translate(1288 357)" fill="none" stroke="#000"
                                                    stroke-linecap="round" stroke-width="1"></line>
                                                <line y1="7" x2="6"
                                                    transform="translate(1288 364)" fill="none" stroke="#000"
                                                    stroke-linecap="round" stroke-width="1"></line>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="RenderWhenVisible" style="">
                        <div class="FeaturedCategories">
                            <div class="FeaturedCategories-Heading">UDFORSK MØBLER, DER PASSER TIL DIN SOFA</div>
                            <div class="FeaturedCategories-ScrollBox">
                                <div
                                    class="FeaturedCategories-Scroll indiana-scroll-container indiana-scroll-container--hide-scrollbars">
                                    <a class=" FeaturedCategories-Category" href="/da-dk/laenestole">
                                        <div
                                            class="Image Image_ratio_custom Image_imageStatus_0 Image_hasSrc FeaturedCategories-Picture FeaturedCategories-Picture_type_">
                                            <img src="https://cdn.sofacompany.com/media/contentmanager/content/Enzo_Maya-Cream_Oak-Soap_Design_news_1_1.jpg?width=450&amp;height=450"
                                                alt="Lænestole" loading="lazy" decoding="async"
                                                class="Image-Image Image-Image_isLoading"
                                                style="width: 100%; height: 100%;">
                                        </div>
                                        <div class="FeaturedCategories-Title"><span
                                                class="FeaturedCategories-Text">Lænestole</span><span
                                                class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="35.205" height="15.41" viewBox="0 0 35.205 15.41">
                                                    <g transform="translate(-332.293 0.705)">
                                                        <line x2="34" transform="translate(332.793 7)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1" class="a"></line>
                                                        <line x2="6" y2="7"
                                                            transform="translate(360.793)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1"
                                                            class="a"></line>
                                                        <line y1="7" x2="6"
                                                            transform="translate(360.793 7)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1"
                                                            class="a"></line>
                                                    </g>
                                                </svg></span><span class="icon icon_mobile"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="14.205"
                                                    height="9.41" viewBox="0 0 14.205 9.41">
                                                    <g id="Group_536" data-name="Group 536"
                                                        transform="translate(-355 -2.000)">
                                                        <line id="Line_4" data-name="Line 4" x2="13"
                                                            transform="translate(355.5 7)" fill="none"
                                                            stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                        <line id="Line_5" data-name="Line 5" x2="3.429"
                                                            y2="4" transform="translate(365.071 3)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                        <line id="Line_6" data-name="Line 6" y1="4"
                                                            x2="3.429" transform="translate(365.071 7)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                    </g>
                                                </svg></span></div>
                                    </a><a class=" FeaturedCategories-Category" href="/da-dk/puffer">
                                        <div
                                            class="Image Image_ratio_custom Image_imageStatus_0 Image_hasSrc FeaturedCategories-Picture FeaturedCategories-Picture_type_">
                                            <img src="https://cdn.sofacompany.com/media/contentmanager/content/no9_mark_cobalt_blue_020522_01_high_9-1.jpg?width=450&amp;height=450"
                                                alt="Puffer og skamler" loading="lazy" decoding="async"
                                                class="Image-Image Image-Image_isLoading"
                                                style="width: 100%; height: 100%;">
                                        </div>
                                        <div class="FeaturedCategories-Title"><span
                                                class="FeaturedCategories-Text">Puffer og skamler</span><span
                                                class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="35.205" height="15.41" viewBox="0 0 35.205 15.41">
                                                    <g transform="translate(-332.293 0.705)">
                                                        <line x2="34" transform="translate(332.793 7)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1" class="a"></line>
                                                        <line x2="6" y2="7"
                                                            transform="translate(360.793)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1"
                                                            class="a"></line>
                                                        <line y1="7" x2="6"
                                                            transform="translate(360.793 7)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1"
                                                            class="a"></line>
                                                    </g>
                                                </svg></span><span class="icon icon_mobile"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="14.205"
                                                    height="9.41" viewBox="0 0 14.205 9.41">
                                                    <g id="Group_536" data-name="Group 536"
                                                        transform="translate(-355 -2.000)">
                                                        <line id="Line_4" data-name="Line 4" x2="13"
                                                            transform="translate(355.5 7)" fill="none"
                                                            stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                        <line id="Line_5" data-name="Line 5" x2="3.429"
                                                            y2="4" transform="translate(365.071 3)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                        <line id="Line_6" data-name="Line 6" y1="4"
                                                            x2="3.429" transform="translate(365.071 7)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                    </g>
                                                </svg></span></div>
                                    </a><a class=" FeaturedCategories-Category" href="/da-dk/sofaborde">
                                        <div
                                            class="Image Image_ratio_custom Image_imageStatus_0 Image_hasSrc FeaturedCategories-Picture FeaturedCategories-Picture_type_">
                                            <img src="https://cdn.sofacompany.com/media/contentmanager/content/cece_soap_oak_veneer_010922_02_high-1.jpg?width=450&amp;height=450"
                                                alt="Sofaborde" loading="lazy" decoding="async"
                                                class="Image-Image Image-Image_isLoading"
                                                style="width: 100%; height: 100%;">
                                        </div>
                                        <div class="FeaturedCategories-Title"><span
                                                class="FeaturedCategories-Text">Sofaborde</span><span
                                                class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="35.205" height="15.41" viewBox="0 0 35.205 15.41">
                                                    <g transform="translate(-332.293 0.705)">
                                                        <line x2="34" transform="translate(332.793 7)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1" class="a"></line>
                                                        <line x2="6" y2="7"
                                                            transform="translate(360.793)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1"
                                                            class="a"></line>
                                                        <line y1="7" x2="6"
                                                            transform="translate(360.793 7)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1"
                                                            class="a"></line>
                                                    </g>
                                                </svg></span><span class="icon icon_mobile"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="14.205"
                                                    height="9.41" viewBox="0 0 14.205 9.41">
                                                    <g id="Group_536" data-name="Group 536"
                                                        transform="translate(-355 -2.000)">
                                                        <line id="Line_4" data-name="Line 4" x2="13"
                                                            transform="translate(355.5 7)" fill="none"
                                                            stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                        <line id="Line_5" data-name="Line 5" x2="3.429"
                                                            y2="4" transform="translate(365.071 3)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                        <line id="Line_6" data-name="Line 6" y1="4"
                                                            x2="3.429" transform="translate(365.071 7)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                    </g>
                                                </svg></span></div>
                                    </a><a class=" FeaturedCategories-Category" href="/da-dk/accessories">
                                        <div
                                            class="Image Image_ratio_custom Image_imageStatus_0 Image_hasSrc FeaturedCategories-Picture FeaturedCategories-Picture_type_">
                                            <img src="https://cdn.sofacompany.com/media/contentmanager/content/accories-1.jpg?width=450&amp;height=450"
                                                alt="Tilbehør" loading="lazy" decoding="async"
                                                class="Image-Image Image-Image_isLoading"
                                                style="width: 100%; height: 100%;">
                                        </div>
                                        <div class="FeaturedCategories-Title"><span
                                                class="FeaturedCategories-Text">Tilbehør</span><span
                                                class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="35.205" height="15.41" viewBox="0 0 35.205 15.41">
                                                    <g transform="translate(-332.293 0.705)">
                                                        <line x2="34" transform="translate(332.793 7)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1" class="a"></line>
                                                        <line x2="6" y2="7"
                                                            transform="translate(360.793)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1"
                                                            class="a"></line>
                                                        <line y1="7" x2="6"
                                                            transform="translate(360.793 7)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1"
                                                            class="a"></line>
                                                    </g>
                                                </svg></span><span class="icon icon_mobile"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="14.205"
                                                    height="9.41" viewBox="0 0 14.205 9.41">
                                                    <g id="Group_536" data-name="Group 536"
                                                        transform="translate(-355 -2.000)">
                                                        <line id="Line_4" data-name="Line 4" x2="13"
                                                            transform="translate(355.5 7)" fill="none"
                                                            stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                        <line id="Line_5" data-name="Line 5" x2="3.429"
                                                            y2="4" transform="translate(365.071 3)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                        <line id="Line_6" data-name="Line 6" y1="4"
                                                            x2="3.429" transform="translate(365.071 7)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                    </g>
                                                </svg></span></div>
                                    </a>
                                </div>
                                <div class="FeaturedCategories-Icon FeaturedCategories-Icon_left"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                        viewBox="0 0 60 60">
                                        <g transform="translate(-1260 -334)">
                                            <g transform="translate(1260 334)" fill="#f4f0ec" stroke="#000"
                                                stroke-width="1">
                                                <circle cx="30" cy="30" r="30" stroke="none">
                                                </circle>
                                                <circle cx="30" cy="30" r="29.5" fill="none">
                                                </circle>
                                            </g>
                                            <g transform="translate(-1)">
                                                <line x2="6" y2="7"
                                                    transform="translate(1288 357)" fill="none" stroke="#000"
                                                    stroke-linecap="round" stroke-width="1"></line>
                                                <line y1="7" x2="6"
                                                    transform="translate(1288 364)" fill="none" stroke="#000"
                                                    stroke-linecap="round" stroke-width="1"></line>
                                            </g>
                                        </g>
                                    </svg></div>
                                <div class="FeaturedCategories-Icon FeaturedCategories-Icon_right"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                        viewBox="0 0 60 60">
                                        <g transform="translate(-1260 -334)">
                                            <g transform="translate(1260 334)" fill="#f4f0ec" stroke="#000"
                                                stroke-width="1">
                                                <circle cx="30" cy="30" r="30" stroke="none">
                                                </circle>
                                                <circle cx="30" cy="30" r="29.5" fill="none">
                                                </circle>
                                            </g>
                                            <g transform="translate(-1)">
                                                <line x2="6" y2="7"
                                                    transform="translate(1288 357)" fill="none" stroke="#000"
                                                    stroke-linecap="round" stroke-width="1"></line>
                                                <line y1="7" x2="6"
                                                    transform="translate(1288 364)" fill="none" stroke="#000"
                                                    stroke-linecap="round" stroke-width="1"></line>
                                            </g>
                                        </g>
                                    </svg></div>
                            </div>
                        </div>
                    </div>
                    <div class="RenderWhenVisible" style="">
                        <div class="FeaturedCategories">
                            <div class="FeaturedCategories-Heading">VORES MEST POPULÆRE DESIGNS</div>
                            <div class="FeaturedCategories-ScrollBox">
                                <div
                                    class="FeaturedCategories-Scroll indiana-scroll-container indiana-scroll-container--hide-scrollbars">
                                    <a href="https://sofacompany.com/da-dk/family/douglas" target=""
                                        class=" FeaturedCategories-Category">
                                        <div
                                            class="Image Image_ratio_custom Image_imageStatus_0 Image_hasSrc FeaturedCategories-Picture FeaturedCategories-Picture_type_Small height">
                                            <img src="https://cdn.sofacompany.com/media/contentmanager/content/Douglas_grey-1.jpg?width=450&amp;height=450"
                                                alt="Se Douglas" loading="lazy" decoding="async"
                                                class="Image-Image Image-Image_isLoading"
                                                style="width: 100%; height: 100%;">
                                        </div>
                                        <div class="FeaturedCategories-Title"><span
                                                class="FeaturedCategories-Text">Se Douglas</span><span
                                                class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="35.205" height="15.41" viewBox="0 0 35.205 15.41">
                                                    <g transform="translate(-332.293 0.705)">
                                                        <line x2="34" transform="translate(332.793 7)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1" class="a"></line>
                                                        <line x2="6" y2="7"
                                                            transform="translate(360.793)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1"
                                                            class="a"></line>
                                                        <line y1="7" x2="6"
                                                            transform="translate(360.793 7)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1"
                                                            class="a"></line>
                                                    </g>
                                                </svg></span><span class="icon icon_mobile"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="14.205"
                                                    height="9.41" viewBox="0 0 14.205 9.41">
                                                    <g id="Group_536" data-name="Group 536"
                                                        transform="translate(-355 -2.000)">
                                                        <line id="Line_4" data-name="Line 4" x2="13"
                                                            transform="translate(355.5 7)" fill="none"
                                                            stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                        <line id="Line_5" data-name="Line 5" x2="3.429"
                                                            y2="4" transform="translate(365.071 3)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                        <line id="Line_6" data-name="Line 6" y1="4"
                                                            x2="3.429" transform="translate(365.071 7)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                    </g>
                                                </svg></span></div>
                                    </a><a href="https://sofacompany.com/da-dk/family/babette" target=""
                                        class=" FeaturedCategories-Category">
                                        <div
                                            class="Image Image_ratio_custom Image_imageStatus_0 Image_hasSrc FeaturedCategories-Picture FeaturedCategories-Picture_type_Small height">
                                            <img src="https://cdn.sofacompany.com/media/contentmanager/content/Babette_grey-1.jpg?width=450&amp;height=450"
                                                alt="Se Babette" loading="lazy" decoding="async"
                                                class="Image-Image Image-Image_isLoading"
                                                style="width: 100%; height: 100%;">
                                        </div>
                                        <div class="FeaturedCategories-Title"><span
                                                class="FeaturedCategories-Text">Se Babette</span><span
                                                class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="35.205" height="15.41" viewBox="0 0 35.205 15.41">
                                                    <g transform="translate(-332.293 0.705)">
                                                        <line x2="34" transform="translate(332.793 7)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1" class="a"></line>
                                                        <line x2="6" y2="7"
                                                            transform="translate(360.793)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1"
                                                            class="a"></line>
                                                        <line y1="7" x2="6"
                                                            transform="translate(360.793 7)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1"
                                                            class="a"></line>
                                                    </g>
                                                </svg></span><span class="icon icon_mobile"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="14.205"
                                                    height="9.41" viewBox="0 0 14.205 9.41">
                                                    <g id="Group_536" data-name="Group 536"
                                                        transform="translate(-355 -2.000)">
                                                        <line id="Line_4" data-name="Line 4" x2="13"
                                                            transform="translate(355.5 7)" fill="none"
                                                            stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                        <line id="Line_5" data-name="Line 5" x2="3.429"
                                                            y2="4" transform="translate(365.071 3)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                        <line id="Line_6" data-name="Line 6" y1="4"
                                                            x2="3.429" transform="translate(365.071 7)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                    </g>
                                                </svg></span></div>
                                    </a><a href="https://sofacompany.com/da-dk/family/daphne" target=""
                                        class=" FeaturedCategories-Category">
                                        <div
                                            class="Image Image_ratio_custom Image_imageStatus_0 Image_hasSrc FeaturedCategories-Picture FeaturedCategories-Picture_type_Small height">
                                            <img src="https://cdn.sofacompany.com/media/contentmanager/content/Daphne_grey-1.jpg?width=450&amp;height=450"
                                                alt="Se Daphne" loading="lazy" decoding="async"
                                                class="Image-Image Image-Image_isLoading"
                                                style="width: 100%; height: 100%;">
                                        </div>
                                        <div class="FeaturedCategories-Title"><span
                                                class="FeaturedCategories-Text">Se Daphne</span><span
                                                class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="35.205" height="15.41" viewBox="0 0 35.205 15.41">
                                                    <g transform="translate(-332.293 0.705)">
                                                        <line x2="34" transform="translate(332.793 7)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1" class="a"></line>
                                                        <line x2="6" y2="7"
                                                            transform="translate(360.793)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1"
                                                            class="a"></line>
                                                        <line y1="7" x2="6"
                                                            transform="translate(360.793 7)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1"
                                                            class="a"></line>
                                                    </g>
                                                </svg></span><span class="icon icon_mobile"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="14.205"
                                                    height="9.41" viewBox="0 0 14.205 9.41">
                                                    <g id="Group_536" data-name="Group 536"
                                                        transform="translate(-355 -2.000)">
                                                        <line id="Line_4" data-name="Line 4" x2="13"
                                                            transform="translate(355.5 7)" fill="none"
                                                            stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                        <line id="Line_5" data-name="Line 5" x2="3.429"
                                                            y2="4" transform="translate(365.071 3)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                        <line id="Line_6" data-name="Line 6" y1="4"
                                                            x2="3.429" transform="translate(365.071 7)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                    </g>
                                                </svg></span></div>
                                    </a><a href="https://sofacompany.com/da-dk/family/paula" target=""
                                        class=" FeaturedCategories-Category">
                                        <div
                                            class="Image Image_ratio_custom Image_imageStatus_0 Image_hasSrc FeaturedCategories-Picture FeaturedCategories-Picture_type_Small height">
                                            <img src="https://cdn.sofacompany.com/media/contentmanager/content/Paula_grey-1.jpg?width=450&amp;height=450"
                                                alt="Se Paula" loading="lazy" decoding="async"
                                                class="Image-Image Image-Image_isLoading"
                                                style="width: 100%; height: 100%;">
                                        </div>
                                        <div class="FeaturedCategories-Title"><span
                                                class="FeaturedCategories-Text">Se Paula</span><span
                                                class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="35.205" height="15.41" viewBox="0 0 35.205 15.41">
                                                    <g transform="translate(-332.293 0.705)">
                                                        <line x2="34" transform="translate(332.793 7)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1" class="a"></line>
                                                        <line x2="6" y2="7"
                                                            transform="translate(360.793)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1"
                                                            class="a"></line>
                                                        <line y1="7" x2="6"
                                                            transform="translate(360.793 7)" fill="none"
                                                            stroke="#000" stroke-linecap="round" stroke-width="1"
                                                            class="a"></line>
                                                    </g>
                                                </svg></span><span class="icon icon_mobile"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="14.205"
                                                    height="9.41" viewBox="0 0 14.205 9.41">
                                                    <g id="Group_536" data-name="Group 536"
                                                        transform="translate(-355 -2.000)">
                                                        <line id="Line_4" data-name="Line 4" x2="13"
                                                            transform="translate(355.5 7)" fill="none"
                                                            stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                        <line id="Line_5" data-name="Line 5" x2="3.429"
                                                            y2="4" transform="translate(365.071 3)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                        <line id="Line_6" data-name="Line 6" y1="4"
                                                            x2="3.429" transform="translate(365.071 7)"
                                                            fill="none" stroke="#000" stroke-linecap="round"
                                                            stroke-width="1"></line>
                                                    </g>
                                                </svg></span></div>
                                    </a>
                                </div>
                                <div class="FeaturedCategories-Icon FeaturedCategories-Icon_left"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                        viewBox="0 0 60 60">
                                        <g transform="translate(-1260 -334)">
                                            <g transform="translate(1260 334)" fill="#f4f0ec" stroke="#000"
                                                stroke-width="1">
                                                <circle cx="30" cy="30" r="30" stroke="none">
                                                </circle>
                                                <circle cx="30" cy="30" r="29.5" fill="none">
                                                </circle>
                                            </g>
                                            <g transform="translate(-1)">
                                                <line x2="6" y2="7"
                                                    transform="translate(1288 357)" fill="none" stroke="#000"
                                                    stroke-linecap="round" stroke-width="1"></line>
                                                <line y1="7" x2="6"
                                                    transform="translate(1288 364)" fill="none" stroke="#000"
                                                    stroke-linecap="round" stroke-width="1"></line>
                                            </g>
                                        </g>
                                    </svg></div>
                                <div class="FeaturedCategories-Icon FeaturedCategories-Icon_right"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                        viewBox="0 0 60 60">
                                        <g transform="translate(-1260 -334)">
                                            <g transform="translate(1260 334)" fill="#f4f0ec" stroke="#000"
                                                stroke-width="1">
                                                <circle cx="30" cy="30" r="30" stroke="none">
                                                </circle>
                                                <circle cx="30" cy="30" r="29.5" fill="none">
                                                </circle>
                                            </g>
                                            <g transform="translate(-1)">
                                                <line x2="6" y2="7"
                                                    transform="translate(1288 357)" fill="none" stroke="#000"
                                                    stroke-linecap="round" stroke-width="1"></line>
                                                <line y1="7" x2="6"
                                                    transform="translate(1288 364)" fill="none" stroke="#000"
                                                    stroke-linecap="round" stroke-width="1"></line>
                                            </g>
                                        </g>
                                    </svg></div>
                            </div>
                        </div>
                    </div>
                    <div class="RenderWhenVisible" style="">
                        <div class="InstagramCards">
                            <div class="InstagramCards-Heading">
                                <div class="InstagramCards-Heading_title">STYLED BY YOU</div>
                                <div class="InstagramCards-Heading_text">Vi elsker at se, hvordan I styler vores
                                    møbler derhjemme. Brug #sofacompany på Instagram – måske er dit hjem blandt dem, vi
                                    deler.</div>
                            </div>
                            <div class="InstagramCards-ScrollBox">
                                <div
                                    class="InstagramCards-Scroll indiana-scroll-container indiana-scroll-container--hide-scrollbars">
                                    <a class=" InstagramCards-Category InstagramCards-Category_type_Portrait"
                                        href="/da-dk/familie/babette">
                                        <div>
                                            <div
                                                class="Image Image_ratio_custom Image_imageStatus_0 Image_hasSrc InstagramCards-Picture InstagramCards-Picture_type_Portrait">
                                                <img src="https://cdn.sofacompany.com/media/contentmanager/content/Babette_01__malenefriis-1.jpeg?width=410&amp;height=410"
                                                    alt="Se Babette" loading="lazy" decoding="async"
                                                    class="Image-Image Image-Image_isLoading"
                                                    style="width: 100%; height: 100%;">
                                            </div>
                                            <div class="InstagramCards-User"><span
                                                    class="InstagramCards-Text">@malenefriis</span></div>
                                            <div class="InstagramCards-Title"><span class="InstagramCards-Text">Se
                                                    Babette</span><span class="icon"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="35.205"
                                                        height="15.41" viewBox="0 0 35.205 15.41">
                                                        <g transform="translate(-332.293 0.705)">
                                                            <line x2="34" transform="translate(332.793 7)"
                                                                fill="none" stroke="#000"
                                                                stroke-linecap="round" stroke-width="1"
                                                                class="a"></line>
                                                            <line x2="6" y2="7"
                                                                transform="translate(360.793)" fill="none"
                                                                stroke="#000" stroke-linecap="round"
                                                                stroke-width="1" class="a"></line>
                                                            <line y1="7" x2="6"
                                                                transform="translate(360.793 7)" fill="none"
                                                                stroke="#000" stroke-linecap="round"
                                                                stroke-width="1" class="a"></line>
                                                        </g>
                                                    </svg></span><span class="icon icon_mobile"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="14.205"
                                                        height="9.41" viewBox="0 0 14.205 9.41">
                                                        <g id="Group_536" data-name="Group 536"
                                                            transform="translate(-355 -2.000)">
                                                            <line id="Line_4" data-name="Line 4" x2="13"
                                                                transform="translate(355.5 7)" fill="none"
                                                                stroke="#000" stroke-linecap="round"
                                                                stroke-width="1"></line>
                                                            <line id="Line_5" data-name="Line 5" x2="3.429"
                                                                y2="4" transform="translate(365.071 3)"
                                                                fill="none" stroke="#000"
                                                                stroke-linecap="round" stroke-width="1"></line>
                                                            <line id="Line_6" data-name="Line 6" y1="4"
                                                                x2="3.429" transform="translate(365.071 7)"
                                                                fill="none" stroke="#000"
                                                                stroke-linecap="round" stroke-width="1"></line>
                                                        </g>
                                                    </svg></span></div>
                                        </div>
                                    </a><a class=" InstagramCards-Category InstagramCards-Category_type_Square"
                                        href="/da-dk/sofaer/modulsofa/dane-modulsofa">
                                        <div>
                                            <div
                                                class="Image Image_ratio_custom Image_imageStatus_0 Image_hasSrc InstagramCards-Picture InstagramCards-Picture_type_Square">
                                                <img src="https://cdn.sofacompany.com/media/contentmanager/content/Dane_01__helenehoue-1.jpg?width=410&amp;height=410"
                                                    alt="Se Dane" loading="lazy" decoding="async"
                                                    class="Image-Image Image-Image_isLoading"
                                                    style="width: 100%; height: 100%;">
                                            </div>
                                            <div class="InstagramCards-User"><span
                                                    class="InstagramCards-Text">@helenehoue</span></div>
                                            <div class="InstagramCards-Title"><span class="InstagramCards-Text">Se
                                                    Dane</span><span class="icon"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="35.205"
                                                        height="15.41" viewBox="0 0 35.205 15.41">
                                                        <g transform="translate(-332.293 0.705)">
                                                            <line x2="34" transform="translate(332.793 7)"
                                                                fill="none" stroke="#000"
                                                                stroke-linecap="round" stroke-width="1"
                                                                class="a"></line>
                                                            <line x2="6" y2="7"
                                                                transform="translate(360.793)" fill="none"
                                                                stroke="#000" stroke-linecap="round"
                                                                stroke-width="1" class="a"></line>
                                                            <line y1="7" x2="6"
                                                                transform="translate(360.793 7)" fill="none"
                                                                stroke="#000" stroke-linecap="round"
                                                                stroke-width="1" class="a"></line>
                                                        </g>
                                                    </svg></span><span class="icon icon_mobile"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="14.205"
                                                        height="9.41" viewBox="0 0 14.205 9.41">
                                                        <g id="Group_536" data-name="Group 536"
                                                            transform="translate(-355 -2.000)">
                                                            <line id="Line_4" data-name="Line 4" x2="13"
                                                                transform="translate(355.5 7)" fill="none"
                                                                stroke="#000" stroke-linecap="round"
                                                                stroke-width="1"></line>
                                                            <line id="Line_5" data-name="Line 5" x2="3.429"
                                                                y2="4" transform="translate(365.071 3)"
                                                                fill="none" stroke="#000"
                                                                stroke-linecap="round" stroke-width="1"></line>
                                                            <line id="Line_6" data-name="Line 6" y1="4"
                                                                x2="3.429" transform="translate(365.071 7)"
                                                                fill="none" stroke="#000"
                                                                stroke-linecap="round" stroke-width="1"></line>
                                                        </g>
                                                    </svg></span></div>
                                        </div>
                                    </a><a class=" InstagramCards-Category InstagramCards-Category_type_Portrait"
                                        href="/da-dk/sofaer/modulsofa/dane-modulsofa">
                                        <div>
                                            <div
                                                class="Image Image_ratio_custom Image_imageStatus_0 Image_hasSrc InstagramCards-Picture InstagramCards-Picture_type_Portrait">
                                                <img src="https://cdn.sofacompany.com/media/contentmanager/content/Dane_03__juliewp-1.jpeg?width=410&amp;height=410"
                                                    alt="Se Dane" loading="lazy" decoding="async"
                                                    class="Image-Image Image-Image_isLoading"
                                                    style="width: 100%; height: 100%;">
                                            </div>
                                            <div class="InstagramCards-User"><span
                                                    class="InstagramCards-Text">@juliewp</span></div>
                                            <div class="InstagramCards-Title"><span class="InstagramCards-Text">Se
                                                    Dane</span><span class="icon"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="35.205"
                                                        height="15.41" viewBox="0 0 35.205 15.41">
                                                        <g transform="translate(-332.293 0.705)">
                                                            <line x2="34" transform="translate(332.793 7)"
                                                                fill="none" stroke="#000"
                                                                stroke-linecap="round" stroke-width="1"
                                                                class="a"></line>
                                                            <line x2="6" y2="7"
                                                                transform="translate(360.793)" fill="none"
                                                                stroke="#000" stroke-linecap="round"
                                                                stroke-width="1" class="a"></line>
                                                            <line y1="7" x2="6"
                                                                transform="translate(360.793 7)" fill="none"
                                                                stroke="#000" stroke-linecap="round"
                                                                stroke-width="1" class="a"></line>
                                                        </g>
                                                    </svg></span><span class="icon icon_mobile"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="14.205"
                                                        height="9.41" viewBox="0 0 14.205 9.41">
                                                        <g id="Group_536" data-name="Group 536"
                                                            transform="translate(-355 -2.000)">
                                                            <line id="Line_4" data-name="Line 4" x2="13"
                                                                transform="translate(355.5 7)" fill="none"
                                                                stroke="#000" stroke-linecap="round"
                                                                stroke-width="1"></line>
                                                            <line id="Line_5" data-name="Line 5" x2="3.429"
                                                                y2="4" transform="translate(365.071 3)"
                                                                fill="none" stroke="#000"
                                                                stroke-linecap="round" stroke-width="1"></line>
                                                            <line id="Line_6" data-name="Line 6" y1="4"
                                                                x2="3.429" transform="translate(365.071 7)"
                                                                fill="none" stroke="#000"
                                                                stroke-linecap="round" stroke-width="1"></line>
                                                        </g>
                                                    </svg></span></div>
                                        </div>
                                    </a><a class=" InstagramCards-Category InstagramCards-Category_type_Portrait"
                                        href="/da-dk/familie/paula">
                                        <div>
                                            <div
                                                class="Image Image_ratio_custom Image_imageStatus_0 Image_hasSrc InstagramCards-Picture InstagramCards-Picture_type_Portrait">
                                                <img src="https://cdn.sofacompany.com/media/contentmanager/content/Paula_2seater_01__linestampedahl-1.jpeg?width=410&amp;height=410"
                                                    alt="Se Paula" loading="lazy" decoding="async"
                                                    class="Image-Image Image-Image_isLoading"
                                                    style="width: 100%; height: 100%;">
                                            </div>
                                            <div class="InstagramCards-User"><span
                                                    class="InstagramCards-Text">@linestampedahl</span></div>
                                            <div class="InstagramCards-Title"><span class="InstagramCards-Text">Se
                                                    Paula</span><span class="icon"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="35.205"
                                                        height="15.41" viewBox="0 0 35.205 15.41">
                                                        <g transform="translate(-332.293 0.705)">
                                                            <line x2="34" transform="translate(332.793 7)"
                                                                fill="none" stroke="#000"
                                                                stroke-linecap="round" stroke-width="1"
                                                                class="a"></line>
                                                            <line x2="6" y2="7"
                                                                transform="translate(360.793)" fill="none"
                                                                stroke="#000" stroke-linecap="round"
                                                                stroke-width="1" class="a"></line>
                                                            <line y1="7" x2="6"
                                                                transform="translate(360.793 7)" fill="none"
                                                                stroke="#000" stroke-linecap="round"
                                                                stroke-width="1" class="a"></line>
                                                        </g>
                                                    </svg></span><span class="icon icon_mobile"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="14.205"
                                                        height="9.41" viewBox="0 0 14.205 9.41">
                                                        <g id="Group_536" data-name="Group 536"
                                                            transform="translate(-355 -2.000)">
                                                            <line id="Line_4" data-name="Line 4" x2="13"
                                                                transform="translate(355.5 7)" fill="none"
                                                                stroke="#000" stroke-linecap="round"
                                                                stroke-width="1"></line>
                                                            <line id="Line_5" data-name="Line 5" x2="3.429"
                                                                y2="4" transform="translate(365.071 3)"
                                                                fill="none" stroke="#000"
                                                                stroke-linecap="round" stroke-width="1"></line>
                                                            <line id="Line_6" data-name="Line 6" y1="4"
                                                                x2="3.429" transform="translate(365.071 7)"
                                                                fill="none" stroke="#000"
                                                                stroke-linecap="round" stroke-width="1"></line>
                                                        </g>
                                                    </svg></span></div>
                                        </div>
                                    </a><a class=" InstagramCards-Category InstagramCards-Category_type_Portrait"
                                        href="/da-dk/familie/paula">
                                        <div>
                                            <div
                                                class="Image Image_ratio_custom Image_imageStatus_0 Image_hasSrc InstagramCards-Picture InstagramCards-Picture_type_Portrait">
                                                <img src="https://cdn.sofacompany.com/media/contentmanager/content/Paula_2seater_03__pastelperlen_1.jpg?width=410&amp;height=410"
                                                    alt="Se Paula" loading="lazy" decoding="async"
                                                    class="Image-Image Image-Image_isLoading"
                                                    style="width: 100%; height: 100%;">
                                            </div>
                                            <div class="InstagramCards-User"><span
                                                    class="InstagramCards-Text">@pastelperlen</span></div>
                                            <div class="InstagramCards-Title"><span class="InstagramCards-Text">Se
                                                    Paula</span><span class="icon"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="35.205"
                                                        height="15.41" viewBox="0 0 35.205 15.41">
                                                        <g transform="translate(-332.293 0.705)">
                                                            <line x2="34" transform="translate(332.793 7)"
                                                                fill="none" stroke="#000"
                                                                stroke-linecap="round" stroke-width="1"
                                                                class="a"></line>
                                                            <line x2="6" y2="7"
                                                                transform="translate(360.793)" fill="none"
                                                                stroke="#000" stroke-linecap="round"
                                                                stroke-width="1" class="a"></line>
                                                            <line y1="7" x2="6"
                                                                transform="translate(360.793 7)" fill="none"
                                                                stroke="#000" stroke-linecap="round"
                                                                stroke-width="1" class="a"></line>
                                                        </g>
                                                    </svg></span><span class="icon icon_mobile"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="14.205"
                                                        height="9.41" viewBox="0 0 14.205 9.41">
                                                        <g id="Group_536" data-name="Group 536"
                                                            transform="translate(-355 -2.000)">
                                                            <line id="Line_4" data-name="Line 4" x2="13"
                                                                transform="translate(355.5 7)" fill="none"
                                                                stroke="#000" stroke-linecap="round"
                                                                stroke-width="1"></line>
                                                            <line id="Line_5" data-name="Line 5" x2="3.429"
                                                                y2="4" transform="translate(365.071 3)"
                                                                fill="none" stroke="#000"
                                                                stroke-linecap="round" stroke-width="1"></line>
                                                            <line id="Line_6" data-name="Line 6" y1="4"
                                                                x2="3.429" transform="translate(365.071 7)"
                                                                fill="none" stroke="#000"
                                                                stroke-linecap="round" stroke-width="1"></line>
                                                        </g>
                                                    </svg></span></div>
                                        </div>
                                    </a><a class=" InstagramCards-Category InstagramCards-Category_type_Portrait"
                                        href="/da-dk/familie/babette">
                                        <div>
                                            <div
                                                class="Image Image_ratio_custom Image_imageStatus_0 Image_hasSrc InstagramCards-Picture InstagramCards-Picture_type_Portrait">
                                                <img src="https://cdn.sofacompany.com/media/contentmanager/content/Babette_02__malenefriis_2.jpeg?width=410&amp;height=410"
                                                    alt="Se Babette" loading="lazy" decoding="async"
                                                    class="Image-Image Image-Image_isLoading"
                                                    style="width: 100%; height: 100%;">
                                            </div>
                                            <div class="InstagramCards-User"><span
                                                    class="InstagramCards-Text">@malenefriis</span></div>
                                            <div class="InstagramCards-Title"><span class="InstagramCards-Text">Se
                                                    Babette</span><span class="icon"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="35.205"
                                                        height="15.41" viewBox="0 0 35.205 15.41">
                                                        <g transform="translate(-332.293 0.705)">
                                                            <line x2="34" transform="translate(332.793 7)"
                                                                fill="none" stroke="#000"
                                                                stroke-linecap="round" stroke-width="1"
                                                                class="a"></line>
                                                            <line x2="6" y2="7"
                                                                transform="translate(360.793)" fill="none"
                                                                stroke="#000" stroke-linecap="round"
                                                                stroke-width="1" class="a"></line>
                                                            <line y1="7" x2="6"
                                                                transform="translate(360.793 7)" fill="none"
                                                                stroke="#000" stroke-linecap="round"
                                                                stroke-width="1" class="a"></line>
                                                        </g>
                                                    </svg></span><span class="icon icon_mobile"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="14.205"
                                                        height="9.41" viewBox="0 0 14.205 9.41">
                                                        <g id="Group_536" data-name="Group 536"
                                                            transform="translate(-355 -2.000)">
                                                            <line id="Line_4" data-name="Line 4" x2="13"
                                                                transform="translate(355.5 7)" fill="none"
                                                                stroke="#000" stroke-linecap="round"
                                                                stroke-width="1"></line>
                                                            <line id="Line_5" data-name="Line 5" x2="3.429"
                                                                y2="4" transform="translate(365.071 3)"
                                                                fill="none" stroke="#000"
                                                                stroke-linecap="round" stroke-width="1"></line>
                                                            <line id="Line_6" data-name="Line 6" y1="4"
                                                                x2="3.429" transform="translate(365.071 7)"
                                                                fill="none" stroke="#000"
                                                                stroke-linecap="round" stroke-width="1"></line>
                                                        </g>
                                                    </svg></span></div>
                                        </div>
                                    </a><a class=" InstagramCards-Category InstagramCards-Category_type_Portrait"
                                        href="/da-dk/sofaer/modulsofa/dane-modulsofa">
                                        <div>
                                            <div
                                                class="Image Image_ratio_custom Image_imageStatus_0 Image_hasSrc InstagramCards-Picture InstagramCards-Picture_type_Portrait">
                                                <img src="https://cdn.sofacompany.com/media/contentmanager/content/Dane_02__helenehoue_1.jpg?width=410&amp;height=410"
                                                    alt="Se Dane" loading="lazy" decoding="async"
                                                    class="Image-Image Image-Image_isLoading"
                                                    style="width: 100%; height: 100%;">
                                            </div>
                                            <div class="InstagramCards-User"><span
                                                    class="InstagramCards-Text">@helenehoue</span></div>
                                            <div class="InstagramCards-Title"><span class="InstagramCards-Text">Se
                                                    Dane</span><span class="icon"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="35.205"
                                                        height="15.41" viewBox="0 0 35.205 15.41">
                                                        <g transform="translate(-332.293 0.705)">
                                                            <line x2="34" transform="translate(332.793 7)"
                                                                fill="none" stroke="#000"
                                                                stroke-linecap="round" stroke-width="1"
                                                                class="a"></line>
                                                            <line x2="6" y2="7"
                                                                transform="translate(360.793)" fill="none"
                                                                stroke="#000" stroke-linecap="round"
                                                                stroke-width="1" class="a"></line>
                                                            <line y1="7" x2="6"
                                                                transform="translate(360.793 7)" fill="none"
                                                                stroke="#000" stroke-linecap="round"
                                                                stroke-width="1" class="a"></line>
                                                        </g>
                                                    </svg></span><span class="icon icon_mobile"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="14.205"
                                                        height="9.41" viewBox="0 0 14.205 9.41">
                                                        <g id="Group_536" data-name="Group 536"
                                                            transform="translate(-355 -2.000)">
                                                            <line id="Line_4" data-name="Line 4" x2="13"
                                                                transform="translate(355.5 7)" fill="none"
                                                                stroke="#000" stroke-linecap="round"
                                                                stroke-width="1"></line>
                                                            <line id="Line_5" data-name="Line 5" x2="3.429"
                                                                y2="4" transform="translate(365.071 3)"
                                                                fill="none" stroke="#000"
                                                                stroke-linecap="round" stroke-width="1"></line>
                                                            <line id="Line_6" data-name="Line 6" y1="4"
                                                                x2="3.429" transform="translate(365.071 7)"
                                                                fill="none" stroke="#000"
                                                                stroke-linecap="round" stroke-width="1"></line>
                                                        </g>
                                                    </svg></span></div>
                                        </div>
                                    </a><a class=" InstagramCards-Category InstagramCards-Category_type_Portrait"
                                        href="/da-dk/familie/paula">
                                        <div>
                                            <div
                                                class="Image Image_ratio_custom Image_imageStatus_0 Image_hasSrc InstagramCards-Picture InstagramCards-Picture_type_Portrait">
                                                <img src="https://cdn.sofacompany.com/media/contentmanager/content/Paula_2seater_02__linestampedahl_1.jpeg?width=410&amp;height=410"
                                                    alt="Se Paula" loading="lazy" decoding="async"
                                                    class="Image-Image Image-Image_isLoading"
                                                    style="width: 100%; height: 100%;">
                                            </div>
                                            <div class="InstagramCards-User"><span
                                                    class="InstagramCards-Text">@linestampedahl</span></div>
                                            <div class="InstagramCards-Title"><span class="InstagramCards-Text">Se
                                                    Paula</span><span class="icon"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="35.205"
                                                        height="15.41" viewBox="0 0 35.205 15.41">
                                                        <g transform="translate(-332.293 0.705)">
                                                            <line x2="34" transform="translate(332.793 7)"
                                                                fill="none" stroke="#000"
                                                                stroke-linecap="round" stroke-width="1"
                                                                class="a"></line>
                                                            <line x2="6" y2="7"
                                                                transform="translate(360.793)" fill="none"
                                                                stroke="#000" stroke-linecap="round"
                                                                stroke-width="1" class="a"></line>
                                                            <line y1="7" x2="6"
                                                                transform="translate(360.793 7)" fill="none"
                                                                stroke="#000" stroke-linecap="round"
                                                                stroke-width="1" class="a"></line>
                                                        </g>
                                                    </svg></span><span class="icon icon_mobile"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="14.205"
                                                        height="9.41" viewBox="0 0 14.205 9.41">
                                                        <g id="Group_536" data-name="Group 536"
                                                            transform="translate(-355 -2.000)">
                                                            <line id="Line_4" data-name="Line 4" x2="13"
                                                                transform="translate(355.5 7)" fill="none"
                                                                stroke="#000" stroke-linecap="round"
                                                                stroke-width="1"></line>
                                                            <line id="Line_5" data-name="Line 5" x2="3.429"
                                                                y2="4" transform="translate(365.071 3)"
                                                                fill="none" stroke="#000"
                                                                stroke-linecap="round" stroke-width="1"></line>
                                                            <line id="Line_6" data-name="Line 6" y1="4"
                                                                x2="3.429" transform="translate(365.071 7)"
                                                                fill="none" stroke="#000"
                                                                stroke-linecap="round" stroke-width="1"></line>
                                                        </g>
                                                    </svg></span></div>
                                        </div>
                                    </a><a class=" InstagramCards-Category InstagramCards-Category_type_Portrait"
                                        href="/da-dk/sofaer/modulsofa/dane-modulsofa">
                                        <div>
                                            <div
                                                class="Image Image_ratio_custom Image_imageStatus_0 Image_hasSrc InstagramCards-Picture InstagramCards-Picture_type_Portrait">
                                                <img src="https://cdn.sofacompany.com/media/contentmanager/content/Dane_04__juliewp_1.jpeg?width=410&amp;height=410"
                                                    alt="Se Dane" loading="lazy" decoding="async"
                                                    class="Image-Image Image-Image_isLoading"
                                                    style="width: 100%; height: 100%;">
                                            </div>
                                            <div class="InstagramCards-User"><span
                                                    class="InstagramCards-Text">@juliewp</span></div>
                                            <div class="InstagramCards-Title"><span class="InstagramCards-Text">Se
                                                    Dane</span><span class="icon"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="35.205"
                                                        height="15.41" viewBox="0 0 35.205 15.41">
                                                        <g transform="translate(-332.293 0.705)">
                                                            <line x2="34" transform="translate(332.793 7)"
                                                                fill="none" stroke="#000"
                                                                stroke-linecap="round" stroke-width="1"
                                                                class="a"></line>
                                                            <line x2="6" y2="7"
                                                                transform="translate(360.793)" fill="none"
                                                                stroke="#000" stroke-linecap="round"
                                                                stroke-width="1" class="a"></line>
                                                            <line y1="7" x2="6"
                                                                transform="translate(360.793 7)" fill="none"
                                                                stroke="#000" stroke-linecap="round"
                                                                stroke-width="1" class="a"></line>
                                                        </g>
                                                    </svg></span><span class="icon icon_mobile"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="14.205"
                                                        height="9.41" viewBox="0 0 14.205 9.41">
                                                        <g id="Group_536" data-name="Group 536"
                                                            transform="translate(-355 -2.000)">
                                                            <line id="Line_4" data-name="Line 4" x2="13"
                                                                transform="translate(355.5 7)" fill="none"
                                                                stroke="#000" stroke-linecap="round"
                                                                stroke-width="1"></line>
                                                            <line id="Line_5" data-name="Line 5" x2="3.429"
                                                                y2="4" transform="translate(365.071 3)"
                                                                fill="none" stroke="#000"
                                                                stroke-linecap="round" stroke-width="1"></line>
                                                            <line id="Line_6" data-name="Line 6" y1="4"
                                                                x2="3.429" transform="translate(365.071 7)"
                                                                fill="none" stroke="#000"
                                                                stroke-linecap="round" stroke-width="1"></line>
                                                        </g>
                                                    </svg></span></div>
                                        </div>
                                    </a><a class=" InstagramCards-Category InstagramCards-Category_type_Portrait"
                                        href="/da-dk/familie/paula">
                                        <div>
                                            <div
                                                class="Image Image_ratio_custom Image_imageStatus_0 Image_hasSrc InstagramCards-Picture InstagramCards-Picture_type_Portrait">
                                                <img src="https://cdn.sofacompany.com/media/contentmanager/content/Paula_2seater_04__pastelperlen_1.jpeg?width=410&amp;height=410"
                                                    alt="Se Paula" loading="lazy" decoding="async"
                                                    class="Image-Image Image-Image_isLoading"
                                                    style="width: 100%; height: 100%;">
                                            </div>
                                            <div class="InstagramCards-User"><span
                                                    class="InstagramCards-Text">@pastelperlen</span></div>
                                            <div class="InstagramCards-Title"><span class="InstagramCards-Text">Se
                                                    Paula</span><span class="icon"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="35.205"
                                                        height="15.41" viewBox="0 0 35.205 15.41">
                                                        <g transform="translate(-332.293 0.705)">
                                                            <line x2="34" transform="translate(332.793 7)"
                                                                fill="none" stroke="#000"
                                                                stroke-linecap="round" stroke-width="1"
                                                                class="a"></line>
                                                            <line x2="6" y2="7"
                                                                transform="translate(360.793)" fill="none"
                                                                stroke="#000" stroke-linecap="round"
                                                                stroke-width="1" class="a"></line>
                                                            <line y1="7" x2="6"
                                                                transform="translate(360.793 7)" fill="none"
                                                                stroke="#000" stroke-linecap="round"
                                                                stroke-width="1" class="a"></line>
                                                        </g>
                                                    </svg></span><span class="icon icon_mobile"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="14.205"
                                                        height="9.41" viewBox="0 0 14.205 9.41">
                                                        <g id="Group_536" data-name="Group 536"
                                                            transform="translate(-355 -2.000)">
                                                            <line id="Line_4" data-name="Line 4" x2="13"
                                                                transform="translate(355.5 7)" fill="none"
                                                                stroke="#000" stroke-linecap="round"
                                                                stroke-width="1"></line>
                                                            <line id="Line_5" data-name="Line 5" x2="3.429"
                                                                y2="4" transform="translate(365.071 3)"
                                                                fill="none" stroke="#000"
                                                                stroke-linecap="round" stroke-width="1"></line>
                                                            <line id="Line_6" data-name="Line 6" y1="4"
                                                                x2="3.429" transform="translate(365.071 7)"
                                                                fill="none" stroke="#000"
                                                                stroke-linecap="round" stroke-width="1"></line>
                                                        </g>
                                                    </svg></span></div>
                                        </div>
                                    </a><a class=" InstagramCards-Category InstagramCards-Category_type_Portrait"
                                        href="/da-dk/familie/babette">
                                        <div>
                                            <div
                                                class="Image Image_ratio_custom Image_imageStatus_0 Image_hasSrc InstagramCards-Picture InstagramCards-Picture_type_Portrait">
                                                <img src="https://cdn.sofacompany.com/media/contentmanager/content/Babette_03__malenefriis.jpeg?width=410&amp;height=410"
                                                    alt="Se Babette" loading="lazy" decoding="async"
                                                    class="Image-Image Image-Image_isLoading"
                                                    style="width: 100%; height: 100%;">
                                            </div>
                                            <div class="InstagramCards-User"><span
                                                    class="InstagramCards-Text">@malenefriis</span></div>
                                            <div class="InstagramCards-Title"><span class="InstagramCards-Text">Se
                                                    Babette</span><span class="icon"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="35.205"
                                                        height="15.41" viewBox="0 0 35.205 15.41">
                                                        <g transform="translate(-332.293 0.705)">
                                                            <line x2="34" transform="translate(332.793 7)"
                                                                fill="none" stroke="#000"
                                                                stroke-linecap="round" stroke-width="1"
                                                                class="a"></line>
                                                            <line x2="6" y2="7"
                                                                transform="translate(360.793)" fill="none"
                                                                stroke="#000" stroke-linecap="round"
                                                                stroke-width="1" class="a"></line>
                                                            <line y1="7" x2="6"
                                                                transform="translate(360.793 7)" fill="none"
                                                                stroke="#000" stroke-linecap="round"
                                                                stroke-width="1" class="a"></line>
                                                        </g>
                                                    </svg></span><span class="icon icon_mobile"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="14.205"
                                                        height="9.41" viewBox="0 0 14.205 9.41">
                                                        <g id="Group_536" data-name="Group 536"
                                                            transform="translate(-355 -2.000)">
                                                            <line id="Line_4" data-name="Line 4" x2="13"
                                                                transform="translate(355.5 7)" fill="none"
                                                                stroke="#000" stroke-linecap="round"
                                                                stroke-width="1"></line>
                                                            <line id="Line_5" data-name="Line 5" x2="3.429"
                                                                y2="4" transform="translate(365.071 3)"
                                                                fill="none" stroke="#000"
                                                                stroke-linecap="round" stroke-width="1"></line>
                                                            <line id="Line_6" data-name="Line 6" y1="4"
                                                                x2="3.429" transform="translate(365.071 7)"
                                                                fill="none" stroke="#000"
                                                                stroke-linecap="round" stroke-width="1"></line>
                                                        </g>
                                                    </svg></span></div>
                                        </div>
                                    </a><a class=" InstagramCards-Category InstagramCards-Category_type_Portrait"
                                        href="/da-dk/familie/babette">
                                        <div>
                                            <div
                                                class="Image Image_ratio_custom Image_imageStatus_0 Image_hasSrc InstagramCards-Picture InstagramCards-Picture_type_Portrait">
                                                <img src="https://cdn.sofacompany.com/media/contentmanager/content/Babette_04__malenefriis.jpeg?width=410&amp;height=410"
                                                    alt="Se Babette" loading="lazy" decoding="async"
                                                    class="Image-Image Image-Image_isLoading"
                                                    style="width: 100%; height: 100%;">
                                            </div>
                                            <div class="InstagramCards-User"><span
                                                    class="InstagramCards-Text">@malenefriis</span></div>
                                            <div class="InstagramCards-Title"><span class="InstagramCards-Text">Se
                                                    Babette</span><span class="icon"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="35.205"
                                                        height="15.41" viewBox="0 0 35.205 15.41">
                                                        <g transform="translate(-332.293 0.705)">
                                                            <line x2="34" transform="translate(332.793 7)"
                                                                fill="none" stroke="#000"
                                                                stroke-linecap="round" stroke-width="1"
                                                                class="a"></line>
                                                            <line x2="6" y2="7"
                                                                transform="translate(360.793)" fill="none"
                                                                stroke="#000" stroke-linecap="round"
                                                                stroke-width="1" class="a"></line>
                                                            <line y1="7" x2="6"
                                                                transform="translate(360.793 7)" fill="none"
                                                                stroke="#000" stroke-linecap="round"
                                                                stroke-width="1" class="a"></line>
                                                        </g>
                                                    </svg></span><span class="icon icon_mobile"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="14.205"
                                                        height="9.41" viewBox="0 0 14.205 9.41">
                                                        <g id="Group_536" data-name="Group 536"
                                                            transform="translate(-355 -2.000)">
                                                            <line id="Line_4" data-name="Line 4" x2="13"
                                                                transform="translate(355.5 7)" fill="none"
                                                                stroke="#000" stroke-linecap="round"
                                                                stroke-width="1"></line>
                                                            <line id="Line_5" data-name="Line 5" x2="3.429"
                                                                y2="4" transform="translate(365.071 3)"
                                                                fill="none" stroke="#000"
                                                                stroke-linecap="round" stroke-width="1"></line>
                                                            <line id="Line_6" data-name="Line 6" y1="4"
                                                                x2="3.429" transform="translate(365.071 7)"
                                                                fill="none" stroke="#000"
                                                                stroke-linecap="round" stroke-width="1"></line>
                                                        </g>
                                                    </svg></span></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="InstagramCards-Icon InstagramCards-Icon_left"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                        viewBox="0 0 60 60">
                                        <g transform="translate(-1260 -334)">
                                            <g transform="translate(1260 334)" fill="#f4f0ec" stroke="#000"
                                                stroke-width="1">
                                                <circle cx="30" cy="30" r="30" stroke="none">
                                                </circle>
                                                <circle cx="30" cy="30" r="29.5" fill="none">
                                                </circle>
                                            </g>
                                            <g transform="translate(-1)">
                                                <line x2="6" y2="7"
                                                    transform="translate(1288 357)" fill="none" stroke="#000"
                                                    stroke-linecap="round" stroke-width="1"></line>
                                                <line y1="7" x2="6"
                                                    transform="translate(1288 364)" fill="none" stroke="#000"
                                                    stroke-linecap="round" stroke-width="1"></line>
                                            </g>
                                        </g>
                                    </svg></div>
                                <div
                                    class="InstagramCards-Icon InstagramCards-Icon_right InstagramCards-Icon_rightArrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                        viewBox="0 0 60 60">
                                        <g transform="translate(-1260 -334)">
                                            <g transform="translate(1260 334)" fill="#f4f0ec" stroke="#000"
                                                stroke-width="1">
                                                <circle cx="30" cy="30" r="30" stroke="none">
                                                </circle>
                                                <circle cx="30" cy="30" r="29.5" fill="none">
                                                </circle>
                                            </g>
                                            <g transform="translate(-1)">
                                                <line x2="6" y2="7"
                                                    transform="translate(1288 357)" fill="none" stroke="#000"
                                                    stroke-linecap="round" stroke-width="1"></line>
                                                <line y1="7" x2="6"
                                                    transform="translate(1288 364)" fill="none" stroke="#000"
                                                    stroke-linecap="round" stroke-width="1"></line>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="RenderWhenVisible" style="">
                        <div class="SectionCards" style="background-color: rgb(227, 222, 218);">
                            <div class="SectionCards-Box">
                                <div class="SectionCards-Heading">ALT HVAD DU BEHØVER FOR AT KØBE DIN DRØMMESOFA</div>
                                <div class="SectionCards-Container">
                                    <div class="SectionCards-Item"
                                        style="--section-color: #000000; --section-background: #C3BDCB; --section-button-color: #aaa4b2; --button_color_darken: #9d97a5;">
                                        <div class="SectionCards-Content">
                                            <div class="SectionCards-Title" style="min-height: 82px;">Få 5 gratis
                                                stofprøver</div>
                                            <div
                                                class="Image Image_ratio_custom Image_imageStatus_0 Image_hasSrc SectionCards-Picture">
                                                <img src="https://cdn.sofacompany.com/media/contentmanager/content/free_fabric_samples_600x400px-1.jpg"
                                                    alt="Få 5 gratis stofprøver" loading="lazy" decoding="async"
                                                    class="Image-Image Image-Image_isLoading"
                                                    style="width: 100%; height: 100%;">
                                            </div>
                                            <div class="SectionCards-Text">Vælg mellem 50+ tekstiler og farver. Vi
                                                leverer inden for få dage.</div>
                                        </div>
                                        <div class="SectionCards-CTAS"><a class=" SectionCards-CTA Button"
                                                href="/da-dk/stofprover">Bestil stofprøver</a></div>
                                    </div>
                                    <div class="SectionCards-Item"
                                        style="--section-color: #FFFFFF; --section-background: #98482F; --section-button-color: #7f2f16; --button_color_darken: #722209;">
                                        <div class="SectionCards-Content">
                                            <div class="SectionCards-Title" style="min-height: 82px;">Design din
                                                egen sofa</div>
                                            <div
                                                class="Image Image_ratio_custom Image_imageStatus_0 Image_hasSrc SectionCards-Picture">
                                                <img src="https://cdn.sofacompany.com/media/contentmanager/content/Modulbuilder-animation-600x400px-1.gif"
                                                    alt="Design din egen sofa" loading="lazy" decoding="async"
                                                    class="Image-Image Image-Image_isLoading"
                                                    style="width: 100%; height: 100%;">
                                            </div>
                                            <div class="SectionCards-Text">Vælg mellem 130 modeller og mere end 50
                                                forskellige tekstiler og farver. Eller byg din helt egen modulsofa.
                                            </div>
                                        </div>
                                        <div class="SectionCards-CTAS"><a class=" SectionCards-CTA Button"
                                                href="/da-dk/sofaer/modulsofa">Byg modul sofa</a><a
                                                class=" SectionCards-CTA Button"
                                                href="/da-dk/design-din-egen-sofa">Sådan designer du din sofa</a>
                                        </div>
                                    </div>
                                    <div class="SectionCards-Item"
                                        style="--section-color: #000000; --section-background: #CCBCB4; --section-button-color: #b3a39b; --button_color_darken: #a6968e;">
                                        <div class="SectionCards-Content">
                                            <div class="SectionCards-Title" style="min-height: 82px;">Få gode råd i
                                                vores butikker</div>
                                            <div
                                                class="Image Image_ratio_custom Image_imageStatus_0 Image_hasSrc SectionCards-Picture">
                                                <img src="https://cdn.sofacompany.com/media/contentmanager/content/Showroom-section-card_8.jpg"
                                                    alt="Få gode råd i vores butikker" loading="lazy"
                                                    decoding="async" class="Image-Image Image-Image_isLoading"
                                                    style="width: 100%; height: 100%;">
                                            </div>
                                            <div class="SectionCards-Text">Lad vores dygtige sofaeksperter guide dig –
                                                og prøv vores møbler. Vi gi’r kaffe.</div>
                                        </div>
                                        <div class="SectionCards-CTAS"><a class=" SectionCards-CTA Button"
                                                href="/da-dk/storelocator">Besøg butikker</a></div>
                                    </div>
                                    <div class="SectionCards-Item"
                                        style="--section-color: #FFFFFF; --section-background: #7F5A45; --section-button-color: #66412c; --button_color_darken: #59341f;">
                                        <div class="SectionCards-Content">
                                            <div class="SectionCards-Title" style="min-height: 82px;">Se vores
                                                møbler derhjemme</div>
                                            <div
                                                class="Image Image_ratio_custom Image_imageStatus_0 Image_hasSrc SectionCards-Picture">
                                                <img src="https://cdn.sofacompany.com/media/contentmanager/content/VR_see_sofa_in_home_600x400px-1.jpg"
                                                    alt="Se vores møbler derhjemme" loading="lazy"
                                                    decoding="async" class="Image-Image Image-Image_isLoading"
                                                    style="width: 100%; height: 100%;">
                                            </div>
                                            <div class="SectionCards-Text">Vil du vide, hvordan et SOFACOMPANY produkt
                                                ser ud hjemme hos dig? Prøv vores AR tool via dit smartphone-kamera.
                                            </div>
                                        </div>
                                        <div class="SectionCards-CTAS"><a class=" SectionCards-CTA Button"
                                                href="/da-dk/ar-guide">Lær at bruge AR</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="SectionCards-Background" style="background-color: rgb(227, 222, 218);">
                            </div>
                        </div>
                    </div>
                    <div class="RenderWhenVisible" style="">
                        <div class="SplitContent-Container">
                            <div class="SplitContent-SubContainer">
                                <div class="SplitContent-Title SplitContent-Title_top hideDesktop">HVORFOR VÆLGE EN
                                    SOFA FRA SOFACOMPANY?</div>
                                <div class="SplitContent SplitContent_position_Left">
                                    <div
                                        class="SplitContent-ImageContainer SplitContent-ImageContainer_position_Left">
                                        <div class="Image Image_ratio_custom Image_imageStatus_0 Image_hasSrc "><img
                                                src="https://cdn.sofacompany.com/media/contentmanager/content/Content_gif_animation_frontpage_DK_5x4_3.gif"
                                                alt="" loading="lazy" decoding="async"
                                                class="Image-Image Image-Image_isLoading"
                                                style="width: 100%; height: 100%;"></div>
                                    </div>
                                    <div class="SplitContent-ContentContainer">
                                        <div class="SplitContent-Content">
                                            <div class="SplitContent-Title hideMobile">HVORFOR VÆLGE EN SOFA FRA
                                                SOFACOMPANY?</div><span class="hideMobile">Vi gør dansk design af høj
                                                kvalitet tilgængeligt for alle. Det kan vi, fordi vi styrer alting selv
                                                - Vi designer selv, producerer selv og sælger selv. På den måde tilbyder
                                                vi håndbygget design til en fair pris, som ligger 30-40% under den pris,
                                                et tilsvarende design normalt koster. Det kalder vi ærlig
                                                sofa-kærlighed.</span><a class=" SplitContent-CTA Button"
                                                href="/da-dk/about-us"
                                                style="--cta-button-text-color: black; --cta-button-background-color: transparent; --cta-button-border-color: black; --cta-button-hover-color: white; --cta-button-hover-background-color: black; --cta-button-hover-border-color: black;">Læs
                                                mere</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="RenderWhenVisible" style="">
                        <div class="GotQuestions">
                            <p>HAR DU SPØRGSMÅL?</p>
                            <div class="GotQuestions-Questions">
                                <div class="GotQuestions-Question GotQuestions-Question_chat">
                                    <div class="GotQuestions-Question-Image GotQuestions-Question-Image_chat"
                                        style="background-image: url(&quot;/static/media/Chat.ac97724d.svg&quot;);">
                                    </div>
                                    <div>Chat med os<br>Offline</div>
                                </div>
                                <div class="GotQuestions-Question GotQuestions-Question_call">
                                    <div class="GotQuestions-Question-Image GotQuestions-Question-Image_call"
                                        style="background-image: url(&quot;/static/media/Call.690d467a.svg&quot;);">
                                    </div>
                                    <div>Ring til os</div>
                                    <div><a href="tel:+45 71 99 54 99">+45 71 99 54 99</a></div>
                                </div>
                                <div class="GotQuestions-Question"><a class=" " href="/da-dk/storelocator">
                                        <div class="GotQuestions-Question-Image"
                                            style="background-image: url(&quot;/static/media/Locate.5d7a1ef0.svg&quot;);">
                                        </div>
                                        <div>Besøg vores butikker</div>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </main>
</x-shop::layouts>
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $('.FeaturedCategories-Icon_left').click(function() {
                scrollLeft();
            });
            $('.FeaturedCategories-Icon_right').click(function() {
                scrollRight();
            });
        });

        function scrollLeft() {
            const container = document.querySelector('.FeaturedCategories-Scroll');
            container.scrollBy({
                left: -300,
                behavior: 'smooth'
            });
        }

        function scrollRight() {
            const container = document.querySelector('.FeaturedCategories-Scroll');
            container.scrollBy({
                left: 300,
                behavior: 'smooth'
            });
        }
    </script>
@endpush
