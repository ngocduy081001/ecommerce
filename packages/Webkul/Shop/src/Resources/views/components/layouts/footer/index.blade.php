{!! view_render_event('bagisto.shop.layout.footer.before') !!}

<!--
    The category repository is injected directly here because there is no way
    to retrieve it from the view composer, as this is an anonymous component.
-->
@inject('themeCustomizationRepository', 'Webkul\Theme\Repositories\ThemeCustomizationRepository')

<!--
    This code needs to be refactored to reduce the amount of PHP in the Blade
    template as much as possible.
-->
@php
    $channel = core()->getCurrentChannel();

    $customization = $themeCustomizationRepository->findOneWhere([
        'type' => 'footer_links',
        'status' => 1,
        'theme_code' => $channel->theme,
        'channel_id' => $channel->id,
    ]);
@endphp


<footer class="mt-9 bg-lightOrange max-sm:mt-10">
    <div class="section-comment">
        <div class="container-fluid">
            <div id="tp-widget-wrapper" class="tp-widget-wrapper visible">
                <div id="wrapper-left" class="wrapper-left">
                    <a id="tp-widget-profile-link" class="tp-widget-profile-link" target="_blank"
                        href="https://dk.trustpilot.com/review/dk.sofacompany.com?utm_medium=trustbox&amp;utm_source=Carousel">
                        <!-- Human Score -->
                        <span class="tp-widget-humanscore" id="trust-score">Fremragende</span>
                        <!-- Stars -->
                        <span class="tp-widget-stars" id="tp-widget-stars">
                            <div class="">
                                <div class="tp-stars tp-stars--5">
                                    <div
                                        style="position: relative; height: 0; width: 100%; padding: 0; padding-bottom: 18.326693227091635%;">

                                        <svg role="img" viewBox="0 0 251 46" xmlns="http://www.w3.org/2000/svg"
                                            style="position: absolute; height: 100%; width: 100%; left: 0; top: 0;">
                                            <title id="starRating-etbme9hs8g" lang="da-DK">Stjernebedømmelse på 4.8 ud
                                                af
                                                5 på
                                                Trustpilot</title>
                                            <g class="tp-star">
                                                <path class="tp-star__canvas" fill="#dcdce6"
                                                    d="M0 46.330002h46.375586V0H0z"></path>
                                                <path class="tp-star__shape"
                                                    d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z"
                                                    fill="#FFF"></path>
                                            </g>
                                            <g class="tp-star">
                                                <path class="tp-star__canvas" fill="#dcdce6"
                                                    d="M51.24816 46.330002h46.375587V0H51.248161z"></path>
                                                <path class="tp-star__canvas--half" fill="#dcdce6"
                                                    d="M51.24816 46.330002h23.187793V0H51.248161z"></path>
                                                <path class="tp-star__shape"
                                                    d="M74.990978 31.32991L81.150908 30 84 39l-9.660206-7.202786L64.30279 39l3.895636-11.840666L58 19.841466h12.605577L74.499595 8l3.895637 11.841466H91L74.990978 31.329909z"
                                                    fill="#FFF"></path>
                                            </g>
                                            <g class="tp-star">
                                                <path class="tp-star__canvas" fill="#dcdce6"
                                                    d="M102.532209 46.330002h46.375586V0h-46.375586z"></path>
                                                <path class="tp-star__canvas--half" fill="#dcdce6"
                                                    d="M102.532209 46.330002h23.187793V0h-23.187793z"></path>
                                                <path class="tp-star__shape"
                                                    d="M142.066994 19.711433L115.763298 38.80065l3.838215-11.797827-10.047304-7.291391h12.418975l3.837418-11.798624 3.837417 11.798624h12.418975zM125.81156 31.510075l7.183595-1.509576 2.862113 8.800152-10.045708-7.290576z"
                                                    fill="#FFF"></path>
                                            </g>
                                            <g class="tp-star">
                                                <path class="tp-star__canvas" fill="#dcdce6"
                                                    d="M153.815458 46.330002h46.375586V0h-46.375586z"></path>
                                                <path class="tp-star__canvas--half" fill="#dcdce6"
                                                    d="M153.815458 46.330002h23.187793V0h-23.187793z"></path>
                                                <path class="tp-star__shape"
                                                    d="M193.348355 19.711433L167.045457 38.80065l3.837417-11.797827-10.047303-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418974zM177.09292 31.510075l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z"
                                                    fill="#FFF"></path>
                                            </g>
                                            <g class="tp-star">
                                                <path class="tp-star__canvas" fill="#dcdce6"
                                                    d="M205.064416 46.330002h46.375587V0h-46.375587z"></path>
                                                <path class="tp-star__canvas--half" fill="#dcdce6"
                                                    d="M205.064416 46.330002h23.187793V0h-23.187793z"></path>
                                                <path class="tp-star__shape"
                                                    d="M244.597022 19.711433l-26.3029 19.089218 3.837419-11.797827-10.047304-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418975zm-16.255436 11.798642l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z"
                                                    fill="#FFF"></path>
                                            </g>
                                        </svg>

                                    </div>
                                </div>
                            </div>
                        </span>
                        <!-- Business Info -->
                        <span class="tp-widget-businessinfo" id="translations-basedon">Baseret på <strong
                                class="bold-underline">8.122 anmeldelser</strong></span>
                        <!-- Logo -->
                        <span id="tp-widget-logo" class="tp-widget-logo">
                            <div class="">
                                <div
                                    style="position: relative; height: 0; width: 100%; padding: 0; padding-bottom: 24.6031746031746%;">

                                    <svg role="img" viewBox="0 0 126 31"
                                        aria-labelledby="trustpilotLogo-6laxinskc2m" width="126" height="31"
                                        xmlns="http://www.w3.org/2000/svg"
                                        style="position: absolute; height: 100%; width: 100%; left: 0; top: 0;">
                                        <title id="trustpilotLogo-6laxinskc2m">Trustpilot</title>
                                        <path class="tp-logo__text"
                                            d="M33.074774 11.07005H45.81806v2.364196h-5.010656v13.290316h-2.755306V13.434246h-4.988435V11.07005h.01111zm12.198892 4.319629h2.355341v2.187433h.04444c.077771-.309334.222203-.60762.433295-.894859.211092-.287239.466624-.56343.766597-.79543.299972-.243048.633276-.430858.999909-.585525.366633-.14362.744377-.220953 1.12212-.220953.288863 0 .499955.011047.611056.022095.1111.011048.222202.033143.344413.04419v2.408387c-.177762-.033143-.355523-.055238-.544395-.077333-.188872-.022096-.366633-.033143-.544395-.033143-.422184 0-.822148.08838-1.199891.254096-.377744.165714-.699936.41981-.977689.740192-.277753.331429-.499955.729144-.666606 1.21524-.166652.486097-.244422 1.03848-.244422 1.668195v5.39125h-2.510883V15.38968h.01111zm18.220567 11.334883H61.02779v-1.579813h-.04444c-.311083.574477-.766597 1.02743-1.377653 1.369908-.611055.342477-1.233221.51924-1.866497.51924-1.499864 0-2.588654-.364573-3.25526-1.104765-.666606-.740193-.999909-1.856005-.999909-3.347437V15.38968h2.510883v6.948968c0 .994288.188872 1.701337.577725 2.1101.377744.408763.922139.618668 1.610965.618668.533285 0 .96658-.077333 1.322102-.243048.355524-.165714.644386-.37562.855478-.65181.222202-.265144.377744-.596574.477735-.972194.09999-.37562.144431-.784382.144431-1.226288v-6.573349h2.510883v11.323836zm4.27739-3.634675c.07777.729144.355522 1.237336.833257 1.535623.488844.287238 1.06657.441905 1.744286.441905.233312 0 .499954-.022095.799927-.055238.299973-.033143.588836-.110476.844368-.209905.266642-.099429.477734-.254096.655496-.452954.166652-.198857.244422-.452953.233312-.773335-.01111-.320381-.133321-.585525-.355523-.784382-.222202-.209906-.499955-.364573-.844368-.497144-.344413-.121525-.733267-.232-1.17767-.320382-.444405-.088381-.888809-.18781-1.344323-.287239-.466624-.099429-.922138-.232-1.355432-.37562-.433294-.14362-.822148-.342477-1.166561-.596573-.344413-.243048-.622166-.56343-.822148-.950097-.211092-.386668-.311083-.861716-.311083-1.436194 0-.618668.155542-1.12686.455515-1.54667.299972-.41981.688826-.75124 1.14434-1.005336.466624-.254095.97769-.430858 1.544304-.541334.566615-.099429 1.11101-.154667 1.622075-.154667.588836 0 1.15545.066286 1.688736.18781.533285.121524 1.02213.320381 1.455423.60762.433294.276191.788817.640764 1.07768 1.08267.288863.441905.466624.98324.544395 1.612955h-2.621984c-.122211-.596572-.388854-1.005335-.822148-1.204193-.433294-.209905-.933248-.309334-1.488753-.309334-.177762 0-.388854.011048-.633276.04419-.244422.033144-.466624.088382-.688826.165715-.211092.077334-.388854.198858-.544395.353525-.144432.154667-.222203.353525-.222203.60762 0 .309335.111101.552383.322193.740193.211092.18781.488845.342477.833258.475048.344413.121524.733267.232 1.177671.320382.444404.088381.899918.18781 1.366542.287239.455515.099429.899919.232 1.344323.37562.444404.14362.833257.342477 1.17767.596573.344414.254095.622166.56343.833258.93905.211092.37562.322193.850668.322193 1.40305 0 .673906-.155541 1.237336-.466624 1.712385-.311083.464001-.711047.850669-1.199891 1.137907-.488845.28724-1.04435.508192-1.644295.640764-.599946.132572-1.199891.198857-1.788727.198857-.722156 0-1.388762-.077333-1.999818-.243048-.611056-.165714-1.14434-.408763-1.588745-.729144-.444404-.33143-.799927-.740192-1.05546-1.226289-.255532-.486096-.388853-1.071621-.411073-1.745528h2.533103v-.022095zm8.288135-7.700208h1.899828v-3.402675h2.510883v3.402675h2.26646v1.867052h-2.26646v6.054109c0 .265143.01111.486096.03333.684954.02222.18781.07777.353524.155542.486096.07777.132572.199981.232.366633.298287.166651.066285.377743.099428.666606.099428.177762 0 .355523 0 .533285-.011047.177762-.011048.355523-.033143.533285-.077334v1.933338c-.277753.033143-.555505.055238-.811038.088381-.266642.033143-.533285.04419-.811037.04419-.666606 0-1.199891-.066285-1.599855-.18781-.399963-.121523-.722156-.309333-.944358-.552381-.233313-.243049-.377744-.541335-.466625-.905907-.07777-.364573-.13332-.784383-.144431-1.248384v-6.683825h-1.899827v-1.889147h-.02222zm8.454788 0h2.377562V16.9253h.04444c.355523-.662858.844368-1.12686 1.477644-1.414098.633276-.287239 1.310992-.430858 2.055369-.430858.899918 0 1.677625.154667 2.344231.475048.666606.309335 1.222111.740193 1.666515 1.292575.444405.552382.766597 1.193145.9888 1.92229.222202.729145.333303 1.513527.333303 2.3421 0 .762288-.099991 1.50248-.299973 2.20953-.199982.718096-.499955 1.347812-.899918 1.900194-.399964.552383-.911029.98324-1.533194 1.31467-.622166.33143-1.344323.497144-2.18869.497144-.366634 0-.733267-.033143-1.0999-.099429-.366634-.066286-.722157-.176762-1.05546-.320381-.333303-.14362-.655496-.33143-.933249-.56343-.288863-.232-.522175-.497144-.722157-.79543h-.04444v5.656393h-2.510883V15.38968zm8.77698 5.67849c0-.508193-.06666-1.005337-.199981-1.491433-.133321-.486096-.333303-.905907-.599946-1.281527-.266642-.37562-.599945-.673906-.988799-.894859-.399963-.220953-.855478-.342477-1.366542-.342477-1.05546 0-1.855387.364572-2.388672 1.093717-.533285.729144-.799928 1.701337-.799928 2.916578 0 .574478.066661 1.104764.211092 1.59086.144432.486097.344414.905908.633276 1.259432.277753.353525.611056.629716.99991.828574.388853.209905.844367.309334 1.355432.309334.577725 0 1.05546-.121524 1.455423-.353525.399964-.232.722157-.541335.97769-.905907.255531-.37562.444403-.79543.555504-1.270479.099991-.475049.155542-.961145.155542-1.458289zm4.432931-9.99812h2.510883v2.364197h-2.510883V11.07005zm0 4.31963h2.510883v11.334883h-2.510883V15.389679zm4.755124-4.31963h2.510883v15.654513h-2.510883V11.07005zm10.210184 15.963847c-.911029 0-1.722066-.154667-2.433113-.452953-.711046-.298287-1.310992-.718097-1.810946-1.237337-.488845-.530287-.866588-1.160002-1.12212-1.889147-.255533-.729144-.388854-1.535622-.388854-2.408386 0-.861716.133321-1.657147.388853-2.386291.255533-.729145.633276-1.35886 1.12212-1.889148.488845-.530287 1.0999-.93905 1.810947-1.237336.711047-.298286 1.522084-.452953 2.433113-.452953.911028 0 1.722066.154667 2.433112.452953.711047.298287 1.310992.718097 1.810947 1.237336.488844.530287.866588 1.160003 1.12212 1.889148.255532.729144.388854 1.524575.388854 2.38629 0 .872765-.133322 1.679243-.388854 2.408387-.255532.729145-.633276 1.35886-1.12212 1.889147-.488845.530287-1.0999.93905-1.810947 1.237337-.711046.298286-1.522084.452953-2.433112.452953zm0-1.977528c.555505 0 1.04435-.121524 1.455423-.353525.411074-.232.744377-.541335 1.01102-.916954.266642-.37562.455513-.806478.588835-1.281527.12221-.475049.188872-.961145.188872-1.45829 0-.486096-.066661-.961144-.188872-1.44724-.122211-.486097-.322193-.905907-.588836-1.281527-.266642-.37562-.599945-.673907-1.011019-.905907-.411074-.232-.899918-.353525-1.455423-.353525-.555505 0-1.04435.121524-1.455424.353525-.411073.232-.744376.541334-1.011019.905907-.266642.37562-.455514.79543-.588835 1.281526-.122211.486097-.188872.961145-.188872 1.447242 0 .497144.06666.98324.188872 1.458289.12221.475049.322193.905907.588835 1.281527.266643.37562.599946.684954 1.01102.916954.411073.243048.899918.353525 1.455423.353525zm6.4883-9.66669h1.899827v-3.402674h2.510883v3.402675h2.26646v1.867052h-2.26646v6.054109c0 .265143.01111.486096.03333.684954.02222.18781.07777.353524.155541.486096.077771.132572.199982.232.366634.298287.166651.066285.377743.099428.666606.099428.177762 0 .355523 0 .533285-.011047.177762-.011048.355523-.033143.533285-.077334v1.933338c-.277753.033143-.555505.055238-.811038.088381-.266642.033143-.533285.04419-.811037.04419-.666606 0-1.199891-.066285-1.599855-.18781-.399963-.121523-.722156-.309333-.944358-.552381-.233313-.243049-.377744-.541335-.466625-.905907-.07777-.364573-.133321-.784383-.144431-1.248384v-6.683825h-1.899827v-1.889147h-.02222z"
                                            fill="#191919"></path>
                                        <path class="tp-logo__star" fill="#00B67A"
                                            d="M30.141707 11.07005H18.63164L15.076408.177071l-3.566342 10.892977L0 11.059002l9.321376 6.739063-3.566343 10.88193 9.321375-6.728016 9.310266 6.728016-3.555233-10.88193 9.310266-6.728016z">
                                        </path>
                                        <path class="tp-logo__star-notch" fill="#005128"
                                            d="M21.631369 20.26169l-.799928-2.463625-5.755033 4.153914z"></path>
                                    </svg>

                                </div>
                            </div>
                        </span>
                    </a>
                </div>
                <div id="wrapper-right" class="wrapper-right">
                    <div id="tp-widget-reviews-wrapper" class="tp-widget-reviews-wrapper">
                        <div id="tp-widget-reviews " style="padding: 0 40px;" class="tp-widget-reviews reviews-slider">
                            <div class="tp-widget-review">
                                <div class="top-row">
                                    <div class="tp-widget-stars">
                                        <div class="">
                                            <div class="tp-stars tp-stars--5">
                                                <div
                                                    style="position: relative; height: 0; width: 100%; padding: 0; padding-bottom: 18.326693227091635%;">

                                                    <svg role="img" viewBox="0 0 251 46"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        style="position: absolute; height: 100%; width: 100%; left: 0; top: 0;">
                                                        <title id="starRating-hez3wxf6qx9" lang="da-DK">
                                                            Stjernebedømmelse på 5
                                                            ud af 5 på Trustpilot</title>
                                                        <g class="tp-star">
                                                            <path class="tp-star__canvas" fill="#dcdce6"
                                                                d="M0 46.330002h46.375586V0H0z"></path>
                                                            <path class="tp-star__shape"
                                                                d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z"
                                                                fill="#FFF"></path>
                                                        </g>
                                                        <g class="tp-star">
                                                            <path class="tp-star__canvas" fill="#dcdce6"
                                                                d="M51.24816 46.330002h46.375587V0H51.248161z">
                                                            </path>
                                                            <path class="tp-star__canvas--half" fill="#dcdce6"
                                                                d="M51.24816 46.330002h23.187793V0H51.248161z">
                                                            </path>
                                                            <path class="tp-star__shape"
                                                                d="M74.990978 31.32991L81.150908 30 84 39l-9.660206-7.202786L64.30279 39l3.895636-11.840666L58 19.841466h12.605577L74.499595 8l3.895637 11.841466H91L74.990978 31.329909z"
                                                                fill="#FFF"></path>
                                                        </g>
                                                        <g class="tp-star">
                                                            <path class="tp-star__canvas" fill="#dcdce6"
                                                                d="M102.532209 46.330002h46.375586V0h-46.375586z">
                                                            </path>
                                                            <path class="tp-star__canvas--half" fill="#dcdce6"
                                                                d="M102.532209 46.330002h23.187793V0h-23.187793z">
                                                            </path>
                                                            <path class="tp-star__shape"
                                                                d="M142.066994 19.711433L115.763298 38.80065l3.838215-11.797827-10.047304-7.291391h12.418975l3.837418-11.798624 3.837417 11.798624h12.418975zM125.81156 31.510075l7.183595-1.509576 2.862113 8.800152-10.045708-7.290576z"
                                                                fill="#FFF"></path>
                                                        </g>
                                                        <g class="tp-star">
                                                            <path class="tp-star__canvas" fill="#dcdce6"
                                                                d="M153.815458 46.330002h46.375586V0h-46.375586z">
                                                            </path>
                                                            <path class="tp-star__canvas--half" fill="#dcdce6"
                                                                d="M153.815458 46.330002h23.187793V0h-23.187793z">
                                                            </path>
                                                            <path class="tp-star__shape"
                                                                d="M193.348355 19.711433L167.045457 38.80065l3.837417-11.797827-10.047303-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418974zM177.09292 31.510075l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z"
                                                                fill="#FFF"></path>
                                                        </g>
                                                        <g class="tp-star">
                                                            <path class="tp-star__canvas" fill="#dcdce6"
                                                                d="M205.064416 46.330002h46.375587V0h-46.375587z">
                                                            </path>
                                                            <path class="tp-star__canvas--half" fill="#dcdce6"
                                                                d="M205.064416 46.330002h23.187793V0h-23.187793z">
                                                            </path>
                                                            <path class="tp-star__shape"
                                                                d="M244.597022 19.711433l-26.3029 19.089218 3.837419-11.797827-10.047304-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418975zm-16.255436 11.798642l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z"
                                                                fill="#FFF"></path>
                                                        </g>
                                                    </svg>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-widget-review__source popover-activator">
                                        <div class="verification-label-wrapper">
                                            <div class="verification-label">
                                                <div class="label-icon">
                                                    <div class="" aria-hidden="true">
                                                        <div
                                                            style="position: relative; height: 0; width: 100%; padding: 0; padding-bottom: 100%;">
                                                            <svg viewBox="0 0 14 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                style="position: absolute; height: 100%; width: 100%; left: 0; top: 0;">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M7 14C10.866 14 14 10.866 14 7C14 3.13401 10.866 0 7 0C3.13401 0 0 3.13401 0 7C0 10.866 3.13401 14 7 14ZM6.09217 7.81401L9.20311 4.7031C9.44874 4.45757 9.84688 4.45757 10.0923 4.7031C10.338 4.94864 10.338 5.34673 10.0923 5.59226L6.62009 9.06448C6.59573 9.10283 6.56682 9.13912 6.53333 9.17256C6.28787 9.41821 5.88965 9.41821 5.64402 9.17256L3.7059 7.11031C3.46046 6.86464 3.46046 6.46669 3.7059 6.22102C3.95154 5.97548 4.34968 5.97548 4.59512 6.22102L6.09217 7.81401Z"
                                                                    fill="currentColor"></path>
                                                            </svg>

                                                        </div>
                                                    </div>
                                                    <div class="tp-widget-review__source__information">
                                                        <div class="tp-widget-review__source__arrow"></div>
                                                        <div class="information-title">Verificeret anmeldelse</div>
                                                        <div class="information-text"><a
                                                                href="https://support.trustpilot.com/hc/articles/223402468#verified-reviews-2"
                                                                target="_blank">Læs mere</a> om de forskellige
                                                            typer
                                                            anmeldelser
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="label-text">Verificeret</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="https://dk.trustpilot.com/reviews/678b3d4641bff74e68a999bd?utm_medium=trustbox&amp;utm_source=Carousel"
                                    target="_blank" rel="nofollow noopener" class="tp-widget-review-link"
                                    lang="da">
                                    <div class="tp-widget-review-content">
                                        <div class="header">God gennemsigtighed i processen med…</div>
                                        <div class="text">God gennemsigtighed i processen med levering som
                                            aftalt.
                                            Smukkest resultat. </div>
                                        <div class="date-and-user-info-wrapper">
                                            <div class="name secondary-text">Xenia Kofoed Nielsen,</div>
                                            <div class="date secondary-text" lang="da-DK">For 1 dag siden</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="tp-widget-review">
                                <div class="top-row">
                                    <div class="tp-widget-stars">
                                        <div class="">
                                            <div class="tp-stars tp-stars--5">
                                                <div
                                                    style="position: relative; height: 0; width: 100%; padding: 0; padding-bottom: 18.326693227091635%;">

                                                    <svg role="img" viewBox="0 0 251 46"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        style="position: absolute; height: 100%; width: 100%; left: 0; top: 0;">
                                                        <title id="starRating-hez3wxf6qx9" lang="da-DK">
                                                            Stjernebedømmelse på 5
                                                            ud af 5 på Trustpilot</title>
                                                        <g class="tp-star">
                                                            <path class="tp-star__canvas" fill="#dcdce6"
                                                                d="M0 46.330002h46.375586V0H0z"></path>
                                                            <path class="tp-star__shape"
                                                                d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z"
                                                                fill="#FFF"></path>
                                                        </g>
                                                        <g class="tp-star">
                                                            <path class="tp-star__canvas" fill="#dcdce6"
                                                                d="M51.24816 46.330002h46.375587V0H51.248161z">
                                                            </path>
                                                            <path class="tp-star__canvas--half" fill="#dcdce6"
                                                                d="M51.24816 46.330002h23.187793V0H51.248161z">
                                                            </path>
                                                            <path class="tp-star__shape"
                                                                d="M74.990978 31.32991L81.150908 30 84 39l-9.660206-7.202786L64.30279 39l3.895636-11.840666L58 19.841466h12.605577L74.499595 8l3.895637 11.841466H91L74.990978 31.329909z"
                                                                fill="#FFF"></path>
                                                        </g>
                                                        <g class="tp-star">
                                                            <path class="tp-star__canvas" fill="#dcdce6"
                                                                d="M102.532209 46.330002h46.375586V0h-46.375586z">
                                                            </path>
                                                            <path class="tp-star__canvas--half" fill="#dcdce6"
                                                                d="M102.532209 46.330002h23.187793V0h-23.187793z">
                                                            </path>
                                                            <path class="tp-star__shape"
                                                                d="M142.066994 19.711433L115.763298 38.80065l3.838215-11.797827-10.047304-7.291391h12.418975l3.837418-11.798624 3.837417 11.798624h12.418975zM125.81156 31.510075l7.183595-1.509576 2.862113 8.800152-10.045708-7.290576z"
                                                                fill="#FFF"></path>
                                                        </g>
                                                        <g class="tp-star">
                                                            <path class="tp-star__canvas" fill="#dcdce6"
                                                                d="M153.815458 46.330002h46.375586V0h-46.375586z">
                                                            </path>
                                                            <path class="tp-star__canvas--half" fill="#dcdce6"
                                                                d="M153.815458 46.330002h23.187793V0h-23.187793z">
                                                            </path>
                                                            <path class="tp-star__shape"
                                                                d="M193.348355 19.711433L167.045457 38.80065l3.837417-11.797827-10.047303-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418974zM177.09292 31.510075l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z"
                                                                fill="#FFF"></path>
                                                        </g>
                                                        <g class="tp-star">
                                                            <path class="tp-star__canvas" fill="#dcdce6"
                                                                d="M205.064416 46.330002h46.375587V0h-46.375587z">
                                                            </path>
                                                            <path class="tp-star__canvas--half" fill="#dcdce6"
                                                                d="M205.064416 46.330002h23.187793V0h-23.187793z">
                                                            </path>
                                                            <path class="tp-star__shape"
                                                                d="M244.597022 19.711433l-26.3029 19.089218 3.837419-11.797827-10.047304-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418975zm-16.255436 11.798642l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z"
                                                                fill="#FFF"></path>
                                                        </g>
                                                    </svg>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-widget-review__source popover-activator">
                                        <div class="verification-label-wrapper">
                                            <div class="verification-label">
                                                <div class="label-icon">
                                                    <div class="" aria-hidden="true">
                                                        <div
                                                            style="position: relative; height: 0; width: 100%; padding: 0; padding-bottom: 100%;">
                                                            <svg viewBox="0 0 14 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                style="position: absolute; height: 100%; width: 100%; left: 0; top: 0;">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M7 14C10.866 14 14 10.866 14 7C14 3.13401 10.866 0 7 0C3.13401 0 0 3.13401 0 7C0 10.866 3.13401 14 7 14ZM6.09217 7.81401L9.20311 4.7031C9.44874 4.45757 9.84688 4.45757 10.0923 4.7031C10.338 4.94864 10.338 5.34673 10.0923 5.59226L6.62009 9.06448C6.59573 9.10283 6.56682 9.13912 6.53333 9.17256C6.28787 9.41821 5.88965 9.41821 5.64402 9.17256L3.7059 7.11031C3.46046 6.86464 3.46046 6.46669 3.7059 6.22102C3.95154 5.97548 4.34968 5.97548 4.59512 6.22102L6.09217 7.81401Z"
                                                                    fill="currentColor"></path>
                                                            </svg>

                                                        </div>
                                                    </div>
                                                    <div class="tp-widget-review__source__information">
                                                        <div class="tp-widget-review__source__arrow"></div>
                                                        <div class="information-title">Verificeret anmeldelse</div>
                                                        <div class="information-text"><a
                                                                href="https://support.trustpilot.com/hc/articles/223402468#verified-reviews-2"
                                                                target="_blank">Læs mere</a> om de forskellige
                                                            typer
                                                            anmeldelser
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="label-text">Verificeret</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="https://dk.trustpilot.com/reviews/678b3d4641bff74e68a999bd?utm_medium=trustbox&amp;utm_source=Carousel"
                                    target="_blank" rel="nofollow noopener" class="tp-widget-review-link"
                                    lang="da">
                                    <div class="tp-widget-review-content">
                                        <div class="header">God gennemsigtighed i processen med…</div>
                                        <div class="text">God gennemsigtighed i processen med levering som
                                            aftalt.
                                            Smukkest resultat. </div>
                                        <div class="date-and-user-info-wrapper">
                                            <div class="name secondary-text">Xenia Kofoed Nielsen,</div>
                                            <div class="date secondary-text" lang="da-DK">For 1 dag siden</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="tp-widget-review">
                                <div class="top-row">
                                    <div class="tp-widget-stars">
                                        <div class="">
                                            <div class="tp-stars tp-stars--5">
                                                <div
                                                    style="position: relative; height: 0; width: 100%; padding: 0; padding-bottom: 18.326693227091635%;">

                                                    <svg role="img" viewBox="0 0 251 46"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        style="position: absolute; height: 100%; width: 100%; left: 0; top: 0;">
                                                        <title id="starRating-hez3wxf6qx9" lang="da-DK">
                                                            Stjernebedømmelse på 5
                                                            ud af 5 på Trustpilot</title>
                                                        <g class="tp-star">
                                                            <path class="tp-star__canvas" fill="#dcdce6"
                                                                d="M0 46.330002h46.375586V0H0z"></path>
                                                            <path class="tp-star__shape"
                                                                d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z"
                                                                fill="#FFF"></path>
                                                        </g>
                                                        <g class="tp-star">
                                                            <path class="tp-star__canvas" fill="#dcdce6"
                                                                d="M51.24816 46.330002h46.375587V0H51.248161z">
                                                            </path>
                                                            <path class="tp-star__canvas--half" fill="#dcdce6"
                                                                d="M51.24816 46.330002h23.187793V0H51.248161z">
                                                            </path>
                                                            <path class="tp-star__shape"
                                                                d="M74.990978 31.32991L81.150908 30 84 39l-9.660206-7.202786L64.30279 39l3.895636-11.840666L58 19.841466h12.605577L74.499595 8l3.895637 11.841466H91L74.990978 31.329909z"
                                                                fill="#FFF"></path>
                                                        </g>
                                                        <g class="tp-star">
                                                            <path class="tp-star__canvas" fill="#dcdce6"
                                                                d="M102.532209 46.330002h46.375586V0h-46.375586z">
                                                            </path>
                                                            <path class="tp-star__canvas--half" fill="#dcdce6"
                                                                d="M102.532209 46.330002h23.187793V0h-23.187793z">
                                                            </path>
                                                            <path class="tp-star__shape"
                                                                d="M142.066994 19.711433L115.763298 38.80065l3.838215-11.797827-10.047304-7.291391h12.418975l3.837418-11.798624 3.837417 11.798624h12.418975zM125.81156 31.510075l7.183595-1.509576 2.862113 8.800152-10.045708-7.290576z"
                                                                fill="#FFF"></path>
                                                        </g>
                                                        <g class="tp-star">
                                                            <path class="tp-star__canvas" fill="#dcdce6"
                                                                d="M153.815458 46.330002h46.375586V0h-46.375586z">
                                                            </path>
                                                            <path class="tp-star__canvas--half" fill="#dcdce6"
                                                                d="M153.815458 46.330002h23.187793V0h-23.187793z">
                                                            </path>
                                                            <path class="tp-star__shape"
                                                                d="M193.348355 19.711433L167.045457 38.80065l3.837417-11.797827-10.047303-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418974zM177.09292 31.510075l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z"
                                                                fill="#FFF"></path>
                                                        </g>
                                                        <g class="tp-star">
                                                            <path class="tp-star__canvas" fill="#dcdce6"
                                                                d="M205.064416 46.330002h46.375587V0h-46.375587z">
                                                            </path>
                                                            <path class="tp-star__canvas--half" fill="#dcdce6"
                                                                d="M205.064416 46.330002h23.187793V0h-23.187793z">
                                                            </path>
                                                            <path class="tp-star__shape"
                                                                d="M244.597022 19.711433l-26.3029 19.089218 3.837419-11.797827-10.047304-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418975zm-16.255436 11.798642l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z"
                                                                fill="#FFF"></path>
                                                        </g>
                                                    </svg>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-widget-review__source popover-activator">
                                        <div class="verification-label-wrapper">
                                            <div class="verification-label">
                                                <div class="label-icon">
                                                    <div class="" aria-hidden="true">
                                                        <div
                                                            style="position: relative; height: 0; width: 100%; padding: 0; padding-bottom: 100%;">
                                                            <svg viewBox="0 0 14 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                style="position: absolute; height: 100%; width: 100%; left: 0; top: 0;">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M7 14C10.866 14 14 10.866 14 7C14 3.13401 10.866 0 7 0C3.13401 0 0 3.13401 0 7C0 10.866 3.13401 14 7 14ZM6.09217 7.81401L9.20311 4.7031C9.44874 4.45757 9.84688 4.45757 10.0923 4.7031C10.338 4.94864 10.338 5.34673 10.0923 5.59226L6.62009 9.06448C6.59573 9.10283 6.56682 9.13912 6.53333 9.17256C6.28787 9.41821 5.88965 9.41821 5.64402 9.17256L3.7059 7.11031C3.46046 6.86464 3.46046 6.46669 3.7059 6.22102C3.95154 5.97548 4.34968 5.97548 4.59512 6.22102L6.09217 7.81401Z"
                                                                    fill="currentColor"></path>
                                                            </svg>

                                                        </div>
                                                    </div>
                                                    <div class="tp-widget-review__source__information">
                                                        <div class="tp-widget-review__source__arrow"></div>
                                                        <div class="information-title">Verificeret anmeldelse</div>
                                                        <div class="information-text"><a
                                                                href="https://support.trustpilot.com/hc/articles/223402468#verified-reviews-2"
                                                                target="_blank">Læs mere</a> om de forskellige
                                                            typer
                                                            anmeldelser
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="label-text">Verificeret</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="https://dk.trustpilot.com/reviews/678b3d4641bff74e68a999bd?utm_medium=trustbox&amp;utm_source=Carousel"
                                    target="_blank" rel="nofollow noopener" class="tp-widget-review-link"
                                    lang="da">
                                    <div class="tp-widget-review-content">
                                        <div class="header">God gennemsigtighed i processen med…</div>
                                        <div class="text">God gennemsigtighed i processen med levering som
                                            aftalt.
                                            Smukkest resultat. </div>
                                        <div class="date-and-user-info-wrapper">
                                            <div class="name secondary-text">Xenia Kofoed Nielsen,</div>
                                            <div class="date secondary-text" lang="da-DK">For 1 dag siden</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="tp-widget-review">
                                <div class="top-row">
                                    <div class="tp-widget-stars">
                                        <div class="">
                                            <div class="tp-stars tp-stars--5">
                                                <div
                                                    style="position: relative; height: 0; width: 100%; padding: 0; padding-bottom: 18.326693227091635%;">

                                                    <svg role="img" viewBox="0 0 251 46"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        style="position: absolute; height: 100%; width: 100%; left: 0; top: 0;">
                                                        <title id="starRating-hez3wxf6qx9" lang="da-DK">
                                                            Stjernebedømmelse på 5
                                                            ud af 5 på Trustpilot</title>
                                                        <g class="tp-star">
                                                            <path class="tp-star__canvas" fill="#dcdce6"
                                                                d="M0 46.330002h46.375586V0H0z"></path>
                                                            <path class="tp-star__shape"
                                                                d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z"
                                                                fill="#FFF"></path>
                                                        </g>
                                                        <g class="tp-star">
                                                            <path class="tp-star__canvas" fill="#dcdce6"
                                                                d="M51.24816 46.330002h46.375587V0H51.248161z">
                                                            </path>
                                                            <path class="tp-star__canvas--half" fill="#dcdce6"
                                                                d="M51.24816 46.330002h23.187793V0H51.248161z">
                                                            </path>
                                                            <path class="tp-star__shape"
                                                                d="M74.990978 31.32991L81.150908 30 84 39l-9.660206-7.202786L64.30279 39l3.895636-11.840666L58 19.841466h12.605577L74.499595 8l3.895637 11.841466H91L74.990978 31.329909z"
                                                                fill="#FFF"></path>
                                                        </g>
                                                        <g class="tp-star">
                                                            <path class="tp-star__canvas" fill="#dcdce6"
                                                                d="M102.532209 46.330002h46.375586V0h-46.375586z">
                                                            </path>
                                                            <path class="tp-star__canvas--half" fill="#dcdce6"
                                                                d="M102.532209 46.330002h23.187793V0h-23.187793z">
                                                            </path>
                                                            <path class="tp-star__shape"
                                                                d="M142.066994 19.711433L115.763298 38.80065l3.838215-11.797827-10.047304-7.291391h12.418975l3.837418-11.798624 3.837417 11.798624h12.418975zM125.81156 31.510075l7.183595-1.509576 2.862113 8.800152-10.045708-7.290576z"
                                                                fill="#FFF"></path>
                                                        </g>
                                                        <g class="tp-star">
                                                            <path class="tp-star__canvas" fill="#dcdce6"
                                                                d="M153.815458 46.330002h46.375586V0h-46.375586z">
                                                            </path>
                                                            <path class="tp-star__canvas--half" fill="#dcdce6"
                                                                d="M153.815458 46.330002h23.187793V0h-23.187793z">
                                                            </path>
                                                            <path class="tp-star__shape"
                                                                d="M193.348355 19.711433L167.045457 38.80065l3.837417-11.797827-10.047303-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418974zM177.09292 31.510075l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z"
                                                                fill="#FFF"></path>
                                                        </g>
                                                        <g class="tp-star">
                                                            <path class="tp-star__canvas" fill="#dcdce6"
                                                                d="M205.064416 46.330002h46.375587V0h-46.375587z">
                                                            </path>
                                                            <path class="tp-star__canvas--half" fill="#dcdce6"
                                                                d="M205.064416 46.330002h23.187793V0h-23.187793z">
                                                            </path>
                                                            <path class="tp-star__shape"
                                                                d="M244.597022 19.711433l-26.3029 19.089218 3.837419-11.797827-10.047304-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418975zm-16.255436 11.798642l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z"
                                                                fill="#FFF"></path>
                                                        </g>
                                                    </svg>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-widget-review__source popover-activator">
                                        <div class="verification-label-wrapper">
                                            <div class="verification-label">
                                                <div class="label-icon">
                                                    <div class="" aria-hidden="true">
                                                        <div
                                                            style="position: relative; height: 0; width: 100%; padding: 0; padding-bottom: 100%;">
                                                            <svg viewBox="0 0 14 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                style="position: absolute; height: 100%; width: 100%; left: 0; top: 0;">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M7 14C10.866 14 14 10.866 14 7C14 3.13401 10.866 0 7 0C3.13401 0 0 3.13401 0 7C0 10.866 3.13401 14 7 14ZM6.09217 7.81401L9.20311 4.7031C9.44874 4.45757 9.84688 4.45757 10.0923 4.7031C10.338 4.94864 10.338 5.34673 10.0923 5.59226L6.62009 9.06448C6.59573 9.10283 6.56682 9.13912 6.53333 9.17256C6.28787 9.41821 5.88965 9.41821 5.64402 9.17256L3.7059 7.11031C3.46046 6.86464 3.46046 6.46669 3.7059 6.22102C3.95154 5.97548 4.34968 5.97548 4.59512 6.22102L6.09217 7.81401Z"
                                                                    fill="currentColor"></path>
                                                            </svg>

                                                        </div>
                                                    </div>
                                                    <div class="tp-widget-review__source__information">
                                                        <div class="tp-widget-review__source__arrow"></div>
                                                        <div class="information-title">Verificeret anmeldelse</div>
                                                        <div class="information-text"><a
                                                                href="https://support.trustpilot.com/hc/articles/223402468#verified-reviews-2"
                                                                target="_blank">Læs mere</a> om de forskellige
                                                            typer
                                                            anmeldelser
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="label-text">Verificeret</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="https://dk.trustpilot.com/reviews/678b3d4641bff74e68a999bd?utm_medium=trustbox&amp;utm_source=Carousel"
                                    target="_blank" rel="nofollow noopener" class="tp-widget-review-link"
                                    lang="da">
                                    <div class="tp-widget-review-content">
                                        <div class="header">God gennemsigtighed i processen med…</div>
                                        <div class="text">God gennemsigtighed i processen med levering som
                                            aftalt.
                                            Smukkest resultat. </div>
                                        <div class="date-and-user-info-wrapper">
                                            <div class="name secondary-text">Xenia Kofoed Nielsen,</div>
                                            <div class="date secondary-text" lang="da-DK">For 1 dag siden</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="tp-widget-review">
                                <div class="top-row">
                                    <div class="tp-widget-stars">
                                        <div class="">
                                            <div class="tp-stars tp-stars--5">
                                                <div
                                                    style="position: relative; height: 0; width: 100%; padding: 0; padding-bottom: 18.326693227091635%;">

                                                    <svg role="img" viewBox="0 0 251 46"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        style="position: absolute; height: 100%; width: 100%; left: 0; top: 0;">
                                                        <title id="starRating-hez3wxf6qx9" lang="da-DK">
                                                            Stjernebedømmelse på 5
                                                            ud af 5 på Trustpilot</title>
                                                        <g class="tp-star">
                                                            <path class="tp-star__canvas" fill="#dcdce6"
                                                                d="M0 46.330002h46.375586V0H0z"></path>
                                                            <path class="tp-star__shape"
                                                                d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z"
                                                                fill="#FFF"></path>
                                                        </g>
                                                        <g class="tp-star">
                                                            <path class="tp-star__canvas" fill="#dcdce6"
                                                                d="M51.24816 46.330002h46.375587V0H51.248161z">
                                                            </path>
                                                            <path class="tp-star__canvas--half" fill="#dcdce6"
                                                                d="M51.24816 46.330002h23.187793V0H51.248161z">
                                                            </path>
                                                            <path class="tp-star__shape"
                                                                d="M74.990978 31.32991L81.150908 30 84 39l-9.660206-7.202786L64.30279 39l3.895636-11.840666L58 19.841466h12.605577L74.499595 8l3.895637 11.841466H91L74.990978 31.329909z"
                                                                fill="#FFF"></path>
                                                        </g>
                                                        <g class="tp-star">
                                                            <path class="tp-star__canvas" fill="#dcdce6"
                                                                d="M102.532209 46.330002h46.375586V0h-46.375586z">
                                                            </path>
                                                            <path class="tp-star__canvas--half" fill="#dcdce6"
                                                                d="M102.532209 46.330002h23.187793V0h-23.187793z">
                                                            </path>
                                                            <path class="tp-star__shape"
                                                                d="M142.066994 19.711433L115.763298 38.80065l3.838215-11.797827-10.047304-7.291391h12.418975l3.837418-11.798624 3.837417 11.798624h12.418975zM125.81156 31.510075l7.183595-1.509576 2.862113 8.800152-10.045708-7.290576z"
                                                                fill="#FFF"></path>
                                                        </g>
                                                        <g class="tp-star">
                                                            <path class="tp-star__canvas" fill="#dcdce6"
                                                                d="M153.815458 46.330002h46.375586V0h-46.375586z">
                                                            </path>
                                                            <path class="tp-star__canvas--half" fill="#dcdce6"
                                                                d="M153.815458 46.330002h23.187793V0h-23.187793z">
                                                            </path>
                                                            <path class="tp-star__shape"
                                                                d="M193.348355 19.711433L167.045457 38.80065l3.837417-11.797827-10.047303-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418974zM177.09292 31.510075l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z"
                                                                fill="#FFF"></path>
                                                        </g>
                                                        <g class="tp-star">
                                                            <path class="tp-star__canvas" fill="#dcdce6"
                                                                d="M205.064416 46.330002h46.375587V0h-46.375587z">
                                                            </path>
                                                            <path class="tp-star__canvas--half" fill="#dcdce6"
                                                                d="M205.064416 46.330002h23.187793V0h-23.187793z">
                                                            </path>
                                                            <path class="tp-star__shape"
                                                                d="M244.597022 19.711433l-26.3029 19.089218 3.837419-11.797827-10.047304-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418975zm-16.255436 11.798642l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z"
                                                                fill="#FFF"></path>
                                                        </g>
                                                    </svg>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-widget-review__source popover-activator">
                                        <div class="verification-label-wrapper">
                                            <div class="verification-label">
                                                <div class="label-icon">
                                                    <div class="" aria-hidden="true">
                                                        <div
                                                            style="position: relative; height: 0; width: 100%; padding: 0; padding-bottom: 100%;">
                                                            <svg viewBox="0 0 14 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                style="position: absolute; height: 100%; width: 100%; left: 0; top: 0;">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M7 14C10.866 14 14 10.866 14 7C14 3.13401 10.866 0 7 0C3.13401 0 0 3.13401 0 7C0 10.866 3.13401 14 7 14ZM6.09217 7.81401L9.20311 4.7031C9.44874 4.45757 9.84688 4.45757 10.0923 4.7031C10.338 4.94864 10.338 5.34673 10.0923 5.59226L6.62009 9.06448C6.59573 9.10283 6.56682 9.13912 6.53333 9.17256C6.28787 9.41821 5.88965 9.41821 5.64402 9.17256L3.7059 7.11031C3.46046 6.86464 3.46046 6.46669 3.7059 6.22102C3.95154 5.97548 4.34968 5.97548 4.59512 6.22102L6.09217 7.81401Z"
                                                                    fill="currentColor"></path>
                                                            </svg>

                                                        </div>
                                                    </div>
                                                    <div class="tp-widget-review__source__information">
                                                        <div class="tp-widget-review__source__arrow"></div>
                                                        <div class="information-title">Verificeret anmeldelse</div>
                                                        <div class="information-text"><a
                                                                href="https://support.trustpilot.com/hc/articles/223402468#verified-reviews-2"
                                                                target="_blank">Læs mere</a> om de forskellige
                                                            typer
                                                            anmeldelser
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="label-text">Verificeret</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="https://dk.trustpilot.com/reviews/678b3d4641bff74e68a999bd?utm_medium=trustbox&amp;utm_source=Carousel"
                                    target="_blank" rel="nofollow noopener" class="tp-widget-review-link"
                                    lang="da">
                                    <div class="tp-widget-review-content">
                                        <div class="header">God gennemsigtighed i processen med…</div>
                                        <div class="text">God gennemsigtighed i processen med levering som
                                            aftalt.
                                            Smukkest resultat. </div>
                                        <div class="date-and-user-info-wrapper">
                                            <div class="name secondary-text">Xenia Kofoed Nielsen,</div>
                                            <div class="date secondary-text" lang="da-DK">For 1 dag siden</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="tp-widget-review">
                                <div class="top-row">
                                    <div class="tp-widget-stars">
                                        <div class="">
                                            <div class="tp-stars tp-stars--5">
                                                <div
                                                    style="position: relative; height: 0; width: 100%; padding: 0; padding-bottom: 18.326693227091635%;">

                                                    <svg role="img" viewBox="0 0 251 46"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        style="position: absolute; height: 100%; width: 100%; left: 0; top: 0;">
                                                        <title id="starRating-hez3wxf6qx9" lang="da-DK">
                                                            Stjernebedømmelse på 5
                                                            ud af 5 på Trustpilot</title>
                                                        <g class="tp-star">
                                                            <path class="tp-star__canvas" fill="#dcdce6"
                                                                d="M0 46.330002h46.375586V0H0z"></path>
                                                            <path class="tp-star__shape"
                                                                d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z"
                                                                fill="#FFF"></path>
                                                        </g>
                                                        <g class="tp-star">
                                                            <path class="tp-star__canvas" fill="#dcdce6"
                                                                d="M51.24816 46.330002h46.375587V0H51.248161z">
                                                            </path>
                                                            <path class="tp-star__canvas--half" fill="#dcdce6"
                                                                d="M51.24816 46.330002h23.187793V0H51.248161z">
                                                            </path>
                                                            <path class="tp-star__shape"
                                                                d="M74.990978 31.32991L81.150908 30 84 39l-9.660206-7.202786L64.30279 39l3.895636-11.840666L58 19.841466h12.605577L74.499595 8l3.895637 11.841466H91L74.990978 31.329909z"
                                                                fill="#FFF"></path>
                                                        </g>
                                                        <g class="tp-star">
                                                            <path class="tp-star__canvas" fill="#dcdce6"
                                                                d="M102.532209 46.330002h46.375586V0h-46.375586z">
                                                            </path>
                                                            <path class="tp-star__canvas--half" fill="#dcdce6"
                                                                d="M102.532209 46.330002h23.187793V0h-23.187793z">
                                                            </path>
                                                            <path class="tp-star__shape"
                                                                d="M142.066994 19.711433L115.763298 38.80065l3.838215-11.797827-10.047304-7.291391h12.418975l3.837418-11.798624 3.837417 11.798624h12.418975zM125.81156 31.510075l7.183595-1.509576 2.862113 8.800152-10.045708-7.290576z"
                                                                fill="#FFF"></path>
                                                        </g>
                                                        <g class="tp-star">
                                                            <path class="tp-star__canvas" fill="#dcdce6"
                                                                d="M153.815458 46.330002h46.375586V0h-46.375586z">
                                                            </path>
                                                            <path class="tp-star__canvas--half" fill="#dcdce6"
                                                                d="M153.815458 46.330002h23.187793V0h-23.187793z">
                                                            </path>
                                                            <path class="tp-star__shape"
                                                                d="M193.348355 19.711433L167.045457 38.80065l3.837417-11.797827-10.047303-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418974zM177.09292 31.510075l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z"
                                                                fill="#FFF"></path>
                                                        </g>
                                                        <g class="tp-star">
                                                            <path class="tp-star__canvas" fill="#dcdce6"
                                                                d="M205.064416 46.330002h46.375587V0h-46.375587z">
                                                            </path>
                                                            <path class="tp-star__canvas--half" fill="#dcdce6"
                                                                d="M205.064416 46.330002h23.187793V0h-23.187793z">
                                                            </path>
                                                            <path class="tp-star__shape"
                                                                d="M244.597022 19.711433l-26.3029 19.089218 3.837419-11.797827-10.047304-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418975zm-16.255436 11.798642l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z"
                                                                fill="#FFF"></path>
                                                        </g>
                                                    </svg>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-widget-review__source popover-activator">
                                        <div class="verification-label-wrapper">
                                            <div class="verification-label">
                                                <div class="label-icon">
                                                    <div class="" aria-hidden="true">
                                                        <div
                                                            style="position: relative; height: 0; width: 100%; padding: 0; padding-bottom: 100%;">
                                                            <svg viewBox="0 0 14 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                style="position: absolute; height: 100%; width: 100%; left: 0; top: 0;">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M7 14C10.866 14 14 10.866 14 7C14 3.13401 10.866 0 7 0C3.13401 0 0 3.13401 0 7C0 10.866 3.13401 14 7 14ZM6.09217 7.81401L9.20311 4.7031C9.44874 4.45757 9.84688 4.45757 10.0923 4.7031C10.338 4.94864 10.338 5.34673 10.0923 5.59226L6.62009 9.06448C6.59573 9.10283 6.56682 9.13912 6.53333 9.17256C6.28787 9.41821 5.88965 9.41821 5.64402 9.17256L3.7059 7.11031C3.46046 6.86464 3.46046 6.46669 3.7059 6.22102C3.95154 5.97548 4.34968 5.97548 4.59512 6.22102L6.09217 7.81401Z"
                                                                    fill="currentColor"></path>
                                                            </svg>

                                                        </div>
                                                    </div>
                                                    <div class="tp-widget-review__source__information">
                                                        <div class="tp-widget-review__source__arrow"></div>
                                                        <div class="information-title">Verificeret anmeldelse</div>
                                                        <div class="information-text"><a
                                                                href="https://support.trustpilot.com/hc/articles/223402468#verified-reviews-2"
                                                                target="_blank">Læs mere</a> om de forskellige
                                                            typer
                                                            anmeldelser
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="label-text">Verificeret</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="https://dk.trustpilot.com/reviews/678b3d4641bff74e68a999bd?utm_medium=trustbox&amp;utm_source=Carousel"
                                    target="_blank" rel="nofollow noopener" class="tp-widget-review-link"
                                    lang="da">
                                    <div class="tp-widget-review-content">
                                        <div class="header">God gennemsigtighed i processen med…</div>
                                        <div class="text">God gennemsigtighed i processen med levering som
                                            aftalt.
                                            Smukkest resultat. </div>
                                        <div class="date-and-user-info-wrapper">
                                            <div class="name secondary-text">Xenia Kofoed Nielsen,</div>
                                            <div class="date secondary-text" lang="da-DK">For 1 dag siden</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="tp-widget-review">
                                <div class="top-row">
                                    <div class="tp-widget-stars">
                                        <div class="">
                                            <div class="tp-stars tp-stars--5">
                                                <div
                                                    style="position: relative; height: 0; width: 100%; padding: 0; padding-bottom: 18.326693227091635%;">

                                                    <svg role="img" viewBox="0 0 251 46"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        style="position: absolute; height: 100%; width: 100%; left: 0; top: 0;">
                                                        <title id="starRating-hez3wxf6qx9" lang="da-DK">
                                                            Stjernebedømmelse på 5
                                                            ud af 5 på Trustpilot</title>
                                                        <g class="tp-star">
                                                            <path class="tp-star__canvas" fill="#dcdce6"
                                                                d="M0 46.330002h46.375586V0H0z"></path>
                                                            <path class="tp-star__shape"
                                                                d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z"
                                                                fill="#FFF"></path>
                                                        </g>
                                                        <g class="tp-star">
                                                            <path class="tp-star__canvas" fill="#dcdce6"
                                                                d="M51.24816 46.330002h46.375587V0H51.248161z">
                                                            </path>
                                                            <path class="tp-star__canvas--half" fill="#dcdce6"
                                                                d="M51.24816 46.330002h23.187793V0H51.248161z">
                                                            </path>
                                                            <path class="tp-star__shape"
                                                                d="M74.990978 31.32991L81.150908 30 84 39l-9.660206-7.202786L64.30279 39l3.895636-11.840666L58 19.841466h12.605577L74.499595 8l3.895637 11.841466H91L74.990978 31.329909z"
                                                                fill="#FFF"></path>
                                                        </g>
                                                        <g class="tp-star">
                                                            <path class="tp-star__canvas" fill="#dcdce6"
                                                                d="M102.532209 46.330002h46.375586V0h-46.375586z">
                                                            </path>
                                                            <path class="tp-star__canvas--half" fill="#dcdce6"
                                                                d="M102.532209 46.330002h23.187793V0h-23.187793z">
                                                            </path>
                                                            <path class="tp-star__shape"
                                                                d="M142.066994 19.711433L115.763298 38.80065l3.838215-11.797827-10.047304-7.291391h12.418975l3.837418-11.798624 3.837417 11.798624h12.418975zM125.81156 31.510075l7.183595-1.509576 2.862113 8.800152-10.045708-7.290576z"
                                                                fill="#FFF"></path>
                                                        </g>
                                                        <g class="tp-star">
                                                            <path class="tp-star__canvas" fill="#dcdce6"
                                                                d="M153.815458 46.330002h46.375586V0h-46.375586z">
                                                            </path>
                                                            <path class="tp-star__canvas--half" fill="#dcdce6"
                                                                d="M153.815458 46.330002h23.187793V0h-23.187793z">
                                                            </path>
                                                            <path class="tp-star__shape"
                                                                d="M193.348355 19.711433L167.045457 38.80065l3.837417-11.797827-10.047303-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418974zM177.09292 31.510075l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z"
                                                                fill="#FFF"></path>
                                                        </g>
                                                        <g class="tp-star">
                                                            <path class="tp-star__canvas" fill="#dcdce6"
                                                                d="M205.064416 46.330002h46.375587V0h-46.375587z">
                                                            </path>
                                                            <path class="tp-star__canvas--half" fill="#dcdce6"
                                                                d="M205.064416 46.330002h23.187793V0h-23.187793z">
                                                            </path>
                                                            <path class="tp-star__shape"
                                                                d="M244.597022 19.711433l-26.3029 19.089218 3.837419-11.797827-10.047304-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418975zm-16.255436 11.798642l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z"
                                                                fill="#FFF"></path>
                                                        </g>
                                                    </svg>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-widget-review__source popover-activator">
                                        <div class="verification-label-wrapper">
                                            <div class="verification-label">
                                                <div class="label-icon">
                                                    <div class="" aria-hidden="true">
                                                        <div
                                                            style="position: relative; height: 0; width: 100%; padding: 0; padding-bottom: 100%;">
                                                            <svg viewBox="0 0 14 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                style="position: absolute; height: 100%; width: 100%; left: 0; top: 0;">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M7 14C10.866 14 14 10.866 14 7C14 3.13401 10.866 0 7 0C3.13401 0 0 3.13401 0 7C0 10.866 3.13401 14 7 14ZM6.09217 7.81401L9.20311 4.7031C9.44874 4.45757 9.84688 4.45757 10.0923 4.7031C10.338 4.94864 10.338 5.34673 10.0923 5.59226L6.62009 9.06448C6.59573 9.10283 6.56682 9.13912 6.53333 9.17256C6.28787 9.41821 5.88965 9.41821 5.64402 9.17256L3.7059 7.11031C3.46046 6.86464 3.46046 6.46669 3.7059 6.22102C3.95154 5.97548 4.34968 5.97548 4.59512 6.22102L6.09217 7.81401Z"
                                                                    fill="currentColor"></path>
                                                            </svg>

                                                        </div>
                                                    </div>
                                                    <div class="tp-widget-review__source__information">
                                                        <div class="tp-widget-review__source__arrow"></div>
                                                        <div class="information-title">Verificeret anmeldelse</div>
                                                        <div class="information-text"><a
                                                                href="https://support.trustpilot.com/hc/articles/223402468#verified-reviews-2"
                                                                target="_blank">Læs mere</a> om de forskellige
                                                            typer
                                                            anmeldelser
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="label-text">Verificeret</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="https://dk.trustpilot.com/reviews/678b3d4641bff74e68a999bd?utm_medium=trustbox&amp;utm_source=Carousel"
                                    target="_blank" rel="nofollow noopener" class="tp-widget-review-link"
                                    lang="da">
                                    <div class="tp-widget-review-content">
                                        <div class="header">God gennemsigtighed i processen med…</div>
                                        <div class="text">God gennemsigtighed i processen med levering som
                                            aftalt.
                                            Smukkest resultat. </div>
                                        <div class="date-and-user-info-wrapper">
                                            <div class="name secondary-text">Xenia Kofoed Nielsen,</div>
                                            <div class="date secondary-text" lang="da-DK">For 1 dag siden</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="Newsletter">
        <div class="Newsletter-Block">
            <div class="CmsBlock-Wrapper newsletter-signup-text">
                <h2>Tilmeld dig og vind månedens møbel</h2>
                <p>Tilmeld dig vores nyhedsbrev og få automatisk chancen for at vinde månedens SOFACOMPANY møbel.</p>
                <p>Nyhedsbrevet er altid fyldt med vaskeægte sofa-kærlighed, f.eks. alt om vores nye designs og farver,
                    invitationer til events og konkurrencer. Og du kan naturligvis altid afmelde dig igen ved at klikke
                    på linket nederst i nyhedsbrevet.</p>
                <p>Dine personoplysninger vil ikke blive delt med nogen tredjepartspartner eller virksomhed. Læs vores
                    <a class=" " href="/da-dk/privacy-policy">privatlivspolitik her.</a>
                </p>
            </div>
        </div>
        <div class="Newsletter-Form">
            <div class="CmsBlock-Wrapper newsletter-signup-form">
                <div class="klaviyo-form-VDK2cs klaviyo-form form-version-cid-1">
                    <div class="needsclick  kl-private-reset-css-Xuajs1" style="transform: translate(0px, 0px);">
                        <form aria-live="polite"
                            class="needsclick klaviyo-form klaviyo-form-version-cid_1 go1828430365 kl-private-reset-css-Xuajs1"
                            data-testid="klaviyo-form-VDK2cs" novalidate=""
                            style="display: flex; flex-direction: row; box-sizing: border-box; width: 100%; overflow: visible; max-width: 450px; float: left; border-radius: 0px; border-style: none; border-width: 0px; border-color: rgb(0, 0, 0); background-color: rgb(231, 228, 235); background-repeat: no-repeat; background-position-y: 50%; padding: 20px; flex: 1 1 0%;">
                            <div class="needsclick  kl-private-reset-css-Xuajs1"
                                style="display: flex; flex-direction: column; width: 100%; margin: 0px; padding: 0px; min-height: 200px; justify-content: center;">
                                <div data-testid="form-row" class="needsclick  kl-private-reset-css-Xuajs1"
                                    style="display: flex; flex-direction: row; align-items: stretch; position: relative;">
                                    <div component="[object Object]" data-testid="form-component"
                                        class="needsclick  kl-private-reset-css-Xuajs1"
                                        style="display: flex; justify-content: flex-start; padding: 0px 0px 10px; position: relative; background-color: rgb(231, 228, 235); flex: 1 0 0px;">
                                        <div class="needsclick  kl-private-reset-css-Xuajs1"
                                            style="display: flex; flex-grow: 1; flex-direction: column; align-self: flex-end;">
                                            <input id="first_name_016JB91TTR000000000034CEY8"
                                                class="needsclick go2386150465 kl-private-reset-css-Xuajs1"
                                                type="text" autocomplete="given-name" tabindex="0"
                                                placeholder="Dit fornavn" aria-label="Dit fornavn"
                                                aria-required="true" aria-invalid="false" options="[object Object]"
                                                style="box-sizing: border-box; border-radius: 0px; padding: 0px 0px 0px 16px; height: 55px; text-align: left; color: rgb(205, 200, 200); font-family: &quot;Open Sans&quot;, Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-size: 12px; font-weight: 400; letter-spacing: 2px; background-color: rgb(255, 255, 255); border: 1px solid rgb(205, 200, 200);">
                                            <div class="needsclick  kl-private-reset-css-Xuajs1"
                                                style="width: 100%; position: relative;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div data-testid="form-row" class="needsclick  kl-private-reset-css-Xuajs1"
                                    style="display: flex; flex-direction: row; align-items: stretch; position: relative;">
                                    <div component="[object Object]" data-testid="form-component"
                                        class="needsclick  kl-private-reset-css-Xuajs1"
                                        style="display: flex; justify-content: flex-start; padding: 10px 0px; position: relative; background-color: rgb(231, 228, 235); flex: 1 0 0px;">
                                        <div class="needsclick  kl-private-reset-css-Xuajs1"
                                            style="display: flex; flex-grow: 1; flex-direction: column; align-self: flex-end;">
                                            <input id="email_016JB91TTR000000000034CEY9"
                                                class="needsclick go2386150465 kl-private-reset-css-Xuajs1"
                                                type="email" autocomplete="email" name="email" tabindex="0"
                                                placeholder="E-mail" aria-label="E-mail" aria-required="true"
                                                aria-invalid="false" options="[object Object]"
                                                style="box-sizing: border-box; border-radius: 0px; padding: 0px 0px 0px 16px; height: 55px; text-align: left; color: rgb(205, 200, 200); font-family: &quot;Open Sans&quot;, Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-size: 12px; font-weight: 400; letter-spacing: 2px; background-color: rgb(255, 255, 255); border: 1px solid rgb(205, 200, 200);">
                                            <div class="needsclick  kl-private-reset-css-Xuajs1"
                                                style="width: 100%; position: relative;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div data-testid="form-row" class="needsclick  kl-private-reset-css-Xuajs1"
                                    style="display: flex; flex-direction: row; align-items: stretch; position: relative;">
                                    <div component="[object Object]" data-testid="form-component"
                                        class="needsclick  kl-private-reset-css-Xuajs1"
                                        style="display: flex; justify-content: flex-start; padding: 10px 0px; position: relative; background-color: rgb(231, 228, 235); flex: 1 0 0px;">
                                        <div class="needsclick  kl-private-reset-css-Xuajs1"
                                            style="display: flex; flex-grow: 1; flex-direction: column; align-self: flex-end;">
                                            <input id="zip_code_016JB91TTR000000000034CEYA"
                                                class="needsclick go2386150465 kl-private-reset-css-Xuajs1"
                                                type="text" tabindex="0" placeholder="Postnummer"
                                                aria-label="Postnummer" aria-invalid="false"
                                                options="[object Object]"
                                                style="box-sizing: border-box; border-radius: 0px; padding: 0px 0px 0px 16px; height: 55px; text-align: left; color: rgb(205, 200, 200); font-family: &quot;Open Sans&quot;, Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-size: 12px; font-weight: 400; letter-spacing: 2px; background-color: rgb(255, 255, 255); border: 1px solid rgb(205, 200, 200);">
                                            <div class="needsclick  kl-private-reset-css-Xuajs1"
                                                style="width: 100%; position: relative;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div data-testid="form-row" class="needsclick  kl-private-reset-css-Xuajs1"
                                    style="display: flex; flex-direction: row; align-items: stretch; position: relative;">
                                    <div component="[object Object]" data-testid="form-component"
                                        class="needsclick  kl-private-reset-css-Xuajs1"
                                        style="display: flex; justify-content: flex-start; padding: 10px 0px; position: relative; background-color: rgb(231, 228, 235); flex: 1 0 0px;">
                                        <button class="needsclick go809051785 kl-private-reset-css-Xuajs1"
                                            type="button" tabindex="0"
                                            style="background: rgb(0, 0, 0); border-radius: 6px; border-style: solid; border-color: rgb(33, 29, 28); border-width: 0px; color: rgb(255, 255, 255); font-family: &quot;Open Sans&quot;, Arial, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-size: 16px; font-weight: 400; letter-spacing: 2px; line-height: 1; font-style: normal; white-space: normal; padding-top: 0px; padding-bottom: 0px; text-align: center; word-break: break-word; align-self: flex-end; cursor: pointer; pointer-events: auto; height: 40px; width: 100%;">Tilmeld</button>
                                    </div>
                                </div>
                            </div><input type="submit" tabindex="-1" value="Submit" style="display: none;">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div
        class="container-fluid flex justify-between gap-x-6 gap-y-8 p-[60px] max-1060:flex-col-reverse max-md:gap-5 max-md:p-8 max-sm:px-4 max-sm:py-5">
        <!-- For Desktop View -->
        <div class="flex flex-wrap items-start gap-24 max-1180:gap-6 max-1060:hidden">
            @if ($customization?->options)
                @foreach ($customization->options as $footerLinkSection)
                    <ul class="grid gap-5 text-sm">
                        @php
                            usort($footerLinkSection, function ($a, $b) {
                                return $a['sort_order'] - $b['sort_order'];
                            });
                        @endphp

                        @foreach ($footerLinkSection as $link)
                            <li>
                                <a href="{{ $link['url'] }}">
                                    {{ $link['title'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endforeach
            @endif
        </div>

        <!-- For Mobile view -->
        <x-shop::accordion :is-active="false"
            class="hidden !w-full rounded-xl !border-2 !border-[#e9decc] max-1060:block max-sm:rounded-lg">
            <x-slot:header
                class="rounded-t-lg bg-[#F1EADF] font-medium max-md:p-2.5 max-sm:px-3 max-sm:py-2 max-sm:text-sm">
                @lang('shop::app.components.layouts.footer.footer-content')
            </x-slot>

            <x-slot:content class="flex justify-between !bg-transparent !p-4">
                @if ($customization?->options)
                    @foreach ($customization->options as $footerLinkSection)
                        <ul class="grid gap-5 text-sm">
                            @php
                                usort($footerLinkSection, function ($a, $b) {
                                    return $a['sort_order'] - $b['sort_order'];
                                });
                            @endphp

                            @foreach ($footerLinkSection as $link)
                                <li>
                                    <a href="{{ $link['url'] }}" class="text-sm font-medium max-sm:text-xs">
                                        {{ $link['title'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endforeach
                @endif
            </x-slot>
        </x-shop::accordion>

        {!! view_render_event('bagisto.shop.layout.footer.newsletter_subscription.before') !!}

        <!-- News Letter subscription -->
        @if (core()->getConfigData('customer.settings.newsletter.subscription'))
            <div class="grid gap-2.5">
                <p class="max-w-[288px] text-3xl italic leading-[45px] text-navyBlue max-md:text-2xl max-sm:text-lg"
                    role="heading" aria-level="2">
                    @lang('shop::app.components.layouts.footer.newsletter-text')
                </p>

                <p class="text-xs">
                    @lang('shop::app.components.layouts.footer.subscribe-stay-touch')
                </p>

                <div>
                    <x-shop::form :action="route('shop.subscription.store')" class="mt-2.5 rounded max-sm:mt-0">
                        <div class="relative w-full">
                            <x-shop::form.control-group.control type="email"
                                class="block w-[420px] max-w-full rounded-xl border-2 border-[#e9decc] bg-[#F1EADF] px-5 py-4 text-base max-1060:w-full max-md:p-3.5 max-sm:mb-0 max-sm:rounded-lg max-sm:border-2 max-sm:p-2 max-sm:text-sm"
                                name="email" rules="required|email" label="Email" :aria-label="trans('shop::app.components.layouts.footer.email')"
                                placeholder="email@example.com" />

                            <x-shop::form.control-group.error control-name="email" />

                            <button type="submit"
                                class="absolute top-1.5 flex w-max items-center rounded-xl bg-white px-7 py-2.5 font-medium hover:bg-zinc-100 max-md:top-1 max-md:px-5 max-md:text-xs max-sm:mt-0 max-sm:rounded-lg max-sm:px-4 max-sm:py-2 ltr:right-2 rtl:left-2">
                                @lang('shop::app.components.layouts.footer.subscribe')
                            </button>
                        </div>
                    </x-shop::form>
                </div>
            </div>
        @endif

        {!! view_render_event('bagisto.shop.layout.footer.newsletter_subscription.after') !!}
    </div> --}}
    <div class="Footer-Menu-List">
        <div class="Footer-Menu"><label for="footer-menu-Om os" class="Footer-Menu-Title">Om os</label><input
                type="checkbox" id="footer-menu-Om os"><svg width="151px" height="8px" viewBox="0 0 151 8"
                xmlns="http://www.w3.org/2000/svg">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(0.000000, 1.000000)">
                        <g transform="translate(69.804167, 0.000000)" stroke="#0D1821">
                            <polyline points="0 0 5 6 10 0"></polyline>
                        </g>
                        <line x1="0" y1="1.25" x2="58.6100884" y2="1.5" stroke="#CDCDCD"></line>
                        <line x1="89.5043793" y1="1.25" x2="150.10125" y2="1.5" stroke="#CDCDCD"></line>
                    </g>
                </g>
            </svg>
            <ul aria-label="Om os" class="Footer-Menu-ItemList">
                <li class="Footer-Menu-Item"><a class=" Footer-Menu-Link" href="/da-dk/om-os/job">Job</a></li>
                <li class="Footer-Menu-Item"><a class=" Footer-Menu-Link" href="/da-dk/about-us">Koncept</a></li>
                <li class="Footer-Menu-Item"><a class=" Footer-Menu-Link" href="/da-dk/kontakt">Kontakt</a></li>
                <li class="Footer-Menu-Item"><a class=" Footer-Menu-Link" href="/da-dk/designers">Vores designere</a>
                </li>
                <li class="Footer-Menu-Item"><a class=" Footer-Menu-Link" href="/da-dk/presserum">Presserum</a></li>
            </ul>
        </div>
        <div class="Footer-Menu"><label for="footer-menu-Hjælp og kontakt" class="Footer-Menu-Title">Hjælp og
                kontakt</label><input type="checkbox" id="footer-menu-Hjælp og kontakt"><svg width="151px"
                height="8px" viewBox="0 0 151 8" xmlns="http://www.w3.org/2000/svg">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(0.000000, 1.000000)">
                        <g transform="translate(69.804167, 0.000000)" stroke="#0D1821">
                            <polyline points="0 0 5 6 10 0"></polyline>
                        </g>
                        <line x1="0" y1="1.25" x2="58.6100884" y2="1.5" stroke="#CDCDCD"></line>
                        <line x1="89.5043793" y1="1.25" x2="150.10125" y2="1.5" stroke="#CDCDCD"></line>
                    </g>
                </g>
            </svg>
            <ul aria-label="Hjælp og kontakt" class="Footer-Menu-ItemList">
                <li class="Footer-Menu-Item"><a class=" Footer-Menu-Link" href="/da-dk/cookie-politik">Cookie
                        politik</a></li>
                <li class="Footer-Menu-Item"><a class=" Footer-Menu-Link" href="/da-dk/kontakt">Kundeservice</a></li>
                <li class="Footer-Menu-Item"><a class=" Footer-Menu-Link" href="/da-dk/kvalitet-og-garanti">Kvalitet
                        og garanti</a></li>
                <li class="Footer-Menu-Item"><a class=" Footer-Menu-Link"
                        href="/da-dk/levering-og-afhentning">Levering og afhentning</a></li>
                <li class="Footer-Menu-Item"><a class=" Footer-Menu-Link" href="/da-dk/reklamation">Reklamation</a>
                </li>
                <li class="Footer-Menu-Item"><a class=" Footer-Menu-Link"
                        href="/da-dk/assembly-instructions">Samlevejledning</a></li>
                <li class="Footer-Menu-Item"><a class=" Footer-Menu-Link" href="/da-dk/santander">Santander
                        delbetaling</a></li>
                <li class="Footer-Menu-Item"><a class=" Footer-Menu-Link"
                        href="/da-dk/vedligeholdelse">Vedligeholdelse</a></li>
                <li class="Footer-Menu-Item"><a class=" Footer-Menu-Link" href="/da-dk/faq">Ofte stillede
                        spørgsmål</a></li>
                <li class="Footer-Menu-Item"><a class=" Footer-Menu-Link" href="/da-dk/vilkar">Vilkår</a></li>
            </ul>
        </div>
        <div class="Footer-Menu"><label for="footer-menu-Butikker" class="Footer-Menu-Title">Butikker</label><input
                type="checkbox" id="footer-menu-Butikker"><svg width="151px" height="8px" viewBox="0 0 151 8"
                xmlns="http://www.w3.org/2000/svg">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(0.000000, 1.000000)">
                        <g transform="translate(69.804167, 0.000000)" stroke="#0D1821">
                            <polyline points="0 0 5 6 10 0"></polyline>
                        </g>
                        <line x1="0" y1="1.25" x2="58.6100884" y2="1.5" stroke="#CDCDCD"></line>
                        <line x1="89.5043793" y1="1.25" x2="150.10125" y2="1.5" stroke="#CDCDCD"></line>
                    </g>
                </g>
            </svg>
            <ul aria-label="Butikker" class="Footer-Menu-ItemList">
                <li class="Footer-Menu-Item"><a class=" Footer-Menu-Link"
                        href="/da-dk/storelocator/kobenhavn">København</a></li>
                <li class="Footer-Menu-Item"><a class=" Footer-Menu-Link"
                        href="/da-dk/storelocator/lyngby">Lyngby</a></li>
                <li class="Footer-Menu-Item"><a class=" Footer-Menu-Link"
                        href="/da-dk/storelocator/amager">Amager</a></li>
                <li class="Footer-Menu-Item"><a class=" Footer-Menu-Link"
                        href="/da-dk/storelocator/abyhoj">Åbyhøj</a></li>
                <li class="Footer-Menu-Item"><a class=" Footer-Menu-Link"
                        href="/da-dk/storelocator/odense">Odense</a></li>
                <li class="Footer-Menu-Item"><a class=" Footer-Menu-Link"
                        href="/da-dk/storelocator/ringsted">Ringsted</a></li>
                <li class="Footer-Menu-Item"><a class=" Footer-Menu-Link" href="/da-dk/lager">Lager</a></li>
                <li class="Footer-Menu-Item"><a class=" Footer-Menu-Link" href="/da-dk/storelocator/aarhus-c">Aarhus
                        C</a></li>
            </ul>
        </div>
        <div class="Footer-Social">
            <p class="Footer-Social-Title">Følg os</p>
            <div class="SocialFooterItems"><a href="https://www.facebook.com/Sofacompanydk" target=""
                    rel="noreferrer" class="SocialFooterItems-Link  ">
                    <div class="SocialFooterItems-Image">
                        <div class="Image Image_ratio_custom Image_imageStatus_1 Image_hasSrc "><img
                                src="https://cdn.sofacompany.com/media/contentmanager/content/facebook-f-brands-1.svg"
                                alt="" loading="lazy" decoding="async" class="Image-Image"
                                style="width: 100%; height: 100%;"></div>
                    </div>
                </a><a href="https://www.instagram.com/sofacompanyofficial" target="" rel="noreferrer"
                    class="SocialFooterItems-Link  ">
                    <div class="SocialFooterItems-Image">
                        <div class="Image Image_ratio_custom Image_imageStatus_1 Image_hasSrc "><img
                                src="https://cdn.sofacompany.com/media/contentmanager/content/instagram-brands-1.svg"
                                alt="" loading="lazy" decoding="async" class="Image-Image"
                                style="width: 100%; height: 100%;"></div>
                    </div>
                </a><a href="https://www.youtube.com/user/sofakompagniet" target="" rel="noreferrer"
                    class="SocialFooterItems-Link  ">
                    <div class="SocialFooterItems-Image">
                        <div class="Image Image_ratio_custom Image_imageStatus_1 Image_hasSrc "><img
                                src="https://cdn.sofacompany.com/media/contentmanager/content/youtube-brands-1.svg"
                                alt="" loading="lazy" decoding="async" class="Image-Image"
                                style="width: 100%; height: 100%;"></div>
                    </div>
                </a><a href="https://www.pinterest.dk/sofacompany_official" target="" rel="noreferrer"
                    class="SocialFooterItems-Link  ">
                    <div class="SocialFooterItems-Image">
                        <div class="Image Image_ratio_custom Image_imageStatus_1 Image_hasSrc "><img
                                src="https://cdn.sofacompany.com/media/contentmanager/content/pinterest-p-brands-1.svg"
                                alt="" loading="lazy" decoding="async" class="Image-Image"
                                style="width: 100%; height: 100%;"></div>
                    </div>
                </a><a href="https://dk.trustpilot.com/review/dk.sofacompany.com" target="" rel="noreferrer"
                    class="SocialFooterItems-Link  ">
                    <div class="SocialFooterItems-Image">
                        <div class="Image Image_ratio_custom Image_imageStatus_1 Image_hasSrc "><img
                                src="https://cdn.sofacompany.com/media/contentmanager/content/trustpilot-112-1.svg"
                                alt="" loading="lazy" decoding="async" class="Image-Image"
                                style="width: 100%; height: 100%;"></div>
                    </div>
                </a></div>
            <div class="CmsBlock-Wrapper footer-social">
                <p><a class=" " href="/da-dk/blog">Blog</a></p>
                <p><a href="https://sofacompany.presscloud.com/digitalshowroom/#/gallery" target="_blank"
                        rel="noopener">Image Bank</a></p>
            </div>
            <p class="Footer-Payment-Title">Betaling</p>
            <div class="CmsBlock-Wrapper payment-icons">
                <div class="RenderWhenVisible">
                    <div class="PaymentIcons">
                        <div class="PaymentIcons-Icon">
                            <div class="Image Image_ratio_square Image_imageStatus_1 Image_hasSrc "><img
                                    src="https://cdn.sofacompany.com/media/contentmanager/content/Group_2.png?height=60"
                                    alt="Payment icons" loading="lazy" decoding="async" class="Image-Image"
                                    style="width: 100%; height: 100%;"></div>
                        </div>
                        <div class="PaymentIcons-Icon">
                            <div class="Image Image_ratio_square Image_imageStatus_1 Image_hasSrc "><img
                                    src="https://cdn.sofacompany.com/media/contentmanager/content/Group_3.png?height=60"
                                    alt="Payment icons" loading="lazy" decoding="async" class="Image-Image"
                                    style="width: 100%; height: 100%;"></div>
                        </div>
                        <div class="PaymentIcons-Icon">
                            <div class="Image Image_ratio_square Image_imageStatus_1 Image_hasSrc "><img
                                    src="https://cdn.sofacompany.com/media/contentmanager/content/Group_4.png?height=60"
                                    alt="Payment icons" loading="lazy" decoding="async" class="Image-Image"
                                    style="width: 100%; height: 100%;"></div>
                        </div>
                        <div class="PaymentIcons-Icon">
                            <div class="Image Image_ratio_square Image_imageStatus_1 Image_hasSrc "><img
                                    src="https://cdn.sofacompany.com/media/contentmanager/content/Group_5.png?height=60"
                                    alt="Payment icons" loading="lazy" decoding="async" class="Image-Image"
                                    style="width: 100%; height: 100%;"></div>
                        </div>
                        <div class="PaymentIcons-Icon">
                            <div class="Image Image_ratio_square Image_imageStatus_1 Image_hasSrc "><img
                                    src="https://cdn.sofacompany.com/media/contentmanager/content/Group_5_1.png?height=60"
                                    alt="Payment icons" loading="lazy" decoding="async" class="Image-Image"
                                    style="width: 100%; height: 100%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-between bg-[#F1EADF] px-[60px] py-3.5 max-md:justify-center max-sm:px-5">
        {!! view_render_event('bagisto.shop.layout.footer.footer_text.before') !!}

        <p class="text-sm text-zinc-600 max-md:text-center">
            @lang('shop::app.components.layouts.footer.footer-text', ['company_name' => config('app.name')])
        </p>

        {!! view_render_event('bagisto.shop.layout.footer.footer_text.after') !!}
    </div>

</footer>

{!! view_render_event('bagisto.shop.layout.footer.after') !!}
