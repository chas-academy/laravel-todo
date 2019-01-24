@extends('layouts.app')

@section('content')

<div class="container mx-auto h-full flex justify-center items-center">
    <div class="w-full max-w-xs">
        <h1 class="font-hairline mb-6 text-center">Login to Todo</h1>
        <form class="border-teal p-8 border-t-8 bg-white mb-6 rounded-lg shadow-lg" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label class="font-bold text-grey-darker block mb-2">Email</label>
                <input id="email" type="email" class="block appearance-none w-full bg-white border px-2 py-2 rounded shadow {{ $errors->has('email') ? ' focus:outline-none border-red hover:border-red-dark' : 'border-grey-light hover:border-grey' }}" name="email" value="{{ old('email') }}" autofocus placeholder="Your email">

                @if ($errors->has('email'))
                    <p class="text-red text-xs italic">{{ $errors->first('email') }}.</p>
                @endif
            </div>

            <div class="mb-4">
                <label class="font-bold text-grey-darker block mb-2">Password</label>
                <input id="password" type="password" class="block appearance-none w-full bg-white border px-2 py-2 rounded shadow {{ $errors->has('password') ? ' focus:outline-none border-red hover:border-red-dark' : 'border-grey-light hover:border-grey' }}" name="password" placeholder="******************">

                @if ($errors->has('password'))
                    <p class="text-red text-xs italic">{{ $errors->first('password') }}.</p>
                @endif
            </div>

            <div class="md:flex md:items-center mb-6">
                <div class="md:w-full">
                    <label class="md:w-2/3 block text-grey font-bold">
                        <input class="mr-2 leading-tight" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <span class="text-sm">
                            {{ __('Remember me') }}
                        </span>
                    </label>
                </div>
            </div>

            <div class="flex items-center justify-between">
                <button class="bg-teal-dark hover:bg-teal text-white font-bold py-2 px-4 rounded">
                    Login
                </button>
                @if (Route::has('password.request'))
                    <a class="no-underline inline-block align-baseline font-bold text-sm text-blue hover:text-blue-dark float-right" href="{{ route('password.request') }}">
                        Forgot Password?
                    </a>
                @endif
            </div>

        </form>
        <div class="text-center">
            <p class="text-grey-dark text-sm">Don't have an account? <a href="{{ route('register') }}" class="no-underline text-blue font-bold">Create an Account</a>.</p>
        </div>
    </div>
</div>

@endsection
