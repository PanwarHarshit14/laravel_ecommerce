<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Routing\Route;

class AdminMenubar extends Component
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
        $menus = [
            [
            'label' => 'Dashboard',
            'url' => route('admin.dashboard'),
            'icon' => 'bi bi-house-door'
            ],
            [
                'label' => 'Countries',
                'url' => null,
                'icon' => 'bi bi-globe',
                'children' =>[
                    [
                        'label' => 'Add Country',
                        'url' => route('admin.country.create'),
                        'icon' => 'bi bi-database-add'
                    ],
                    [
                        'label' => 'View Country',
                        'url' => route('admin.country.index'),
                        'icon' => 'bi bi-database-check'
                    ],
                ],
            ],
            [
                'label' => 'States',
                'url' => null,
                'icon' => 'bi bi-globe',
                'children' =>[
                    [
                        'label' => 'Add State',
                        'url' => route('admin.state.create'),
                        'icon' => 'bi bi-database-add'
                    ],
                    [
                        'label' => 'View State',
                        'url' => route('admin.state.index'),
                        'icon' => 'bi bi-database-check'
                    ],
                ],
            ],
            [
                'label' => 'Cities',
                'url' => null,
                'icon' => 'bi bi-globe',
                'children' =>[
                    [
                        'label' => 'Add City',
                        'url' => route('admin.city.create'),
                        'icon' => 'bi bi-database-add'
                    ],
                    [
                        'label' => 'View City',
                        'url' => route('admin.city.index'),
                        'icon' => 'bi bi-database-check'
                    ],
                ],
            ],
            [
                'label' => 'Pincodes',
                'url' => null,
                'icon' => 'bi bi-globe',
                'children' =>[
                    [
                        'label' => 'Add Pincode',
                        'url' => route('admin.pincode.create'),
                        'icon' => 'bi bi-database-add'
                    ],
                    [
                        'label' => 'View Pincode',
                        'url' => route('admin.pincode.index'),
                        'icon' => 'bi bi-database-check'
                    ],
                ],
            ],
            [
                'label' => 'Category',
                'url' => null,
                'icon' => 'bi bi-tags',
                'children' =>[
                    [
                        'label' => 'Add category',
                        'url' => route('admin.category.create'),
                        'icon' => 'bi bi-database-add'
                    ],
                    [
                        'label' => 'view category',
                        'url' => route('admin.category.index'),
                        'icon' => 'bi bi-database-check'
                    ],
                ],
            ],
            [
                'label' => 'HSN Code',
                'url' => null,
                'icon' => 'bi bi-bag',
                'children' =>[
                    [
                        'label' => 'Add HSN Code',
                        'url' => route('admin.hsncode.create'),
                        'icon' => 'bi bi-database-add'
                    ],
                    [
                        'label' => 'View HSN Code',
                        'url' => route('admin.hsncode.index'),
                        'icon' => 'bi bi-database-check'
                    ],
                ],
            ],
            [
                'label' => 'Product',
                'url' => null,
                'icon' => 'bi bi-bag',
                'children' =>[
                    [
                        'label' => 'Add Product',
                        'url' => route('admin.product.create'),
                        'icon' => 'bi bi-database-add'
                    ],
                    [
                        'label' => 'View Product',
                        'url' => route('admin.product.index'),
                        'icon' => 'bi bi-database-check'
                    ],
                ],
            ],
            [
                'label' => 'Product Images',
                'url' => null,
                'icon' => 'bi bi-bag',
                'children' =>[
                    [
                        'label' => 'Add Product Images',
                        'url' => route('admin.productimg.create'),
                        'icon' => 'bi bi-database-add'
                    ],
                    [
                        'label' => 'View Product Images',
                        'url' => route('admin.productimg.index'),
                        'icon' => 'bi bi-database-check'
                    ],
                ],
            ]
        ];

        return view('components.admin-menubar', compact('menus'));
    }
}
