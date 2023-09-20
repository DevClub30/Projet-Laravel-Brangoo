<x-guest-layout>
    

    <!-- ------------------------------------------------------------------------- -->




                <div class="logo">
                  <h2><img src="/images/favicon.png" alt="" srcset=""> Brangoo...</h2>
                </div>

                    <h4>Bonjour! Veuillez-vous inscrire pour continuer</h4>

                <form class="pt-3" method="POST" action="{{ route('register') }}">

                        @csrf

                    <div class="form-group">
                      <input type="text" class="form-control form-control-lg" name="name" id="exampleInputUsername1" placeholder="Nom d'utilisateur" required autofocus autocomplete="username">
                      <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="form-group">
                      <input type="email" class="form-control form-control-lg" name="email" id="exampleInputEmail1" placeholder="Brangoo@gmail.com" required autofocus autocomplete="email">
                      <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Mot de passe">
                      <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="form-group">
                      <input type="password" name="password_confirmation" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Confirmer Mot de passe">
                      <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="mb-4">

                      <div class="form-check">
                        <label class="text-muted">
                          <input type="checkbox" class="form-check-input">
                            J'accepte tous les termes et conditions
                        </label>
                      </div>

                    </div>

                    <div class="mt-3">
                        <x-primary-button class="btn btn-block btn-success btn-lg font-weight-medium auth-form-btn">
                            {{ __('Inscrire') }}
                        </x-primary-button>
                    </div>

                    <div class="text-center mt-4 font-weight-light">
                        Vous avez déjà un compte? 
                        <a href="{{ route('login') }}" class="text-primary">{{ __('Se connecter') }}</a>
                    </div>

                </form>



</x-guest-layout>
