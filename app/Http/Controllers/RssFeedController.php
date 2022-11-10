<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RssFeedController extends Controller
{
    /**
     * Display a list of feeds stored locally
     */
    public function index()
    {
        return view('feed-list', ['feeds' => []]);
    }

    /**
     * import a feed
     */
    public function import(Request $request)
    {
        $request->validate([
            'feed-url-input' => 'required|url|ends_with:xml'
        ]);
        return redirect()->route('feeds.index');
    }
}
