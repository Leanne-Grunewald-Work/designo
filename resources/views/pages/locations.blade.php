<x-app-layout>

    <!-- Map Section -->
    <section class="site-location-canada text-dark-gray py-20">
        <div class="container location-canada-container max-w-screen-xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-10 items-center">
    
            <!-- Left Side: Text Info Block (2/3 width) -->
            <div class="bg-light-gray bg-no-repeat bg-left-top bg-cover p-10 md:p-20 h-full rounded-2xl flex flex-col justify-center text-center md:text-left col-span-2"
                 style="background-image: url('/images/bg-pattern-two-circles.svg');">
                
                <h1 class="text-4xl md:text-5xl font-medium text-peach mb-10">Canada</h1>
    
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                    
                    <!-- Left Sub-Column: Office Info -->
                    <div class="space-y-2">
                        <p class="text-base md:text-lg font-bold">Designo Central Office</p>
                        <p class="text-base md:text-lg leading-relaxed">
                            3886 Wellington Street<br>Toronto, Ontario M9C 3J5
                        </p>
                    </div>
    
                    <!-- Right Sub-Column: Contact Info -->
                    <div class="space-y-2">
                        <p class="text-base md:text-lg font-bold">Contact</p>
                        <p class="text-base md:text-lg leading-relaxed">
                            P : +1 253-863-8967<br>M : contact@designo.co
                        </p>
                    </div>
    
                </div>
    
            </div>
    
            <!-- Right Side: Map Block (1/3 width) -->
            <div class="h-full rounded-2xl overflow-hidden">
                <img src="/images/image-map-canada.png" alt="Map of Canada" class="w-full h-full object-cover">
            </div>
    
        </div>
    </section>

    <!-- Map Section -->
    <section class="site-location-australia text-dark-gray py-20">
        <div class="container location-australia-container max-w-screen-xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-10 items-center">
    
            <!-- Left Side: Map Block (1/3 width) -->
            <div class="h-full rounded-2xl overflow-hidden">
                <img src="/images/image-map-australia.png" alt="Map of Australia" class="w-full h-full object-cover">
            </div>

            <!-- Right Side: Text Info Block (2/3 width) -->
            <div class="bg-light-gray bg-no-repeat bg-left-top bg-cover p-10 md:p-20 h-full rounded-2xl flex flex-col justify-center text-center md:text-left col-span-2"
                 style="background-image: url('/images/bg-pattern-two-circles.svg');">
                
                <h1 class="text-4xl md:text-5xl font-medium text-peach mb-10">Australia</h1>
    
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                    
                    <!-- Left Sub-Column: Office Info -->
                    <div class="space-y-2">
                        <p class="text-base md:text-lg font-bold">Designo AU Office</p>
                        <p class="text-base md:text-lg leading-relaxed">
                            19 Balonne Street<br>New South Wales 2443
                        </p>
                    </div>
    
                    <!-- Right Sub-Column: Contact Info -->
                    <div class="space-y-2">
                        <p class="text-base md:text-lg font-bold">Contact</p>
                        <p class="text-base md:text-lg leading-relaxed">
                            P : (02) 6720 9092<br>M : contact@designo.au
                        </p>
                    </div>
    
                </div>
    
            </div>
    
            
    
        </div>
    </section>
    
    <!-- Map Section -->
    <section class="site-location-canada text-dark-gray py-20">
        <div class="container location-canada-container max-w-screen-xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-10 items-center">
    
            <!-- Left Side: Text Info Block (2/3 width) -->
            <div class="bg-light-gray bg-no-repeat bg-left-top bg-cover p-10 md:p-20 h-full rounded-2xl flex flex-col justify-center text-center md:text-left col-span-2"
                 style="background-image: url('/images/bg-pattern-two-circles.svg');">
                
                <h1 class="text-4xl md:text-5xl font-medium text-peach mb-10">United Kingdom</h1>
    
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                    
                    <!-- Left Sub-Column: Office Info -->
                    <div class="space-y-2">
                        <p class="text-base md:text-lg font-bold">Designo UK Office</p>
                        <p class="text-base md:text-lg leading-relaxed">
                            13 Colorado Way<br>Rhyd-y-fro SA8 9GA
                        </p>
                    </div>
    
                    <!-- Right Sub-Column: Contact Info -->
                    <div class="space-y-2">
                        <p class="text-base md:text-lg font-bold">Contact</p>
                        <p class="text-base md:text-lg leading-relaxed">
                            P : 078 3115 1400<br>M : contact@designo.uk
                        </p>
                    </div>
    
                </div>
    
            </div>
    
            <!-- Right Side: Map Block (1/3 width) -->
            <div class="h-full rounded-2xl overflow-hidden">
                <img src="/images/image-map-united-kingdom.png" alt="Map of United Kingdom" class="w-full h-full object-cover">
            </div>
    
        </div>
    </section>

    <!-- CTA -->
    @include('partials.cta')
    
    
    
</x-app-layout>
