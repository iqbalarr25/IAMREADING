<x-guest-layout>
    <x-auth-card-welcome>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="fill-current text-grey-500" />
            </a>
        </x-slot>
        
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

    </x-auth-card-welcome>
</x-guest-layout>
