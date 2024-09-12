<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Language extends Component
{
    public $locale;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
        $this->locale = LaravelLocalization::getCurrentLocale() == 'ar' ? 'en' : 'ar';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.language', ['locale' => $this->locale]);
    }
}
