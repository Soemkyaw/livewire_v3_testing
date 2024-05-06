<div>
    <form wire:submit="createNewUser" action="">
        <input wire:model="name" type="text" placeholder="Enter Name...">
        <input wire:model="email" type="email" placeholder="Enter Email...">
        <input wire:model="password" type="password">
        <button>Create New User</button>
    </form>
    <hr>
    {{-- <h1>{{ count($users) }}</h1> --}}
    @foreach ($users as $user)
        <h3>name ---> {{ $user->name }}</h3>
    @endforeach
</div>
