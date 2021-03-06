<x-app-layout>

</x-app-layout>
{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1"
  >
  <link
    rel="icon"
    href="https://www.svgrepo.com/show/29317/pets.svg"
    type="image/gif"
    sizes="16x16"
  >

  <meta
    name="csrf-token"
    content="{{ csrf_token() }}"
  >
  <title>{{ config('app.name', 'Beba Armany') }}</title>

  <!-- Fonts -->
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"
    rel="stylesheet"
  >
  <!-- Styles -->
  <link
    rel="stylesheet"
    href="{{ asset('css/app.css') }}"
  >

  <!-- Scripts -->
  <script
    src="{{ asset('js/app.js') }}"
    defer
  ></script>

</head>

<body class="antialiased">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16">
      <div class="flex">
        <!-- Logo -->
        <div class="flex-shrink-0 flex items-center">
          <a href="{{ route('welcome') }}">
            <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
          </a>
        </div>
      </div>
      <div class="flex justify-end">
        @if (Route::has('login'))
          <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            @auth
              <x-nav-link
                :href="route('dashboard')"
                :active="request()->routeIs('dashboard')"
              >Tienda Virtual</x-nav-link>
            @else
              <x-nav-link
                :href="route('login')"
                :active="request()->routeIs('login')"
              >Inicio de sesión</x-nav-link>

              @if (Route::has('register'))
                <x-nav-link
                  :href="route('register')"
                  :active="request()->routeIs('register')"
                >¿No tienes cuenta?</x-nav-link>
              @endif
          @endif
        </div>
        @endif
      </div>
    </div>
    </div>
  </body>

  </html> --}}
