<div class="mt-4">
    @if ($products)
        <div class="grid grid-cols-1 gap-4 md:grid-cols-5">
            @foreach ($products as $product)
                <x-card :name="$product->name" :price="$product->price"
                    :image="$product->image != null ? str_replace('public/', 'storage/', $product->image) : 'storage/default/default_product.jpg'" />
            @endforeach
        </div>
        <div>
            {{ $products->links() }}
        </div>
    @else
        <div>
            No item.
        </div>
    @endif
</div>
