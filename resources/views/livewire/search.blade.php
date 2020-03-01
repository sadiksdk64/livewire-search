<div>
    <div class="active-pink-3 active-pink-4 mb-4">
        <input class="form-control" type="text" placeholder="Search" aria-label="Search" wire:model="searchTerm">
        <ul>
            @foreach ($names as $name)
            <li>
                <p>
                    {{$name->name}}
                </p>
            </li>
            @endforeach
        </ul>
    </div>
</div>
