<?php

namespace App\Http\Livewire;

use App\NameList;
use Livewire\Component;

class Search extends Component
{
    public $searchTerm;
    public $names;

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';

        $this->names = NameList::where('name', 'like', $searchTerm)->get();
        return view('livewire.search');
    }
}
