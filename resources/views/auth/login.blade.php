<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />


        <div class="logo">
          <h2><img src="/images/favicon.png" alt="" srcset=""> Brangoo...</h2>
        </div>

            <h4>Bonjour! Veuillez-vous connecter pour continuer</h4>

        <form class="pt-3" method="POST" action="{{ route('login') }}">

            @csrf
                            
          <div class="form-group">
            <input type="email" class="form-control form-control-lg" name="email" id="exampleInputEmail1" placeholder="Username" required autofocus autocomplete="username">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
          </div>

          <div class="form-group">
            <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="Password" required autocomplete="current-password">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
          </div>

          <div class="mt-3">
            <x-primary-button class="btn btn-block btn-success btn-lg font-weight-medium auth-form-btn">
                {{ __('Se connecter') }}
            </x-primary-button>
          </div>

          <div class="my-2 d-flex justify-content-between align-items-center">
            <div class="form-check">
              <label class="text-muted">
                <input type="checkbox" class="form-check-input">
                    {{ __('Se souvenir de moi') }}
              </label>
            </div>
            @if (Route::has('password.request'))
                <a class="auth-link text-black" href="{{ route('password.request') }}">
                    {{ __('Mot de passe oublié?') }}
                </a>
            @endif
          </div>

          <div class="text-center mt-4 font-weight-light">
            Vous n'avez pas de compte ? 
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="">S'inscrire</a>
            @endif
          </div>

        </form>

                    
</x-guest-layout>
