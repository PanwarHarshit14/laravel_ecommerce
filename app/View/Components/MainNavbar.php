<?php

namespace App\View\Components;

use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MainNavbar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $categories = Category::with(['subcategories', 'subcategories.subcategories'])->whereNull('category_id')->orderBy('name')->get();
        // dd($categories->toArray());
        return view('components.main-navbar', compact('categories'));
    }
}
