<x-dashboard-layout>
    <x-slot name="title">
        Product Add
    </x-slot>

    <x-slot name="css">
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }
    </x-slot>

    {{-- TODO: ubah ke posisi statik dah biar ga gerak" klo gambarnya beda ukuran --}}

    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="flex justify-around m-6">
            <div class="space-y-4 mx-auto">
                <div>
                    <label for="name" class="font-medium">Product name</label>
                    <div>
                        <input type="text" name="name" id="name" placeholder="Name of product"
                            value="{{ old('name') }}"
                            class="w-auto lg:w-96 border-2 @error('name') border-red-400 hover:border-red-500 @else border-gray-400 hover:border-gray-500 @enderror border-opacity-85 rounded placeholder-gray-300 focus:border-green-600 focus:ring-0">
                    </div>
                    @error('name')
                        <div class="text-red-500 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <label for="price" class="font-medium">Product price</label>
                    <div>
                        <input type="number" name="price" id="price" placeholder="Price of product"
                            value="{{ old('price') }}"
                            class="w-auto lg:w-96 border-2 @error('price') border-red-400 hover:border-red-500 @else border-gray-400 hover:border-gray-500 @enderror border-opacity-85 rounded placeholder-gray-300 focus:border-green-600 focus:ring-0">
                    </div>
                    @error('price')
                        <div class="text-red-500 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <x-button :type="'submit'" :class="'success'">
                    Add
                </x-button>
            </div>
            <div class="text-center">
                <label for="image" class="font-medium">Product image</label>
                <div>
                    <img src="{{ asset('storage/default/default_product.jpg') }}" id="output" alt="Product image"
                        class="border border-black w-1/4 h-2/4 mx-auto">
                </div>
                <div class="mt-2">
                    <input type="file" id="image" name="image" src="" alt="Select image" accept="image/*"
                        class="text-white bg-green-500" onchange="loadFile(event)">
                </div>
                @error('image')
                    <div class="text-red-500 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </form>

    <x-slot name="js">
        let loadFile = function(event) {
        let image = document.getElementById('output')
        image.src = URL.createObjectURL(event.target.files[0])
        }
    </x-slot>
</x-dashboard-layout>
