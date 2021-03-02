<?php

namespace App\Providers;

use App\Models\Back\Sections\Page;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    protected $pages = [];
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
        // To share list of page details to all Views
        if (Schema::hasTable('pages')) {
            $hotelPages = Page::with('contents')->where('enable_flag', '1')->orderBy('order', 'asc')->get();
            foreach ($hotelPages as $page) {
                $this->pages[] = Page::find($page->id)->contents()->where('language_id', 1)->first();
            }
            View::share('hotelGlobalPagesData', $this->pages);
        }
    }
}
