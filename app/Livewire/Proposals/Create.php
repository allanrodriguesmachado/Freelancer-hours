<?php

namespace App\Livewire\Proposals;

use App\Models\Project;
use Illuminate\View\View;
use Livewire\Component;

class Create extends Component
{
    public bool $modal = false;

    public function render(): View
    {
        return view('livewire.proposals.create');

    }
}
