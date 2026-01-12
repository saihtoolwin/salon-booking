<header class="h-24 bg-white border-b flex items-center justify-between px-6">
    {{-- Search --}}
    <div class="w-1/3">
        <input type="text" placeholder="Search..."
            class="w-full px-4 py-3 rounded-lg bg-gray-100 border border-transparent focus:border-primary focus:ring-0" />
    </div>

    {{-- Right --}}
    <div class="flex items-center gap-4 text-primary">
        <button class="relative">
            <span class="mdi mdi-bell-badge-outline text-3xl"></span>
        </button>

        <div class="flex items-center gap-2">
            <img src="https://ui-avatars.com/api/?name=Admin" class="w-12 h-12 rounded-full">
            {{-- <span class="text-sm font-medium">
                Admin
            </span> --}}
        </div>
    </div>
</header>
