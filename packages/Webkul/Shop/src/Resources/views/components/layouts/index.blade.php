@props([
    'hasHeader' => true,
    'hasFeature' => true,
    'hasFooter' => true,
])

<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}" dir="{{ core()->getCurrentLocale()->direction }}">

<head>

    {!! view_render_event('bagisto.shop.layout.head.before') !!}

    <title>{{ $title ?? config('app.name') }}</title>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-language" content="{{ app()->getLocale() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="base-url" content="{{ url()->to('/') }}">
    <meta name="currency" content="{{ core()->getCurrentCurrency()->toJson() }}">

    @stack('meta')

    <link rel="icon" sizes="16x16"
        href="{{ core()->getCurrentChannel()->favicon_url ?? bagisto_asset('images/favicon.ico') }}" />

    @bagistoVite(['src/Resources/assets/css/app.css', 'src/Resources/assets/js/app.js'])

    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        as="style">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap">

    <link rel="preload" href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" as="style">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap">

    @stack('styles')

    <style>
        {!! core()->getConfigData('general.content.custom_scripts.custom_css') !!}
    </style>

    {!! view_render_event('bagisto.shop.layout.head.after') !!}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700&display=swap">
    <link rel="stylesheet" href="{{ asset('themes/shop/default/css/main.360da992.chunk.css') }}">
    <link rel="stylesheet" href="https://sofacompany.my.salesforce.com/embeddedservice/5.0/esw.min.css">
    <link rel="stylesheet" href="{{ asset('themes/shop/default/css/contentViewWidget.6efa68a4.chunk.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/shop/default/css/category.b22aa80b.chunk.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/shop/default/css/86.72a41344.chunk.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/shop/default/css/85.f302eaff.chunk.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/shop/default/css/8.1dfcdc27.chunk.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/shop/default/css/73.61238dcc.chunk.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/shop/default/css/72.2b021487.chunk.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/shop/default/css/71.6e06cdc6.chunk.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/shop/default/css/69.a196451e.chunk.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/shop/default/css/61.8673a619.chunk.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/shop/default/css/60.71add3e5.chunk.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/shop/default/css/6.69c7e8f3.chunk.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/shop/default/css/56.8fbd35e5.chunk.css') }}">
    <link rel="stylesheet" href="https://static.klaviyo.com/onsite/js/532.170eaa3e699c8a134cbe.css">
    <style>
        .HomePage {
            min-height: 100vh;
        }

        .HomePage .CmsPage,
        .HomePage .CmsPage-Wrapper {
            margin-bottom: 0;
        }

        .CmsPage-Wrapper_page_width_full {
            max-width: 1400px;
            padding-left: 0;
            padding-right: 0;
        }

        .CmsPage-Wrapper {
            min-height: 100vh;
            max-width: 1400px;
            padding-left: var(--gutter);
            padding-right: var(--gutter);
            margin-top: calc(var(--header-total-height) + 20px);
            margin-left: auto;
            margin-right: auto;
        }

        .USPdesktop {
            display: none;
        }

        .USPmobile {
            display: block;
        }

        .SliderWidget {
            height: 252px !important;
        }

        @media (min-width: calc(50.6875rem)) {
            .CmsPage-Wrapper_page_width_full {
                padding: 0 var(--gutter);
            }

            .USPdesktop {
                display: block !important;
            }

            .USPmobile {
                display: none !important;
            }

            .SliderWidget {
                height: 575px !important;
            }
        }
    </style>
    <link rel="stylesheet" href="{{ asset('themes/shop/default/css/app.css?v=' . time()) }}">
    <link rel="stylesheet" href="{{ asset('themes/shop/default/css/reponsive.css?v=' . time()) }}">
    <style>
        #tp-widget-reviews {
            padding: 0 40px !important;
        }
    </style>
    <script>
        $(document).ready(function() {

            $('.reviews-slider').slick({
                infinite: false,
                slidesToShow: 4,
                slidesToScroll: 3,

            });
        });
    </script>
</head>

<body>

    {!! view_render_event('bagisto.shop.layout.body.before') !!}

    <a href="#main" class="skip-to-main-content-link">
        Skip to main content
    </a>

    <div id="app">
        <!-- Flash Message Blade Component -->
        <x-shop::flash-group />

        <!-- Confirm Modal Blade Component -->
        <x-shop::modal.confirm />

        <!-- Page Header Blade Component -->
        @if ($hasHeader)
            <x-shop::layouts.header />
        @endif

        {!! view_render_event('bagisto.shop.layout.content.before') !!}

        <!-- Page Content Blade Component -->
        <main id="main" class="bg-white">
            {{ $slot }}
        </main>

        {!! view_render_event('bagisto.shop.layout.content.after') !!}


        <!-- Page Services Blade Component -->
        @if ($hasFeature)
            <x-shop::layouts.services />
        @endif

        <!-- Page Footer Blade Component -->
        @if ($hasFooter)
            <x-shop::layouts.footer />
        @endif
    </div>

    {!! view_render_event('bagisto.shop.layout.body.after') !!}

    @stack('scripts')

    {!! view_render_event('bagisto.shop.layout.vue-app-mount.before') !!}
    <script>
        /**
         * Load event, the purpose of using the event is to mount the application
         * after all of our `Vue` components which is present in blade file have
         * been registered in the app. No matter what `app.mount()` should be
         * called in the last.
         */
        window.addEventListener("load", function(event) {
            app.mount("#app");
        });
    </script>

    {!! view_render_event('bagisto.shop.layout.vue-app-mount.after') !!}

    <script type="text/javascript">
        {!! core()->getConfigData('general.content.custom_scripts.custom_javascript') !!}
    </script>
    <script src="https://sofacompany.com/static/js/main.d95b570d.chunk.js"></script>
</body>

</html>
