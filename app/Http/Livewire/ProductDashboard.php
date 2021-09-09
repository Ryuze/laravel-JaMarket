<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductDashboard extends Component
{
    use WithPagination;

    public function render()
    {
        // $products = Product::all();

        return view('livewire.product-dashboard', [
            'products' => Product::paginate(10)
        ]);
    }
}
