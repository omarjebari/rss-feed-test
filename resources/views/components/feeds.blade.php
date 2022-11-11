<h2>Your Saved Feeds</h2>
@if (count($feeds) > 0)
    <p>To open the original feed hold down the alt key and click the link below. This will display a button to access the original feed.</p>
    <ul>
    @foreach ($feeds as $feed)
        <li>
            <span class="clickableSpan rss-link-trigger">{{ $feed->url }}</span>
            <a class="button-link ml-4" href="{{ route('feeds.show', ['feed' => $feed->id]) }}">Show imported feed</a>
            <a class="external-rss-link button-link ml-4" href="{{ $feed->url }}">Open feed url</a></li>
    @endforeach
    </ul>
@else
    <p>You have no feeds. You can import them using the form above.</p>
@endif
