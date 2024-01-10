
<span class="absolute text-white text-4xl top-5 left-4 cursor-pointer" onclick="openSidebar()">
    <i class="bi bi-filter-left px-2 bg-gray-900 rounded-md"></i>
</span>
<div class="sidebar fixed top-0 bottom-0 lg:left-0 p-2 w-[300px] overflow-y-auto text-center bg-gray-900">
    <div class="text-gray-100 text-xl">
        <div class="p-2.5 mt-1 flex items-center">
            <i class="bi bi-app-indicator px-2 py-1 rounded-md bg-blue-600"></i>
            <h1 class="font-bold text-gray-200 text-[15px] ml-3">TailwindCSS</h1>
            <i class="bi bi-x cursor-pointer ml-28 lg:hidden" onclick="openSidebar()"></i>
        </div>
        <div class="my-2 bg-gray-600 h-[1px]"></div>
    </div>
    <div class="p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-gray-700 text-white">
        <i class="bi bi-search text-sm"></i>
        <input type="text" placeholder="Search" class="text-[15px] ml-4 w-full bg-transparent focus:outline-none" />
    </div>
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
        <i class="bi bi-house-door-fill"></i>
        <span class="text-[15px] ml-4 text-gray-200 font-bold">Home</span>
    </div>
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
        <i class="bi bi-bookmark-fill"></i>
        <span class="text-[15px] ml-4 text-gray-200 font-bold">Bookmark</span>
    </div>
    <div class="my-4 bg-gray-600 h-[1px]"></div>
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
        onclick="dropdown()">
        <i class="bi bi-chat-left-text-fill"></i>
        <div class="flex justify-between w-full items-center">
            <span class="text-[15px] ml-4 text-gray-200 font-bold">Chatbox</span>
            <span class="text-sm rotate-180" id="arrow">
                <i class="bi bi-chevron-down"></i>
            </span>
        </div>
    </div>
    <div class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-200 font-bold" id="submenu">
        <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            Social
        </h1>
        <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            Personal
        </h1>
        <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            Friends
        </h1>
    </div>
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
        <i class="bi bi-box-arrow-in-right"></i>
        <span class="text-[15px] ml-4 text-gray-200 font-bold">Logout</span>
    </div>
</div>
<div class="flex justify-center  ">
    <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5 w-1/2">
        <table class="w-full text-end border-collapse bg-white text-left text-sm text-gray-500">
            <!-- Your table content goes here -->
            <thead class="bg-gray-50 w-50 mx-5">
                <tr class="w-50">
                    <th scope="col" class="px-6 py-4 w-50 font-medium text-gray-900">Name</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">State</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Role</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Team</th>
                   
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 border-t border-gray-100">
            <tr>
                <tr class="hover:bg-gray-50">
                    <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                        <div class="relative h-10 w-10">
                            <img class="h-full w-full rounded-full object-cover object-center"
                                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="" />
                            <span
                                class="absolute right-0 bottom-0 h-2 w-2 rounded-full bg-green-400 ring ring-white"></span>
                        </div>
                        <div class="text-sm">
                            <div class="font-medium text-gray-700">Steven Jobs</div>
                            <div class="text-gray-400">jobs@sailboatui.com</div>
                        </div>
                    </th>
                    <td class="px-6 py-4">
                        <span
                            class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                            <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                            Active
                        </span>
                    </td>
                    <td class="px-6 py-4">Product Designer</td>
                    <td class="px-6 py-4">
                        <div class="flex gap-2">
                            <span
                                class="inline-flex items-center gap-1 rounded-full bg-blue-50 px-2 py-1 text-xs font-semibold text-blue-600">
                                Design
                            </span>
                            <span
                                class="inline-flex items-center gap-1 rounded-full bg-indigo-50 px-2 py-1 text-xs font-semibold text-indigo-600">
                                Product
                            </span>
                            <span
                                class="inline-flex items-center gap-1 rounded-full bg-violet-50 px-2 py-1 text-xs font-semibold text-violet-600">
                                Develop
                            </span>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex justify-end gap-4">
                            <a x-data="{ tooltip: 'Delete' }" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>
                            </a>
                            <a x-data="{ tooltip: 'Edite' }" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                </svg>
                            </a>
                        </div>
                    </td>
                </tr>
                </tr>
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
    function dropdown() {
        document.querySelector("#submenu").classList.toggle("hidden");
        document.querySelector("#arrow").classList.toggle("rotate-0");
    }
    dropdown();
    </script>

