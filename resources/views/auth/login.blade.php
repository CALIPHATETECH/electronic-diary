<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <h3>LOGIN</h3>
            <br>
            <br>
        </x-slot>

        <x-jet-validation-errors style="color: red;"/>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <br>
        <br>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="row">
                <div class="col-md-3"><x-jet-label for="email" value="{{ __('Email') }}" /></div>
                <div class="col-md-9">
                    <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3"><x-jet-label for="password" value="{{ __('Password') }}" /></div>
                <div class="col-md-9">
                <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" class=""/>
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    I dont have account <a href="{{route('register')}}">Create Account</a>
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                
                <br>
                <div class="text-center">
                <x-jet-button class="btn btn-danger btn-block">
                    {{ __('Log in') }}
                </x-jet-button>
                </div>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
