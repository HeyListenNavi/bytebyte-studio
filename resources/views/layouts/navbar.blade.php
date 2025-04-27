<nav
    x-data="{ displayMenu: (window.innerWidth >= 807) ? true : false }"
    x-resize="displayMenu = (window.innerWidth >= 807) ? true : false"
    class='relative bg-glass flex w-full items-center justify-center p-8 shadow-2xl backdrop-blur-lg'
    >
    <div class='container flex items-center justify-between'>
        <ul
            x-show="displayMenu"
            x-bind:attribute="{ 'x-cloak': window.innerWidth <= 807 }"
            x-on:click.outside="if (window.innerWidth <= 807) displayMenu = false"
            x-transition
            class='absolute z-100 rounded-2xl lg:static top-[120%] left-1/2 -translate-x-1/2 lg:translate-0 w-11/12 lg:w-fit p-4 gap-6 bg-glass lg:bg-transparent backdrop-blur-lg lg:backdrop-blur-none divide-y lg:divide-x divide-secondary/20 lg:divide-y-0 lg:flex'
        >
            <div class='flex flex-col lg:flex-row gap-4 py-4 lg:py-0 lg:px-4 divide-y divide-secondary/20 lg:divide-y-0'>
                <h1 class="py-4 px-2 lg:hidden text-headline-large">ByteBite Studio</h1>
                <li class="py-4 px-2 lg:py-0 lg:px-0"><x-button.text href="{{ route('home') }}" class="text-xl lg:text-body-small">Inicio</x-button.text></li>
                <li class="py-4 px-2 lg:py-0 lg:px-0"><x-button.text href="{{ route('about-us') }}" class="text-xl lg:text-body-small">Nosotros</x-button.text></li>
                <li class="py-4 px-2 lg:py-0 lg:px-0"><x-button.text href="{{ route('services') }}" class="text-xl lg:text-body-small">Servicios</x-button.text></li>
                <li class="py-4 px-2 lg:py-0 lg:px-0"><x-button.text href="{{ route('faq') }}" class="text-xl lg:text-body-small">FAQ</x-button.text></li>
                <li class="py-4 px-2 lg:py-0 lg:px-0"><x-button.text href="{{ route('policies') }}" class="text-xl lg:text-body-small">Politicas</x-button.text></li>
            </div>
            <li class="py-8 px-2 lg:py-0 lg:px-4"><x-button.text href="{{ route('portfolio') }}" class="text-xl lg:text-body-small">Portafolio</x-button.text></li>
        </ul>
        <div class='flex flex-row-reverse lg:flex-row items-center gap-4'>
            <x-button.text>
                <span>EN</span>
                <x-bx-arrow-up-right></x-bx-arrow-up-right>
            </x-button.text>
            <x-button href='#'>
                Contactanos
            </x-button>
        </div>
        <x-button.text
            x-on:click="displayMenu = !displayMenu"
            class="lg:hidden text-headline-medium">
            <i class="bx bx-menu"></i>
        </x-button.text>
    </div>
</nav>