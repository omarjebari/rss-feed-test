@if (count($feeds) > 0)
    @foreach ($feeds as $feed)
        <h2>$feed->channel->title</h2>
        <p>Last updated at: </p>
    @endforeach
@else
    <p>You have no feeds. You can import them using the form above.</p>
@endif
