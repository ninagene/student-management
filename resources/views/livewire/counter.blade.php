<div>

    {{-- <h1 class="text-2xl">{{ $counter }}</h1> --}}

    {{-- <div class="flex gap-x-3">
        <button wire:click='increment'>Increment</button>
        <button wire:click='decrement'>Decrement</button>
    </div> --}}

    @foreach ($todos as $todo)
    <li>{{ $todo }}</li>
    @endforeach
{{--
    {{ var_dump ($todos) }} --}}

    <form wire:submit="save">
        <input type="name" wire:model="todo" class="text-black" />
        <button type="sumbit">Submit</button>
    </form>




</div>
