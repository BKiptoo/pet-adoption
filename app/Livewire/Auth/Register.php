<?php

namespace App\Livewire\Auth;

use Exception;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Log;
use App\Livewire\Forms\UserRegisterForm;

class Register extends Component
{
    public UserRegisterForm $form;
public function registerUser()
{
    $this->form->validate();

    try {
        $user = User::create([
            'name' => $this->form->name,
            'phoneNumber' => $this->form->phoneNumber,
            'email' => $this->form->email,
            'password' => bcrypt($this->form->password),
        ]);

        auth()->loginUsingId($user->id);

        $this->dispatch('sweetalert', [
            'type' => 'success',
            'message' => 'Account created successfully. Welcome!',
        ]);

        return $this->redirect(route('user.home'), navigate: true);
    } catch (Exception $e) {
        Log::error('Registration failed: ' . $e->getMessage());

        $this->dispatch('sweetalert', [
            'type' => 'error',
            'message' => 'An error occurred. Please try again later.',
        ]);

        return $this->redirect('/register', navigate: true);
    }
}


    public function render()
    {
        return view('livewire.auth.register')->layout('components.layouts.auth');
    }
}
