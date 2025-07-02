<div class="min-h-screen bg-gray-100 py-6 px-4 font-sans">
    @if (session()->has('message'))
        <div class="fixed top-4 left-1/2 transform -translate-x-1/2 z-50 w-full max-w-sm">
            <div class="bg-green-100 border-l-4 border-green-500 text-green-800 p-4 rounded-lg text-center">
                {{ session('message') }}
            </div>
        </div>
    @endif

    <!-- Main Content -->
    <div class="max-w-3xl mx-auto p-6">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Your Profile</h1>

        <!-- Profile Banner & Avatar -->
        <div class="bg-white rounded-lg shadow p-6 mb-6 text-center">
            <div class="relative inline-block">
                <img src="{{ $user->profile_photo_path ? Storage::url($user->profile_photo_path) : asset('assets/images/profile/profile.png') }}"
                     alt="avatar"
                     class="w-24 h-24 rounded-full border-2 border-gray-200 object-cover">
                <label for="profilePhoto" class="absolute bottom-0 right-0 bg-indigo-500 text-white rounded-full p-2 cursor-pointer">
                    <input type="file" id="profilePhoto" wire:model="profilePhoto" hidden>
                    <i class="ri-camera-line"></i>
                </label>
            </div>
            <h2 class="text-xl font-semibold text-gray-800 mt-4">{{ $user->name }}</h2>
        </div>

        <!-- Profile Settings Form -->
        <div class="bg-white rounded-lg shadow p-6 mb-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Profile Settings</h2>
            <form wire:submit.prevent="save" class="space-y-4">
                <div class="grid grid-cols-1 gap-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                        <input type="text" id="name" wire:model="name" class="w-full rounded-lg border border-gray-300 p-2 focus:ring-2 focus:ring-indigo-500">
                        @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input type="email" id="email" wire:model="email" class="w-full rounded-lg border border-gray-300 p-2 focus:ring-2 focus:ring-indigo-500">
                        @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="phoneNumber" class="block text-sm font-medium text-gray-700">Phone Number</label>
                        <input type="tel" id="phoneNumber" wire:model="phoneNumber" class="w-full rounded-lg border border-gray-300 p-2 focus:ring-2 focus:ring-indigo-500">
                        @error('phoneNumber') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="flex justify-end gap-3">
                    <button type="button" wire:click="openCancelModal" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300">Cancel</button>
                    <button type="button" wire:click="save" class="px-4 py-2 bg-indigo-500 text-white rounded-lg hover:bg-indigo-600">Save</button>
                </div>
            </form>
        </div>

        <!-- Change Password Form -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Change Password</h2>
            <form wire:submit.prevent="changePassword" class="space-y-4">
                <div class="grid grid-cols-1 gap-4">
                    <div>
                        <label for="currentPassword" class="block text-sm font-medium text-gray-700">Current Password</label>
                        <input type="password" id="currentPassword" wire:model="currentPassword" class="w-full rounded-lg border border-gray-300 p-2 focus:ring-2 focus:ring-indigo-500">
                        @error('currentPassword') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="newPassword" class="block text-sm font-medium text-gray-700">New Password</label>
                        <input type="password" id="newPassword" wire:model="newPassword" class="w-full rounded-lg border border-gray-300 p-2 focus:ring-2 focus:ring-indigo-500">
                        @error('newPassword') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="newPasswordConfirmation" class="block text-sm font-medium text-gray-700">Confirm New Password</label>
                        <input type="password" id="newPasswordConfirmation" wire:model="newPasswordConfirmation" class="w-full rounded-lg border border-gray-300 p-2 focus:ring-2 focus:ring-indigo-500">
                        @error('newPasswordConfirmation') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="px-4 py-2 bg-indigo-500 text-white rounded-lg hover:bg-indigo-600">Save Password</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Save Modal -->
    @if($showSaveModal)
    <div class="fixed inset-0 z-50 flex items-center justify-center bg-black/50">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6">
            <button type="button" wire:click="$set('showSaveModal', false)" class="absolute top-4 right-4 text-gray-600 hover:text-gray-800">
                <i class="ri-close-line text-xl"></i>
            </button>
            <div class="text-center">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Confirm Save Changes?</h3>
                <div class="flex justify-center gap-3">
                    <button wire:click="confirmSave" type="button" class="px-4 py-2 bg-indigo-500 text-white rounded-lg hover:bg-indigo-600">Yes, Save</button>
                    <button wire:click="$set('showSaveModal', false)" type="button" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300">Cancel</button>
                </div>
            </div>
        </div>
    @endif

    <!-- Cancel Modal -->
    @if($showCancelModal)
    <div class="fixed inset-0 z-50 flex items-center justify-center bg-black/50">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6">
            <button type="button" wire:click="closeCancelModal" class="absolute top-4 right-4 text-gray-600 hover:text-gray-800">
                <i class="ri-close-line text-xl"></i>
            </button>
            <div class="text-center">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Cancel Changes?</h3>
                <div class="flex justify-center gap-3">
                    <button wire:click="confirmResetForm" type="button" class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600">Yes, I'm sure</button>
                    <button wire:click="closeCancelModal" type="button class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300">No, Go Back</button>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>