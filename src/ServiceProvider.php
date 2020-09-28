<?php

declare(strict_types=1);

namespace Daguilarm\Lang;

use Illuminate\Support\ServiceProvider as Provider;

final class ServiceProvider extends Provider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(): void
    {
        Blade::directive('langSingular', function ($expression) {
            return "<?php echo __($expression, 0); ?>";
        });

        Blade::directive('langPlural', function ($expression) {
            return "<?php echo __($expression, 1); ?>";
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(): void
    {
        //
    }
}
