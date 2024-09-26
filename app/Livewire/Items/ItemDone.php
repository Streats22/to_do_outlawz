<?php

namespace App\Livewire\Items;

use Livewire\Component;

class ItemDone extends Component
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
        return view('livewire.items.Item-done');
    }

    public function delete($id)
    {
        $item = $this->item->find($id);
        $item->delete();

        $this->render();
        session()->flash('message', 'Item verwijdert.');
    }
    public function save($id)
    {
        $item = $this->item->find($id);
        $item->name = $this->name;
        $item->description = $this->description;
        $item->is_done = $this->completed;
        $item->tags = $this->tags;

        $item->save();

        $this->render();
        session()->flash('message', 'Item opgeslagen.');
    }
    public function updated($name, $value)
    {
        $this->item->update([
            $name => $value,
        ]);
    }


}
