<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Feeds extends Component
{
    /**
     * The list of local feeds.
     *
     * @var array
     */
    public array $feeds = [];

    /**
     * Create the component instance.
     *
     * @param array $feeds
     * @return void
     */
    public function __construct(array $feeds)
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
