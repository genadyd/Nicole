<?php

namespace App\View\Components\Layouts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Routing\Route;
use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Create a new component instance.
     */
    public array $menu;
    public function __construct()
    {
        $this->menu = [
            'Home' => [
                'href' => route('home.index'),
                'isActive' => request()->is('/')
            ],
            'About' => [
                'href' => route('about.index'),
                'isActive' => request()->is('about')
            ],
            'Projects' => [
                'href' => route('projects.index'),
                'isActive' => request()->is('projects')
            ],
            'Services' => [
                'href' => route('service.index'),
                'isActive' => request()->is('services')
            ],
            'Contacts' => [
                'href' => route('contact.index'),
                'isActive' => request()->is('contacts')
            ]
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layouts.header.index',['nav'=>$this->menu]);
    }
}
