<v-categories-grid title="{{ $title }}" src="{{ $src }}" style="{{ $style }}">

</v-categories-grid>

@pushOnce('scripts')
    <script type="text/x-template" id="v-categories-grid-template">
        <div class="section-attribute-size">
            <div class="container-fluid">
                <div class="attribute-size_title">
                     <h2>@{{ title }}</h2>
        
                </div>
                <div class="attribute-size_content">
                    <a :href="category.slug"	 class="item {{ $style }}" v-for="category in categories" >
                        <div class="item_grid_img">
                            <x-shop::media.images.lazy
                            ::src="category.logo?.original_image_url || '{{ bagisto_asset('images/small-product-placeholder.webp') }}'"
                            width="100%"
                            height="100%"
                            ::alt="category.name"
                        />
                        </div>
                        <div class="item_grid_title"> <span>@{{ category.name }} <i class="fa-solid fa-arrow-right-long"></i></span>
        
                        </div>
                    </a>
                   
                </div>
            </div>
        </div>
    </script>
    <script type="module">
        app.component('v-categories-grid', {
            template: '#v-categories-grid-template',
            props: [
                'title',
                'src',
                'style',
                'carousel',
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
                    console.log(this.style);
                    this.$axios.get(this.src)
                        .then(response => {
                            this.isLoading = false;
                            this.categories = response.data.data;
                        }).catch(error => {
                            console.log(error);
                        });
                },
            },

            computed: {
                isCarousel() {
                    return this.carousel === 'true';
                }
            }
        });
    </script>
@endPushOnce
