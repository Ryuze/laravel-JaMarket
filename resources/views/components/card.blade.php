<div>
    <div class="rounded overflow-hidden shadow-lg">
        <img class="w-full" src="{{ asset('storage/default/default_product.jpg') }}" alt="">
        <div class="px6 py-4">
            <div class="font-bold text-xl ml-4 truncate">{{ $name }}</div>
            <p class="text-gray-700 text-base ml-4">
                {{ $price }}
            </p>
            <div class="px-6 py-4">
                <span
                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#tag1</span>
                <span
                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#tag2</span>
                <span
                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#tag3</span>
            </div>
        </div>
    </div>
</div>