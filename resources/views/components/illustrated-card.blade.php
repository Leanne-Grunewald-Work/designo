<div class="space-y-8 relative flex flex-col items-center text-center" data-aos="fade-up">
    <!-- Small Circle Background -->
    <img src="{{ asset('images/bg-pattern-small-circle.svg') }}" 
         alt="Small Circle" 
         class="absolute h-40 md:h-56 z-0 {{ $circleRotation ?? '' }} -top-4">
    
    <!-- Illustration -->
    <img src="{{ asset($illustration) }}" 
         alt="{{ $title }}" aria-hidden="true"
         class="relative h-32 md:h-48 z-10">
    
    <!-- Heading -->
    <h3 class="text-2xl font-medium uppercase tracking-widest">{{ $title }}</h3>

    <!-- Flexible Bottom Content -->
    <div>
        {{ $slot }}
    </div>
</div>
