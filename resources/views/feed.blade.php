<x-layout>

    <nav>
        <a href="{{ route('feeds.index') }}">&larr; Return to RSS Feed List</a>
    </nav>

    <h2>{{ $url }}</h2>
    @foreach ($rss->channel->item as $item)
        <h3><a href="{{ $item->link }}">{{ $item->title }}</a></h3>
        <p>{{ $item->description }}</p>
    @endforeach

</x-layout>
