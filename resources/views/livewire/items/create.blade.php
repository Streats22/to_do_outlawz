<meta name="csrf-token" content="{{ csrf_token() }}">

<div x-data="create()">
    <form >
        @csrf

        <div class="" >
            <div class="bg-gray-600 p-4 flex flex-col gap-5 justify-around rounded-lg mt-4 shrink ">
                <div class="flex gap-1 flex-col">
                    <p class="font-bold text-white"> Name</p>
                    <div class="flex gap-2">
                        <input type="text"  x-on:change="save()" x-model="newName" class="p-1 w-full">
                        <button @click="save()"  class="inline-flex items-center justify-center w-10 h-10 mr-2 text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                <path d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" fill-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<script>
    function create() {
        return {
            newName: '',
            Desc: '',
            Tag: [],
            newItem: false,

            newItems() {
                this.newItem = !this.newItem

            },
            save() {
                fetch('/create',
                    {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        credentials: 'same-origin',
                        body: JSON.stringify({
                            name: this.newName,
                            description: this.Desc,
                            tags: this.Tag ?? [],

                        })
                    })
                    .then(response => response.json());
                window.location.reload();
                window.location.reload();
            }
        }
    }
</script>
