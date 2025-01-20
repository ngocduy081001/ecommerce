<v-categories-carousel src="{{ $src }}" title="{{ $title }}" subtitle="{{ $subtitle }}"
    navigation-link="{{ $navigationLink ?? '' }}">
    <x-shop::shimmer.categories.carousel :count="8" :navigation-link="$navigationLink ?? false" />
</v-categories-carousel>

@pushOnce('scripts')
    <script
        type="text/x-template"
        id="v-categories-carousel-template"
    >
        <div 
            class="section-attribute-size container-fluid"
            v-if="! isLoading && categories?.length"
        >
            <div class="text-center">
                <div class="category-carousel_title">
                    <h2 class="text-center">@{{ title }}</h2>
                </div>
                <div class="category-carousel_subtitle">
                    <span class="text-center">@{{ subtitle }}</span>
                </div>
            </div>
            <div class="relative">
                <div
                    ref="swiperContainer"
                    class="scrollbar-hide flex gap-10 overflow-auto scroll-smooth max-lg:gap-4 category-carousel"
                >
                    <div
                        class="zoom-out grid min-w-[120px] category-carousel-item  grid-cols-1 justify-items-center gap-4 font-medium max-md:min-w-20 max-md:max-w-20 max-md:gap-2.5 max-md:first:ml-4 max-sm:min-w-[60px] max-sm:max-w-[60px] max-sm:gap-1.5"
                        v-for="category in categories"
                    >
                        <a
                            :href="category.slug"
                            class=""
                            :aria-label="category.name"
                        >
                            <x-shop::media.images.lazy
                                ::src="category.logo?.original_image_url || '{{ bagisto_asset('images/small-product-placeholder.webp') }}'"
                                width="100%"
                                height="100%"
                                class=""
                                ::alt="category.name"
                            />
                        </a>

                        <a
                            :href="category.slug"
                            class="w-full flex items-center justify-start"
                        >
                            <p
                                class="text-left title-category"
                                v-text="category.name"
                            >
                            
                            </p>
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </a>
                    </div>
                </div>

                <span
                    class="icon-arrow-left-stylish absolute -left-10 top-45 flex h-[50px] w-[50px] cursor-pointer items-center justify-center rounded-full border border-black bg-white text-2xl transition hover:bg-black hover:text-white max-lg:-left-7 max-md:hidden"
                    role="button"
                    aria-label="@lang('shop::components.carousel.previous')"
                    tabindex="0"
                    @click="swipeLeft"
                >
                </span>

                <span
                    class="icon-arrow-right-stylish absolute -right-6 top-45 flex h-[50px] w-[50px] cursor-pointer items-center justify-center rounded-full border border-black bg-white text-2xl transition hover:bg-black hover:text-white max-lg:-right-7 max-md:hidden"
                    role="button"
                    aria-label="@lang('shop::components.carousel.next')"
                    tabindex="0"
                    @click="swipeRight"
                >
                </span>
            </div>
        </div>

        <!-- Category Carousel Shimmer -->
        <template v-if="isLoading">
            <x-shop::shimmer.categories.carousel
                :count="8"
                :navigation-link="$navigationLink ?? false"
            />
        </template>
    </script>

    <script type="module">
        app.component('v-categories-carousel', {
            template: '#v-categories-carousel-template',

            props: [
                'src',
                'title',
                'subtitle',
                'navigationLink',
            ],

            data() {
                return {
                    isLoading: true,

                    categories: [],

                    offset: 323,
                };
            },

            mounted() {
                this.getCategories();
            },

            methods: {
                getCategories() {
                    this.$axios.get(this.src)
                        .then(response => {
                            this.isLoading = false;

                            this.categories = response.data.data;
                        }).catch(error => {
                            console.log(error);
                        });
                },

                swipeLeft() {
                    const container = this.$refs.swiperContainer;

                    container.scrollLeft -= this.offset * 3 + 120;
                },

                swipeRight() {
                    const container = this.$refs.swiperContainer;

                    container.scrollLeft += this.offset * 3 + 120;
                },
            },
        });
    </script>
@endPushOnce
