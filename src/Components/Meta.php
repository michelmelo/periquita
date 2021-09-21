<?php

declare (strict_types = 1);

namespace MichelMelo\UI\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Meta extends Component
{
    public $title;
    public $description;
    public $author;
    public $robots;
    public $keywords;
    public $type;
    public $card;
    public $image;
    public $url;

    /**
     * @param string $title
     * @param string $description
     * @param string $keywords
     * @param string $author
     * @param string $robots
     * @param string $type
     * @param string $card
     * @param string $image
     * @param string $url
     */
    public function __construct(
        string $title = '',
        string $description = '',
        string $keywords = '',
        string $author = '',
        string $robots = '',
        string $type = 'website',
        string $card = 'summary_large_image',
        string $image = '',
        string $url = ''
    ) {
        $this->title       = $title;
        $this->description = $description;
        $this->keywords    = $keywords;
        $this->author      = $author;
        $this->robots      = $robots;
        $this->type        = $type;
        $this->card        = $card;
        $this->image       = $image;
        $this->url         = $url ?: url()->current();
    }

    public function render(): View
    {
        return view('periquita::meta');
    }
}
