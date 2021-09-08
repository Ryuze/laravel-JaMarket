<x-dashboard-layout>
    <x-slot name="title">
        Product
    </x-slot>

    @if (session('status'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 2000)"
            x-transition:enter="transition duration-200 ease-out" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="transition duration-200 ease-in"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
            class="bg-green-400 text-white py-1">
            <p class="ml-4">
                {{ session('status') }}
            </p>
        </div>
    @endif

    <div class="flex flex-col m-4">
        <div class="mt-4 mb-4">
            <a href="{{ route('product.create') }}"
                class="px-2 py-4 rounded-md transition ease-in-out duration-200 bg-green-500 hover:bg-green-600 text-white font-bold">Add
                product</a>
        </div>

        {{-- cardview disini --}}
        <div class="grid grid-cols-1 gap-4 md:grid-cols-5">
            <x-card :name="'Nama barang'" :price="5000" />
        </div>

    </div>
</x-dashboard-layout>
