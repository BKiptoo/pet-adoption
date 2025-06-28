<!-- Start Form Area -->
<div class="col-span-full lg:col-span-6 w-full lg:max-w-[600px]">
    <div class="border border-form dark:border-dark-border p-5 md:p-10 rounded-20 md:rounded-30 dk-theme-card-square">
        <h3 class="text-xl md:text-[28px] leading-none font-semibold text-heading">
            Sign In
        </h3>
        <p class="font-medium text-gray-500 dark:text-dark-text mt-4">
            Welcome Back! Log in to your account
        </p>
        <form wire:submit="loginUser">
            <div class="mb-2.5">
                <label for="email" class="form-label">Email</label>
                <input
                    type="email"
                    id="email"
                    wire:model="form.email"
                    placeholder="debra.holt@example.com"
                    required
                    class="form-input px-4 py-3.5 rounded-lg"
                >
                @error('form.email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-5">
                <label for="password" class="form-label">Password</label>
                <div class="relative">
                    <input
                        type="password"
                        id="password"
                        wire:model="form.password"
                        placeholder="Password"
                        required
                        class="form-input px-4 py-3.5 rounded-lg"
                    >
                    <label for="toggleInputType" class="size-8 rounded-md flex-center hover:bg-gray-200 dark:hover:bg-dark-icon foucs:bg-gray-200 dark:foucs:bg-dark-icon position-center !left-auto -right-2.5">
                        <input type="checkbox" id="toggleInputType" class="inputTypeToggle peer/it" hidden>
                        <i class="ri-eye-off-line text-gray-500 dark:text-dark-text peer-checked/it:before:content-['\ecb5']"></i>
                    </label>
                </div>
                @error('form.password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex items-center justify-between mt-3 mb-7">
                <div class="flex items-center gap-1 select-none">
                    <input
                        type="checkbox"
                        name="remember-me"
                        id="rememberMe"
                        wire:model="form.remember"
                    >
                    <label for="rememberMe" class="font-spline_sans text-sm leading-none text-gray-900 dark:text-dark-text cursor-pointer">Remember Me</label>
                </div>
                <a href="{{ route('forgot-password') }}" class="text-xs leading-none text-primary-500 font-semibold">Forgot password?</a>
            </div>
            <!-- Submit Button -->
            <button type="submit" class="btn b-solid btn-primary-solid w-full dk-theme-card-square">Sign In</button>
        </form>
        <div class="font-spline_sans text-gray-900 dark:text-dark-text leading-none text-center my-4">OR</div>
        <div class="flex items-center flex-col xl:flex-row gap-4 2xl:gap-5">
            <a href="#" class="btn b-outline-static btn-disable-outline w-full grow xl:w-auto dk-theme-card-square">
                <img src="assets/images/icons/google.svg" alt="icon">
                <span class="shrink-0">Sign in with Google</span>
            </a>
            <a href="#" class="btn b-outline-static btn-disable-outline w-full grow xl:w-auto dk-theme-card-square">
                <img src="assets/images/icons/apple.svg" alt="icon" class="dark:brightness-[3]">
                <span class="shrink-0">Continue with Apple</span>
            </a>
        </div>
        <div class="text-gray-900 dark:text-dark-text font-medium leading-none mt-5">
            Don't have an account yet?
            <a href="{{ route('register')}}" class="text-primary-500 font-semibold">Sign Up</a>
        </div>
    </div>
</div>
<!-- End Form Area -->

@push('scripts')
<script>
    // SweetAlert integration
    document.addEventListener('livewire:initialized', () => {
        Livewire.on('alert', (params) => {
            Swal.fire({
                title: params.title,
                text: params.message,
                icon: params.type,
                confirmButtonText: 'OK'
            });
        });
    });

    // Password toggle functionality
    document.getElementById('toggleInputType').addEventListener('change', function () {
        const passwordInput = document.getElementById('password');
        passwordInput.type = this.checked ? 'text' : 'password';
    });
</script>
@endpush
