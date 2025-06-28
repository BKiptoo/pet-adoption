<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Livewire\Forms\UserLoginForm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class Login extends Component
{
    public UserLoginForm $form;

    public function loginUser()
    {
        try {
            $this->form->validate();

            if (!Auth::attempt([
                'email' => $this->form->email,
                'password' => $this->form->password,
                'isActive' => true
            ], $this->form->remember)) {
                throw ValidationException::withMessages([
                    'form.email' => __('auth.failed'),
                ]);
            }

            // Success alert
            $this->dispatch('alert',
                type: 'success',
                message: 'Login successful! Redirecting...',
                title: 'Success'
            );

            return redirect()->intended(route('user.home'));

        } catch (ValidationException $e) {
            $this->reset('form.password');
            $this->dispatch('alert',
                type: 'error',
                message: 'Invalid credentials. Please try again.',
                title: 'Login Failed'
            );
            throw $e;

        } catch (\Exception $e) {
            Log::error('Login error: ' . $e->getMessage());
            $this->reset('form.password');
            $this->dispatch('alert',
                type: 'error',
                message: 'An error occurred. Please try again later.',
                title: 'Error'
            );
        }
    }

    public function render()
    {
        return view('livewire.auth.login')->layout('components.layouts.auth');
    }
}
