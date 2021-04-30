<?php

namespace CodeSPB\LaravelPodcastFeed\Facades;

use Illuminate\Support\Facades\Facade;

class PodcastFeed extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'podcast-feed';
    }
}
