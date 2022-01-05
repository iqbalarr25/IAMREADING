<nav x-data="{ open: false }" class="py-14 px-16">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('/') }}">
                    <x-application-logo class="block h-10 w-auto fill-current text-gray-600"/>
                </a>
            </div>

            <!-- Settings Dropdown -->
            
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                @auth
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-xl font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <img src="{{ asset('img/circle_account.png') }}" alt="circle_account" class="mr-4">
                            <div class="my-auto font-semibold text-gray-600 text-2xl">{{ Auth::user()->name }}</div>
                            <div class="ml-2 mb-1">
                                <svg class="fill-current h-7 w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link class="text-center" href="/profile">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                        <x-dropdown-link class="text-center" href="/address">
                            {{ __('Address') }}
                        </x-dropdown-link>
                        <x-dropdown-link class="text-center" href="/history">
                            {{ __('History') }}
                        </x-dropdown-link>
                        @if(Auth::user()->role == 'admin')
                        <x-dropdown-link class="text-center" href="/admin">
                            {{ __('Admin') }}
                        </x-dropdown-link>
                        @endif
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link class="text-center" :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
                @endauth
                @guest
                <div class=" w-80 my-auto flex justify-between flex-shrink-0">
                    <div class="flex">
                        <a href="/" class="my-auto flex-shrink-0 pr-6"><img src="{{ asset('img/store.png') }}" alt="" class=" flex-shrink-0"></a>
                        <form action="{{ route('login') }}">
                            <button class="text-2xl font-bold font-medium text-yellow-500 py-1 px-4 border border-yellow-500 hover:text-white hover:bg-yellow-500 rounded mx-2 shadow"><div class=" mt-1">Sign in</div></button>
                        </form>
                        <form action="{{ route('register') }}">
                            <button class="text-2xl font-bold font-medium text-yellow-500 py-1 px-4 border border-yellow-500 hover:text-white hover:bg-yellow-500 rounded mx-2 shadow" href="{{ route('register') }}"><div class=" mt-1">Sign up</div></button>
                        </form>
                    </div>
                </div>
                @endguest
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('/')" :active="request()->routeIs('/')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            @auth
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
            @endauth
        </div>
    </div>
</nav>
