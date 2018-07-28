<?php

namespace App\Http\Controllers;

use App\Models\Post as PostModel;
use Illuminate\Filesystem\Cache;
use Illuminate\Http\Response;
use Teapot\StatusCode;

class PostFeedController extends Controller
{
    private const OUTPUT_CONTENT_TYPE = 'text/xml';
    private const CACHE_ID = 'rss_feed_posts';
    private const CACHE_LIFETIME_IN_MINUTES = 60 * 24;
    private const MAX_ITEMS_SHOWN = 10;

    public function index(): Response
    {
        $posts = Cache::remember(self::CACHE_ID, self::CACHE_LIFETIME_IN_MINUTES, function () {
            return PostModel::latest()
                ->limit(self::MAX_ITEMS_SHOWN)
                ->get();
        });

        return response()
            ->view(
                'post.feed',
                compact('posts'),
                StatusCode::OK
            )
            ->header(
                'Content-Type',
                self::OUTPUT_CONTENT_TYPE
            );
    }
}
