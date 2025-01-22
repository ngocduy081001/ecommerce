<?php

return [
    'checkout' => [
        'cart' => [
            'integrity' => [
                'qty-missing'   => 'Ít nhất một sản phẩm phải có số lượng lớn hơn 1.',
            ],

            'inventory-warning'        => 'Số lượng yêu cầu không có sẵn, vui lòng thử lại sau.',
            'missing-links'            => 'Liên kết tải xuống bị thiếu cho sản phẩm này.',
            'missing-options'          => 'Tùy chọn bị thiếu cho sản phẩm này.',
            'selected-products-simple' => 'Sản phẩm được chọn phải là loại sản phẩm đơn giản.',
        ],
    ],

    'datagrid' => [
        'copy-of-slug'                  => 'bản-sao-của-:value',
        'copy-of'                       => 'Bản Sao Của :value',
        'variant-already-exist-message' => 'Biến thể với các tùy chọn thuộc tính giống nhau đã tồn tại.',
    ],

    'response' => [
        'product-can-not-be-copied' => 'Sản phẩm loại :type không thể sao chép',
    ],

    'sort-by'  => [
        'options' => [
            'cheapest-first'  => 'Rẻ Nhất Trước',
            'expensive-first' => 'Đắt Nhất Trước',
            'from-a-z'        => 'Từ A-Z',
            'from-z-a'        => 'Từ Z-A',
            'latest-first'    => 'Mới Nhất Trước',
            'oldest-first'    => 'Cũ Nhất Trước',
        ],
    ],

    'type'     => [
        'abstract'     => [
            'offers' => 'Mua :qty với giá :price mỗi cái và tiết kiệm :discount',
        ],

        'bundle'       => 'Gói',
        'configurable' => 'Có Thể Cấu Hình',
        'downloadable' => 'Có Thể Tải Xuống',
        'grouped'      => 'Nhóm',
        'simple'       => 'Đơn Giản',
        'virtual'      => 'Ảo',
    ],
];
