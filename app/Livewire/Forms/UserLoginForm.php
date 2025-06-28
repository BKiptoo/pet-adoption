<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class UserLoginForm extends Form
{
       #[Validate(['required', 'string', 'email', 'exists:users,email', 'max:255'])]
    public string|null $email = '';

    #[Validate(['required', 'string', 'max:255'])]
    public string|null $password = '';

    #[Validate(['required', 'boolean'])]
    public bool $remember = false;
}
