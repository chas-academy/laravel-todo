@extends('layouts.app')

@section('content')
<div class="container mx-auto h-full flex justify-center items-center">
    <div class="w-full max-w-xs">
        <h1 class="font-hairline mb-6 text-center">{{ __('Reset Password') }}</h1>
        <form class="border-teal p-8 border-t-8 bg-white mb-6 rounded-lg shadow-lg" method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="mb-4">
                <label class="font-bold text-grey-darker block mb-2">Email</label>
                <input id="email" type="email" class="block appearance-none w-full bg-white border px-2 py-2 rounded shadow {{ $errors->has('email') ? ' focus:outline-none border-red hover:border-red-dark' : 'border-grey-light hover:border-grey' }}" name="email" value="{{ old('email') }}" autofocus placeholder="Your email">

                @if ($errors->has('email'))
                    <p class="text-red text-xs italic">{{ $errors->first('email') }}</p>
                @endif
            </div>

            <div class="mb-4">
                <label for="password" class="font-bold text-grey-darker block mb-2">{{ __('Password') }}</label>
                <input id="password" type="password" class="block appearance-none w-full bg-white border px-2 py-2 rounded shadow {{ $errors->has('password') ? ' focus:outline-none border-red hover:border-red-dark' : 'border-grey-light hover:border-grey' }}" autofocus placeholder="New password" name="password">

                @if ($errors->has('password'))
                    <p class="text-red text-xs italic">{{ $errors->first('password') }}</p>
                @endif
            </div>

            <div class="mb-4">
                <label for="password-confirm" class="font-bold text-grey-darker block mb-2">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="block appearance-none w-full bg-white border px-2 py-2 rounded shadow {{ $errors->has('password_confirmation') ? ' focus:outline-none border-red hover:border-red-dark' : 'border-grey-light hover:border-grey' }}" autofocus placeholder="Repeat new password" name="password_confirmation">

                @if ($errors->has('password_confirmation'))
                    <p class="text-red text-xs italic">{{ $errors->first('password_confirmation') }}</p>
                @endif
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-teal-dark hover:bg-teal text-white font-bold py-2 px-4 rounded">
                    {{ __('Reset Password') }}
                </button>
            </div>
        </form>

        <div class="text-center">
            <p class="text-grey-dark text-sm">Don't have an account? <a href="{{ route('register') }}" class="no-underline text-blue font-bold">Create an Account</a>.</p>
        </div>
    </div>
</div>
@endsection
