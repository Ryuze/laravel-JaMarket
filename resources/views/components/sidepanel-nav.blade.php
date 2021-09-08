<div id="sidepanel"
    class="
            flex flex-col
            bg-black bg-opacity-85
            text-white
            w-60
            h-full
            fixed
            left-0
        ">
    <div class="bg-black bg-opacity-50 border border-black">
        <img src="https://avatars.dicebear.com/api/initials/Jermain Johns.svg" alt="photo-profile"
            class="rounded-full h-12 w-12 items-center mx-auto m-2" />
        <p class="text-center font-bold mb-2">Jermain Johns</p>
    </div>
    <div class="mb-4 mt-2">
        <p class="text-gray-500 font-bold text-xs mb-1 ml-4 mt-2 mr-4">
            PRODUCTIONS
        </p>
        <ul>
            <li
                class="
                        text-lg
                        font-bold
                        border-0
                        rounded-md
                        transition
                        ease-in-out
                        duration-150
                        {{ strpos(url()->current(), 'product') !== false ? 'bg-gray-500 text-gray-100' : 'text-gray-400 hover:bg-gray-500 hover:text-gray-100' }}
                    ">
                <a href="{{ route('product.index') }}">
                    <p class="ml-4 py-1">
                        <i class="bi bi-basket pr-1"></i> Products
                    </p>
                </a>
            </li>
            <li
                class="
                        text-gray-400 text-lg
                        font-bold
                        border-0
                        rounded-md
                        transition
                        ease-in-out
                        duration-150
                        hover:bg-gray-500 hover:text-gray-100
                    ">
                <a href="#">
                    <p class="ml-4 py-1">
                        <i class="bi bi-bookmarks pr-1"></i> Categories
                    </p>
                </a>
            </li>
        </ul>
    </div>
    <div class="mb-4">
        <p class="text-gray-500 font-bold text-xs mb-1 ml-4 mt-2 mr-4">
            MANAGEMENTS
        </p>
        <ul>
            <li
                class="
                        text-gray-400 text-lg
                        font-bold
                        border-0
                        rounded-md
                        transition
                        ease-in-out
                        duration-150
                        hover:bg-gray-500 hover:text-gray-100
                    ">
                <a href="#">
                    <p class="ml-4 py-1">
                        <i class="bi bi-people pl-1"></i> Users
                    </p>
                </a>
            </li>
        </ul>
    </div>
</div>
