<?php

namespace App\Http\Livewire;

use App\Models\Admin;
use Livewire\Component;

class TestComponent extends Component
{
    public function render()
    {
        return view('livewire.test-component')->layout('layouts.app');
    }

    public function store()
    {
      Admin::create([
        'email' => 'aaaaaaaa@sg.zsdf',
        'password' => 'aaaaaaaa',
        'name' => 'aaaaaaaa',
        'mobile' => '3453456',
        'role_id' => '0',
      ]);
    }
}
