<?php


namespace Despark\Cms\Media\Providers;


use Despark\Cms\Media\Fields\Media;
use Illuminate\Support\ServiceProvider;

class MediaServiceProvider extends ServiceProvider
{

    /**
     * Boot baby
     */
    public function boot()
    {
        // Register the media library
        // $this->app->register(\Spatie\MediaLibrary\MediaLibraryServiceProvider::class);
        // We will register out own service provider for more control over elfinder package
        $this->app->register(ElfinderServiceProvider::class);

        // Extend the fields so we can add the media one
        \Field::extend('media', Media::class);

        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');

        $this->publishes([
            __DIR__.'/../../gulp/' => base_path('/gulp'),
        ], 'gulp');

        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'ignicms-media');
    }

}