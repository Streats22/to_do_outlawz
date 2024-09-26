<?php

namespace App\Livewire\Items;

use App\Models\Items;
use Illuminate\Http\Request;
use Livewire\Component;

class Item extends Component
{
    public $item;
    public $name;
    public $description;
    public $is_done;
    public $tags;



    public function mount($item)
    {
        $item = $this->item->find($item->id);
        $this->name = $item->name;
        $this->description = $item->description;
        $this->is_done = $item->is_done;
        $this->tags = $item->tags;


    }

    public function render()
    {
        return view('livewire.items.Item');
    }

    public function delete($id)
    {
        $item = $this->item->find($id);
        $item->delete();

        session()->flash('message', 'Item verwijdert.');
        $this->emit('DeleteItem');
    }

    public function updated($name, $value)
    {
        $this->item->update([
            $name => $value,
        ]);
        $this->mount($this->item);
        $this->render();
    }


}
