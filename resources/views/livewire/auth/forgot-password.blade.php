<!-- Start Form Area -->
<div class="col-span-full lg:col-span-6 w-full lg:max-w-[600px]">
    <div class="border border-form dark:border-dark-border p-5 md:p-10 rounded-20 md:rounded-30 dk-theme-card-square">
        <h3 class="text-xl md:text-[28px] leading-none font-semibold text-heading">
            Forgot Password
        </h3>
        <p class="font-medium text-gray-500 dark:text-dark-text mt-4">
            Welcome Back! Log in to your account
        </p>
        <form action="https://template.codexshaper.com/admin/dashkit/two-step.html" class="leading-none mt-8">
            <div class="mb-7">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" placeholder="debra.holt@example.com" required autocomplete="off"
                    class="form-input px-4 py-3.5 rounded-lg">
            </div>
            <!-- Submit Button -->
            <button type="submit" class="btn b-solid btn-primary-solid w-full dk-theme-card-square">Forgot
                Password</button>
        </form>
        <div class="text-gray-900 dark:text-dark-text font-medium leading-none mt-5">
            Back to /
            <a href="{{ route('login') }}" class="text-primary-500 font-semibold">Sign in</a>
        </div>
    </div>
</div>
<!-- End Form Area -->
