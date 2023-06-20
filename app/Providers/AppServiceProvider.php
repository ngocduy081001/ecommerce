<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $cat = Category::where('parent', 0)->with('children')->get()->toArray();
        View::share('cat', $cat);
        Blade::directive('convert', function ($money) {
            return "<?php echo number_format($money, 0, ',', '.'); ?>";
        });
    }
}
