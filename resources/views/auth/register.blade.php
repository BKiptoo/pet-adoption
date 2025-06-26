{{-- resources/views/auth/register.blade.php --}}
@extends('components.layouts.auth')

@section('title', 'Register')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="w-full max-w-md bg-white p-8 rounded shadow-md">
        <h2 class="text-2xl font-semibold text-center mb-6">Create Account</h2>

        @if ($errors->any())
            <div class="mb-4 text-sm text-red-600">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" required
                       class="w-full px-4 py-2 border rounded focus:outline-none focus:ring">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required
                       class="w-full px-4 py-2 border rounded focus:outline-none focus:ring">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2">Phone</label>
                <input type="text" name="phone" value="{{ old('phone') }}" required
                       class="w-full px-4 py-2 border rounded focus:outline-none focus:ring">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2">Password</label>
                <input type="password" name="password" required
                       class="w-full px-4 py-2 border rounded focus:outline-none focus:ring">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm mb-2">Confirm Password</label>
                <input type="password" name="password_confirmation" required
                       class="w-full px-4 py-2 border rounded focus:outline-none focus:ring">
            </div>

            <button type="submit"
                    class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Register</button>
        </form>

        <p class="mt-4 text-sm text-center">
            Already have an account? <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Login</a>
        </p>
    </div>
</div>
@endsection
