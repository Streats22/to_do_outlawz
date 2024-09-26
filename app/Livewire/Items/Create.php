<?php

namespace App\Livewire\Items;

use App\Models\Items;
use Livewire\Component;

class Create extends Component
{
    public $newName;

    public function create(): void
    {
//        dd($this->newName);
        // Validation or direct creation logic here
        Items::create(['name' => $this->newName]);

        $this->reset('newName', );
        $this->emit('CreateNewItem');
    }
    public function render()
    {
        return view('livewire.items.create');
    }
}
