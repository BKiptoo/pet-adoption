<?php

namespace App\Livewire\User\Account;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Profile extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $phoneNumber;
    public $profilePhoto; // For new uploads
    public $currentPassword;
    public $newPassword;
    public $newPasswordConfirmation;
    public $showSaveModal = false;
    public $showCancelModal = false;

    public function mount()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $user = Auth::user();
        $this->name = $user->name ?? '';
        $this->email = $user->email ?? '';
        $this->phoneNumber = $user->phoneNumber ?? '';
    }

    public function save()
    {
        $this->showSaveModal = true;
    }

    public function confirmSave()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $user = Auth::user();

        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phoneNumber' => 'nullable|string|max:20',
            'profilePhoto' => 'nullable|image|max:2048',
        ]);

        if ($this->profilePhoto) {
            $path = $this->profilePhoto->store('profile-photos', 'public');
            $user->profile_photo_path = $path;
        }

        $user->name = $this->name;
        $user->email = $this->email;
        $user->phoneNumber = $this->phoneNumber;
        $user->save();

        $this->showSaveModal = false;
        session()->flash('message', 'Profile updated successfully!');
    }

    public function openCancelModal()
    {
        $this->showCancelModal = true;
    }

    public function closeCancelModal()
    {
        $this->showCancelModal = false;
    }

    public function confirmResetForm()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $this->reset([
            'name',
            'email',
            'phoneNumber',
            'profilePhoto',
            'currentPassword',
            'newPassword',
            'newPasswordConfirmation',
        ]);
        $this->mount();
        $this->showCancelModal = false;
    }

    public function changePassword()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $user = Auth::user();

        $this->validate([
            'currentPassword' => 'required|string|min:8',
            'newPassword' => 'required|string|min:8|confirmed',
            'newPasswordConfirmation' => 'required|string',
        ]);

        if (!Hash::check($this->currentPassword, $user->password)) {
            $this->addError('currentPassword', 'The current password is incorrect.');
            return;
        }

        $user->password = Hash::make($this->newPassword);
        $user->hasToChangePassword = false; // Reset if applicable
        $user->save();

        $this->reset([
            'currentPassword',
            'newPassword',
            'newPasswordConfirmation',
        ]);

        session()->flash('message', 'Password updated successfully!');
    }

    public function render()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $user = Auth::user();
        return view('livewire.user.account.profile', [
            'user' => $user,
            'showSaveModal' => $this->showSaveModal,
            'showCancelModal' => $this->showCancelModal,
        ]);
    }
}
