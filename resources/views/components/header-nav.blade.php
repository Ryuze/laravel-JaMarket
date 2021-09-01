<div id="header" class="shadow">
    <div class="max-w-full mx-auto px-4">
        <div class="flex flex-row justify-between ml-4 mr-4">
            <div class="my-auto relative inline-block">
                <div class="flex flex-row">
                    <img src="https://vuejs.org/images/logo.svg" alt="logo" class="h-8 w-auto mt-4 mb-4" />
                    <p class="my-auto text-center ml-2 text-xl font-bold">
                        Logo
                    </p>
                </div>
            </div>
            <div class="flex flex-row relative">
                <input type="text"
                    class="
                        my-auto
                        rounded-md
                        w-screen
                        hidden
                        md:block md:max-w-md
                        lg:max-w-xl
                        xl:max-w-4xl
                        shadow-sm
                        border border-gray-400 border-opacity-10
                        placeholder-gray-300
                        bg-gray-50
                        text-gray-500
                        focus:ring-0
                        focus:shadow-md
                        focus:border-gray-400
                        focus:border-opacity-60
                        focus:bg-white
                        hover:shadow-md
                    "
                    placeholder="Search here" />
            </div>
            <div class="my-auto relative inline-block" x-data="{ isOpen: false }">
                <div class="flex flex-row">
                    <x-button :type="'button'" :class="'success'" x-on:click="isOpen = !isOpen">
                        <div class="flex flex-row">
                            Jermain Johns
                            <div class="pt-mini">
                                <i class="bi bi-caret-down ml-2"></i>
                            </div>
                        </div>
                    </x-button>
                </div>
                <div x-show="isOpen" x-transition:enter="transition duration-200 ease-out"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                    x-transition:leave="transition duration-200 ease-in" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="
                            origin-top-right
                            absolute
                            right-0
                            mt-2
                            w-56
                            rounded-md
                            shadow-lg
                            bg-white
                            ring-1 ring-black ring-opacity-5
                            focus:outline-none
                        ">
                    <div class="py-1">
                        <div class="border-b-2 border-gray-200 mb-2">
                            <img src="https://randomuser.me/api/portraits/men/76.jpg" alt="photo-profile"
                                class="
                                        rounded-full
                                        h-12
                                        w-12
                                        items-center
                                        mx-auto
                                        m-2
                                    " />
                            <p
                                class="
                                        text-center text-gray-700
                                        font-thin
                                        mb-2
                                    ">
                                Jermain Johns
                            </p>
                        </div>
                        <a href="#"
                            class="
                                    text-gray-700
                                    block
                                    px-4
                                    py-2
                                    text-sm
                                    hover:bg-gray-100
                                ">asd</a>
                        <a href="#"
                            class="
                                    text-gray-700
                                    block
                                    px-4
                                    py-2
                                    text-sm
                                    hover:bg-gray-100
                                ">qwe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
