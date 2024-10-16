<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Contracts\View\View;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Str;

Blade::directive('currentViewName', function () {
    return "<?php echo Str::of(request()->route()->getName())->afterLast('.')->kebab()->replace('_', ' ')->title(); ?>";
});

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $settings = Setting::checkSettings();
        View()->share([
            'settings'=>$settings,
        ]);
    }
}
