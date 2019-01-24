@extends('layouts.app')

@section('content')
<div class="container mx-auto h-full flex justify-center items-center">
    <div class="w-full max-w-xs">
        <h1 class="font-hairline mb-6 text-center">{{ __('Reset Password') }}</h1>

        @if (session('status'))
            <div class="bg-teal-lightest border-t-4 mb-6 border-teal rounded-b text-teal-darkest px-4 py-3 shadow-md" role="alert">
                <div class="flex">
                    <div class="py-1"><svg class="fill-current h-6 w-6 text-teal mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                    <div>
                    <p class="font-bold">Success!</p>
                    <p class="text-sm">{{ session('status') }}</p>
                    </div>
                </div>
            </div>
        @endif

        <form class="border-teal p-8 border-t-8 bg-white mb-6 rounded-lg shadow-lg" method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="mb-4">
                <label class="font-bold text-grey-darker block mb-2">Email</label>
                <input id="email" type="email" class="block appearance-none w-full bg-white border px-2 py-2 rounded shadow {{ $errors->has('email') ? ' focus:outline-none border-red hover:border-red-dark' : 'border-grey-light hover:border-grey' }}" name="email" value="{{ old('email') }}" autofocus placeholder="Your email">

                @if ($errors->has('email'))
                    <p class="text-red text-xs italic">{{ $errors->first('email') }}</p>
                @endif
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-teal-dark hover:bg-teal text-white font-bold py-2 px-4 rounded">
                    {{ __('Send Password Reset Link') }}
                </button>
            </div>
        </form>

        <div class="text-center">
            <p class="text-grey-dark text-sm">Don't have an account? <a href="{{ route('register') }}" class="no-underline text-blue font-bold">Create an Account</a>.</p>
        </div>
    </div>
</div>
@endsection
