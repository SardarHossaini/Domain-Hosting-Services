<x-guest-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- Session Status -->
                <x-auth-session-status class="alert alert-success mb-4" :status="session('status')" />

                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white text-center">
                        <h4>{{ __('Login') }}</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email Address -->
                            <div class="mb-3">
                                <x-input-label for="email" :value="__('Email')" class="form-label" />
                                <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="text-danger mt-1" />
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <x-input-label for="password" :value="__('Password')" class="form-label" />
                                <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                                <x-input-error :messages="$errors->get('password')" class="text-danger mt-1" />
                            </div>

                            <!-- Remember Me -->
                            <div class="form-check mb-3">
                                <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                                <label for="remember_me" class="form-check-label">{{ __('Remember me') }}</label>
                            
                                <span class="">
                                    @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="text-decoration-none">{{ __('Forgot your password?') }}</a>
                                @endif
                                </span>
                            </div>

                            <!-- Login Button and Forgot Password Link -->
                            <div class="">
                                Creat Account
                                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('register') }}">
                                {{ __('sign in') }}
                                </a><br>
                                <x-primary-button class="btn btn-primary my-3">
                                    {{ __('Log in') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
