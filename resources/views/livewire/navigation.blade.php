<div>
<nav x-data="{ open: false }" class="py-14 px-16">
    <!-- Primary Navigation Menu -->
    <div class=" max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('/') }}">
                    <x-application-logo class="block h-10 w-auto fill-current text-gray-600"/>
                </a>
            </div>
            <div class="dropdown inline-block relative my-auto ml-14">
                <div class="flex justify-between w-36">
                    <button class="text-gray-700 font-semibold text-2xl my-auto rounded inline-flex items-center">
                        <span>Categories</span>
                    </button>
                    <img src="{{ asset('img/dropdown-close.png') }}" alt="" class="w-4 my-auto">
                </div>
                <ul class="dropdown-content absolute hidden text-gray-700 pt-1">
                    <li>
                        <div class=" w-64 h-64 rounded-t bg-gray-200 py-2 px-4 block whitespace-no-wrap" href="#">
                            Option 1
                        </div>
                    </li>
                </ul>
            </div>
            <div class="relative mx-auto text-gray-600 my-auto">
                <input wire:model="search" class=" w-96 p-6 border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-md-center"
                type="search" name="search" placeholder="Search">
                    <button wire:click="search" class="absolute right-0 top-0 mt-4 mr-4">
                        <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                        viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                        width="512px" height="512px">
                        <path
                        d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                        </svg>
                    </button>
            </div>
            <div>
                <a href="/cart" class="my-auto flex-shrink-0 relative p-1"><img src="{{ asset('img/store.png') }}" alt="" class=" flex-shrink-0">
                    @auth @if($count!=0)<div class="absolute top-7 left-7 font-semibold text-white rounded-full bg-red-500 w-5 h-5 flex items-center justify-center pt-1">{{$count}}</div>@endif @endauth
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
                        <x-dropdown-link class="text-center" :href="route('logout')"
                            onclick="event.preventDefault();
                                this.closest('form').submit();">
                            {{ __('Address') }}
                        </x-dropdown-link>
                        <x-dropdown-link class="text-center" :href="route('logout')"
                            onclick="event.preventDefault();
                                this.closest('form').submit();">
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


</div>
