<x-app-layout>

    <!-- Header Section -->
    <section class="site-about-us text-white">
        <div class="container about-us-container max-w-screen-xl mx-auto py-20 px-6 grid grid-cols-1 md:grid-cols-2 items-center text-white overflow-hidden mt-20">
    
            <!-- Text Side -->
            <div class="flex flex-col justify-center space-y-6 text-center md:text-left bg-peach bg-no-repeat bg-cover bg-center p-20 h-full rounded-t-2xl md:rounded-l-2xl md:rounded-tr-none"
                 style="background-image: url('/images/bg-pattern-hero-home.svg');">
                <h1 class="text-4xl md:text-5xl font-medium mb-6">About Us</h1>
                <p class="text-base md:text-lg leading-relaxed">
                    Founded in 2010, we are a creative agency that produces lasting results for our clients. 
                    We’ve partnered with many startups, corporations, and nonprofits alike to craft designs that make real impact. 
                    We’re always looking forward to creating brands, products, and digital experiences that connect with our clients’ audiences.
                </p>
            </div>
    
            <!-- Image Side -->
            <div class="h-full">
                <img src="/images/image-about-hero.jpg" alt="Team collaborating" class="w-full h-full object-cover rounded-b-2xl md:rounded-r-2xl md:rounded-bl-none">
            </div>
    
        </div>
    </section>

    <!-- Header Section -->
    <section class="site-world-talent text-dark-gray">
        <div class="container world-talent-container max-w-screen-xl mx-auto py-20 px-6 grid grid-cols-1 md:grid-cols-2 items-center text-dark-gray overflow-hidden mt-20">
      
            <!-- Image Side -->
            <div class="h-full">
                <img src="/images/image-world-class-talent.jpg" alt="World-class Talent" class="w-full h-full object-cover rounded-b-2xl md:rounded-l-2xl md:rounded-br-none">
            </div>

            <!-- Text Side -->
            <div class="flex flex-col justify-center space-y-6 text-center md:text-left bg-light-gray p-20 h-full rounded-t-2xl md:rounded-r-2xl md:rounded-tl-none">
                <h1 class="text-4xl md:text-5xl font-medium mb-6 text-peach">World-class talent</h1>
                <p class="text-base md:text-lg leading-relaxed">
                    We are a crew of strategists, problem solvers, and technologists. Every design is thoughtfully crafted from concept to launch, ensuring success in its given market. We are constantly updating our skills in a myriad of platforms.
                </p>
                <p class="text-base md:text-lg leading-relaxed">
                    Our team is multi-disciplinary and we are not merely interested in form — content and meaning are just as important. We give great importance to craftsmanship, service, and prompt delivery. Clients have always been impressed with our high-quality outcomes that encapsulate their brand’s story and mission.
                </p>
            </div>
    
        </div>
    </section>

    <section class="site-locations-cards text-dark-gray py-20">
        <div class="container locations-cards-container max-w-screen-xl mx-auto px-6 grid grid-cols-1 gap-8 md:grid-cols-3 gap-12 text-center">
            
            <x-illustrated-card 
                illustration="images/illustration-canada.svg"
                title="Canada"
                circle-rotation=""
            >
                <a href="{{ route('locations') }}" class="inline-block bg-peach text-white font-medium uppercase tracking-wider py-4 px-8 rounded-lg hover:bg-light-peach transition-transform duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                    See Location
                </a>
            </x-illustrated-card>

            <x-illustrated-card 
                illustration="images/illustration-australia.svg"
                title="Australia"
                circle-rotation="rotate-180"
            >
                <a href="{{ route('locations') }}" class="inline-block bg-peach text-white font-medium uppercase tracking-wider py-4 px-8 rounded-lg hover:bg-light-peach transition-transform duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                    See Location
                </a>
            </x-illustrated-card>

            <x-illustrated-card 
                illustration="images/illustration-united-kingdom.svg"
                title="United Kingdom"
                circle-rotation="rotate-90"
            >
                <a href="{{ route('locations') }}" class="inline-block bg-peach text-white font-medium uppercase tracking-wider py-4 px-8 rounded-lg hover:bg-light-peach transition-transform duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                    See Location
                </a>
            </x-illustrated-card>

    
        </div>
    </section>

    <!-- Header Section -->
    <section class="site-real-deal text-dark-gray">
        <div class="container real-deal-container max-w-screen-xl mx-auto py-20 px-6 grid grid-cols-1 md:grid-cols-2 items-center text-dark-gray overflow-hidden mt-20">
      
            <!-- Text Side -->
            <div class="flex flex-col justify-center space-y-6 text-center md:text-left bg-light-gray p-20 h-full rounded-t-2xl md:rounded-l-2xl md:rounded-tr-none">
                <h1 class="text-4xl md:text-5xl font-medium mb-6 text-peach">The real deal</h1>
                <p class="text-base md:text-lg leading-relaxed">
                    As strategic partners in our clients’ businesses, we are ready to take on any challenge as our own. Solving real problems requires empathy and collaboration, and we strive to bring a fresh perspective to every opportunity. We make design and technology more accessible and give you tools to measure success.
                </p>
                <p class="text-base md:text-lg leading-relaxed">
                    We are visual storytellers in appealing and captivating ways. By combining business and marketing strategies, we inspire audiences to take action and drive real results.
                </p>
            </div>

            <!-- Image Side -->
            <div class="h-full">
                <img src="/images/image-real-deal.jpg" alt="The Real Deal" class="w-full h-full object-cover rounded-b-2xl md:rounded-r-2xl md:rounded-bl-none">
            </div>

            
    
        </div>
    </section>
    
    <!-- CTA -->
    @include('partials.cta')
    
    
</x-app-layout>
