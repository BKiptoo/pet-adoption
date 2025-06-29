<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Livewire\Attributes\Validate;
use Illuminate\Validation\Rules\Password;
// use Illuminate\use Illuminate\Validation\Rules\Password;

class UserRegisterForm extends Form
{
    #[Validate(['required', 'string', 'max:255'])]
    public string|null $name = '';
//
    #[Validate(['required', 'string', 'email', 'unique:users,email', 'max:255'])]
    public string|null $email = '';

    #[Validate(['required', 'numeric', 'unique:users,phoneNumber'])]
    public string|null $phoneNumber = '';

    #[Validate(['required', 'max:255', 'string'])]
    public string|null $password = '';

    #[Validate('required', message: 'The password confirm field is required.')]
    #[Validate('same:password', message: 'The password field confirmation does not match.')]
    public string|null $passwordConfirmation = '';

    #[Validate(['required', 'boolean'])]
    public bool $terms = false;

    protected function rules(): array
    {
        return [
            'password' => [
                Password::min(8)
                    ->mixedCase()
                    ->letters()
                    ->numbers()
                    ->symbols()
                    ->uncompromised()
            ]
        ];
    }

}
