<?php

namespace CodeSPB\LaravelPodcastFeed;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    const CONFIG_PATH = __DIR__ . '/../config/podcast-feed.php';

    public function boot()
    {
        $this->app->runningInConsole() && $this->publishes([
            self::CONFIG_PATH => config_path('podcast-feed.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            self::CONFIG_PATH,
            'podcast-feed'
        );

        $this->app->bind('podcast-feed', function () {
            return new Manager(config('podcast-feed'));
        });
    }
}
