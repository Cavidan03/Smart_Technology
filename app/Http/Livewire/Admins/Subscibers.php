<?php

namespace App\Http\Livewire\Admins;

use Livewire\Component;
use App\Models\subscriber;
use Livewire\WithPagination;

class Subscibers extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';


    public function delete($id)
    {
        $project = subscriber::findOrFail($id);
        $project->delete();

        session()->flash('message', 'Proyekt uğurla silindi.');
    }
    public function render()
    {
        return view('livewire.admins.subscibers', [
            'subscribers' => subscriber::latest()->paginate(10)
        ])->layout('admins.layouts.app');
    }
}
