<x-app-layout>
    <div class="flex md:mt-5 md:flex-row md:justify-between flex-col">


        <p>You have Finished <b>{{ $isDone }}</b> Task('s)</p>

        <div x-data="clear()">
            <button @click="clearList()" type="button" class="hover:animate-pulse hover:bg-red-600 hover:text-white hover:rounded-lg hover:transition-all hover:ease-in-out p-2">Remove all items</button>
        </div>
    </div>

    <livewire:items.create/>
    <div class=" w-full flex flex-col-reverse ">

        @foreach($items as $item)

            <livewire:items.Item :item="$item"/>

        @endforeach
    </div>
    <div class="mt-10 p-2">
        <p class=" text-lg font-bold">Voltooid</p>
        <hr
            class="my- h-px border-t border-1 bg-transparent bg-gradient-to-r from-transparent via-neutral-500 to-transparent  dark:via-neutral-400"/>
        @foreach($items as $isDone)
            <livewire:items.item-done :item="$isDone"/>
        @endforeach
    </div>

</x-app-layout>

<script>
    function clear() {
        return {
            Items: [],
            clearList() {
                fetch('/clear', {
                    'method': 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    credentials: 'same-origin',
                    body: JSON.stringify({
                        items: this.Items
                    })
                });
                window.location.reload();
            }
        }
    }
</script>

