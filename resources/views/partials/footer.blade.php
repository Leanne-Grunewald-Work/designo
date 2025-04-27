<footer class="site-footer bg-[#1D1C1E] text-white text-sm py-20">
    <div class="container footer-container max-w-screen-xl mx-auto px-6 py-16 flex flex-col items-center md:items-start space-y-12">

        <!-- Logo and Navigation Links -->
        <div class="w-full flex flex-col md:flex-row md:justify-between md:items-center text-center md:text-left space-y-8 md:space-y-0 border-b border-white/20 pb-8">
            <img src="{{ asset('images/logo-light.png') }}" alt="Designo Logo" class="mx-auto md:mx-0 h-6">
            <nav class="flex flex-col space-y-4 md:flex-row md:space-y-0 md:space-x-8 uppercase tracking-widest text-xs mt-4 md:mt-0">
                <a href="{{ route('company') }}" 
                   class="hover:underline {{ request()->routeIs('company') ? 'font-bold' : '' }}">
                    Our Company
                </a>
            
                <a href="{{ route('locations') }}" 
                   class="hover:underline {{ request()->routeIs('locations') ? 'font-bold' : '' }}">
                    Locations
                </a>
            
                <a href="{{ route('contact') }}" 
                   class="hover:underline {{ request()->routeIs('contact') ? 'font-bold' : '' }}">
                    Contact
                </a>
            </nav>
            
        </div>

        <!-- Address and Contact Information -->
        <div class="w-full flex flex-col md:flex-row justify-between space-y-12 md:space-y-0 text-center md:text-left text-white/70">

            <!-- Address -->
            <div class="space-y-2">
                <p class="font-bold text-white/50">Designo Central Office</p>
                <p class="text-white/50">3886 Wellington Street<br>Toronto, Ontario M9C 3J5</p>
            </div>

            <!-- Contact -->
            <div class="space-y-2">
                <p class="font-bold text-white/50">Contact Us (Central Office)</p>
                <p class="font-bold text-white/50">P : +1 253-863-8967<br>M : contact@designo.co</p>
            </div>

            <!-- Social Media Icons -->
            <div class="flex justify-center md:justify-end space-x-4 md:self-end">
                <a href="#" aria-label="Facebook" class="group transition">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 fill-peach group-hover:fill-light-peach transition">
                        <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 5 3.66 9.13 8.44 9.88v-6.99h-2.54v-2.89h2.54V9.41c0-2.5 1.49-3.89 3.78-3.89 1.09 0 2.24.2 2.24.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56v1.87h2.78l-.44 2.89h-2.34v6.99C18.34 21.13 22 17 22 12z"/>
                    </svg>
                </a>                
                <a href="#" aria-label="YouTube" class="group transition">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 fill-peach group-hover:fill-light-peach transition">
                        <path d="M19.615 3.184C17.71 2.681 12 2.681 12 2.681s-5.709 0-7.615.503C2.579 3.733 2.005 5.321 2 8.12v7.76c.005 2.8.579 4.388 2.385 4.936C6.291 21.32 12 21.32 12 21.32s5.709 0 7.615-.504c1.806-.548 2.38-2.136 2.385-4.936v-7.76c-.005-2.8-.579-4.387-2.385-4.936zM10 15V9l6 3-6 3z"/>
                    </svg>
                </a>
                <a href="#" aria-label="Twitter" class="group transition">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 fill-peach group-hover:fill-light-peach transition">
                        <path d="M22.46 6c-.77.35-1.6.59-2.46.69a4.3 4.3 0 001.88-2.37 8.59 8.59 0 01-2.72 1.04 4.28 4.28 0 00-7.29 3.9A12.15 12.15 0 013 5.1a4.28 4.28 0 001.32 5.7 4.26 4.26 0 01-1.94-.53v.05a4.29 4.29 0 003.43 4.2 4.3 4.3 0 01-1.93.07 4.29 4.29 0 004 3A8.6 8.6 0 012 19.54a12.13 12.13 0 006.56 1.92c7.88 0 12.2-6.53 12.2-12.2 0-.19-.01-.39-.02-.58A8.72 8.72 0 0022.46 6z"/>
                    </svg>
                </a>
                <a href="#" aria-label="Pinterest" class="group transition">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 fill-peach group-hover:fill-light-peach transition">
                        <path d="M12 2C6.48 2 2 6.48 2 12c0 4.18 2.59 7.76 6.22 9.15-.09-.78-.17-1.98.04-2.83.19-.78 1.22-4.97 1.22-4.97s-.31-.62-.31-1.53c0-1.43.83-2.5 1.87-2.5.88 0 1.3.66 1.3 1.46 0 .89-.57 2.22-.86 3.45-.24.99.51 1.8 1.5 1.8 1.8 0 3.17-1.9 3.17-4.64 0-2.43-1.75-4.14-4.25-4.14-2.9 0-4.6 2.17-4.6 4.41 0 .88.34 1.83.77 2.34.08.1.09.19.06.3-.06.33-.2 1.04-.23 1.18-.04.19-.15.23-.35.14-1.3-.6-2.11-2.48-2.11-3.99 0-3.26 2.36-6.26 6.82-6.26 3.58 0 6.36 2.55 6.36 5.96 0 3.55-2.23 6.41-5.33 6.41-1.04 0-2.01-.54-2.34-1.18l-.64 2.43c-.23.9-.85 2.02-1.27 2.7.95.29 1.96.45 3 .45 5.52 0 10-4.48 10-10S17.52 2 12 2z"/>
                    </svg>
                </a>
                <a href="#" aria-label="Instagram" class="group transition">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 fill-peach group-hover:fill-light-peach transition">
                        <path d="M7 2C4.243 2 2 4.243 2 7v10c0 2.757 2.243 5 5 5h10c2.757 0 5-2.243 5-5V7c0-2.757-2.243-5-5-5H7zm10 2a3 3 0 013 3v10a3 3 0 01-3 3H7a3 3 0 01-3-3V7a3 3 0 013-3h10zm-5 3a5 5 0 100 10 5 5 0 000-10zm0 2a3 3 0 110 6 3 3 0 010-6zm5.5-3a1.5 1.5 0 100 3 1.5 1.5 0 000-3z"/>
                    </svg>
                </a>
            </div>

        </div>

    </div>
</footer>
