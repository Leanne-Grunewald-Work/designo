<x-app-layout>
    
    
    <!-- Header Section -->
    <section class="site-contact-us text-white">
        <div class="container contact-us-container max-w-screen-xl mx-auto  px-6 grid grid-cols-1 md:grid-cols-2 items-center text-white overflow-hidden mt-20 bg-peach rounded-t-2xl" >
    
            <!-- Text Side -->
            <div class="flex flex-col justify-center space-y-6 text-center md:text-left  bg-no-repeat bg-cover bg-center p-20 h-full "
                 style="background-image: url('/images/bg-pattern-hero-home.svg');">
                <h1 class="text-4xl md:text-5xl font-medium mb-6">Contact Us</h1>
                <p class="text-base md:text-lg leading-relaxed">
                    Ready to take it to the next level? Let’s talk about your project or idea and find out how we can help your business grow. 
                    If you are looking for unique digital experiences that’s relatable to your users, drop us a line.
                </p>
            </div>
    
            <!-- Form Side -->
            <div class="h-full py-20">
                <form id="contact-form" action="#" method="POST" class="flex flex-col space-y-6 w-full">
                    <input type="text" name="name" placeholder="Name" class="bg-transparent border-b border-white placeholder-white focus:outline-none py-3">
                    <input type="email" name="email" placeholder="Email Address" class="bg-transparent border-b border-white placeholder-white focus:outline-none py-3">
                    <input type="text" name="phone" placeholder="Phone" class="bg-transparent border-b border-white placeholder-white focus:outline-none py-3">
                    <textarea name="message" placeholder="Your Message" rows="4" class="bg-transparent border-b border-white placeholder-white focus:outline-none py-3"></textarea>
        
                    <div class="flex justify-center md:justify-start">
                        <button type="submit" class="inline-block bg-white text-dark-gray font-medium py-4 px-8 rounded-lg uppercase hover:bg-light-peach hover:text-white       transition-transform duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                    Submit
                </button>

                    </div>
                </form>
                <div id="thank-you-message" class="hidden text-center text-white mt-8">
                    <h2 class="text-2xl font-semibold">Thank you for contacting us!</h2>
                    <p class="mt-4">We will get back to you as soon as possible.</p>
                </div>
                <script>
                    const form = document.getElementById('contact-form');
                    const thankYouMessage = document.getElementById('thank-you-message');
                
                    form.addEventListener('submit', function(e) {
                        e.preventDefault(); // Stop the form from actually submitting
                
                        form.classList.add('hidden'); // Hide the form
                        thankYouMessage.classList.remove('hidden'); // Show thank you message
                    });
                </script>
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
    
</x-app-layout>
