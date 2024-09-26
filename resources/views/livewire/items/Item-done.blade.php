<div >

    @if($item->is_done)
        <div class="" wire:key="{{ $item->id }}">
            <div class="bg-gray-600 p-4 flex flex-col gap-5 justify-around rounded-lg mt-4 shrink ">
                <div class="flex flex-col gap-2 w-full">

                    <p class="font-bold text-white animate-typing">Name</p>
                    <div class="flex gap-2 w-full">
                        <input type="checkbox" wire:model.blur="is_done">
                        <input wire:model.blur="name" class="p-2 w-full">
                        <button wire:click="delete({{$item->id}}) "
                                wire:submit.prevent="$refresh"
                                wire:confirm="Weer je zeker dat je dit item {{$item->name}} wilt verwijderen?"
                                class="bg-red-500 text-white p-2 rounded-lg ">
                            <x-Icons.trash />
                        </button>
                    </div>

                </div>
            </div>

            @endif
        </div>
