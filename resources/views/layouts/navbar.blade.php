<nav
    x-data="{ displayMenu: false }"
    class="fixed top-0 z-20 bg-glass w-screen flex justify-center px-8 py-6 shadow-2xl backdrop-blur-lg items-center lg:h-[100px]"
>
    <div class="container mx-auto lg:flex lg:flex-row-reverse lg:justify-between">
        <div class="flex items-center justify-between">
            <div class="flex flex-row-reverse items-center gap-4 lg:flex-row">
                {{-- TODO: Translate ByteBite Studio --}}
                {{-- <x-button.text>
                    <span>EN</span>
                    <x-bx-arrow-up-right></x-bx-arrow-up-right>
                </x-button.text> --}}
                <x-button href="{{ route('contact-us') }}">
                    Contactanos
                </x-button>
            </div>
            <x-button.text x-on:click="displayMenu = !displayMenu" class="text-headline-medium lg:!hidden">
                <i class="bx bx-menu"></i>
            </x-button.text>
        </div>

        <ul
            x-show="displayMenu"
            x-cloak
            x-on:click.outside="displayMenu = false"
            x-transition
            class="w-full flex lg:!flex flex-col lg:flex-row divide-y lg:divide-y-0 lg:divide-x divide-secondary/20 py-4"
        >
            <div class="divide-secondary/20 flex flex-col lg:gap-4 lg:flex-row divide-y lg:divide-y-0 lg:px-4">
                <h1 class="text-headline-large px-2 py-6 lg:hidden">ByteBite Studio</h1>
                <li class="px-2 py-6 lg:p-0">
                    <x-button.text href="{{ route('home') }}" class="text-label-large font-normal lg:text-body-small">
                        Inicio
                    </x-button.text>
                </li>
                <li class="px-2 py-6 lg:p-0">
                    <x-button.text href="{{ route('about-us') }}" class="text-label-large font-normal lg:text-body-small">
                        Nosotros
                    </x-button.text>
                </li>
                <li class="px-2 py-6 lg:p-0">
                    <x-button.text href="{{ route('services') }}" class="text-label-large font-normal lg:text-body-small">
                        Servicios
                    </x-button.text>
                </li>
                <li class="px-2 py-6 lg:p-0">
                    <x-button.text href="{{ route('faq') }}" class="text-label-large font-normal lg:text-body-small">
                        FAQ
                    </x-button.text>
                </li>
                <li class="px-2 py-6 lg:p-0">
                    <x-button.text href="{{ route('policies') }}" class="text-label-large font-normal lg:text-body-small">
                        Politicas
                    </x-button.text>
                </li>
            </div>
            <li class="px-2 py-6 lg:p-0 lg:px-4">
                <x-button.text href="{{ route('portfolio') }}" class="text-label-large lg:text-body-small">
                        Portafolio
                </x-button.text>
            </li>
        </ul>
    </div>
</nav>