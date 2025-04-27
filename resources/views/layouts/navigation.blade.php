<nav x-data="{ open: false }" class="site-nav py-6">
    <div class="container nav-container max-w-screen-xl mx-auto flex items-center justify-between px-6">
        
        <!-- Logo -->
        <a href="{{ route('home') }}">
            <img src="{{ asset('images/logo-dark.png') }}" alt="Designo" class="h-6">
        </a>

        <!-- Desktop Navigation -->
        <div class="text-dark-gray space-x-8 hidden md:flex text-sm tracking-wide uppercase">
            <a href="{{ route('company') }}" class="hover:underline {{ request()->routeIs('company') ? 'font-bold' : '' }}">Our Company</a>
            <a href="{{ route('locations') }}" class="hover:underline {{ request()->routeIs('locations') ? 'font-bold' : '' }}">Locations</a>
            <a href="{{ route('contact') }}" class="hover:underline {{ request()->routeIs('contact') ? 'font-bold' : '' }}">Contact</a>
        </div>

        <!-- Hamburger Menu Button (Mobile Only) -->
        <button @click="open = !open" class="md:hidden focus:outline-none">
            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-dark-gray" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-dark-gray" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

    </div>

    <!-- Mobile Menu -->
    <div 
        x-show="open"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform scale-y-0"
        x-transition:enter-end="opacity-100 transform scale-y-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 transform scale-y-100"
        x-transition:leave-end="opacity-0 transform scale-y-0"
        class="origin-top md:hidden bg-white text-dark-gray flex flex-col items-center space-y-6 py-6 uppercase text-sm tracking-wide"
    >
        <a href="{{ route('company') }}" class="hover:underline {{ request()->routeIs('company') ? 'font-bold' : '' }}" @click="open = false">Our Company</a>
        <a href="{{ route('locations') }}" class="hover:underline {{ request()->routeIs('locations') ? 'font-bold' : '' }}" @click="open = false">Locations</a>
        <a href="{{ route('contact') }}" class="hover:underline {{ request()->routeIs('contact') ? 'font-bold' : '' }}" @click="open = false">Contact</a>
    </div>
</nav>
