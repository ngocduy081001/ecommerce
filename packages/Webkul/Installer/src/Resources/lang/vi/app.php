<?php

return [
    'seeders' => [
        'attribute' => [
            'attribute-families' => [
                'default' => 'Mặc định',
            ],

            'attribute-groups' => [
                'description'       => 'Mô tả',
                'general'           => 'Chung',
                'inventories'       => 'Hàng tồn kho',
                'meta-description'  => 'Mô tả Meta',
                'price'             => 'Giá',
                'settings'          => 'Cài đặt',
                'shipping'          => 'Vận chuyển',
            ],

            'attributes' => [
                'brand'                => 'Thương hiệu',
                'color'                => 'Màu sắc',
                'cost'                 => 'Chi phí',
                'description'          => 'Mô tả',
                'featured'             => 'Nổi bật',
                'guest-checkout'       => 'Thanh toán khách',
                'height'               => 'Chiều cao',
                'length'               => 'Chiều dài',
                'manage-stock'         => 'Quản lý kho',
                'meta-description'     => 'Mô tả Meta',
                'meta-keywords'        => 'Từ khóa Meta',
                'meta-title'           => 'Tiêu đề Meta',
                'name'                 => 'Tên',
                'new'                  => 'Mới',
                'price'                => 'Giá',
                'product-number'       => 'Số sản phẩm',
                'short-description'    => 'Mô tả ngắn',
                'size'                 => 'Kích thước',
                'sku'                  => 'SKU',
                'special-price'        => 'Giá đặc biệt',
                'special-price-from'   => 'Giá đặc biệt từ',
                'special-price-to'     => 'Giá đặc biệt đến',
                'status'               => 'Trạng thái',
                'tax-category'         => 'Danh mục thuế',
                'url-key'              => 'URL Key',
                'visible-individually' => 'Hiển thị riêng lẻ',
                'weight'               => 'Trọng lượng',
                'width'                => 'Chiều rộng',
            ],

            'attribute-options' => [
                'black'  => 'Đen',
                'green'  => 'Xanh lá',
                'l'      => 'L',
                'm'      => 'M',
                'red'    => 'Đỏ',
                's'      => 'S',
                'white'  => 'Trắng',
                'xl'     => 'XL',
                'yellow' => 'Vàng',
            ],
        ],

        'category' => [
            'categories' => [
                'description' => 'Mô tả danh mục gốc',
                'name'        => 'Gốc',
            ],
        ],

        'cms' => [
            'pages' => [
                'about-us' => [
                    'content' => 'Nội dung trang Giới thiệu',
                    'title'   => 'Giới thiệu',
                ],

                'contact-us' => [
                    'content' => 'Nội dung trang Liên hệ',
                    'title'   => 'Liên hệ',
                ],

                'customer-service' => [
                    'content' => 'Nội dung trang Dịch vụ khách hàng',
                    'title'   => 'Dịch vụ khách hàng',
                ],

                'payment-policy' => [
                    'content' => 'Nội dung trang Chính sách thanh toán',
                    'title'   => 'Chính sách thanh toán',
                ],

                'privacy-policy' => [
                    'content' => 'Nội dung trang Chính sách bảo mật',
                    'title'   => 'Chính sách bảo mật',
                ],

                'refund-policy' => [
                    'content' => 'Nội dung trang Chính sách hoàn tiền',
                    'title'   => 'Chính sách hoàn tiền',
                ],

                'return-policy' => [
                    'content' => 'Nội dung trang Chính sách đổi trả',
                    'title'   => 'Chính sách đổi trả',
                ],

                'shipping-policy' => [
                    'content' => 'Nội dung trang Chính sách vận chuyển',
                    'title'   => 'Chính sách vận chuyển',
                ],

                'terms-conditions' => [
                    'content' => 'Nội dung trang Điều khoản & Điều kiện',
                    'title'   => 'Điều khoản & Điều kiện',
                ],

                'terms-of-use' => [
                    'content' => 'Nội dung trang Điều khoản sử dụng',
                    'title'   => 'Điều khoản sử dụng',
                ],

                'whats-new' => [
                    'content' => 'Nội dung trang Có gì mới',
                    'title'   => 'Có gì mới',
                ],
            ],
        ],

        'core' => [
            'channels' => [
                'name'             => 'Mặc định',
                'meta-title'       => 'Cửa hàng demo',
                'meta-keywords'    => 'Từ khóa meta cửa hàng demo',
                'meta-description' => 'Mô tả meta cửa hàng demo',
            ],

            'currencies' => [
                'AED' => 'Dirham Các Tiểu Vương quốc Ả Rập Thống nhất',
                'ARS' => 'Peso Argentina',
                'AUD' => 'Đô la Úc',
                'BDT' => 'Taka Bangladesh',
                'BRL' => 'Real Brazil',
                'CAD' => 'Đô la Canada',
                'CHF' => 'Franc Thụy Sĩ',
                'CLP' => 'Peso Chile',
                'CNY' => 'Nhân dân tệ Trung Quốc',
                'COP' => 'Peso Colombia',
                'CZK' => 'Koruna Séc',
                'DKK' => 'Krone Đan Mạch',
                'DZD' => 'Dinar Algeria',
                'EGP' => 'Bảng Ai Cập',
                'EUR' => 'Euro',
                'FJD' => 'Đô la Fiji',
                'GBP' => 'Bảng Anh',
                'HKD' => 'Đô la Hồng Kông',
                'HUF' => 'Forint Hungary',
                'IDR' => 'Rupiah Indonesia',
                'ILS' => 'Shekel Israel mới',
                'INR' => 'Rupee Ấn Độ',
                'JOD' => 'Dinar Jordan',
                'JPY' => 'Yên Nhật',
                'KRW' => 'Won Hàn Quốc',
                'KWD' => 'Dinar Kuwait',
                'KZT' => 'Tenge Kazakhstan',
                'LBP' => 'Bảng Lebanon',
                'LKR' => 'Rupee Sri Lanka',
                'LYD' => 'Dinar Libya',
                'MAD' => 'Dirham Ma-rốc',
                'MUR' => 'Rupee Mauritius',
                'MXN' => 'Peso Mexico',
                'MYR' => 'Ringgit Malaysia',
                'NGN' => 'Naira Nigeria',
                'NOK' => 'Krone Na Uy',
                'NPR' => 'Rupee Nepal',
                'NZD' => 'Đô la New Zealand',
                'OMR' => 'Rial Oman',
                'PAB' => 'Balboa Panama',
                'PEN' => 'Nuevo Sol Peru',
                'PHP' => 'Peso Philippines',
                'PKR' => 'Rupee Pakistan',
                'PLN' => 'Zloty Ba Lan',
                'PYG' => 'Guarani Paraguay',
                'QAR' => 'Rial Qatar',
                'RON' => 'Leu Romania',
                'RUB' => 'Ruble Nga',
                'SAR' => 'Riyal Ả Rập Saudi',
                'SEK' => 'Krona Thụy Điển',
                'SGD' => 'Đô la Singapore',
                'THB' => 'Baht Thái Lan',
                'TND' => 'Dinar Tunisia',
                'TRY' => 'Lira Thổ Nhĩ Kỳ',
                'TWD' => 'Đô la Đài Loan mới',
                'UAH' => 'Hryvnia Ukraina',
                'USD' => 'Đô la Mỹ',
                'UZS' => 'Som Uzbekistan',
                'VEF' => 'Bolívar Venezuela',
                'VND' => 'Đồng Việt Nam',
                'XAF' => 'Franc CFA BEAC',
                'XOF' => 'Franc CFA BCEAO',
                'ZAR' => 'Rand Nam Phi',
                'ZMW' => 'Kwacha Zambia',
            ],

            'locales'    => [
                'ar'    => 'Tiếng Ả Rập',
                'bn'    => 'Tiếng Bengali',
                'de'    => 'Tiếng Đức',
                'en'    => 'Tiếng Anh',
                'es'    => 'Tiếng Tây Ban Nha',
                'fa'    => 'Tiếng Ba Tư',
                'fr'    => 'Tiếng Pháp',
                'he'    => 'Tiếng Do Thái',
                'hi_IN' => 'Tiếng Hindi',
                'it'    => 'Tiếng Ý',
                'ja'    => 'Tiếng Nhật',
                'nl'    => 'Tiếng Hà Lan',
                'pl'    => 'Tiếng Ba Lan',
                'pt_BR' => 'Tiếng Bồ Đào Nha Brazil',
                'ru'    => 'Tiếng Nga',
                'sin'   => 'Tiếng Sinhala',
                'tr'    => 'Tiếng Thổ Nhĩ Kỳ',
                'uk'    => 'Tiếng Ukraina',
                'zh_CN' => 'Tiếng Trung Quốc',
            ],
        ],

        'customer' => [
            'customer-groups' => [
                'general'   => 'Chung',
                'guest'     => 'Khách',
                'wholesale' => 'Bán buôn',
            ],
        ],

        'inventory' => [
            'inventory-sources' => [
                'name' => 'Mặc định',
            ],
        ],

        'shop' => [
            'theme-customizations' => [
                'all-products' => [
                    'name' => 'Tất cả sản phẩm',

                    'options' => [
                        'title' => 'Tất cả sản phẩm',
                    ],
                ],

                'bold-collections' => [
                    'content' => [
                        'btn-title'   => 'Xem bộ sưu tập',
                        'description' => 'Giới thiệu Bộ sưu tập Bold mới của chúng tôi! Nâng tầm phong cách của bạn với những thiết kế táo bạo và tuyên bố sống động. Khám phá các mẫu nổi bật và màu sắc đậm nét tái định nghĩa tủ quần áo của bạn. Hãy sẵn sàng để đón nhận điều phi thường!',
                        'title'       => 'Hãy sẵn sàng cho Bộ sưu tập Bold mới của chúng tôi!',
                    ],

                    'name' => 'Bộ sưu tập Bold',
                ],

                'categories-collections' => [
                    'name' => 'Bộ sưu tập danh mục',
                ],

                'featured-collections' => [
                    'name' => 'Bộ sưu tập nổi bật',

                    'options' => [
                        'title' => 'Sản phẩm nổi bật',
                    ],
                ],

                'footer-links' => [
                    'name' => 'Liên kết chân trang',

                    'options' => [
                        'about-us'         => 'Về chúng tôi',
                        'contact-us'       => 'Liên hệ',
                        'customer-service' => 'Dịch vụ khách hàng',
                        'payment-policy'   => 'Chính sách thanh toán',
                        'privacy-policy'   => 'Chính sách bảo mật',
                        'refund-policy'    => 'Chính sách hoàn tiền',
                        'return-policy'    => 'Chính sách đổi trả',
                        'shipping-policy'  => 'Chính sách vận chuyển',
                        'terms-conditions' => 'Điều khoản & Điều kiện',
                        'terms-of-use'     => 'Điều khoản sử dụng',
                        'whats-new'        => 'Có gì mới',
                    ],
                ],

                'game-container' => [
                    'content' => [
                        'sub-title-1' => 'Bộ sưu tập của chúng tôi',
                        'sub-title-2' => 'Bộ sưu tập của chúng tôi',
                        'title'       => 'Trò chơi với những bổ sung mới của chúng tôi!',
                    ],

                    'name' => 'Game Container',
                ],

                'image-carousel' => [
                    'name' => 'Băng chuyền hình ảnh',

                    'sliders' => [
                        'title' => 'Hãy sẵn sàng cho Bộ sưu tập mới',
                    ],
                ],

                'new-products' => [
                    'name' => 'Sản phẩm mới',

                    'options' => [
                        'title' => 'Sản phẩm mới',
                    ],
                ],

                'offer-information' => [
                    'content' => [
                        'title' => 'Giảm giá lên đến 40% cho đơn hàng đầu tiên của bạn MUA NGAY',
                    ],

                    'name' => 'Thông tin ưu đãi',
                ],

                'services-content' => [
                    'description' => [
                        'emi-available-info'   => 'EMI không lãi suất có sẵn trên tất cả các thẻ tín dụng chính',
                        'free-shipping-info'   => 'Miễn phí vận chuyển cho tất cả các đơn hàng',
                        'product-replace-info' => 'Dễ dàng thay thế sản phẩm!',
                        'time-support-info'    => 'Hỗ trợ 24/7 qua chat và email',
                    ],

                    'name' => 'Nội dung dịch vụ',

                    'title' => [
                        'emi-available'   => 'EMI có sẵn',
                        'free-shipping'   => 'Miễn phí vận chuyển',
                        'product-replace' => 'Thay thế sản phẩm',
                        'time-support'    => 'Hỗ trợ 24/7',
                    ],
                ],

                'top-collections' => [
                    'content' => [
                        'sub-title-1' => 'Bộ sưu tập của chúng tôi',
                        'sub-title-2' => 'Bộ sưu tập của chúng tôi',
                        'sub-title-3' => 'Bộ sưu tập của chúng tôi',
                        'sub-title-4' => 'Bộ sưu tập của chúng tôi',
                        'sub-title-5' => 'Bộ sưu tập của chúng tôi',
                        'sub-title-6' => 'Bộ sưu tập của chúng tôi',
                        'title'       => 'Trò chơi với những bổ sung mới của chúng tôi!',
                    ],

                    'name' => 'Bộ sưu tập hàng đầu',
                ],
            ],
        ],

        'user' => [
            'roles' => [
                'description' => 'Người dùng có vai trò này sẽ có tất cả quyền truy cập',
                'name'        => 'Quản trị viên',
            ],

            'users' => [
                'name' => 'Ví dụ',
            ],
        ],

        'sample-categories' => [
            'category-translation' => [
                '2' => [
                    'description'      => 'Mô tả danh mục Nam',
                    'meta-description' => 'Mô tả Meta danh mục Nam',
                    'meta-keywords'    => 'Từ khóa Meta danh mục Nam',
                    'meta-title'       => 'Tiêu đề Meta danh mục Nam',
                    'name'             => 'Nam',
                    'slug'             => 'nam',
                ],

                '3' => [
                    'description'      => 'Mô tả danh mục Đồ mùa đông',
                    'meta-description' => 'Mô tả Meta danh mục Đồ mùa đông',
                    'meta-keywords'    => 'Từ khóa Meta danh mục Đồ mùa đông',
                    'meta-title'       => 'Tiêu đề Meta danh mục Đồ mùa đông',
                    'name'             => 'Đồ mùa đông',
                    'slug'             => 'do-mua-dong',
                ],
            ],
        ],

        'sample-products' => [
            'product-flat' => [
                '1' => [
                    'description'       => 'Mũ len Arctic Cozy Knit là giải pháp của bạn để giữ ấm, thoải mái và phong cách trong những tháng lạnh hơn. Được làm từ hỗn hợp len acrylic mềm mại và bền bỉ, mũ này được thiết kế để mang lại sự ấm áp và vừa vặn. Thiết kế cổ điển làm cho nó phù hợp cho cả nam và nữ, cung cấp một phụ kiện đa năng phù hợp với nhiều phong cách khác nhau. Dù bạn đang đi dạo trong thành phố hay tận hưởng thiên nhiên, mũ này sẽ thêm phần ấm áp và thoải mái cho trang phục của bạn. Chất liệu mềm mại và thoáng khí đảm bảo bạn luôn ấm áp mà không làm mất đi phong cách. Mũ len Arctic Cozy Knit không chỉ là một phụ kiện; nó là một tuyên bố về thời trang mùa đông. Sự đơn giản của nó làm cho nó dễ dàng kết hợp với nhiều trang phục khác nhau, trở thành một phần không thể thiếu trong tủ quần áo mùa đông của bạn. Lý tưởng để tặng hoặc tự thưởng cho bản thân, mũ này là một bổ sung đáng suy nghĩ cho bất kỳ trang phục mùa đông nào. Nó là một phụ kiện đa năng vượt qua chức năng, thêm phần ấm áp và phong cách cho trang phục của bạn. Hãy đón nhận tinh thần mùa đông với mũ len Arctic Cozy Knit. Dù bạn đang tận hưởng một ngày dạo chơi hay đối mặt với thời tiết, hãy để mũ này là người bạn đồng hành của bạn để mang lại sự thoải mái và phong cách. Nâng tầm tủ quần áo mùa đông của bạn với phụ kiện cổ điển này, kết hợp sự ấm áp với phong cách thời trang vượt thời gian.',
                    'meta-description'  => 'mô tả meta',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Tiêu đề Meta',
                    'name'              => 'Mũ len Unisex Arctic Cozy Knit',
                    'short-description' => 'Hãy đón nhận những ngày lạnh giá với phong cách với mũ len Arctic Cozy Knit của chúng tôi. Được làm từ hỗn hợp len acrylic mềm mại và bền bỉ, mũ cổ điển này mang lại sự ấm áp và đa năng. Phù hợp cho cả nam và nữ, nó là phụ kiện lý tưởng cho trang phục thường ngày hoặc ngoài trời. Nâng tầm tủ quần áo mùa đông của bạn hoặc tặng ai đó đặc biệt với chiếc mũ cần thiết này.',
                ],

                '2' => [
                    'description'       => 'Khăn quàng mùa đông Arctic Bliss không chỉ là một phụ kiện mùa lạnh; nó là một tuyên bố về sự ấm áp, thoải mái và phong cách cho mùa đông. Được làm cẩn thận từ hỗn hợp len acrylic và len, khăn này được thiết kế để giữ ấm và thoải mái ngay cả trong những nhiệt độ lạnh nhất. Kết cấu mềm mại và sang trọng không chỉ cung cấp sự cách nhiệt chống lại cái lạnh mà còn thêm phần sang trọng cho tủ quần áo mùa đông của bạn. Thiết kế của khăn quàng mùa đông Arctic Bliss vừa phong cách vừa đa năng, làm cho nó trở thành một bổ sung hoàn hảo cho nhiều trang phục mùa đông. Dù bạn đang ăn mặc cho một dịp đặc biệt hay thêm một lớp phong cách cho trang phục hàng ngày của mình, khăn này sẽ phù hợp với phong cách của bạn một cách dễ dàng. Chiều dài thêm của khăn cung cấp các tùy chọn tạo kiểu tùy chỉnh. Quấn quanh để thêm ấm áp, thả lỏng để có vẻ ngoài thoải mái, hoặc thử nghiệm với các nút khác nhau để thể hiện phong cách độc đáo của bạn. Sự đa năng này làm cho nó trở thành một phụ kiện không thể thiếu cho mùa đông. Tìm kiếm món quà hoàn hảo? Khăn quàng mùa đông Arctic Bliss là một lựa chọn lý tưởng. Dù bạn đang làm bất ngờ người thân hay tự thưởng cho bản thân, khăn này là một món quà thời trang và thực tế sẽ được trân trọng suốt mùa đông. Hãy đón nhận mùa đông với khăn quàng mùa đông Arctic Bliss, nơi sự ấm áp gặp gỡ phong cách trong sự hài hòa hoàn hảo. Nâng tầm tủ quần áo mùa đông của bạn với phụ kiện cần thiết này không chỉ giữ ấm mà còn thêm phần tinh tế cho trang phục mùa lạnh của bạn.',
                    'meta-description'  => 'mô tả meta',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Tiêu đề Meta',
                    'name'              => 'Khăn quàng mùa đông phong cách Arctic Bliss',
                    'meta-title'        => 'Meta Title',
                    'name'              => 'Arctic Bliss Stylish Winter Scarf',
                    'short-description' => 'Experience the embrace of warmth and style with our Arctic Bliss Winter Scarf. Crafted from a luxurious blend of acrylic and wool, this cozy scarf is designed to keep you snug during the coldest days. Its stylish and versatile design, combined with an extra-long length, offers customizable styling options. Elevate your winter wardrobe or delight someone special with this essential winter accessory.',
                ],

                '3' => [
                    'description'       => 'Introducing the Arctic Touchscreen Winter Gloves – where warmth, style, and connectivity meet to enhance your winter experience. Crafted from high-quality acrylic, these gloves are designed to provide exceptional warmth and durability. The touchscreen-compatible fingertips allow you to stay connected without exposing your hands to the cold. Answer calls, send messages, and navigate your devices effortlessly, all while keeping your hands snug. The insulated lining adds an extra layer of coziness, making these gloves your go-to choice for facing the winter chill. Whether you\'re commuting, running errands, or enjoying outdoor activities, these gloves provide the warmth and protection you need. Elastic cuffs ensure a secure fit, preventing cold drafts and keeping the gloves in place during your daily activities. The stylish design adds a touch of flair to your winter ensemble, making these gloves as fashionable as they are functional. Ideal for gifting or as a treat for yourself, the Arctic Touchscreen Winter Gloves are a must-have accessory for the modern individual. Say goodbye to the inconvenience of removing your gloves to use your devices and embrace the seamless blend of warmth, style, and connectivity. Stay connected, stay warm, and stay stylish with the Arctic Touchscreen Winter Gloves – your reliable companion for conquering the winter season with confidence.',
                    'meta-description'  => 'meta description',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Title',
                    'name'              => 'Arctic Touchscreen Winter Gloves',
                    'short-description' => 'Stay connected and warm with our Arctic Touchscreen Winter Gloves. These gloves are not only crafted from high-quality acrylic for warmth and durability but also feature a touchscreen-compatible design. With an insulated lining, elastic cuffs for a secure fit, and a stylish look, these gloves are perfect for daily wear in chilly conditions.',
                ],

                '4' => [
                    'description'       => 'Introducing the Arctic Warmth Wool Blend Socks – your essential companion for cozy and comfortable feet during the colder seasons. Crafted from a premium blend of Merino wool, acrylic, nylon, and spandex, these socks are designed to provide unparalleled warmth and comfort. The wool blend ensures that your feet stay toasty even in the coldest temperatures, making these socks the perfect choice for winter adventures or simply staying snug at home. The soft and cozy texture of the socks offers a luxurious feel against your skin. Say goodbye to chilly feet as you embrace the plush warmth provided by these wool blend socks. Designed for durability, the socks feature a reinforced heel and toe, adding extra strength to high-wear areas. This ensures that your socks withstand the test of time, providing long-lasting comfort and coziness. The breathable nature of the material prevents overheating, allowing your feet to stay comfortable and dry throughout the day. Whether you\'re heading outdoors for a winter hike or relaxing indoors, these socks offer the perfect balance of warmth and breathability. Versatile and stylish, these wool blend socks are suitable for various occasions. Pair them with your favorite boots for a fashionable winter look or wear them around the house for ultimate comfort. Elevate your winter wardrobe and prioritize comfort with the Arctic Warmth Wool Blend Socks. Treat your feet to the luxury they deserve and step into a world of coziness that lasts all season long.',
                    'meta-description'  => 'meta description',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Title',
                    'name'              => 'Arctic Warmth Wool Blend Socks',
                    'short-description' => 'Experience the unmatched warmth and comfort of our Arctic Warmth Wool Blend Socks. Crafted from a blend of Merino wool, acrylic, nylon, and spandex, these socks offer ultimate coziness for cold weather. With a reinforced heel and toe for durability, these versatile and stylish socks are perfect for various occasions.',
                ],

                '5' => [
                    'description'       => 'Introducing the Arctic Frost Winter Accessories Bundle, your go-to solution for staying warm, stylish, and connected during the chilly winter days. This thoughtfully curated set brings together Four essential winter accessories to create a harmonious ensemble. The luxurious scarf, woven from a blend of acrylic and wool, not only adds a layer of warmth but also brings a touch of elegance to your winter wardrobe. The soft knit beanie, crafted with care, promises to keep you cozy while adding a fashionable flair to your look. But it doesn\'t end there – our bundle also includes touchscreen-compatible gloves. Stay connected without sacrificing warmth as you navigate your devices effortlessly. Whether you\'re answering calls, sending messages, or capturing winter moments on your smartphone, these gloves ensure convenience without compromising style. The soft and cozy texture of the socks offers a luxurious feel against your skin. Say goodbye to chilly feet as you embrace the plush warmth provided by these wool blend socks. The Arctic Frost Winter Accessories Bundle is not just about functionality; it\'s a statement of winter fashion. Each piece is designed not only to protect you from the cold but also to elevate your style during the frosty season. The materials chosen for this bundle prioritize both durability and comfort, ensuring that you can enjoy the winter wonderland in style. Whether you\'re treating yourself or searching for the perfect gift, the Arctic Frost Winter Accessories Bundle is a versatile choice. Delight someone special during the holiday season or elevate your own winter wardrobe with this stylish and functional ensemble. Embrace the frost with confidence, knowing that you have the perfect accessories to keep you warm and chic.',
                    'meta-description'  => 'meta description',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Title',
                    'name'              => 'Arctic Frost Winter Accessories',
                    'short-description' => 'Embrace the winter chill with our Arctic Frost Winter Accessories Bundle. This curated set includes a luxurious scarf, a cozy beanie, touchscreen-compatible gloves and wool Blend Socks. Stylish and functional, this ensemble is crafted from high-quality materials, ensuring both durability and comfort. Elevate your winter wardrobe or delight someone special with this perfect gifting option.',
                ],

                '6' => [
                    'description'       => 'Introducing the Arctic Frost Winter Accessories Bundle, your go-to solution for staying warm, stylish, and connected during the chilly winter days. This thoughtfully curated set brings together Four essential winter accessories to create a harmonious ensemble. The luxurious scarf, woven from a blend of acrylic and wool, not only adds a layer of warmth but also brings a touch of elegance to your winter wardrobe. The soft knit beanie, crafted with care, promises to keep you cozy while adding a fashionable flair to your look. But it doesn\'t end there – our bundle also includes touchscreen-compatible gloves. Stay connected without sacrificing warmth as you navigate your devices effortlessly. Whether you\'re answering calls, sending messages, or capturing winter moments on your smartphone, these gloves ensure convenience without compromising style. The soft and cozy texture of the socks offers a luxurious feel against your skin. Say goodbye to chilly feet as you embrace the plush warmth provided by these wool blend socks. The Arctic Frost Winter Accessories Bundle is not just about functionality; it\'s a statement of winter fashion. Each piece is designed not only to protect you from the cold but also to elevate your style during the frosty season. The materials chosen for this bundle prioritize both durability and comfort, ensuring that you can enjoy the winter wonderland in style. Whether you\'re treating yourself or searching for the perfect gift, the Arctic Frost Winter Accessories Bundle is a versatile choice. Delight someone special during the holiday season or elevate your own winter wardrobe with this stylish and functional ensemble. Embrace the frost with confidence, knowing that you have the perfect accessories to keep you warm and chic.',
                    'meta-description'  => 'meta description',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Title',
                    'name'              => 'Arctic Frost Winter Accessories Bundle',
                    'short-description' => 'Embrace the winter chill with our Arctic Frost Winter Accessories Bundle. This curated set includes a luxurious scarf, a cozy beanie, touchscreen-compatible gloves and wool Blend Socks. Stylish and functional, this ensemble is crafted from high-quality materials, ensuring both durability and comfort. Elevate your winter wardrobe or delight someone special with this perfect gifting option.',
                ],

                '7' => [
                    'description'       => 'Introducing the OmniHeat Men\'s Solid Hooded Puffer Jacket, your go-to solution for staying warm and fashionable during colder seasons. This jacket is crafted with durability and warmth in mind, ensuring it becomes your trusted companion. The hooded design not only adds a touch of style but also provides additional warmth, shielding you from cold winds and weather. The full sleeves offer complete coverage, ensuring you stay cozy from shoulder to wrist. Equipped with insert pockets, this puffer jacket provides convenience for carrying your essentials or keeping your hands warm. The insulated synthetic filling offers enhanced warmth, making it ideal for battling chilly days and nights. Made from a durable polyester shell and lining, this jacket is built to last and endure the elements. Available in 5 attractive colors, you can choose the one that suits your style and preference. Versatile and functional, the OmniHeat Men\'s Solid Hooded Puffer Jacket is suitable for various occasions, whether you\'re heading to work, going for a casual outing, or attending an outdoor event. Experience the perfect blend of style, comfort, and functionality with OmniHeat Men\'s Solid Hooded Puffer Jacket. Elevate your winter wardrobe and stay snug while embracing the outdoors. Beat the cold in style and make a statement with this essential piece.',
                    'meta-description'  => 'meta description',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Title',
                    'name'              => 'OmniHeat Men\'s Solid Hooded Puffer Jacket',
                    'short-description' => 'Stay warm and stylish with our OmniHeat Men\'s Solid Hooded Puffer Jacket. This jacket is designed to provide ultimate warmth and features insert pockets for added convenience. The insulated material ensures you stay cozy in cold weather. Available in 5 attractive colors, making it a versatile choice for various occasions.',
                ],

                '8' => [
                    'description'       => 'Introducing the OmniHeat Men\'s Solid Hooded Puffer Jacket, your go-to solution for staying warm and fashionable during colder seasons. This jacket is crafted with durability and warmth in mind, ensuring it becomes your trusted companion. The hooded design not only adds a touch of style but also provides additional warmth, shielding you from cold winds and weather. The full sleeves offer complete coverage, ensuring you stay cozy from shoulder to wrist. Equipped with insert pockets, this puffer jacket provides convenience for carrying your essentials or keeping your hands warm. The insulated synthetic filling offers enhanced warmth, making it ideal for battling chilly days and nights. Made from a durable polyester shell and lining, this jacket is built to last and endure the elements. Available in 5 attractive colors, you can choose the one that suits your style and preference. Versatile and functional, the OmniHeat Men\'s Solid Hooded Puffer Jacket is suitable for various occasions, whether you\'re heading to work, going for a casual outing, or attending an outdoor event. Experience the perfect blend of style, comfort, and functionality with OmniHeat Men\'s Solid Hooded Puffer Jacket. Elevate your winter wardrobe and stay snug while embracing the outdoors. Beat the cold in style and make a statement with this essential piece.',
                    'meta-description'  => 'meta description',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Title',
                    'name'              => 'OmniHeat Men\'s Solid Hooded Puffer Jacket-Blue-Yellow-M',
                    'short-description' => 'Stay warm and stylish with our OmniHeat Men\'s Solid Hooded Puffer Jacket. This jacket is designed to provide ultimate warmth and features insert pockets for added convenience. The insulated material ensures you stay cozy in cold weather. Available in 5 attractive colors, making it a versatile choice for various occasions.',
                ],

                '9' => [
                    'description'       => 'DescIntroducing the OmniHeat Men\'s Solid Hooded Puffer Jacket, your go-to solution for staying warm and fashionable during colder seasons. This jacket is crafted with durability and warmth in mind, ensuring it becomes your trusted companion. The hooded design not only adds a touch of style but also provides additional warmth, shielding you from cold winds and weather. The full sleeves offer complete coverage, ensuring you stay cozy from shoulder to wrist. Equipped with insert pockets, this puffer jacket provides convenience for carrying your essentials or keeping your hands warm. The insulated synthetic filling offers enhanced warmth, making it ideal for battling chilly days and nights. Made from a durable polyester shell and lining, this jacket is built to last and endure the elements. Available in 5 attractive colors, you can choose the one that suits your style and preference. Versatile and functional, the OmniHeat Men\'s Solid Hooded Puffer Jacket is suitable for various occasions, whether you\'re heading to work, going for a casual outing, or attending an outdoor event. Experience the perfect blend of style, comfort, and functionality with OmniHeat Men\'s Solid Hooded Puffer Jacket. Elevate your winter wardrobe and stay snug while embracing the outdoors. Beat the cold in style and make a statement with this essential piece.ription 9',
                    'meta-description'  => 'meta description',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Title',
                    'name'              => 'OmniHeat Men\'s Solid Hooded Puffer Jacket-Blue-Yellow-L',
                    'short-description' => 'Stay warm and stylish with our OmniHeat Men\'s Solid Hooded Puffer Jacket. This jacket is designed to provide ultimate warmth and features insert pockets for added convenience. The insulated material ensures you stay cozy in cold weather. Available in 5 attractive colors, making it a versatile choice for various occasions.',
                ],

                '10' => [
                    'description'       => 'Introducing the OmniHeat Men\'s Solid Hooded Puffer Jacket, your go-to solution for staying warm and fashionable during colder seasons. This jacket is crafted with durability and warmth in mind, ensuring it becomes your trusted companion. The hooded design not only adds a touch of style but also provides additional warmth, shielding you from cold winds and weather. The full sleeves offer complete coverage, ensuring you stay cozy from shoulder to wrist. Equipped with insert pockets, this puffer jacket provides convenience for carrying your essentials or keeping your hands warm. The insulated synthetic filling offers enhanced warmth, making it ideal for battling chilly days and nights. Made from a durable polyester shell and lining, this jacket is built to last and endure the elements. Available in 5 attractive colors, you can choose the one that suits your style and preference. Versatile and functional, the OmniHeat Men\'s Solid Hooded Puffer Jacket is suitable for various occasions, whether you\'re heading to work, going for a casual outing, or attending an outdoor event. Experience the perfect blend of style, comfort, and functionality with OmniHeat Men\'s Solid Hooded Puffer Jacket. Elevate your winter wardrobe and stay snug while embracing the outdoors. Beat the cold in style and make a statement with this essential piece.',
                    'meta-description'  => 'meta description',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Title',
                    'name'              => 'OmniHeat Men\'s Solid Hooded Puffer Jacket-Blue-Green-M',
                    'short-description' => 'Stay warm and stylish with our OmniHeat Men\'s Solid Hooded Puffer Jacket. This jacket is designed to provide ultimate warmth and features insert pockets for added convenience. The insulated material ensures you stay cozy in cold weather. Available in 5 attractive colors, making it a versatile choice for various occasions.',
                ],

                '11' => [
                    'description'       => 'Introducing the OmniHeat Men\'s Solid Hooded Puffer Jacket, your go-to solution for staying warm and fashionable during colder seasons. This jacket is crafted with durability and warmth in mind, ensuring it becomes your trusted companion. The hooded design not only adds a touch of style but also provides additional warmth, shielding you from cold winds and weather. The full sleeves offer complete coverage, ensuring you stay cozy from shoulder to wrist. Equipped with insert pockets, this puffer jacket provides convenience for carrying your essentials or keeping your hands warm. The insulated synthetic filling offers enhanced warmth, making it ideal for battling chilly days and nights. Made from a durable polyester shell and lining, this jacket is built to last and endure the elements. Available in 5 attractive colors, you can choose the one that suits your style and preference. Versatile and functional, the OmniHeat Men\'s Solid Hooded Puffer Jacket is suitable for various occasions, whether you\'re heading to work, going for a casual outing, or attending an outdoor event. Experience the perfect blend of style, comfort, and functionality with OmniHeat Men\'s Solid Hooded Puffer Jacket. Elevate your winter wardrobe and stay snug while embracing the outdoors. Beat the cold in style and make a statement with this essential piece.',
                    'meta-description'  => 'meta description',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Title',
                    'name'              => 'OmniHeat Men\'s Solid Hooded Puffer Jacket-Blue-Green-L',
                    'short-description' => 'Stay warm and stylish with our OmniHeat Men\'s Solid Hooded Puffer Jacket. This jacket is designed to provide ultimate warmth and features insert pockets for added convenience. The insulated material ensures you stay cozy in cold weather. Available in 5 attractive colors, making it a versatile choice for various occasions.',
                ],
            ],

            'product-attribute-values' => [
                '1' => [
                    'description'      => 'The Arctic Cozy Knit Beanie is your go-to solution for staying warm, comfortable, and stylish during the colder months. Crafted from a soft and durable blend of acrylic knit, this beanie is designed to provide a cozy and snug fit. The classic design makes it suitable for both men and women, offering a versatile accessory that complements various styles. Whether you\'re heading out for a casual day in town or embracing the great outdoors, this beanie adds a touch of comfort and warmth to your ensemble. The soft and breathable material ensures that you stay cozy without sacrificing style. The Arctic Cozy Knit Beanie isn\'t just an accessory; it\'s a statement of winter fashion. Its simplicity makes it easy to pair with different outfits, making it a staple in your winter wardrobe. Ideal for gifting or as a treat for yourself, this beanie is a thoughtful addition to any winter ensemble. It\'s a versatile accessory that goes beyond functionality, adding a touch of warmth and style to your look. Embrace the essence of winter with the Arctic Cozy Knit Beanie. Whether you\'re enjoying a casual day out or facing the elements, let this beanie be your companion for comfort and style. Elevate your winter wardrobe with this classic accessory that effortlessly combines warmth with a timeless sense of fashion.',
                    'meta-description' => 'meta description',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Title',
                    'name'             => 'Arctic Cozy Knit Unisex Beanie',
                    'sort-description' => 'Embrace the chilly days in style with our Arctic Cozy Knit Beanie. Crafted from a soft and durable blend of acrylic, this classic beanie offers warmth and versatility. Suitable for both men and women, it\'s the ideal accessory for casual or outdoor wear. Elevate your winter wardrobe or gift someone special with this essential beanie cap.',
                ],

                '2' => [
                    'description'      => 'The Arctic Bliss Winter Scarf is more than just a cold-weather accessory; it\'s a statement of warmth, comfort, and style for the winter season. Crafted with care from a luxurious blend of acrylic and wool, this scarf is designed to keep you cozy and snug even in the chilliest temperatures. The soft and plush texture not only provides insulation against the cold but also adds a touch of luxury to your winter wardrobe. The design of the Arctic Bliss Winter Scarf is both stylish and versatile, making it a perfect addition to a variety of winter outfits. Whether you\'re dressing up for a special occasion or adding a chic layer to your everyday look, this scarf complements your style effortlessly. The extra-long length of the scarf offers customizable styling options. Wrap it around for added warmth, drape it loosely for a casual look, or experiment with different knots to express your unique style. This versatility makes it a must-have accessory for the winter season. Looking for the perfect gift? The Arctic Bliss Winter Scarf is an ideal choice. Whether you\'re surprising a loved one or treating yourself, this scarf is a timeless and practical gift that will be cherished throughout the winter months. Embrace the winter with the Arctic Bliss Winter Scarf, where warmth meets style in perfect harmony. Elevate your winter wardrobe with this essential accessory that not only keeps you warm but also adds a touch of sophistication to your cold-weather ensemble.',
                    'meta-description' => 'meta description',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Title',
                    'name'             => 'Arctic Bliss Stylish Winter Scarf',
                    'sort-description' => 'Experience the embrace of warmth and style with our Arctic Bliss Winter Scarf. Crafted from a luxurious blend of acrylic and wool, this cozy scarf is designed to keep you snug during the coldest days. Its stylish and versatile design, combined with an extra-long length, offers customizable styling options. Elevate your winter wardrobe or delight someone special with this essential winter accessory.',
                ],

                '3' => [
                    'description'      => 'Introducing the Arctic Touchscreen Winter Gloves – where warmth, style, and connectivity meet to enhance your winter experience. Crafted from high-quality acrylic, these gloves are designed to provide exceptional warmth and durability. The touchscreen-compatible fingertips allow you to stay connected without exposing your hands to the cold. Answer calls, send messages, and navigate your devices effortlessly, all while keeping your hands snug. The insulated lining adds an extra layer of coziness, making these gloves your go-to choice for facing the winter chill. Whether you\'re commuting, running errands, or enjoying outdoor activities, these gloves provide the warmth and protection you need. Elastic cuffs ensure a secure fit, preventing cold drafts and keeping the gloves in place during your daily activities. The stylish design adds a touch of flair to your winter ensemble, making these gloves as fashionable as they are functional. Ideal for gifting or as a treat for yourself, the Arctic Touchscreen Winter Gloves are a must-have accessory for the modern individual. Say goodbye to the inconvenience of removing your gloves to use your devices and embrace the seamless blend of warmth, style, and connectivity. Stay connected, stay warm, and stay stylish with the Arctic Touchscreen Winter Gloves – your reliable companion for conquering the winter season with confidence.',
                    'meta-description' => 'meta description',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Title',
                    'name'             => 'Arctic Touchscreen Winter Gloves',
                    'sort-description' => 'Stay connected and warm with our Arctic Touchscreen Winter Gloves. These gloves are not only crafted from high-quality acrylic for warmth and durability but also feature a touchscreen-compatible design. With an insulated lining, elastic cuffs for a secure fit, and a stylish look, these gloves are perfect for daily wear in chilly conditions.',
                ],

                '4' => [
                    'description'      => 'Introducing the Arctic Warmth Wool Blend Socks – your essential companion for cozy and comfortable feet during the colder seasons. Crafted from a premium blend of Merino wool, acrylic, nylon, and spandex, these socks are designed to provide unparalleled warmth and comfort. The wool blend ensures that your feet stay toasty even in the coldest temperatures, making these socks the perfect choice for winter adventures or simply staying snug at home. The soft and cozy texture of the socks offers a luxurious feel against your skin. Say goodbye to chilly feet as you embrace the plush warmth provided by these wool blend socks. Designed for durability, the socks feature a reinforced heel and toe, adding extra strength to high-wear areas. This ensures that your socks withstand the test of time, providing long-lasting comfort and coziness. The breathable nature of the material prevents overheating, allowing your feet to stay comfortable and dry throughout the day. Whether you\'re heading outdoors for a winter hike or relaxing indoors, these socks offer the perfect balance of warmth and breathability. Versatile and stylish, these wool blend socks are suitable for various occasions. Pair them with your favorite boots for a fashionable winter look or wear them around the house for ultimate comfort. Elevate your winter wardrobe and prioritize comfort with the Arctic Warmth Wool Blend Socks. Treat your feet to the luxury they deserve and step into a world of coziness that lasts all season long.',
                    'meta-description' => 'meta description',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Title',
                    'name'             => 'Arctic Warmth Wool Blend Socks',
                    'sort-description' => 'Experience the unmatched warmth and comfort of our Arctic Warmth Wool Blend Socks. Crafted from a blend of Merino wool, acrylic, nylon, and spandex, these socks offer ultimate coziness for cold weather. With a reinforced heel and toe for durability, these versatile and stylish socks are perfect for various occasions.',
                ],

                '5' => [
                    'description'      => 'Introducing the Arctic Frost Winter Accessories Bundle, your go-to solution for staying warm, stylish, and connected during the chilly winter days. This thoughtfully curated set brings together Four essential winter accessories to create a harmonious ensemble. The luxurious scarf, woven from a blend of acrylic and wool, not only adds a layer of warmth but also brings a touch of elegance to your winter wardrobe. The soft knit beanie, crafted with care, promises to keep you cozy while adding a fashionable flair to your look. But it doesn\'t end there – our bundle also includes touchscreen-compatible gloves. Stay connected without sacrificing warmth as you navigate your devices effortlessly. Whether you\'re answering calls, sending messages, or capturing winter moments on your smartphone, these gloves ensure convenience without compromising style. The soft and cozy texture of the socks offers a luxurious feel against your skin. Say goodbye to chilly feet as you embrace the plush warmth provided by these wool blend socks. The Arctic Frost Winter Accessories Bundle is not just about functionality; it\'s a statement of winter fashion. Each piece is designed not only to protect you from the cold but also to elevate your style during the frosty season. The materials chosen for this bundle prioritize both durability and comfort, ensuring that you can enjoy the winter wonderland in style. Whether you\'re treating yourself or searching for the perfect gift, the Arctic Frost Winter Accessories Bundle is a versatile choice. Delight someone special during the holiday season or elevate your own winter wardrobe with this stylish and functional ensemble. Embrace the frost with confidence, knowing that you have the perfect accessories to keep you warm and chic.',
                    'meta-description' => 'meta description',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Title',
                    'name'             => 'Arctic Frost Winter Accessories',
                    'sort-description' => 'Embrace the winter chill with our Arctic Frost Winter Accessories Bundle. This curated set includes a luxurious scarf, a cozy beanie, touchscreen-compatible gloves and wool Blend Socks. Stylish and functional, this ensemble is crafted from high-quality materials, ensuring both durability and comfort. Elevate your winter wardrobe or delight someone special with this perfect gifting option.',
                ],

                '6' => [
                    'description'      => 'Introducing the Arctic Frost Winter Accessories Bundle, your go-to solution for staying warm, stylish, and connected during the chilly winter days. This thoughtfully curated set brings together Four essential winter accessories to create a harmonious ensemble. The luxurious scarf, woven from a blend of acrylic and wool, not only adds a layer of warmth but also brings a touch of elegance to your winter wardrobe. The soft knit beanie, crafted with care, promises to keep you cozy while adding a fashionable flair to your look. But it doesn\'t end there – our bundle also includes touchscreen-compatible gloves. Stay connected without sacrificing warmth as you navigate your devices effortlessly. Whether you\'re answering calls, sending messages, or capturing winter moments on your smartphone, these gloves ensure convenience without compromising style. The soft and cozy texture of the socks offers a luxurious feel against your skin. Say goodbye to chilly feet as you embrace the plush warmth provided by these wool blend socks. The Arctic Frost Winter Accessories Bundle is not just about functionality; it\'s a statement of winter fashion. Each piece is designed not only to protect you from the cold but also to elevate your style during the frosty season. The materials chosen for this bundle prioritize both durability and comfort, ensuring that you can enjoy the winter wonderland in style. Whether you\'re treating yourself or searching for the perfect gift, the Arctic Frost Winter Accessories Bundle is a versatile choice. Delight someone special during the holiday season or elevate your own winter wardrobe with this stylish and functional ensemble. Embrace the frost with confidence, knowing that you have the perfect accessories to keep you warm and chic.',
                    'meta-description' => 'meta description',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Title',
                    'name'             => 'Arctic Frost Winter Accessories Bundle',
                    'sort-description' => 'Embrace the winter chill with our Arctic Frost Winter Accessories Bundle. This curated set includes a luxurious scarf, a cozy beanie, touchscreen-compatible gloves and wool Blend Socks. Stylish and functional, this ensemble is crafted from high-quality materials, ensuring both durability and comfort. Elevate your winter wardrobe or delight someone special with this perfect gifting option.',
                ],

                '7' => [
                    'description'      => 'Introducing the OmniHeat Men\'s Solid Hooded Puffer Jacket, your go-to solution for staying warm and fashionable during colder seasons. This jacket is crafted with durability and warmth in mind, ensuring it becomes your trusted companion. The hooded design not only adds a touch of style but also provides additional warmth, shielding you from cold winds and weather. The full sleeves offer complete coverage, ensuring you stay cozy from shoulder to wrist. Equipped with insert pockets, this puffer jacket provides convenience for carrying your essentials or keeping your hands warm. The insulated synthetic filling offers enhanced warmth, making it ideal for battling chilly days and nights. Made from a durable polyester shell and lining, this jacket is built to last and endure the elements. Available in 5 attractive colors, you can choose the one that suits your style and preference. Versatile and functional, the OmniHeat Men\'s Solid Hooded Puffer Jacket is suitable for various occasions, whether you\'re heading to work, going for a casual outing, or attending an outdoor event. Experience the perfect blend of style, comfort, and functionality with OmniHeat Men\'s Solid Hooded Puffer Jacket. Elevate your winter wardrobe and stay snug while embracing the outdoors. Beat the cold in style and make a statement with this essential piece.',
                    'meta-description' => 'meta description',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Title',
                    'name'             => 'OmniHeat Men\'s Solid Hooded Puffer Jacket',
                    'sort-description' => 'Stay warm and stylish with our OmniHeat Men\'s Solid Hooded Puffer Jacket. This jacket is designed to provide ultimate warmth and features insert pockets for added convenience. The insulated material ensures you stay cozy in cold weather. Available in 5 attractive colors, making it a versatile choice for various occasions.',
                ],

                '8' => [
                    'description'      => 'Introducing the OmniHeat Men\'s Solid Hooded Puffer Jacket, your go-to solution for staying warm and fashionable during colder seasons. This jacket is crafted with durability and warmth in mind, ensuring it becomes your trusted companion. The hooded design not only adds a touch of style but also provides additional warmth, shielding you from cold winds and weather. The full sleeves offer complete coverage, ensuring you stay cozy from shoulder to wrist. Equipped with insert pockets, this puffer jacket provides convenience for carrying your essentials or keeping your hands warm. The insulated synthetic filling offers enhanced warmth, making it ideal for battling chilly days and nights. Made from a durable polyester shell and lining, this jacket is built to last and endure the elements. Available in 5 attractive colors, you can choose the one that suits your style and preference. Versatile and functional, the OmniHeat Men\'s Solid Hooded Puffer Jacket is suitable for various occasions, whether you\'re heading to work, going for a casual outing, or attending an outdoor event. Experience the perfect blend of style, comfort, and functionality with OmniHeat Men\'s Solid Hooded Puffer Jacket. Elevate your winter wardrobe and stay snug while embracing the outdoors. Beat the cold in style and make a statement with this essential piece.',
                    'meta-description' => 'meta description',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Title',
                    'name'             => 'OmniHeat Men\'s Solid Hooded Puffer Jacket-Blue-Yellow-M',
                    'sort-description' => 'Stay warm and stylish with our OmniHeat Men\'s Solid Hooded Puffer Jacket. This jacket is designed to provide ultimate warmth and features insert pockets for added convenience. The insulated material ensures you stay cozy in cold weather. Available in 5 attractive colors, making it a versatile choice for various occasions.',
                ],

                '9' => [
                    'description'      => 'DescIntroducing the OmniHeat Men\'s Solid Hooded Puffer Jacket, your go-to solution for staying warm and fashionable during colder seasons. This jacket is crafted with durability and warmth in mind, ensuring it becomes your trusted companion. The hooded design not only adds a touch of style but also provides additional warmth, shielding you from cold winds and weather. The full sleeves offer complete coverage, ensuring you stay cozy from shoulder to wrist. Equipped with insert pockets, this puffer jacket provides convenience for carrying your essentials or keeping your hands warm. The insulated synthetic filling offers enhanced warmth, making it ideal for battling chilly days and nights. Made from a durable polyester shell and lining, this jacket is built to last and endure the elements. Available in 5 attractive colors, you can choose the one that suits your style and preference. Versatile and functional, the OmniHeat Men\'s Solid Hooded Puffer Jacket is suitable for various occasions, whether you\'re heading to work, going for a casual outing, or attending an outdoor event. Experience the perfect blend of style, comfort, and functionality with OmniHeat Men\'s Solid Hooded Puffer Jacket. Elevate your winter wardrobe and stay snug while embracing the outdoors. Beat the cold in style and make a statement with this essential piece.ription 9',
                    'meta-description' => 'meta description',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Title',
                    'name'             => 'OmniHeat Men\'s Solid Hooded Puffer Jacket-Blue-Yellow-L',
                    'sort-description' => 'Stay warm and stylish with our OmniHeat Men\'s Solid Hooded Puffer Jacket. This jacket is designed to provide ultimate warmth and features insert pockets for added convenience. The insulated material ensures you stay cozy in cold weather. Available in 5 attractive colors, making it a versatile choice for various occasions.',
                ],

                '10' => [
                    'description'      => 'Introducing the OmniHeat Men\'s Solid Hooded Puffer Jacket, your go-to solution for staying warm and fashionable during colder seasons. This jacket is crafted with durability and warmth in mind, ensuring it becomes your trusted companion. The hooded design not only adds a touch of style but also provides additional warmth, shielding you from cold winds and weather. The full sleeves offer complete coverage, ensuring you stay cozy from shoulder to wrist. Equipped with insert pockets, this puffer jacket provides convenience for carrying your essentials or keeping your hands warm. The insulated synthetic filling offers enhanced warmth, making it ideal for battling chilly days and nights. Made from a durable polyester shell and lining, this jacket is built to last and endure the elements. Available in 5 attractive colors, you can choose the one that suits your style and preference. Versatile and functional, the OmniHeat Men\'s Solid Hooded Puffer Jacket is suitable for various occasions, whether you\'re heading to work, going for a casual outing, or attending an outdoor event. Experience the perfect blend of style, comfort, and functionality with OmniHeat Men\'s Solid Hooded Puffer Jacket. Elevate your winter wardrobe and stay snug while embracing the outdoors. Beat the cold in style and make a statement with this essential piece.',
                    'meta-description' => 'meta description',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Title',
                    'name'             => 'OmniHeat Men\'s Solid Hooded Puffer Jacket-Blue-Green-M',
                    'sort-description' => 'Stay warm and stylish with our OmniHeat Men\'s Solid Hooded Puffer Jacket. This jacket is designed to provide ultimate warmth and features insert pockets for added convenience. The insulated material ensures you stay cozy in cold weather. Available in 5 attractive colors, making it a versatile choice for various occasions.',
                ],

                '11' => [
                    'description'      => 'Introducing the OmniHeat Men\'s Solid Hooded Puffer Jacket, your go-to solution for staying warm and fashionable during colder seasons. This jacket is crafted with durability and warmth in mind, ensuring it becomes your trusted companion. The hooded design not only adds a touch of style but also provides additional warmth, shielding you from cold winds and weather. The full sleeves offer complete coverage, ensuring you stay cozy from shoulder to wrist. Equipped with insert pockets, this puffer jacket provides convenience for carrying your essentials or keeping your hands warm. The insulated synthetic filling offers enhanced warmth, making it ideal for battling chilly days and nights. Made from a durable polyester shell and lining, this jacket is built to last and endure the elements. Available in 5 attractive colors, you can choose the one that suits your style and preference. Versatile and functional, the OmniHeat Men\'s Solid Hooded Puffer Jacket is suitable for various occasions, whether you\'re heading to work, going for a casual outing, or attending an outdoor event. Experience the perfect blend of style, comfort, and functionality with OmniHeat Men\'s Solid Hooded Puffer Jacket. Elevate your winter wardrobe and stay snug while embracing the outdoors. Beat the cold in style and make a statement with this essential piece.',
                    'meta-description' => 'meta description',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Title',
                    'name'             => 'OmniHeat Men\'s Solid Hooded Puffer Jacket-Blue-Green-L',
                    'sort-description' => 'Stay warm and stylish with our OmniHeat Men\'s Solid Hooded Puffer Jacket. This jacket is designed to provide ultimate warmth and features insert pockets for added convenience. The insulated material ensures you stay cozy in cold weather. Available in 5 attractive colors, making it a versatile choice for various occasions.',
                ],
            ],

            'product-bundle-option-translations' => [
                '1' => [
                    'label' => 'Bundle Option 1',
                ],

                '2' => [
                    'label' => 'Bundle Option 1',
                ],

                '3' => [
                    'label' => 'Bundle Option 2',
                ],

                '4' => [
                    'label' => 'Bundle Option 2',
                ],
            ],
        ],
    ],

    'installer' => [
        'index' => [
            'create-administrator' => [
                'admin'            => 'Admin',
                'bagisto'          => 'Bagisto',
                'confirm-password' => 'Confirm Password',
                'email'            => 'Email',
                'email-address'    => 'admin@example.com',
                'password'         => 'Password',
                'title'            => 'Create Administrator',
            ],

            'environment-configuration' => [
                'algerian-dinar'              => 'Algerian Dinar (DZD)',
                'allowed-currencies'          => 'Allowed Currencies',
                'allowed-locales'             => 'Allowed Locales',
                'application-name'            => 'Application Name',
                'argentine-peso'              => 'Argentine Peso (ARS)',
                'australian-dollar'           => 'Australian Dollar (AUD)',
                'bagisto'                     => 'Bagisto',
                'bangladeshi-taka'            => 'Bangladeshi Taka (BDT)',
                'brazilian-real'              => 'Brazilian Real (BRL)',
                'british-pound-sterling'      => 'British Pound Sterling (GBP)',
                'canadian-dollar'             => 'Canadian Dollar (CAD)',
                'cfa-franc-bceao'             => 'CFA Franc BCEAO (XOF)',
                'cfa-franc-beac'              => 'CFA Franc BEAC (XAF)',
                'chilean-peso'                => 'Chilean Peso (CLP)',
                'chinese-yuan'                => 'Chinese Yuan (CNY)',
                'colombian-peso'              => 'Colombian Peso (COP)',
                'czech-koruna'                => 'Czech Koruna (CZK)',
                'danish-krone'                => 'Danish Krone (DKK)',
                'database-connection'         => 'Database Connection',
                'database-hostname'           => 'Database Hostname',
                'database-name'               => 'Database Name',
                'database-password'           => 'Database Password',
                'database-port'               => 'Database Port',
                'database-prefix'             => 'Database Prefix',
                'database-username'           => 'Database Username',
                'default-currency'            => 'Default Currency',
                'default-locale'              => 'Default Locale',
                'default-timezone'            => 'Default Timezone',
                'default-url'                 => 'Default URL',
                'default-url-link'            => 'https://localhost',
                'egyptian-pound'              => 'Egyptian Pound (EGP)',
                'euro'                        => 'Euro (EUR)',
                'fijian-dollar'               => 'Fijian Dollar (FJD)',
                'hong-kong-dollar'            => 'Hong Kong Dollar (HKD)',
                'hungarian-forint'            => 'Hungarian Forint (HUF)',
                'indian-rupee'                => 'Indian Rupee (INR)',
                'indonesian-rupiah'           => 'Indonesian Rupiah (IDR)',
                'israeli-new-shekel'          => 'Israeli New Shekel (ILS)',
                'japanese-yen'                => 'Japanese Yen (JPY)',
                'jordanian-dinar'             => 'Jordanian Dinar (JOD)',
                'kazakhstani-tenge'           => 'Kazakhstani Tenge (KZT)',
                'kuwaiti-dinar'               => 'Kuwaiti Dinar (KWD)',
                'lebanese-pound'              => 'Lebanese Pound (LBP)',
                'libyan-dinar'                => 'Libyan Dinar (LYD)',
                'malaysian-ringgit'           => 'Malaysian Ringgit (MYR)',
                'mauritian-rupee'             => 'Mauritian Rupee (MUR)',
                'mexican-peso'                => 'Mexican Peso (MXN)',
                'moroccan-dirham'             => 'Moroccan Dirham (MAD)',
                'mysql'                       => 'Mysql',
                'nepalese-rupee'              => 'Nepalese Rupee (NPR)',
                'new-taiwan-dollar'           => 'New Taiwan Dollar (TWD)',
                'new-zealand-dollar'          => 'New Zealand Dollar (NZD)',
                'nigerian-naira'              => 'Nigerian Naira (NGN)',
                'norwegian-krone'             => 'Norwegian Krone (NOK)',
                'omani-rial'                  => 'Omani Rial (OMR)',
                'pakistani-rupee'             => 'Pakistani Rupee (PKR)',
                'panamanian-balboa'           => 'Panamanian Balboa (PAB)',
                'paraguayan-guarani'          => 'Paraguayan Guarani (PYG)',
                'peruvian-nuevo-sol'          => 'Peruvian Nuevo Sol (PEN)',
                'pgsql'                       => 'pgSQL',
                'philippine-peso'             => 'Philippine Peso (PHP)',
                'polish-zloty'                => 'Polish Zloty (PLN)',
                'qatari-rial'                 => 'Qatari Rial (QAR)',
                'romanian-leu'                => 'Romanian Leu (RON)',
                'russian-ruble'               => 'Russian Ruble (RUB)',
                'saudi-riyal'                 => 'Saudi Riyal (SAR)',
                'select-timezone'             => 'Select Timezone',
                'singapore-dollar'            => 'Singapore Dollar (SGD)',
                'south-african-rand'          => 'South African Rand (ZAR)',
                'south-korean-won'            => 'South Korean Won (KRW)',
                'sqlsrv'                      => 'SQLSRV',
                'sri-lankan-rupee'            => 'Sri Lankan Rupee (LKR)',
                'swedish-krona'               => 'Swedish Krona (SEK)',
                'swiss-franc'                 => 'Swiss Franc (CHF)',
                'thai-baht'                   => 'Thai Baht (THB)',
                'title'                       => 'Store Configuration',
                'tunisian-dinar'              => 'Tunisian Dinar (TND)',
                'turkish-lira'                => 'Turkish Lira (TRY)',
                'ukrainian-hryvnia'           => 'Ukrainian Hryvnia (UAH)',
                'united-arab-emirates-dirham' => 'United Arab Emirates Dirham (AED)',
                'united-states-dollar'        => 'United States Dollar (USD)',
                'uzbekistani-som'             => 'Uzbekistani Som (UZS)',
                'venezuelan-bolívar'          => 'Venezuelan Bolívar (VEF)',
                'vietnamese-dong'             => 'Vietnamese Dong (VND)',
                'warning-message'             => 'Beware! The settings for your default system language and default currency are permanent and cannot be changed once set.',
                'zambian-kwacha'              => 'Zambian Kwacha (ZMW)',
            ],

            'sample-products' => [
                'download-sample' => 'download-sample',
                'no'              => 'No',
                'sample-products' => 'Sample Products',
                'title'           => 'Sample Products',
                'yes'             => 'Yes',
            ],

            'installation-processing' => [
                'bagisto'      => 'Installation Bagisto',
                'bagisto-info' => 'Creating the database tables, this can take a few moments',
                'title'        => 'Installation',
            ],

            'installation-completed' => [
                'admin-panel'                => 'Admin Panel',
                'bagisto-forums'             => 'Bagisto Forum',
                'customer-panel'             => 'Customer Panel',
                'explore-bagisto-extensions' => 'Explore Bagisto Extension',
                'title'                      => 'Installation Completed',
                'title-info'                 => 'Bagisto is Successfully installed on your system.',
            ],

            'ready-for-installation' => [
                'create-databsae-table'   => 'Create the database table',
                'install'                 => 'Installation',
                'install-info'            => 'Bagisto For Installation',
                'install-info-button'     => 'Click the button below to',
                'populate-database-table' => 'Populate the database tables',
                'start-installation'      => 'Start Installation',
                'title'                   => 'Ready for Installation',
            ],

            'start' => [
                'locale'        => 'Locale',
                'main'          => 'Start',
                'select-locale' => 'Select Locale',
                'title'         => 'Your Bagisto install',
                'welcome-title' => 'Welcome to Bagisto',
            ],

            'server-requirements' => [
                'calendar'    => 'Calendar',
                'ctype'       => 'cType',
                'curl'        => 'cURL',
                'dom'         => 'dom',
                'fileinfo'    => 'fileInfo',
                'filter'      => 'Filter',
                'gd'          => 'GD',
                'hash'        => 'Hash',
                'intl'        => 'intl',
                'json'        => 'JSON',
                'mbstring'    => 'mbstring',
                'openssl'     => 'openssl',
                'pcre'        => 'pcre',
                'pdo'         => 'pdo',
                'php'         => 'PHP',
                'php-version' => '8.1 or higher',
                'session'     => 'session',
                'title'       => 'System Requirements',
                'tokenizer'   => 'tokenizer',
                'xml'         => 'XML',
            ],

            'arabic'                   => 'Arabic',
            'back'                     => 'Back',
            'bagisto'                  => 'Bagisto',
            'bagisto-info'             => 'a Community Project by',
            'bagisto-logo'             => 'Bagisto Logo',
            'bengali'                  => 'Bengali',
            'chinese'                  => 'Chinese',
            'continue'                 => 'Continue',
            'dutch'                    => 'Dutch',
            'english'                  => 'English',
            'french'                   => 'French',
            'german'                   => 'German',
            'hebrew'                   => 'Hebrew',
            'hindi'                    => 'Hindi',
            'installation-description' => 'Bagisto installation typically involves several steps. Here\'s a general outline of the installation process for Bagisto',
            'installation-info'        => 'We are happy to see you here!',
            'installation-title'       => 'Welcome to Installation',
            'italian'                  => 'Italian',
            'japanese'                 => 'Japanese',
            'persian'                  => 'Persian',
            'polish'                   => 'Polish',
            'portuguese'               => 'Brazilian Portuguese',
            'russian'                  => 'Russian',
            'sinhala'                  => 'Sinhala',
            'spanish'                  => 'Spanish',
            'title'                    => 'Bagisto Installer',
            'turkish'                  => 'Turkish',
            'ukrainian'                => 'Ukrainian',
            'webkul'                   => 'Webkul',
        ],
    ],
];
