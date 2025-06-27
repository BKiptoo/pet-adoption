@extends('components.layouts.app')

@section('title', 'User Dashboard')

@section('content')
<div class="min-h-screen bg-gray-100">
    <!-- User Navigation -->
    @include('user.inc.navbar')

    <div class="py-10">
        <header class="mb-8">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold text-gray-900">User Dashboard</h1>
            </div>
        </header>

        <main>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h2 class="text-xl font-semibold mb-4">Welcome, {{ Auth::user()->name }}!</h2>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <!-- User Stats -->
                            <div class="bg-blue-50 p-6 rounded-lg">
                                <h3 class="font-medium text-blue-800">Your Profile</h3>
                                <p class="mt-2 text-gray-600">Email: {{ Auth::user()->email }}</p>
                                <p class="text-gray-600">Phone: {{ Auth::user()->phone }}</p>
                            </div>

                            <!-- Quick Actions -->
                            <div class="bg-green-50 p-6 rounded-lg">
                                <h3 class="font-medium text-green-800">Quick Actions</h3>
                                <div class="mt-4 space-y-2">
                                    <a href="#" class="block text-green-700 hover:text-green-900">Edit Profile</a>
                                    <a href="#" class="block text-green-700 hover:text-green-900">View Orders</a>
                                    <a href="#" class="block text-green-700 hover:text-green-900">Support Center</a>
                                </div>
                            </div>

                            <!-- Recent Activity -->
                            <div class="bg-purple-50 p-6 rounded-lg">
                                <h3 class="font-medium text-purple-800">Recent Activity</h3>
                                <ul class="mt-4 space-y-3">
                                    <li class="text-sm text-gray-600">Logged in today</li>
                                    <li class="text-sm text-gray-600">Updated profile last week</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection
