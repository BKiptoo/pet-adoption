{{-- resources/views/auth/login.blade.php --}}
@extends('components.layouts.auth')

@section('title', 'Login')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="w-full max-w-md bg-white p-8 rounded shadow-md">
        <h2 class="text-2xl font-semibold text-center mb-6">Login</h2>

        @if(session('error'))
            <div class="text-red-600 mb-4 text-sm">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2">Email</label>
                <input type="email" name="email" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring" required>
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2">Password</label>
                <input type="password" name="password" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring" required>
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Login</button>
        </form>
    </div>
</div>
@endsection
