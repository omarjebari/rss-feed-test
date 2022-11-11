<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use Illuminate\Http\Request;

class RssFeedController extends Controller
{
    /**
     * Display a list of feeds stored locally
     */
    public function index()
    {
        return view('feed-list', ['feeds' => Feed::all()]);
    }

    /**
     * Display a feed
     * @throws \JsonException
     */
    public function show(Feed $feed)
    {
        $rssString = json_decode($feed->body, false, 512, JSON_THROW_ON_ERROR);
        $rss = simplexml_load_string($rssString);
        return view('feed', [
            'url' => $feed->url,
            'rss' => $rss
        ]);
    }

    /**
     * import a feed
     * @throws \JsonException
     */
    public function import(Request $request)
    {
        $validated = $request->validate([
            'feed-url-input' => 'required|url|ends_with:xml,rss'
        ]);

        $url = $validated['feed-url-input'];
        if ($rssString = file_get_contents($url)) {
            Feed::updateOrCreate(
                ['url' => $url],
                ['body' => json_encode($rssString, JSON_THROW_ON_ERROR)]
            );
            return redirect()->route('feeds.index');
        }
        return redirect()->route('feeds.index')->withErrors('Unable to load file contents');
    }
}
