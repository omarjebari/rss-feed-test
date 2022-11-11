<?php

namespace App\View\Components;

use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Feeds extends Component
{
    /**
     * The list of local feeds.
     *
     * @var Collection
     */
    public Collection $feeds;

    /**
     * Create the component instance.
     *
     * @param Collection $feeds
     * @return void
     */
    public function __construct(Collection $feeds)
    {
        $this->feeds = $feeds;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.feeds');
    }
}
