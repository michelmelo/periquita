<?php

//declare(strict_types=1);

namespace MichelMelo\Periquita\UI\Components;

use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Arr;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Alert extends Component
{
    /**
     * @var string
     */
    public string $type;

    /**
     * @var Session
     */
    protected Session $session;

    /**
     * @param Session $session
     * @param string $type
     */
    public function __construct(Session $session, string $type = 'alert')
    {
        $this->session = $session;
        $this->type = $type;
    }

    public function render(): View
    {
        return view('periquita::alert');
    }

    /**
     * @return string
     */
    public function message(): string
    {
        return (string)Arr::first($this->messages());
    }

    /**
     * @return array
     */
    public function messages(): array
    {
        return (array)session()->get($this->type);
    }

    /**
     * Determine if the component should be rendered.
     *
     * @return bool
     */
    public function shouldRender(): bool
    {
        return session()->has($this->type) && !empty($this->messages());
    }
}
