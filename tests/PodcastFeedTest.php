<?php

namespace CodeSpb\PodcastFeed\Tests;

use CodeSpb\PodcastFeed\Facades\PodcastFeed;
use CodeSpb\PodcastFeed\ServiceProvider;
use Orchestra\Testbench\TestCase;

class PodcastFeedTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'podcast-feed' => PodcastFeed::class,
        ];
    }

    public function testExample()
    {
        $this->assertEquals(1, 1);
    }
}
