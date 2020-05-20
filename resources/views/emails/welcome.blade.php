    @component('mail::message')
        # Hello {{$user->name}}

        Thank you for create account. Please verify your account put on this button below:

        @component('mail::button', ['url' => route('verify', $user->verification_token)])
            Verify Account
        @endcomponent

        Thanks,<br>
        {{ config('app.name') }}
    @endcomponent
