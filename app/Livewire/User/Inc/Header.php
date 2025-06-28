<?php

namespace App\Livewire\User\Inc;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Header extends Component
{
    public $user;

    public function mount()
    {
        $this->user = Auth::user();
    }

    public function render()
    {
        return view('livewire.user.inc.header', [
            'user' => $this->user
        ]);
    }
}
