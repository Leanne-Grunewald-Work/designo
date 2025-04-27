<x-app-layout>

    <section class="site-header text-white py-16 md:py-20">
        <div class="container header-container max-w-screen-xl mx-auto bg-peach rounded-lg mx-6 mt-10 
                    grid grid-cols-1 md:grid-cols-2 items-center gap-10 px-6 md:px-20 
                    bg-no-repeat bg-right-top md:bg-right relative"
             style="background-image: url('/images/bg-pattern-hero-home.svg');">
            
            <!-- Left Text Side -->
            <div class="flex flex-col items-center md:items-start text-center md:text-left space-y-8 py-10">
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-medium leading-tight max-w-md">
                    Award-winning custom designs and digital branding solutions
                </h1>
                <p class="text-base max-w-sm md:max-w-md">
                    With over 10 years in the industry, we are experienced in creating fully responsive websites, app design, and engaging brand experiences. Find out more about our services.
                </p>
                <a href="{{ route('company') }}" 
                    class="inline-block bg-white text-dark-gray font-medium py-5 px-6 rounded-lg uppercase mt-8 hover:bg-light-peach hover:text-white transition-transform duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                    Learn More
                </a>

            </div>
    
            <!-- Right Image Side -->
            <div class="flex justify-center">
                <img src="{{ asset('images/image-hero-phone.png') }}" alt="Phone Mockup" class="max-w-xs sm:max-w-sm md:max-w-md">
            </div>
    
        </div>
    </section>
    

    <section class="site-design-cards text-white py-20">
        <div class="container design-cards-container max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 px-6">
    
            <!-- Web Design Card (tall) -->
            <a href="{{ route('web-design') }}" class="relative group md:row-span-2">
                <img src="{{ asset('images/image-web-design.jpg') }}" 
                     class="w-full h-64 md:h-full object-cover rounded-lg transition-transform duration-500 ease-in-out group-hover:scale-105" 
                     alt="Web Design">
                <div class="absolute inset-0 bg-peach bg-opacity-0 rounded-lg transition-all duration-500 ease-in-out transform group-hover:scale-105 group-hover:bg-opacity-60"></div>
                <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center p-6">
                    <h3 class="text-3xl md:text-4xl font-medium uppercase">Web Design</h3>
                    <p class="mt-4 text-xs md:text-sm tracking-widest font-medium uppercase flex items-center gap-2">
                        View Projects 
                        <img src="{{ asset('images/icon-right-arrow.svg') }}" class="inline-block h-2 w-2">
                    </p>
                </div>
            </a>
    
            <!-- App Design Card -->
            <a href="{{ route('app-design') }}" class="relative group">
                <img src="{{ asset('images/image-app-design.jpg') }}" 
                     class="w-full h-64 md:h-full object-cover rounded-lg transition-transform duration-500 ease-in-out group-hover:scale-105" 
                     alt="App Design">
                <div class="absolute inset-0 bg-peach bg-opacity-0 rounded-lg transition-all duration-500 ease-in-out transform group-hover:scale-105 group-hover:bg-opacity-60"></div>
                <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center p-6">
                    <h3 class="text-3xl md:text-4xl font-medium uppercase">App Design</h3>
                    <p class="mt-4 text-xs md:text-sm tracking-widest font-medium uppercase flex items-center gap-2">
                        View Projects 
                        <img src="{{ asset('images/icon-right-arrow.svg') }}" class="inline-block h-2 w-2">
                    </p>
                </div>
            </a>
    
            <!-- Graphic Design Card -->
            <a href="{{ route('graphic-design') }}" class="relative group">
                <img src="{{ asset('images/image-graphic-design.jpg') }}" 
                     class="w-full h-64 md:h-full object-cover rounded-lg transition-transform duration-500 ease-in-out group-hover:scale-105" 
                     alt="Graphic Design">
                <div class="absolute inset-0 bg-peach bg-opacity-0 rounded-lg transition-all duration-500 ease-in-out transform group-hover:scale-105 group-hover:bg-opacity-60"></div>
                <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center p-6">
                    <h3 class="text-3xl md:text-4xl font-medium uppercase">Graphic Design</h3>
                    <p class="mt-4 text-xs md:text-sm tracking-widest font-medium uppercase flex items-center gap-2">
                        View Projects 
                        <img src="{{ asset('images/icon-right-arrow.svg') }}" class="inline-block h-2 w-2">
                    </p>
                </div>
            </a>
    
        </div>
    </section>
    
    <section class="site-illustrated-cards text-dark-gray py-20">
        <div class="container illustrated-cards-container max-w-screen-xl mx-auto px-6 grid grid-cols-1 gap-8 md:grid-cols-3 gap-12 text-center">
            
            <x-illustrated-card 
                illustration="images/illustration-passionate.svg"
                title="Passionate"
                circle-rotation=""
            >
                <p class="text-base leading-relaxed max-w-md pb-10 md:pb-0 w-[90%]">
                    Each project starts with an in-depth brand research to ensure we only create products that serve a purpose. 
                    We merge art, design, and technology into exciting new solutions.
                </p>
            </x-illustrated-card>
    
            <x-illustrated-card 
                illustration="images/illustration-resourceful.svg"
                title="Resourceful"
                circle-rotation="rotate-180"
            >
                <p class="text-base leading-relaxed max-w-md pb-10 md:pb-0 w-[90%]">
                    Everything we do has a strategic purpose. We use an agile approach in all of our projects and value customer collaboration. It guarantees superior results that fulfill our client's needs.
                </p>
            </x-illustrated-card>

            <x-illustrated-card 
                illustration="images/illustration-friendly.svg"
                title="Friendly"
                circle-rotation="rotate-90"
            >
                <p class="text-base leading-relaxed max-w-md pb-10 md:pb-0 w-[90%]">
                    We are a group of enthusiastic folks who know how to put people first. Our success depends on our customers, and we strive to give them the best experience a company can provide.
                </p>
            </x-illustrated-card>
    
        </div>
    </section>
    

    <!-- CTA -->
    @include('partials.cta')
    
    
    
</x-app-layout>
