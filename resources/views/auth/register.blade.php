<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <h3>
            Create Account Here
            <br>
            <br>
            </h3> 
        </x-slot>

        <x-jet-validation-errors style="color: red" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="row">
                <div class="col-md-3"><x-jet-label for="name" value="{{ __('Name') }}" /></div>
                <div class="col-md-9"><x-jet-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" /></div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3"><x-jet-label for="email" value="{{ __('Email') }}" /></div>
                <div class="col-md-9"><x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required /></div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3"><x-jet-label for="password" value="{{ __('Password') }}" /></div>
                <div class="col-md-9"><x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" /></div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3"><x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" /></div>
                <div class="col-md-9">
                    <x-jet-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>
            </div>
            <br>
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="row">
                    <div class="col-md-12">
                        <x-jet-label for="terms">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms"/>
                                
                                    {!! __('  I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                
                            </div>
                        </x-jet-label>
                    </div>
                </div>
            @endif

            <div class="row">
                <div class="col-md-12">
                    I already have an account <a class="btn btn-danger" href="{{ route('login') }}">
                        {{ __('Login') }}
                    </a>

                    <x-jet-button class="btn btn-success">
                        {{ __('Register') }}
                    </x-jet-button>
                </div>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
