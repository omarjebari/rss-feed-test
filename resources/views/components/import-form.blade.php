<div>
    <p>You can import an rss feed by entering the rss feed url in the input below.</p>
    <form method="POST" action="{{ route('feeds.import') }}">
        @csrf
        <label for="feed-url-input">RSS Feed Url:</label>
        <input class="w-300 shadow-sm" type="text" id="feed-url-input" name="feed-url-input"
               placeholder="Enter feed url here" />
        <button type="submit" id="import-button">
            Import Feed
        </button>
    </form>

    @if ($errors->any())
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
