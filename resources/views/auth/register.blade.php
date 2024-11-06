<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>sign in</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link rel="icon" href="images/logo.jpeg" type="image/gif" />

    <!-- Libraries Stylesheet -->
    <link
      href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
      rel="stylesheet"
    />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/login.css">

  </head>

  <body class="bg-white">
    <div class="outerBox">
    <div class="box">
    <x-guest-layout style="background-color:red;">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <h3 class="title">SIGN UP</h3>
        <div class="input">
            <x-input-label for="name" :value="__('Name:')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="e.g Sardar" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4 input">
            <x-input-label for="email" :value="__('Email:')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="e.g sardar@gmail.com"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4 input">
            <x-input-label for="password" :value="__('Password:')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password"
                            placeholder="e.g s$sgRawf" 
                            
                             />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4 input">
            <x-input-label for="password_confirmation" :value="__('Confirm:')"/>

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" 
                            placeholder="confirm password" 
                             />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4 last">
            <p class="text-center mb-0">
                Already have an Account?
              
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('login') }}
            </a>
            </p>
            <br>
            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
    </x-guest-layout>
</div>
</div>
</body>
</html>
