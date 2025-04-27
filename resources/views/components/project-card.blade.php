<div class="rounded-lg overflow-hidden text-center flex flex-col items-center transform transition-transform duration-300 group hover:scale-105 hover:shadow-2xl">
    <a href="{{ $link }}" target="_blank" class="group w-full">
        <img src="{{ $image }}" alt="{{ $title }} Project" class="rounded-t-lg w-full">

        <div class="bg-light-gray group-hover:bg-peach rounded-b-lg p-10 transition-colors duration-300">
            <h2 class="uppercase text-peach group-hover:text-white font-medium tracking-widest text-lg mb-4 transition-colors duration-300">
                {{ $title }}
            </h2>
            <p class="text-dark-gray group-hover:text-white text-base leading-relaxed transition-colors duration-300">
                {{ $description }}
            </p>
        </div>
    </a>
</div>
