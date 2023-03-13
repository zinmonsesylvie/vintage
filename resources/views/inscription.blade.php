<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
</head>
<body class="">
<div class="container fond" >
    <div class="main-card mb-3 card">
        <div class="card-body">
<form  method="POST" action="{{ route('register') }}">

    @csrf




        <div class="row">
            <div class="col-lg-6">
                 <!-- Name -->
         <div class="mt-4 form-group">
            <x-input-label for="name" >Username</x-input-label>
            <x-text-input id="name" type="text" class="form-control input-sm" name="name"  />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
            </div>


            <div class="col-lg-6">
                 <!-- Email -->
        <div class="mt-4 form-group">
            <x-input-label for="email" >Email</x-input-label>
            <x-text-input id="email" type="email" class="form-control input-sm" name="email"  />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                 <!-- Password -->
        <div class="mt-4 form-group">
            <x-input-label for="password">Password</x-input-label>

            <x-text-input id="password"
                            type="password"
                            name="password" class="form-control input-sm"
                            />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
            </div>


            <div class="col-lg-6">
                 <!-- Confirm Password -->
        <div class="mt-4 form-group">
            <x-input-label for="password_confirmation">Confirm Password</x-input-label>

            <x-text-input id="password_confirmation"
                            type="password"
                            name="password_confirmation" class="form-control input-sm"  />

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
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>
            </div>


            <div class="col-lg-6">
                <!-- Ville -->
        <div class="mt-4 form-group">
            <x-input-label for="phone" >Ville</x-input-label>
            <x-text-input id="ville" type="text" class="form-control input-sm" name="ville"  />
            <x-input-error :messages="$errors->get('ville')" class="mt-2" />
        </div>
            </div>
        </div>


         <!--Image -->
         <div class="form-group" >
            <label for="image" class="margin-right:50px">Image de profil </label>
            <input type="file" name="image" class="form-control input-sm " id="image">
        </div>

        <div class="row">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                Already registered?
            </a>
        <button type="submit" class="btn btn-primary mt-4">Register</button>
        </div>
</form>
        </div>
    </div>
</div>
</body>
</html>
