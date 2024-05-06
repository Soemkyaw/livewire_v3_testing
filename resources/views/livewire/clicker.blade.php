<div>
    <form class="p-5" wire:submit="createNewUser" action="">
        <input class="block rounded border border-gray-500 px-3 py-1 mt-2" wire:model="name" type="text" placeholder="Enter Name...">
        @error('name')
            <span class=" text-red-500 text-xs ">{{ $message }}</span>
        @enderror
        <input class="block rounded border border-gray-500 px-3 py-1 mt-2" wire:model="email" type="email" placeholder="Enter Email...">
        @error('email')
            <span class=" text-red-500 text-xs ">{{ $message }}</span>
        @enderror
        <input class="block rounded border border-gray-500 px-3 py-1 mt-2" wire:model="password" type="password">
        @error('password')
            <span class=" text-red-500 text-xs ">{{ $message }}</span>
        @enderror
        <button class="block rounded bg-gray-500 text-white my-3 px-3 py-2">Create New User</button>
    </form>
    <hr>
    {{-- <h1>{{ count($users) }}</h1> --}}
    @foreach ($users as $user)
        <h3>name ---> {{ $user->name }}</h3>
    @endforeach
</div>
