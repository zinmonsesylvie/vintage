<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="container lo main-card mb-3 card card-body">
            <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
         <!-- Email -->
         <div class="mt-4 form-group">
            <x-input-label for="email" >Email</x-input-label>
            <x-text-input id="email" type="email" class="form-control input-sm" name="email"  />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4 form-group">
            <x-input-label for="password">Password</x-input-label>

            <x-text-input id="password"
                            type="password"
                            name="password" class="form-control input-sm"
                            />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3 b">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
    </div>
</x-guest-layout>
