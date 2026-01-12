<aside class="w-70 bg-secondary border-r flex flex-col text-gray-400">
    {{-- Logo --}}
    <div class="h-24 w-[280px] flex justify-center items-center border-b">
        {{-- Bigger text logo --}}
        <h1 class="text-3xl font-bold font-heading text-white">EveryDay</h1>
    </div>

    {{-- Menu --}}
    <nav class="flex-1 px-4 py-4 space-y-1 text-md font-semibold">

        {{-- Dashboard --}}
        <div class="px-3 py-2 uppercase text-sm  font-bold text-white flex items-center gap-2  border-b border-gray-400">Dashboard Management</div>
        <a href="{{ route('admin.home') }}"
            class="flex items-center gap-3 px-3 py-3 rounded-lg font-bold
           {{ request()->routeIs('admin.home') ? 'text-white bg-white/15' : 'text-gray-400 hover:text-white hover:bg-primary/20' }}">
            <span class="mdi mdi-home-outline text-2xl"></span>
            Home
        </a>

        {{-- Booking Title --}}
        <div class="px-3 py-2 uppercase text-sm  font-bold text-white flex items-center gap-2  border-b border-gray-400">
            Booking Management
        </div>
        <a href="#"
            class="block px-3 py-3 rounded-lg text-gray-400 text-md font-semibold text-md hover:text-white hover:bg-primary/20 flex items-center gap-2">
            <span class="mdi mdi-book-account-outline text-2xl"></span>
            All Bookings
        </a>
        <a href="#"
            class="block px-3 py-3 rounded-lg text-gray-400 text-md font-semibold text-md hover:text-white hover:bg-primary/20 flex items-center gap-2">
            <span class="mdi mdi-clock-outline text-2xl"></span>
            Pending
        </a>

        {{-- Users Title --}}
        <div class="px-3 py-2 uppercase text-sm  font-bold text-white flex items-center gap-2  border-b border-gray-400">
             Users Management
        </div> 
        <a href="#"
            class="block px-3 py-3 rounded-lg text-gray-400 text-md font-semibold text-md hover:text-white hover:bg-primary/20 flex items-center gap-2">
            <span class="mdi mdi-account-group-outline text-2xl"></span>
            All Users
        </a>
        <a href="#"
            class="block px-3 py-3 rounded-lg text-gray-400 text-md font-semibold text-md hover:text-white hover:bg-primary/20 flex items-center gap-2">
            <span class="mdi mdi-account-key text-2xl"></span>
            Roles
        </a>

        {{-- Barbers Title --}}
        <div class="px-3 py-2 uppercase text-sm  font-bold text-white flex items-center gap-2  border-b border-gray-400">
            Barbers Management
        </div>
        <a href="#"
            class="block px-3 py-3 rounded-lg text-gray-400 text-md font-semibold text-md hover:text-white hover:bg-primary/20 flex items-center gap-2">
            <span class="mdi mdi-account-tie text-2xl"></span>
            All Barbers
        </a>

        {{-- Services Title --}}
        <div class="px-3 py-2 uppercase text-sm  font-bold text-white flex items-center gap-2  border-b border-gray-400">
             Services Management
        </div>
        <a href="#"
            class="block px-3 py-3 rounded-lg text-gray-400 text-md font-semibold text-md hover:text-white hover:bg-primary/20 flex items-center gap-2">
            <span class="mdi mdi-cog-outline text-2xl"></span>
            All Services
        </a>

    </nav>

    {{-- Footer --}}
    <div class="border-t p-4">
        <button type="button"
            class="flex items-center gap-3 px-3 py-3 rounded-lg text-gray-400 hover:text-white hover:bg-primary/20 w-full text-left">
            <span class="mdi mdi-logout text-2xl"></span>
            Logout
        </button>
    </div>
</aside>
