
<x-guest-layout>
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <div class="container fond main-card mb-3 card card-body">
    <form  method="POST" action="{{ route('register') }}">
        @csrf
            <div class="row">
                <div class="col-lg-6">
                     <!-- Name -->
                    <div class="mt-4 form-group">
                        <x-input-label for="name" >Username</x-input-label>
                        <x-text-input id="name" type="text" class="form-control input-sm" name="name">
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                </div>


                <div class="col-lg-6">
                    <!-- Email -->
                    <div class="mt-4 form-group">
                        <x-input-label for="email" >Email</x-input-label>
                        <x-text-input id="email" type="email" class="form-control input-sm" name="email"  />
                        <i class="zmdi zmdi-email"></i>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                     <!-- Password -->
                    <div class="mt-4 form-group">
                        <x-input-label for="password">Password</x-input-label>
                        <x-text-input id="password" type="password" name="password" class="form-control input-sm"/>
                        <i class="zmdi zmdi-lock"></i>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Confirm Password -->
                    <div class="mt-4 form-group">
                        <x-input-label for="password_confirmation">Confirm Password</x-input-label>
                        <x-text-input id="password_confirmation" type="password" name="password_confirmation" class="form-control input-sm" required autocomplete="current-password"/>
                        <i class="zmdi zmdi-lock"></i>
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                     <!-- Phone -->
                    <div class="mt-4 form-group">
                        <x-input-label for="phone" >Phone</x-input-label>
                        <x-text-input id="phone" type="tel" class="form-control input-sm" name="phone" />
                        <i class="bi bi-telephone-fille"></i>
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>
                </div>

                <div class="col-lg-6">
                    <!-- Ville -->
                    <div class="mt-4 form-group">
                        <x-input-label for="ville" >Ville</x-input-label>
                        <select name = "ville" class="form-control input-sm">
                            <option value="">Selectionner une ville</option>
                            @foreach ( $villes as $ville)
                                <option value="{{ $ville->id}}">{{ $ville->nom}}</option>
                            @endforeach

                        </select>
                        <i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
                        <x-input-error :messages="$errors->get('ville')" class="mt-2" />
                    </div>
                </div>
            </div>


            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4 c">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
