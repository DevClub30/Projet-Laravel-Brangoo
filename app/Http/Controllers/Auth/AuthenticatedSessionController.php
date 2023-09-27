<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
 
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request, User $user )  : RedirectResponse 
    {
        $admin=$user::find(3);
       

        $request->authenticate();

        $request->session()->regenerate();

        if($request->email===$admin->email && Hash::check($request->password,$admin->password)){

            return to_route('admin.')->with('success','Vous etes connecté');
        }

        return redirect()->intended(RouteServiceProvider::HOME)->with('success','Vous etes connecté');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

           $request->session()->invalidate();
         //$request->session()->forget('cart');

  
       // $request->session()->pull('user', 'default');


        $request->session()->regenerateToken();

        return redirect('/')->with('success','Vous etes deconnecté');
    }
}
