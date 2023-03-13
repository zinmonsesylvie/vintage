<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use App\Mail\MessageGoogle;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use App\Models\Ville;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */

    public function create(): View
    {
        $villes = Ville::All();
        return view('auth.register', compact('villes'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', Rules\Password::defaults()],
            'phone' => ['required', 'integer','min:10'],
            'ville' => ['required', 'string', 'max:255'],
        ]);
        dd($request);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone'=>$request->phone,
            'ville'=>$request->ville,
        ]);

        Mail::to($user->email)->send(new MessageGoogle($user));
        // dd($user);
        // if ($request->hasFile('image')) {
        //     $path = $request->file('image')->store('public/images');
        //     $user->image = $path;
        // }

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

}
