<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    

    <!-- ------------------------------------------------------------------- -->

                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">

                        <div class="brand-logo">
                          <img src="../../images/logo.svg" alt="logo">
                        </div>

                            <h4>Hello! let's get started</h4>
                            <h6 class="font-weight-light">Sign in to continue.</h6>

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
                            <x-primary-button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                                {{ __('Log in') }}
                            </x-primary-button>
                          </div>

                          <div class="my-2 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                              <label class="form-check-label text-muted">
                                <input type="checkbox" class="form-check-input">
                                    {{ __('Remember me') }}
                              </label>
                            </div>
                            @if (Route::has('password.request'))
                                <a class="auth-link text-black" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                          </div>

                          <!-- <div class="mb-2">
                            <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                              <i class="typcn typcn-social-facebook-circular mr-2"></i>Connect using facebook
                            </button>
                          </div> -->

                          <div class="text-center mt-4 font-weight-light">
                            Don't have an account?  
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="">S'inscrire</a>
                            @endif
                          </div>

                        </form>

                    </div>
</x-guest-layout>
