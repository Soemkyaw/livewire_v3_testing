<div>
    <h1>{{ $title }}</h1>
    <h1>{{ $name }}</h1>
    <h2>{{ $job }}</h2>
    <span>{{ count($user) }}</span>
    <button wire:click="createNewUser">
        Create New User
    </button>
</div>
