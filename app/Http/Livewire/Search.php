<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Search extends Component
{
    public $showSearchModal = false;
    public $search = '';
    public $searchResults = [];

    public function showSearch()
    {
        $this->showSearchModal = true;
    }
    public function closeSearchModal()
    {
        $this->reset();
    }

    public function updatedSearch()
    {

        
    }

    public function render()
    {
        return view('livewire.search');
    }
}
