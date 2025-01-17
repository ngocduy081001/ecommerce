<v-product-carousel :errors="errors">
    <x-admin::shimmer.settings.themes.category-grid />
</v-product-carousel>

<!-- Product Carousel Vue Component -->
@pushOnce('scripts')
    <script
        type="text/x-template"
        id="v-product-carousel-template"
    >
        <div class="flex flex-1 flex-col gap-2 max-xl:flex-auto">
            <div class="box-shadow rounded bg-white p-4 dark:bg-gray-900">
                <div class="mb-2.5 flex items-center justify-between gap-x-2.5">
                    <div class="flex flex-col gap-1">
                        <p class="text-base font-semibold text-gray-800 dark:text-white">
                            @lang('admin::app.settings.themes.edit.category-grid')
                        </p>

                        <p class="text-xs font-medium text-gray-500 dark:text-gray-300">
                            @lang('admin::app.settings.themes.edit.category-grid-description')
                        </p>
                    </div>
                </div>

                <!-- Title -->
                <x-admin::form.control-group class="mb-2.5 pt-4">
                    <x-admin::form.control-group.label class="required">
                        @lang('admin::app.settings.themes.edit.filter-title')
                    </x-admin::form.control-group.label>

                    <v-field
                        type="text"
                        name="{{ $currentLocale->code }}[options][title]"
                        value="{{ $theme->translate($currentLocale->code)->options['title'] ?? '' }}"
                        class="flex min-h-[39px] w-full rounded-md border px-3 py-2 text-sm text-gray-600 transition-all hover:border-gray-400 focus:border-gray-400 dark:border-gray-800 dark:bg-gray-900 dark:text-gray-300 dark:hover:border-gray-400 dark:focus:border-gray-400"
                        :class="[errors['{{ $currentLocale->code }}[options][title]'] ? 'border border-red-600 hover:border-red-600' : '']"
                        rules="required"
                        label="@lang('admin::app.settings.themes.edit.filter-title')"
                        placeholder="@lang('admin::app.settings.themes.edit.filter-title')"
                    >
                    </v-field>

                    <x-admin::form.control-group.error control-name="{{ $currentLocale->code }}[options][title]" />
                </x-admin::form.control-group>

              <!-- style -->
              <x-admin::form.control-group>
                <x-admin::form.control-group.label>
                    @lang('admin::app.settings.themes.edit.style')
                </x-admin::form.control-group.label>
                <v-field
                type="select"
                name="{{ $currentLocale->code }}[options][style]"
                v-slot="{ field }"
                rules="required"
                value="{{ $theme->translate($currentLocale->code)->options['style'] ?? '' }}"
                label="@lang('admin::app.settings.themes.edit.style')">
                        <select
                        name="options[filters][style]"
                        v-bind="field"
                        class="custom-select flex min-h-[39px] w-full rounded-md border border-gray-300 bg-white px-3 py-1.5 text-sm font-normal text-gray-600 transition-all hover:border-gray-400 dark:border-gray-800 dark:bg-gray-900 dark:text-gray-300 dark:hover:border-gray-400"
                        :class="[errors['options[filters][style]'] ? 'border border-red-600 hover:border-red-600' : '']" >
                        <option value="" selected disabled>@lang('admin::app.settings.themes.edit.select')</option>
                        <option value="zoom-in">Zoom In</option>
                        <option value="zoom-out">Zoom Out</option>
                    </select>
                 </v-field>
              </x-admin::form.control-group>

                <!-- Limit -->
                <x-admin::form.control-group>
                    <x-admin::form.control-group.label class="required">
                        @lang('admin::app.settings.themes.edit.limit')
                    </x-admin::form.control-group.label>

                    <v-field
                        type="select"
                        name="{{ $currentLocale->code }}[options][filters][limit]"
                        v-slot="{ field }"
                        rules="required"
                        value="{{ $theme->translate($currentLocale->code)->options['filters']['limit'] ?? '' }}"
                        label="@lang('admin::app.settings.themes.edit.limit')"
                    >
                        <select
                            name="options[filters][limit]"
                            v-bind="field"
                            class="custom-select flex min-h-[39px] w-full rounded-md border border-gray-300 bg-white px-3 py-1.5 text-sm font-normal text-gray-600 transition-all hover:border-gray-400 dark:border-gray-800 dark:bg-gray-900 dark:text-gray-300 dark:hover:border-gray-400"
                            :class="[errors['options[filters][limit]'] ? 'border border-red-600 hover:border-red-600' : '']"
                        >
                            <option value="" selected disabled>@lang('admin::app.settings.themes.edit.select')</option>

                               <option value="4">4</option>
                               <option value="3">3</option>
                        </select>
                    </v-field>

                    <x-admin::form.control-group.error control-name="{{ $currentLocale->code }}[options][filters][limit]" />
                </x-admin::form.control-group>

                <span class="mb-4 mt-4 block w-full border-b dark:border-gray-800"></span>
            </div>
        </div>
    </script>

    <script type="module">
        app.component('v-product-carousel', {
            template: '#v-product-carousel-template',

            props: ['errors'],

            data() {
                return {
                    options: @json($theme->translate($currentLocale->code)['options'] ?? null),

                    filters: {
                        available: [{
                                id: 'new',
                                code: 'new',
                                type: 'select',
                                name: '@lang('admin::app.settings.themes.edit.new')',
                                options: [{
                                        'id': 0,
                                        'admin_name': '@lang('admin::app.settings.themes.edit.no')',
                                    },
                                    {
                                        'id': 1,
                                        'admin_name': '@lang('admin::app.settings.themes.edit.yes')',
                                    },
                                ],
                            },
                            {
                                id: 'featured',
                                code: 'featured',
                                type: 'select',
                                name: '@lang('admin::app.settings.themes.edit.featured')',
                                options: [{
                                        'id': 0,
                                        'admin_name': '@lang('admin::app.settings.themes.edit.no')',
                                    },
                                    {
                                        'id': 1,
                                        'admin_name': '@lang('admin::app.settings.themes.edit.yes')',
                                    },
                                ],
                            },
                            {
                                id: 'category_id',
                                code: 'category_id',
                                type: 'text',
                                name: '@lang('admin::app.settings.themes.edit.category-id')',
                            },
                            ...@json(app(Webkul\Attribute\Repositories\AttributeRepository::class)->getFilterableAttributes()),
                        ],

                        applied: [],
                    },
                };
            },

            created() {
                if (this.options === null) {
                    this.options = {
                        filters: {}
                    };
                }

                if (!this.options.filters) {
                    this.options.filters = {};
                }

                this.options.filters = Object.keys(this.options.filters)
                    .filter(key => !['sort', 'limit', 'title'].includes(key))
                    .map(key => ({
                        key: key,
                        value: this.options.filters[key],
                    }));

                [this.filters.applied] = this.filters.available;
            },

            methods: {
                addFilter(params) {
                    this.options.filters.push(params);

                    this.$refs.productFilterModal.toggle();
                },

                remove(filter) {
                    this.$emitter.emit('open-confirm-modal', {
                        agree: () => {
                            let index = this.options.filters.indexOf(filter);

                            this.options.filters.splice(index, 1);
                        }
                    });
                },

                handleFilter(event) {
                    this.filters.applied = this.filters.available.find(filter => filter.code == event.target.value);
                },
            },
        });
    </script>
@endPushOnce
