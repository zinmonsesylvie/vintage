<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

    <div class="container fond">
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
