<!-- Container -->
<div class="flex flex-wrap min-h-screen w-full content-center justify-center bg-[#FAF3F7] py-10">
  
    <!-- Login component -->
    <div class="flex shadow-md">
      <!-- Login form -->
      <div class="flex flex-wrap content-center justify-center rounded-l-md bg-white" style="width: 24rem; height: 32rem;">
        <div class="w-72">
          <!-- Heading -->
          <h1 class="text-4xl text-[#DF7DA2] text-1000 font-extrabold">AURA COSMETICS</h1>
          <small class="text-gray-400">Welcome back to Aura Cosmetics!</small>
  
          <!-- Form -->
          {{-- <form class="mt-4">
            <div class="mb-3">
              <label class="mb-2 block text-xs font-semibold">Email</label>
              <input type="email" placeholder="Enter your email" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500" />
            </div>
  
            <div class="mb-3">
              <label class="mb-2 block text-xs font-semibold">Password</label>
              <input type="password" placeholder="*****" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500" />
            </div>
  
            <div class="mb-3 flex flex-wrap content-center">
              <input id="remember" type="checkbox" class="mr-1 checked:bg-purple-700" /> <label for="remember" class="mr-auto text-xs font-semibold">Remember for 30 days</label>
              <a href="#" class="text-xs font-semibold text-pink-700">Forgot password?</a>
            </div>
  
            <div class="mb-3">
              <button class="mb-1.5 block w-full text-center text-white bg-pink-700 hover:bg-pink-900 px-2 py-1.5 rounded-md">Sign in</button>
              <button class="flex flex-wrap justify-center w-full border border-gray-300 hover:border-gray-500 px-2 py-1.5 rounded-md">
                <img class="w-5 mr-2" src="https://lh3.googleusercontent.com/COxitqgJr1sJnIDe8-jiKhxDx1FrYbtRHKJ9z_hELisAlapwE9LUPh6fcXIfb5vwpbMl4xl9H9TRFPc5NOO8Sb3VSgIBrfRYvW6cUA">
                Sign in with Google
              </button>
            </div>
          </form> --}}
          <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
  
          <!-- Footer -->
          <div class="text-center">
            <span class="text-xs text-gray-400 font-semibold">Don't have account?</span>
            <a href="#" class="text-xs font-semibold text-[#DF7DA2]">Sign up</a>
          </div>
        </div>
      </div>
  
      <!-- Login banner -->
      <div class="flex flex-wrap content-center justify-center rounded-r-md" style="width: 24rem; height: 32rem;">
        <img class="w-full h-full bg-center bg-no-repeat bg-cover rounded-r-md" src="img/girl1.jpeg">
      </div>
  
    </div>
  </div>
   <!-- Scripts -->
   @vite(['resources/css/app.css', 'resources/js/app.js'])