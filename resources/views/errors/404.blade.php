
@extends('layouts.errors')

@section('content')
     <!-- Start Main Content -->
    <div class="main-content m-4 h-full">
        <div class="card min-h-[calc(100vh_-_32px)] flex-center">
            <div class="flex-center flex-col gap-10 text-center">
                <div>
                    <img src="assets/images/loti/loti-404.svg" alt="loti" class="group-[.dark]:hidden">
                    <img src="assets/images/loti/loti-404-dark.svg" alt="loti" class="group-[.light]:hidden">
                </div>
                <h3 class="text-2xl sm:text-[42px] leading-[1.23] font-semibold text-heading">
                    Ooops... 404!
                </h3>
                <p class="font-spline_sans text-gray-900 dark:text-dark-text">The page you're trying to access doesn't seem to exist.</p>
                <a href="{{ url()->previous() }}" class="btn b-solid btn-primary-solid btn-lg dk-theme-card-square">Back To Home</a>
            </div>
        </div>
    </div>
    <!-- End Main Content -->
@endsection
