<x-app-layout>

    <!-- Header Section -->
    <section class="site-design-header text-white">
        <div class="container design-header-container max-w-screen-xl mx-auto bg-peach rounded-lg mx-6 mt-10 px-6 md:px-20 bg-no-repeat bg-right-top md:bg-right relative py-16 md:py-20"
             style="background-image: url('/images/bg-pattern-call-to-action.svg');">
            
            <h1 class="text-4xl md:text-5xl font-medium mb-6 text-center">Graphic Design</h1>
            
            <p class="mx-auto text-base md:text-lg leading-relaxed text-center md:w-[40%]">
                We deliver eye-catching branding materials that are tailored to meet your business objectives.
            </p>
    
        </div>
    </section>
    
        

    <!-- Projects Grid -->
    <section class="site-projects-grid text-dark-gray py-16 md:py-20">
        <div class="container projects-grid-container max-w-screen-xl mx-auto py-20 px-6 grid grid-cols-1 md:grid-cols-3 gap-12">
            @foreach ($projects as $project)
                <x-project-card 
                    image="{{ asset('storage/' . $project->image_path) }}"
                    title="{{ $project->title }}"
                    description="{{ $project->description }}"
                    link="{{ $project->link }}"
                />
            @endforeach
        </div>
    </section>

    <!-- Other Design Links -->
    <section class="site-design-cards text-white py-20">
        <div class="container design-cards-container max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 px-6">
    
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

            <!-- Web Design Card -->
            <a href="{{ route('web-design') }}" class="relative group">
                <img src="{{ asset('images/image-web-design-small.jpg') }}" 
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
    
            
    
        </div>
    </section>

    <!-- CTA -->
    @include('partials.cta')

</x-app-layout>
