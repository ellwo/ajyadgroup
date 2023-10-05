<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;

class BaseAdminTable extends Component
{

    public $search='',
     $page_num=10;
     use WithPagination;

    public function render()
    {
        return '';
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }
}
