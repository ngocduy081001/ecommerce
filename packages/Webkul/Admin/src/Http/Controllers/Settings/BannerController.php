<?php

namespace Webkul\Admin\Http\Controllers\Settings;

use Webkul\Admin\Http\Controllers\Controller;

class BannerController extends Controller
{
    public function index()
    {
        return view('admin::settings.banners.index');
    }
}
