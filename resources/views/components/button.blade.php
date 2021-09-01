<button type="{{ $type }}"
    {{ $attributes->merge(['class' => 'border rounded shadow-sm items-center transition ease-in-out duration-150 text-white font-bold px-4 py-2 ' . ($class == 'success' ? 'bg-green-500 hover:bg-green-600' : ($class == 'primary' ? 'bg-blue-500 hover:bg-blue-600' : ($class == 'danger' ? 'bg-red-500 hover:bg-red-600' : '')))]) }}>
    {{ $slot }}
</button>
