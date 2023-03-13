<x-guest-layout>
    <div class="container forgo main-card mb-3 card card-body">

    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="mt-4 form-group">
            <x-input-label for="email" >Email</x-input-label>
            <x-text-input id="email" type="email" class="form-control input-sm" name="email" placeholder="Entrer votre email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="a">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>

    </div>
</x-guest-layout>
